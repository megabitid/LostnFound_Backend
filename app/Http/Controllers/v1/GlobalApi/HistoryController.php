<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Barang;
use App\Models\History;
use App\Traits\database\QueryBuilder;
use App\Traits\Permissions;
use Illuminate\Http\Request;
use App\Traits\database\Paginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/** 
 * @group v1 - History ( Dashboard API )
 * 
 * History is the place you can get barang status histories.
 * Because of the value can be changed so we create this API,
 * to track the history of barang status. So you can get a nice chart
 * on your dashboard.
 */
class HistoryController extends Controller
{
    /**
     * Get List History
     * 
     * List of barang status histories.
     * 
     * ### orderBy query supported fields:
     * * All field of claim detail
     * 
     * @queryParam id integer The id of history. No-example
     * @queryParam user_id integer The id of user that changed barang status. No-example
     * @queryParam barang_id integer The id of barang. No-example
     * @queryParam status string The status of barang. Possible values are
     *             hilang, ditemukan, didonasikan, diklaim.
     * @queryParam limitDay integer Limit history to how many days. No-example
     * @queryParam orderBy string Apply ordering based on specific field. 
     *              Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).
     *              No-example
     * 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * }
     */
    public function index(Request $request)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $query = History::select('*');
        $fields = [
            'id',
            'user_id',
            'barang_id',
            'status',
        ];
        // limit query by specific field. Example: ?id=1
        $query = QueryBuilder::whereFields($request, $query, $fields);

        // limit query by how many days
        $query = QueryBuilder::limitDay($request, $query);

        // order by desc or asc in field specified: use "?orderBy=-id" to order by id descending, and "?orderBy=id" to order by ascending.
        $query = QueryBuilder::orderBy($request, $query);
        $histories = Paginator::paginate($request, $query);
        return Resource::collection($histories);
    }

    /**
     * Monthly Count Percentage
     * 
     * This API count each status for this month and last month.
     * After that, calculate the percentage difference between them.
     * 
     * The formula is:
     * 
     * **percentage = ( (this_month - last_month)/last_month ) x 100  | where last_month != 0**
     * 
     * if no data in last_month then it will be considered as 0 and formula will be:
     * 
     * **percentage = this_month x 100**
     * 
     * @response status=200 scenario="success" {
     *  "this_month": {
     *      "ditemukan": 7,
     *      "hilang": 4,
     *      "didonasikan": 3,
     *      "diklaim": 1
     *  },
     *  "last_month": [],
     *  "percentage": {
     *      "ditemukan": 700,
     *      "hilang": 400,
     *      "didonasikan": 300,
     *      "diklaim": 100
     *  } 
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * }  
     */
    public function monthlyCount(Request $request) {
        Permissions::isAdminOrSuperAdmin($request);
        // get count this month
        $query = History::select('*');
        $date = Carbon::now()->addMonths(0)->format('Y-m');
        $request->searchDate = $date;
        $query = QueryBuilder::searchDate($request, $query, ['created_at']);
        $thisMonthCount = $query->get()->groupBy('status')->map(function($history, $status) {
            return $history->count();
        });
        // get count last month
        $query = History::select('*');
        $date = Carbon::now()->addMonths(-1)->format('Y-m');
        $request->searchDate = $date;
        $query = QueryBuilder::searchDate($request, $query, ['created_at']);
        $lastMonthCount = $query->get()->groupBy('status')->map(function($history, $status) {
            return $history->count();
        });

        // convert to array to calculate percentage
        $lastMonthCount = $lastMonthCount->toArray();
        $thisMonthCount = $thisMonthCount->toArray();
        // calculate percentage if exists
        foreach($thisMonthCount as $key=>$value) {
            $percentage[$key] = array_key_exists($key, $lastMonthCount) ? (($value - $lastMonthCount[$key])/$lastMonthCount[$key])*100 : $value*100;
        }


        $countGroup = ['this_month'=>$thisMonthCount, 'last_month'=>$lastMonthCount, 'percentage'=>$percentage];
        return response()->json($countGroup);
    }

    /**
     * Get History Count
     * 
     * Will get history count depending on status provided.
     * It can be last 7 day barang hilang,
     * last 7 day barang ditemukan, etc.
     * 
     * @queryParam status string required Status can be hilang, ditemukan, didonasikan, diklaim. Example: hilang
     * @queryParam limitDay integer You can override default limit. The default limit is 7 days. No-example
     * 
     * @response status=200 scenario="success" {
     *  "2020-12-07": 0,
     *  "2020-12-08": 0,
     *  "2020-12-09": 0,
     *  "2020-12-10": 0,
     *  "2020-12-11": 0,
     *  "2020-12-12": 0,
     *  "2020-12-13": 4
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * } 
     */
    public function count(Request $request)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $status = (string) $request->get('status', 'hilang');
        $limitDay  = (int) $request->get('limitDay', 7) - 1;
        $dates = collect();
        foreach (range(-$limitDay, 0) as $i) {
            $date = Carbon::now()->addDays($i)->format('Y-m-d');
            $dates->put($date, 0);
        }

        $counter = History::where('created_at', '>=', $dates->keys()->first())
            ->groupBy('date')
            ->where('status', $status)
            ->orderBy('date')
            ->get([
                DB::raw('DATE( created_at ) as date'),
                DB::raw('COUNT( * ) as "count"')
            ])
            ->pluck('count', 'date');

        $count = $dates->merge($counter);
        return response()->json($count, 200);
    }
}

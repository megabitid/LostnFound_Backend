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
 * @group v1 - History
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
     * Get History Count
     * 
     * Will get history count depending on status provided.
     * It can be last 7 day barang hilang,
     * last 7 day barang ditemukan, etc.
     * 
     * @queryParam status string required Status can be hilang, ditemukan, didonasikan, diklaim. Example=hilang
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

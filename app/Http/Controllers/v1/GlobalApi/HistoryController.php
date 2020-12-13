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
 */
class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

    public function countBarangHilang()
    {
        $dates = collect();
        foreach (range(-6, 0) as $i) {
            $date = Carbon::now()->addDays($i)->format('Y-m-d');
            $dates->put($date, 0);
        }

        $barangHilangCount = Barang::where('tanggal', '>=', $dates->keys()->first())
            ->groupBy('date')
            ->where('status_id', 1)
            ->orderBy('date')
            ->get([
                DB::raw('DATE( tanggal ) as date'),
                DB::raw('COUNT( * ) as "count"')
            ])
            ->pluck('count', 'date');

        $count = $dates->merge($barangHilangCount);


        return response()->json($count, 200);
    }
    public function countBarangDitemukan()
    {
        $dates = collect();
        foreach (range(-6, 0) as $i) {
            $date = Carbon::now()->addDays($i)->format('Y-m-d');
            $dates->put($date, 0);
        }

        $barangDitemukanCount = Barang::where('tanggal', '>=', $dates->keys()->first())
            ->groupBy('date')
            ->where('status_id', 2)
            ->orderBy('date')
            ->get([
                DB::raw('DATE( tanggal ) as date'),
                DB::raw('COUNT( * ) as "count"')
            ])
            ->pluck('count', 'date');

        $count = $dates->merge($barangDitemukanCount);

        return response()->json($count, 200);
    }
}

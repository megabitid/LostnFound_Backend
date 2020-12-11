<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\History;
use App\Traits\database\QueryBuilder;
use App\Traits\Permissions;
use Illuminate\Http\Request;
use App\Traits\database\Paginator;

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
}

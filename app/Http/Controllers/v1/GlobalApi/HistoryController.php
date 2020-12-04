<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\History;
use App\Traits\Permissions;
use Illuminate\Http\Request;

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
        foreach($fields as $field){
            if(!empty($request->$field)){
                $query->where($field, '=', $request->$field);
            }
        }
        // order by desc or asc in field specified: use "?orderBy=-id" to order by id descending, and "?orderBy=id" to order by ascending.
        if(!empty($request->orderBy)){
            $query = $query->orderByRaw($request->orderBy);
        }
        $histories = $query->paginate(20);

        return Resource::collection($histories);
    }
}
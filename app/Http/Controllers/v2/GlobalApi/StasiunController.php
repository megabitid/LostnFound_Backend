<?php

namespace App\Http\Controllers\v2\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Stasiun;
use App\Traits\database\QueryBuilder;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\database\Paginator;

/** 
 * @group v2 - Stasiun
 * 
 * ### API for Managing Stasiun.
 * 
 * This API is used to manage stasiun. 
 * An user/barang can only have one stasiun.
 */
class StasiunController extends Controller
{
    /**
     * Get List Stasiun
     * 
     * ### orderBy query supported fields:
     * * All field of stasiun detail
     *       
     * ### search query will search string inside these fields:
     * * nama
     * <aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>
     * 
     * @queryParam orderBy string Apply ordering based on specific field. 
     *              Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).
     *              No-example
     * 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function index(Request $request)
    {
        $query = Stasiun::select('*');

        // order by desc or asc in field specified: use "?orderBy=-id" to order by id descending, and "?orderBy=id" to order by ascending.
        $query = QueryBuilder::orderBy($request, $query);

        // search text contains in this field.
        $searchFields = [
            'nama',
        ];
        $query = QueryBuilder::searchIn($request, $query, $searchFields);
        $stasiuns = Paginator::paginate($request, $query);
        return Resource::collection($stasiuns);
    }
    
    /**
     * Add Stasiun
     * 
     * Stasiun can be added using this API.
     * 
     * @bodyParam nama string required Nama stasiun. Example: Stasiun Banjar
     * 
     * @response status=201 scenario="success" {
     *  "nama": "Stasiun Banjar",
     *  "id": 10 
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * } 
     */
    public function store(Request $request)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $stasiun = Stasiun::create($validatedData);
        return response()->json($stasiun, 201);
    }

    /**
     * Get Detail Stasiun
     * 
     * Stasiun detail can be retrieved using this API.
     * 
     * @urlParam id integer required The id of stasiun. Example: 10
     * 
     * @response status=200 scenario="success" {
     *  "id": 10,
     *  "nama": "Stasiun Banjar"
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * }
     */
    public function show($id)
    {
        $stasiun = Stasiun::findOrFail($id);
        return response()->json($stasiun);
    }

    /**
     * Update Stasiun
     * 
     * Stasiun can be updated using this API.
     * 
     * @urlParam id integer required The id of stasiun. Example: 10
     * 
     * @bodyParam nama string required Nama status. Example: Stasiun Maju
     * 
     * @response status=201 scenario="success" {
     *  "id": 10,
     *  "nama": "Stasiun Maju"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * } 
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function update(Request $request, $id)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $stasiun = Stasiun::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $stasiun->update($validatedData);
        return response()->json($stasiun, 201);
    }

    /**
     * Delete Barang Stasiun.
     * 
     * Stasiun can be deleted using this API.
     * 
     * @urlParam id integer required The id of stasiun. Example: 10
     * 
     * @response status=204 scenario="delete success" {
     *  "message": "Stasiun data deleted successfully"
     * } 
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * } 
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function destroy(Request $request, $id)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $stasiun = Stasiun::findOrFail($id);
        $stasiun->delete();
        return response()->json(['message' => 'Stasiun data deleted successfully'], 204);
    }
}

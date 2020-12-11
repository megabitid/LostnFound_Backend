<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\BarangStatus;
use App\Traits\database\QueryBuilder;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\database\Paginator;

/** 
 * @group v1 - Barang Status
 * 
 * ### API for Managing Barang Status.
 * 
 * This API is used to manage barang status. 
 * A barang can have only one status. 
 */
class BarangStatusController extends Controller
{
    /**
     * Get List Barang Status
     * 
     * ### orderBy query supported fields:
     * * All field of barang status detail
     *       
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
        $query = BarangStatus::select('*');
        $query = QueryBuilder::orderBy($request, $query);
        $barangStatuses = Paginator::paginate($request, $query);
        return Resource::collection($barangStatuses);
    }



    /**
     * Add Barang Status.
     * 
     * Barang status can be added using this API.
     * 
     * @bodyParam nama string required Nama status. Example: ditemukan
     * 
     * @response status=201 scenario="success" {
     *  "nama": "ditemukan",
     *  "id": 4
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
        $barangStatus = BarangStatus::create($validatedData);
        return response()->json($barangStatus, 201);
    }

    /**
     * Get Detail Barang Status.
     * 
     * Barang status detail can be retrieved using this API.
     * 
     * @urlParam id integer required The id of barang status. Example: 4
     * 
     * @response status=200 scenario="success" {
     *  "id": 4
     *  "nama": "ditemukan",
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
        $barangStatus = BarangStatus::findOrFail($id);
        return response()->json($barangStatus);
    }


    /**
     * Update Barang Status.
     * 
     * Barang status can be updated using this API.
     * 
     * @urlParam id integer required The id of barang status. Example: 4
     * 
     * @bodyParam nama string required Nama status. Example: dijual
     * 
     * @response status=201 scenario="success" {
     *  "id": 4
     *  "nama": "dijual",
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
        $barangStatus = BarangStatus::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $barangStatus->update($validatedData);
        return response()->json($barangStatus, 201);
    }

    /**
     * Delete Barang Status.
     * 
     * Barang status can be deleted using this API.
     * 
     * @urlParam id integer required The id of barang status. Example: 4
     * 
     * @response status=204 scenario="delete success" {
     *  "message": "Status barang deleted successfully"
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
        $barangStatus = BarangStatus::findOrFail($id);
        $barangStatus->delete();
        return response()->json(['message' => 'Status barang deleted successfully'], 204);
        
    }
}

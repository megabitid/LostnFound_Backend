<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\BarangKategori;
use App\Traits\database\QueryBuilder;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\database\Paginator;

/** 
 * @group v1 - Barang Kategori
 * 
 * ### API for Manage Barang Kategori.
 * 
 * This API is used to manage barang kategori. 
 * A barang can have only one category. 
 */
class BarangKategoriController extends Controller
{
    /**
     * Get List Barnag Kategori
     * 
     * ### orderBy query supported fields:
     * * All field of barang kategori detail
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
        $query = BarangKategori::select('*');
        $query = QueryBuilder::orderBy($request, $query);
        $barangKategoris = Paginator::paginate($request, $query);
        return Resource::collection($barangKategoris);
    }


    /**
     * Add Barang Kategori.
     * 
     * Barang kategori can be added using this API.
     * 
     * @bodyParam nama string required Nama kategori. Example: Aksesoris
     * 
     * @response status=201 scenario="success" {
     *  "nama": "Aksesoris",
     *  "id": 6
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
        $barangKategori = BarangKategori::create($validatedData);
        return response()->json($barangKategori, 201);
    }

    /**
     * Get Detail Barang Kategori.
     * 
     * Barang kategori detail can be retrieved using this API.
     * 
     * @urlParam id integer required The id of barang kategori. Example: 6 
     * 
     * @response status=200 scenario="success" {
     *  "id": 6
     *  "nama": "Aksesoris",
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
        $barangKategori = BarangKategori::findOrFail($id);
        return response()->json($barangKategori);
    }


    /**
     * Update Barang Kategori.
     * 
     * Barang kategori can be added using this API.
     * 
     * @urlParam id integer required The id of barang kategori. Example: 6 
     * 
     * @bodyParam nama string required Nama kategori. Example: Aksesoris Updated
     * 
     * @response status=201 scenario="success" {
     *  "id": 6
     *  "nama": "Aksesoris Updated",
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
        $barangKategori = BarangKategori::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $barangKategori->update($validatedData);
        return response()->json($barangKategori, 201);
    }

    /**
     * Delete Barang Kategori.
     * 
     * Barang kategori can be deleted using this API.
     * 
     * @urlParam id integer required The id of barang kategori. Example: 6 
     * 
     * @response status=204 scenario="delete success" {
     *  "message": "BarangKategori data deleted successfully"
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
        $barangKategori = BarangKategori::findOrFail($id);
        $barangKategori->delete();
        return response()->json(['message' => 'BarangKategori data deleted successfully'], 204);
    }
}

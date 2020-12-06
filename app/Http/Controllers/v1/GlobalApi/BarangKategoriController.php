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

class BarangKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = BarangKategori::select('*');
        $query = QueryBuilder::orderBy($request, $query);
        $barangKategoris = $query->paginate(20);
        return Resource::collection($barangKategoris);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangKategori = BarangKategori::findOrFail($id);
        return response()->json($barangKategori);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $barangKategori = BarangKategori::findOrFail($id);
        $barangKategori->delete();
        return response()->json(['message' => 'BarangKategori data delete successfully'], 204);
    }
}

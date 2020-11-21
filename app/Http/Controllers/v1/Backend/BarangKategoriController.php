<?php

namespace App\Http\Controllers\v1\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BarangKategoriRequest;
use App\Http\Resources\Backend\BarangKategoriResource;
use App\Models\BarangKategori;
use Illuminate\Http\Request;

class BarangKategoriController extends Controller
{
    // Read
    public function index()
    {
        $barangKategoris = BarangKategori::orderBy('id', 'desc')->get();
        return BarangKategoriResource::collection($barangKategoris);
    }

    // Store
    public function store(BarangKategoriRequest $request)
    {
        try {
            $data = $request->all();
            BarangKategori::create($data);
            return response()->json(['message' => 'BarangKategori data added successfully'], 200);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

    // / Update
    public function update(BarangKategoriRequest $request, BarangKategori $barangKategori)
    {
        try {
            $data = $request->all();
            $barangKategori->update($data);
            return BarangKategoriResource::make($barangKategori);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

    // Destroy
    public function destroy(BarangKategori $barangKategori)
    {
        try {
            $barangKategori->delete();
            return response()->json(['message' => 'BarangKategori data delete successfully'], 200);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }
}

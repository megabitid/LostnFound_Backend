<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Backend\BarangKategoriResource;
use App\Models\BarangKategori;
use Illuminate\Http\Request;

class BarangKategoriController extends Controller
{
    // CREATE
    public function index()
    {
        $barangKategoris = BarangKategori::paginate(20);
        return BarangKategoriResource::collection($barangKategoris);
    }

    // SHOW
    public function show($id)
    {
        $barangKategori = BarangKategori::findOrFail($id);
        return response()->json($barangKategori);
    }
}

<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Barang;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Barang::select('*');
        $fields = [
            'id',
            'user_id',
            'stasiun_id',
            'status_id',
            'kategori_id'
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
        // search text contains in this field.
        if(!empty($request->search)){
            $searchFields = [
                'nama_barang',
                'lokasi',
                'tanggal',
                'deskripsi',
                'warna',
                'merek'
            ];
            $query->where(function($query) use($request, $searchFields){
                $searchWildcard = '%' . $request->search . '%';
                foreach($searchFields as $field){
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }
            });
        }
        $barangs = $query->paginate(20);
        
        return Resource::collection($barangs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang'=>'required|string|max:255',
            'lokasi'=>'required|string',
            'deskripsi'=>'required|string',
            'warna'=>'required|string',
            'merek'=>'required|string',
            'user_id'=>'required|numeric',
            'stasiun_id'=>'required|numeric',
            'status_id'=>'required|numeric',
            'kategori_id'=>'required|numeric'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        $validatedData['tanggal'] = Carbon::now()->format('Y-m-d');
        $barang = Barang::create($validatedData);
        return response()->json($barang, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return response()->json($barang, 200);
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
        $barang = Barang::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $validator = Validator::make($request->all(), [
            'nama_barang'=>'required|string|max:255',
            'lokasi'=>'required|string',
            'deskripsi'=>'required|string',
            'warna'=>'required|string',
            'merek'=>'required|string',
            'user_id'=>'required|numeric',
            'stasiun_id'=>'required|numeric',
            'status_id'=>'required|numeric',
            'kategori_id'=>'required|numeric'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        $validatedData['tanggal'] = Carbon::now()->format('Y-m-d');
        $barang->update($validatedData);
        return response()->json($barang, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $barang->delete();
        return response()->json(['message'=>'Barang deleted.'], 204);
    }
}

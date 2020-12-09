<?php

namespace App\Http\Controllers\v2\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Barang;
use App\Models\BarangStatus;
use App\Models\History;
use App\Traits\database\QueryBuilder;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\database\Paginator;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        $query = QueryBuilder::whereFields($request, $query, $fields);

        // order by desc or asc in field specified: use "?orderBy=-id" to order by id descending, and "?orderBy=id" to order by ascending.
        $query = QueryBuilder::orderBy($request, $query);

        // search text contains in this field.
        $searchFields = [
                'nama_barang',
                'lokasi',
                'tanggal',
                'deskripsi',
                'warna',
                'merek'
        ];
        $query = QueryBuilder::searchIn($request, $query, $searchFields);
        $query = $query->with('stasiun');
        
        //paginate 
        $paginator = Paginator::paginate($request, $query);
        $excludeFields = [
            'stasiun_id',
            'deskripsi',
            'created_at',
            'updated_at',
        ];
        $barangs = Paginator::exclude($paginator, $excludeFields);
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
            'deskripsi'=>'required|string',
            'user_id'=>'required|numeric',
            'stasiun_id'=>'required|numeric',
            'status_id'=>'required|numeric',
            'kategori_id'=>'required|numeric',
            'tanggal'=>'required|date_format:Y-m-d',
            // backward compatible field
            'warna'=>'string',
            'merek'=>'string',
            'lokasi'=>'string'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        $barang = Barang::create($validatedData);
        $responseData = $barang->toArray();
        History::create([
            'user_id'   => $validatedData['user_id'],
            'barang_id' => $barang['id'],
            'status'    => $barang->status->nama
        ]);
        return response()->json($responseData, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::with(['stasiun', 'kategori'])->findOrFail($id);
        $excludeFields = [
            'stasiun_id',
            'kategori_id',
        ];
        $barang = $barang->makeHidden($excludeFields);
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
            'deskripsi'=>'required|string',
            'user_id'=>'required|numeric',
            'stasiun_id'=>'required|numeric',
            'status_id'=>'required|numeric',
            'kategori_id'=>'required|numeric',
            'tanggal'=>'required|date_format:Y-m-d',
            // backward compatible field
            'warna'=>'string',
            'merek'=>'string',
            'lokasi'=>'string'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if ($validatedData["status_id"] != $barang->status_id){
            History::create([
                'user_id'   => JWTAuth::user()->id,
                'barang_id' => $barang['id'],
                'status'    => BarangStatus::findOrFail($validatedData['status_id'])->nama
            ]);
        }
        $barang->update($validatedData);
        $responseData = $barang->toArray();
        return response()->json($responseData, 201);
    }

    /**
     * Update partially the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePartial(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $validator = Validator::make($request->all(), [
            'nama_barang'=>'string|max:255',
            'deskripsi'=>'string',
            'user_id'=>'numeric',
            'stasiun_id'=>'numeric',
            'status_id'=>'numeric',
            'kategori_id'=>'numeric',
            'tanggal'=>'date_format:Y-m-d',
            // backward compatible field
            'warna'=>'string',
            'merek'=>'string',
            'lokasi'=>'string'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if (array_key_exists("status_id", $validatedData)) {
            if ($validatedData["status_id"] != $barang->status_id){
                History::create([
                    'user_id'   => JWTAuth::user()->id,
                    'barang_id' => $barang['id'],
                    'status'    => BarangStatus::findOrFail($validatedData['status_id'])->nama
                ]);
            }
        }
        $barang->update($validatedData);
        $responseData = $barang->toArray();
        return response()->json($responseData, 201);
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
        $images = $barang->barangimages()->get();
        foreach ($images as $image) {
            FirebaseStorage::imageDelete('barangs/image/'. $image->id);
        }        
        $barang->delete();
        return response()->json(['message'=>'Barang deleted.'], 204);
    }
}

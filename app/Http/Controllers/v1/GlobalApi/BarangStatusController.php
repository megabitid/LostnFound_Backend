<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\BarangStatus;
use Illuminate\Http\Request;

class BarangStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangStatuses = BarangStatus::paginate(20);
        return Resource::collection($barangStatuses);
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
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->valid();
        $barangStatus = BarangStatus::create($validatedData);
        return response()->json($barangStatus, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangStatus = BarangStatus::findOrFail($id);
        return response()->json($barangStatus);
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
        $barangStatus = BarangStatus::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->valid();
        $barangStatus = $barangStatus->update($validatedData);
        return response()->json($barangStatus, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangStatus = BarangStatus::findOrFail($id);
        $barangStatus->delete();
        return response()->json(['message' => 'Status barang deleted successfully'], 204);
        
    }
}

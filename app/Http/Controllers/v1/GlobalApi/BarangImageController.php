<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\BarangImage;
use App\Traits\FirebaseStorage;
use App\Traits\StringValidator;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangImages = BarangImage::paginate(20);
        return Resource::collection($barangImages);
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
            'nama'=>'required|string|max:255',
            'uri'=>'required|string',
            'barang_id'=>'required|numeric',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->valid();
        if(StringValidator::isImageBase64($validatedData['uri']) == null) {
            return ValidationError::response(['uri'=>'You must use urlBase64 image format.']);
        }
        $uriBase64 = $validatedData['uri'];
        $validatedData['uri'] = "";
        $barangImage = BarangImage::create($validatedData);
        $uri = FirebaseStorage::imageUpload($uriBase64, 'barangs/image/'.$barangImage->id);
        $barangImage->update(['uri'=>$uri]);        
        return response()->json($barangImage, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangImage = BarangImage::findOrFail($id);
        return response()->json($barangImage);
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
        $barangImage = BarangImage::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string|max:255',
            'uri'=>'required|string',
            'barang_id'=>'required|numeric',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->valid();
        if(StringValidator::isImageBase64($validatedData['uri']) == null) {
            return ValidationError::response(['uri'=>'You must use urlBase64 image format.']);
        }
        $uri = FirebaseStorage::imageUpload($validatedData['uri'], 'barangs/image/'.$barangImage->id);
        $validatedData['uri'] = $uri;
        $barangImage->update($validatedData);        
        return response()->json($barangImage, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangImage = BarangImage::findOrFail($id);
        $barangImage->delete();
        return response()->json(['message' => 'Image barang deleted successfully'], 204);
    }
}

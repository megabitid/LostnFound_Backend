<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use Illuminate\Http\Request;
use App\Traits\ValidationError;
use App\Traits\StringValidator;
use App\Traits\FirebaseStorage;
use Validator;
use App\Traits\Permissions;

class ClaimController extends Controller
{
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'user_id' => 'required|numeric',
            'barang_id' => 'required|numeric',
            'alamat' => 'string',
            'uri_tiket' => 'string',
            'no_telp' => 'required'
        ]);

        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = [
            'user_id' => $request->user_id,
            'barang_id' => $request->barang_id,
            'alamat' => $request->alamat,
            'uri_tiket' => $request->uri_tiket,
            'no_telp' => $request->no_telp,
            'verified' => 0
        ];

        //cek image format
        if (StringValidator::isImageBase64($validatedData['uri_tiket']) == null) {
            return ValidationError::response(['image' => 'You must use urlBase64 image format.']);
        }
        $uriBase64 = $validatedData['uri_tiket'];
        $validatedData['uri_tiket'] = "";
        $claim = Claim::create($validatedData);

        // upload image to firebase
        $uri = FirebaseStorage::imageUpload($uriBase64, 'claims/ticket_image/' . $claim->id);
        $validatedData['uri_tiket'] = $uri;

        $claim->update(['uri_tiket' => $uri]);

        $data = [
            'id' => $claim->id,
            'user_id' => $claim->user_id,
            'barang_id' => $claim->barang_id,
            'alamat' => $claim->alamat,
            'no_telp' => $claim->no_telp,
            'uri_tiket' => $claim->uri_tiket,
            'verified' => $claim->verified,
            'created_at' => $claim->created_at,
            'updated_at' => $claim->updated_at
        ];

        return response()->json($data, 201);
    }
}

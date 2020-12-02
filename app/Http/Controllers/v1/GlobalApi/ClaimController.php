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
        ]);

        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
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

        return response()->json($claim, 201);
    }
}

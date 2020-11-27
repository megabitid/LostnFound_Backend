<?php

namespace App\Http\Controllers\v1\Admin;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\StringValidator;
use App\Traits\ValidationError;
use Validator;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', '>', 0)->paginate(20);
        return UserResource::collection($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('role','>', 0)->find($id);;
        if (is_null($user)) {
            throw new ApiException('User not found.', 404);
        }
        return response()->json($user, 200);
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
        $user = User::where('role','>', 0)->findOrFail($id);
        Permissions::isOwner($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nip' => 'required|string',
            'password' => 'required|string',
            'image'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        dd($validatedData);
        if(StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
        }

        try {
            $someUser = User::where('nip', '=', $validatedData['nip'])->first();
            if($someUser) {
                if ($someUser->id != $user->id) {
                    return ValidationError::response(['nip'=>'Someone already use this nip.']);
                }
            }
            $validatedData['password'] = bcrypt($validatedData['password']);
            // upload image to storage
            $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/'.$id);
            $validatedData['image'] = $uri;
            // update database
            $user->update($validatedData);
            return response()->json($user, 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e->getMessage()], 400);
        }
    }
}

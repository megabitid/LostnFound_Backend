<?php

namespace App\Http\Controllers\v1\Android;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use App\Exceptions\ApiException;
use App\Traits\FirebaseStorage;
use App\Traits\StringValidator;
use Exception;
use Validator;


class UserController extends Controller
{
    private static $rfc5322 = "/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $users = User::where('role', '=', 0)->paginate(20);
        return UserResource::collection($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $user = User::where('role', '=', 0)->findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $user->id);
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
        $user = User::where('role', '=', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => ['required', 'max:254', "regex:{$this::$rfc5322}"],
            'password' => 'required|string',
            'image' => 'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if (StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image' => 'You must use urlBase64 image format.']);
        }

        $someUser = User::where('email', '=', $validatedData['email'])->first();
        if ($someUser) {
            if ($someUser->id != $user->id) {
                return ValidationError::response(['email' => 'Someone already use this email.']);
            }
        }
        $validatedData['password'] = bcrypt($validatedData['password']);
        // upload image to storage
        $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/' . $id);
        $validatedData['image'] = $uri;
        // update database
        $user->update($validatedData);
        return response()->json($user, 201);
    }
}

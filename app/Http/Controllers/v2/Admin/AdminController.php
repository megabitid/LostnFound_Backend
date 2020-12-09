<?php

namespace App\Http\Controllers\v2\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\database\QueryBuilder;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\StringValidator;
use App\Traits\ValidationError;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Permissions::isSuperAdmin($request);
        $query = User::where('role', '>', 0);
        $query = QueryBuilder::orderBy($request, $query);
        $query = QueryBuilder::onlyTrashed($request, $query);
        $users = QueryBuilder::paginate($request, $query);
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
        $user = User::where('role','>', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
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
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
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
        if(StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
        }

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
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePartial(Request $request, $id)
    {
        $user = User::where('role','>', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'string',
            'nip' => 'string',
            'password' => 'string',
            'image'=>'string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        
        $validatedData = $validator->validated();
        if (array_key_exists("image", $validatedData)) {
            if(StringValidator::isImageBase64($validatedData['image']) == null) {
                return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
            }        
            // upload image to storage
            $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/'.$id);
            $validatedData['image'] = $uri;
        }

        if (array_key_exists("nip", $validatedData)) {
            $someUser = User::where('nip', '=', $validatedData['nip'])->first();
            if($someUser) {
                if ($someUser->id != $user->id) {
                    return ValidationError::response(['nip'=>'Someone already use this nip.']);
                }
            }
        }

        if (array_key_exists("password", $validatedData)) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }
        // update database
        $user->update($validatedData);
        return response()->json($user, 201);
    }

    public function delete(Request $request, $id) {
        Permissions::isSuperAdmin($request);
        $user = User::where('role','>', 0)->findOrFail($id);
        $user->delete();
        return response()->json(['message'=>'User deleted.'], 204);
    }
    public function restore(Request $request, $id) {
        Permissions::isSuperAdmin($request);
        $deletedUser = User::onlyTrashed()->where('role','>',0)->findOrFail($id);
        $deletedUser->restore();
        return response()->json(['message'=>'User restored.']);
    }
}

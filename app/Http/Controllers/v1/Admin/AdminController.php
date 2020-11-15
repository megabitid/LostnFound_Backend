<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
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
        $user = User::where('role','>', 0)->find($id);
        if (is_null($user)) {
            throw new ApiException('User not found.', 404);
        }
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
        
        $validatedData = $validator->valid();
        try {
            $someUser = User::where('nip', '=', $validatedData['nip'])->first();
            if($someUser) {
                if ($someUser->id != $user->id) {
                    return ValidationError::response(['nip'=>'Someone already use this nip.']);
                }
            }
            $validatedData['password'] = bcrypt($validatedData['password']);
            $user->update($validatedData);
            $responseData = $user->toArray();
            return response()->json(['message' => 'User was updated successfully', 'data' => $responseData], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e->getMessage()], 400);
        }
    }
}

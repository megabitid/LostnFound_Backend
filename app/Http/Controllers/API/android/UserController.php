<?php

namespace App\Http\Controllers\Api\android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use App\Exceptions\ApiException;
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
    public function index()
    {
        $users = User::where('role', '=', 0)->get();
        return response()->json($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('role','=', 0)->find($id);;
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
        $user = User::where('role','=', 0)->find($id);
        if (is_null($user)) {
            throw new ApiException('User not found.', 404);
        }
        Permissions::isOwner($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => ['required', 'max:254', "regex:{$this::$rfc5322}"],
            'password' => 'required',
            'image'=>'required',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        
        $validatedData = $validator->valid();
        try {
            $someUser = User::where('email', '=', $validatedData['email'])->first();
            if($someUser) {
                if ($someUser->id != $user->id) {
                    return ValidationError::response(['email'=>'Someone already use this email.']);
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

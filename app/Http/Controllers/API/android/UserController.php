<?php

namespace App\Http\Controllers\API\android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Permissions;
use App\Exceptions\ApiException;
use Exception;
use Validator;
use JWTAuth;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        if (is_null($user)) {
            throw new ApiException('User not found.', 404);
        }
        return response()->json($user, 200);
    }

    public function login(Request $request)
    {
        $loginCredentials = $request->only(['email', 'password']);

        try {
            if (!$token = JWTAuth::attempt($loginCredentials)) {
                return response()->json(['message' => 'Authentication credentials were missing or incorrect'], 401);
            } else {
                return response()->json(['_token' => $token], 200);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e], 404);
        }
    }

    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required',
        ]);

        try {
            if ($validate->fails()) {
                return response()->json(['message' => 'The request is understood, but it has been refused or access is not allowed', 'errors' => $validate->errors()], 403);
            } else {
                $input = $request->all();
                $input['password'] = bcrypt($request->password);
                $user = User::create($input);
                return response()->json(['message' => 'The item was created successfully'], 201);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e], 404);
        }
    }

    public function update(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => 'required|string|email'
        ]);

        try {
            if ($validate->fails()) {
                return response()->json(['message' => 'The request is understood, but it has been refused or access is not allowed', 'errors' => $validate->errors()], 403);
            } else {
                $user = Auth()->user()->id;
                if (is_null($user)) {
                    throw new ApiException('User not found.', 404);
                }
                $input = $request->all();

                if ($request->has('password')) {
                    $input['password'] = bcrypt($request->password);
                } else {
                    $request->except('password');
                }

                $update = User::findOrFail($user);
                $update->update($input);
                return response()->json(['message' => 'The item was updated successfully', 'data' => $update], 201);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e], 404);
        }
    }

    public function logout()
    {
        try {
            auth()->logout();
            return response()->json(['message' => 'successfully logout'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e], 404);
        }
    }
}

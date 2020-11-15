<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use JWTAuth;
use Validator;
use App\Traits\ValidationError;
use Exception;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|string',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->valid();
        try {
            if (!$token = JWTAuth::attempt($validatedData)) {
                return response()->json(['message' => 'Authentication credentials were missing or incorrect'], 401);
            } else {
                $user = Auth::user();
                $responseData = $user->toArray()+[
                    'token'=>$token,
                ];
                return response()->json($responseData, 200);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e->getMessage()], 400);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nip' => 'required|unique:users|string',
            'role' => 'required|numeric|min:1|max:2',
            'password' => 'required|string',
            'image'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->valid();

        try {
            $validatedData['password'] = bcrypt($validatedData['password']);
            $user = User::create($validatedData);

            $token = auth('api')->login($user);
            $responseData = $user->toArray()+[
                'token'=>$token,
            ];
            return response()->json($responseData, 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e->getMessage()], 400);
        }
    }

    public function logout()
    {
        try {
            auth('api')->logout();
            auth('api')->invalidate();
            return response()->json(['message' => 'successfully logout'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e->getMessage()], 400);
        }
    }
}

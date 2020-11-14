<?php

namespace App\Http\Controllers\Api\android;

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
    private static $rfc5322 = "/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
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
            'email' => ['required', 'unique:users', 'max:254', "regex:{$this::$rfc5322}"],
            'password' => 'required',
            'image'=>'required',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->valid();
        $validatedData['role'] = 0; // user default(0)

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

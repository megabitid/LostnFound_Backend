<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Traits\FirebaseStorage;
use App\Traits\StringValidator;
use JWTAuth;
use Validator;
use App\Traits\ValidationError;
use Exception;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|string',
            'password' => 'required|string',
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
        if(StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
        }

        try {
            $validatedData['password'] = bcrypt($validatedData['password']);
            $base64 = $validatedData['image'];
            $validatedData['image'] = "";
            $user = User::create($validatedData);
            // upload image to storage
            $uri = FirebaseStorage::imageUpload($base64, 'users/image/'.$user->id);
            // update database
            $user->update(['image'=>$uri]);
            $waktuExpireTokenDalamMenit = 30;
            $token = auth('api')->setTTL($waktuExpireTokenDalamMenit)->login($user);
            $responseData = $user->toArray()+[
                'token'=>$token,
            ];
            dispatch(new SendEmailUser($user, $token));
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

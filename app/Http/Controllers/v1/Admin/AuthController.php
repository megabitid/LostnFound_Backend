<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\StringValidator;
use JWTAuth;
use Validator;
use App\Traits\ValidationError;

class AuthController extends Controller
{
    private static $JWT_TTL = 60;
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        if (!$token = JWTAuth::attempt($validatedData)) {
            return response()->json(['message' => 'Authentication credentials were missing or incorrect'], 401);
        } else {
            $user = Auth::user();
            $token = auth('api')->setTTL($this::$JWT_TTL)->login($user); 
            $exp = JWTAuth::setToken($token)->getPayload()->get('exp'); 
            $responseData = $user->toArray()+[
                'token'=>$token,
                'exp'=>$exp
            ];
            return response()->json($responseData, 200);
        }
    }

    public function register(Request $request)
    {
        Permissions::isSuperAdmin($request);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nip' => 'required|unique:users|string',
            'password' => 'required|string',
            'image'=>'required|string',
            'stasiun_id'=>'numeric',
            'role'=>'numeric|max:2'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if(StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
        }

        $validatedData['password'] = bcrypt($validatedData['password']);
        $base64 = $validatedData['image'];
        $validatedData['image'] = "";
        if(!array_key_exists('role', $validatedData)) {
            $validatedData['role'] = 1; // regular admin.
        }
        $user = User::create($validatedData);
        // upload image to storage
        $uri = FirebaseStorage::imageUpload($base64, 'users/image/'.$user->id);
        // update database
        $user->update(['image'=>$uri]);

        $token = auth('api')->setTTL($this::$JWT_TTL)->login($user); 
        $exp = JWTAuth::setToken($token)->getPayload()->get('exp'); 
        $responseData = $user->toArray()+[
            'token'=>$token,
            'exp'=>$exp
        ];
        return response()->json($responseData, 201);
    }

    /**
     * @unauthenticated
     */
    public function refreshToken()
    {
        $token = auth('api')->setTTL($this::$JWT_TTL)->refresh(); 
        $exp = JWTAuth::setToken($token)->getPayload()->get('exp'); 
        $responseData = [
            'token'=>$token,
            'exp'=>$exp
        ];
        return response()->json($responseData, 200);
    }


    /**
     * @unauthenticated
     */
    public function logout()
    {
        auth('api')->logout();
        auth('api')->invalidate();
        return response()->json(['message' => 'successfully logout'], 200);
    }
}

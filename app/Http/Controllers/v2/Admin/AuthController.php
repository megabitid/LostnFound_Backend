<?php

namespace App\Http\Controllers\v2\Admin;

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

/** 
 * @group v1 - Authenticate User Admin
 * 
 * Authenticate admin/super admin to dashboard.
 */
class AuthController extends Controller
{
    private static $JWT_TTL = 60;

    /**
     * Login Admin User.
     * 
     * Admin/super admin user can login using this API.
     * 
     * _Token lifetime for admin is 60 minutes._
     * You can check token expiration time using exp field returned.
     * Visit here <a href="https://www.epochconverter.com/">https://www.epochconverter.com/</a>
     * 
     * @bodyParam nip string required NIP admin/super admin. Example: 4539422570508851
     * @bodyParam password string required Account password. Example: UnguessablePassword
     * 
     * @response status=200 scenario="success" {
     *  "id": 6,
     *  "nama": "Dr. Mathias Rohan II",
     *  "nip": "4539422570508851",
     *  "email": null,
     *  "email_verified_at": null,
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 2,
     *  "stasiun_id": null,
     *  "created_at": null,
     *  "updated_at": null,
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYwNzczMzU4NSwiZXhwIjoxNjA3NzM3MTg1LCJuYmYiOjE2MDc3MzM1ODUsImp0aSI6ImMzOE5PamNxQUpsQmtFd0UiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JpDgBWIhpY3O3BubirPIIhcvbk-1QJ3epw7MGpbva8E",
     *  "exp": 1607737185
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nip": [
     *          "The nip field is required."
     *      ],
     *      "password": [
     *          "The password field is required."
     *      ]
     *  }
     * @response status=401 scenario="login failed" {
     *  "message": "Authentication credentials were missing or incorrect"
     * }
     * @unauthenticated
     */
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

    /**
     * Register Admin User.
     * 
     * Admin/super admin user can be registered by super admin using this API.
     * 
     * @bodyParam nama string required Admin/super admin name. Example: Admin
     * @bodyParam nip string required NIP admin/super admin. Example: A12345
     * @bodyParam password string required Account password. Example: UnguessablePassword
     * @bodyParam image string required Admin/super admin profile picture in URI Base64. Example: uribase64
     * @bodyParam stasiun_id numeric id stasiun where admin/super admin work. Example: 1
     * @bodyParam role numeric Role code of admin (1) and super admin (2). Example: 1
     * @response status=201 scenario="success" {
     *  "nama": "Admin",
     *  "nip": "A12345",
     *  "image": "https://some-url-to-image",
     *  "stasiun_id": 1,
     *  "role": 1,
     *  "updated_at": "2020-12-12T00:54:24.000000Z",
     *  "created_at": "2020-12-12T00:54:21.000000Z",
     *  "id": 7,
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9yZWdpc3RlciIsImlhdCI6MTYwNzczNDQ2NCwiZXhwIjoxNjA3NzM4MDY0LCJuYmYiOjE2MDc3MzQ0NjQsImp0aSI6InBvamVxZWM2WFM5Z2lxMmwiLCJzdWIiOjcsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.wJrfZSmEEappLwT3nQHLq70y6ceAubIo8uI50amQp64",
     *  "exp": 1607738064
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "nip": [
     *          "The nip field is required."
     *      ],
     *      "password": [
     *          "The password field is required."
     *      ],
     *      "image": [
     *          "The image field is required."
     *      ]
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or super admin" {
     *  "message": "You must be super admin to do this."
     * }  
     */
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
     * Refresh token
     * 
     * Authenticated token can be refreshed to extend its lifetime before it's expired.
     * Recommend: 15 minutes before it's expired
     * 
     * @response status=200 scenario="success" {
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9yZWZyZXNoIiwiaWF0IjoxNjA3NjEzMjIzLCJleHAiOjE2MDc3Mzg1NDYsIm5iZiI6MTYwNzczNDk0NiwianRpIjoicDVueGl4M3o3TG56bkVrRyIsInN1YiI6NiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.-3IOo1c1Flt-bbHPT5DMuanWn_BwMOENYemhsPSzXdM",
     *  "exp": 1607738546 
     * }
     * @response status=401 scenario="failed" {
     *  "message": "The token has been blacklisted"
     * }
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
     * Logout Admin User
     * 
     * When logout authenticated token will not work anymore.
     * 
     * @response status=200 scenario="success" {
     *  message": "successfully logout" 
     * }
     * @response status=401 scenario="failed" {
     *  "message": "The token has been blacklisted"
     * }
     */
    public function logout()
    {
        auth('api')->logout();
        auth('api')->invalidate();
        return response()->json(['message' => 'successfully logout'], 200);
    }
}

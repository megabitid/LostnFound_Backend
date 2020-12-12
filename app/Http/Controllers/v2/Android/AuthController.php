<?php

namespace App\Http\Controllers\v2\Android;

use App\Http\Controllers\Controller;
use App\Mail\UserRegisterMail;
use App\Mail\UserResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Traits\FirebaseStorage;
use App\Traits\SendEmail;
use App\Traits\StringValidator;
use JWTAuth;
use Validator;
use App\Traits\ValidationError;
use Carbon\Carbon;

/** 
 * @group v2 - Authenticate User
 * 
 * Authentication for mobile user.
 */
class AuthController extends Controller
{
    private static $rfc5322 = "/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
    private static $JWT_TTL = 60*24*30;
    private static $JWT_EMAIL_TTL = 30;

    /**
     * Login User.
     * 
     * User can login using this API.
     * 
     * _Token lifetime for user is 60*24*30 minutes (1 month)._
     * You can check token expiration time using exp field returned.
     * Visit here <a href="https://www.epochconverter.com/">https://www.epochconverter.com/</a>
     * 
     * 
     * @bodyParam email string required Email user. Example: fake@email.com
     * @bodyParam password string required Account password. Example: UnguessablePassword
     * 
     * @response status=200 scenario="success" {
     *  "id": 6,
     *  "nama": "Dr. Mathias Rohan II",
     *  "nip": null,
     *  "email": "fake@email.com",
     *  "email_verified_at": "2020-12-10T17:18:49.000000Z",
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 0,
     *  "stasiun_id": null,
     *  "created_at": null,
     *  "updated_at": null,
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwPlwvXC9sv2NhbGhvc3Q6ODAwMFwvYXBpXC92MlwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc3MzYyNTYsImV4cCI6MTYxMDMyODI1NiwibmJmIjoxNjA3NzM2MjU2LCJqdGkiOiI5QlpjQ1lHZjlLdFdCcDhVIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0._oVDa85ail2G-A5t2NWiKt0APMkr3yl0TbbdMjZNOMg",
     *  "exp": 1610328256
     * }
     * @response status=202 scenario="not verify email" {
     *  "message": "Verify your email first, we have send you an email."
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "email": [
     *          "The email field is required."
     *      ],
     *      "password": [
     *          "The password field is required."
     *      ]
     *  }
     *  }
     * @response status=401 scenario="login failed" {
     *  "message": "Authentication credentials were missing or incorrect"
     * }
     * @unauthenticated
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();

        if (!$token = JWTAuth::attempt($validatedData)) {
            return response()->json(['message' => 'Authentication credentials were missing or incorrect'], 400);
        } else {
            $user = Auth::user();
            if ($user->email_verified_at == null){
                // email verif token
                $emailToken = auth('api')->setTTL($this::$JWT_EMAIL_TTL)->login($user);
                $email = new UserRegisterMail($user->nama, $emailToken);
                SendEmail::sync($user, $email);                
                return response()->json(['message'=>'Verify your email first, we have send you an email.'], 202);
            }

            $token = auth('api')->setTTL($this::$JWT_TTL)->login($user); 
            $exp = JWTAuth::setToken($token)->getPayload()->get('exp'); 
            $responseData = $user->toArray()+[
                'token'=>$token,
                // https://www.epochconverter.com/
                'exp'=>$exp
            ];
            return response()->json($responseData, 200);
        }
    }

    /**
     * Register User.
     * 
     * User can be registered by super admin using this API.
     * 
     * _Token only last for 30 minutes in user email._
     * 
     * @bodyParam nama string required Admin/super admin name. Example: User
     * @bodyParam email string required NIP admin/super admin. Example: fake@@email.com
     * @bodyParam password string required Account password. Example: UnguessablePassword
     * @bodyParam image string required Admin/super admin profile picture in URI Base64. Example: uribase64
     * 
     * @response status=202 scenario="success" {
     *  "message":"Check your email to complete registration."
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "email": [
     *          "The email field is required."
     *      ],
     *      "password": [
     *          "The password field is required."
     *      ],
     *      "image": [
     *          "The image field is required."
     *      ]
     * }
     * @response status=401 scenario="login failed" {
     *  "message": "Authentication credentials were missing or incorrect"
     * } 
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => ['required', 'unique:users', 'max:254', "regex:{$this::$rfc5322}"],
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
        $validatedData['role'] = 0; // user default(0)

        $validatedData['password'] = bcrypt($validatedData['password']);
        $base64 = $validatedData['image'];
        $validatedData['image'] = "";
        $user = User::create($validatedData);
        // upload image to storage
        $uri = FirebaseStorage::imageUpload($base64, 'users/image/'.$user->id);
        // update database
        $user->update(['image'=>$uri]);

        // email verif token
        $emailToken = auth('api')->setTTL($this::$JWT_EMAIL_TTL)->login($user);
        $email = new UserRegisterMail($user->nama, $emailToken);
        SendEmail::sync($user, $email);
        return response()->json(['message'=>'Check your email to complete registration.'], 202);
    }

    /**
     * Verify email.
     * 
     * When an user get verification email and click it, the link will call this API,
     * and verify his email.
     * 
     * <aside class="notice">
     * The response that user see is only text though.
     * You can give backend custom page if you want to change it.
     * </aside>
     * 
     * @urlParam token string required Verification token (jwt). No-example
     * 
     * @response status=201 scenario="verification success" {
     *  "message": "Email verified successfully."
     * }
     * @response status=401 scenario="verification failed" {
     *  "message": "The token has been blacklisted"
     * }
     */
    public function verifyEmail($token) {
        JWTAuth::setToken($token);
        $user = JWTAuth::toUser();
        $emailStatus = ['email_verified_at'=> Carbon::now()];
        $user->update($emailStatus);
        JWTAuth::invalidate();
        return response()->json(['message' => 'Email verified successfully.'], 201);
    }

    /**
     * Forget password.
     * 
     * Sometimes user can forget his password. Use this API to allow him reset his password.
     * 
     * <aside class="notice">
     * You can give backend custom page if you want to change the reset page form.
     * </aside>
     * 
     * @bodyParam email string required User email. No-example
     * 
     * @response status=200 scenario="email verification sent" {
     *  "message": "Check your email."
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "email": [
     *          "The email field is required."
     *      ]
     * }
     */
    public function resetPassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'email'=>['required','string', 'email', 'max:254', "regex:{$this::$rfc5322}"],
        ]);
        if($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        $user = User::where('email', $validatedData['email'])->first();
        $responseMsg = response()->json(['message' => 'Check your email.'], 200);
        if (!$user) {
            return $responseMsg; // prevent email mining.
        }
        // send email
        $token = auth('api')->setTTL($this::$JWT_EMAIL_TTL)->login($user);
        $email = new UserResetPassword($user->name, $token);
        SendEmail::sync($user, $email);;
        return $responseMsg;
    }

    /**
     * Reset password (internal).
     * 
     * This is used internally after user click the reset password link from his email.
     * 
     * @urlParam token string required Verification token (jwt). No-example
     * 
     * @bodyParam password string required New password. No-example
     * 
     * @response status=201 scenario="verification success" {
     *  "message": "Password updated successfully."
     * }
     * @response status=401 scenario="verification failed" {
     *  "message": "The token has been blacklisted"
     * }
     */
    public function updatePassword(Request $request, $token) {
        // token first
        JWTAuth::setToken($token);
        $user = JWTAuth::toUser();
        // form validation
        $validator = Validator::make($request->all(), [
            'password'=>'required|string',
        ]);
        if($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        // action
        $validatedData['password'] = bcrypt($validatedData['password']);// plain password not saved
        $user->update($validatedData);
        JWTAuth::invalidate(); 
        return response()->json(['message' => 'Password updated successfully.'], 201);
    }
    /**
     * Reset password (external).
     * 
     * This is what user see after user click the reset password link from his email.
     * 
     * @urlParam token string required Verification token (jwt). No-example
     */
    public function updatePasswordAction($token) {
        return view("reset_password_action");
    }

    /**
     * Refresh token
     * 
     * Authenticated token can be refreshed to extend its lifetime before it's expired.
     * Recommend: 3 days before it's expired
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
     * Logout User
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
        return response()->json(['message' => 'Successfully logout.'], 200);
    }
}

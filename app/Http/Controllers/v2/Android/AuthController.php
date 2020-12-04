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

class AuthController extends Controller
{
    private static $rfc5322 = "/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
    private static $JWT_TTL = 60*24*30;
    private static $JWT_EMAIL_TTL = 30;

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

    public function verifyEmail($token) {
        JWTAuth::setToken($token);
        $user = JWTAuth::toUser();
        $emailStatus = ['email_verified_at'=> Carbon::now()];
        $user->update($emailStatus);
        JWTAuth::invalidate();
        return response()->json(['message' => 'Email verified successfully.'], 201);
    }

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
    public function updatePasswordAction($token) {
        return view("reset_password_action");
    }

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

    public function logout()
    {
        auth('api')->logout();
        auth('api')->invalidate();
        return response()->json(['message' => 'Successfully logout.'], 200);
    }
}

<?php

namespace App\Http\Controllers\v2\Android;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Google_Client;
use Tymon\JWTAuth\Facades\JWTAuth;

/** 
 * @group v2 - Authenticate OAuth2 User
 */
// reference https://www.codesenior.com/en/tutorial/Php-Laravel-Socialite-And-Android-Google-Sign-In-Operation
class Oauth2Controller extends Controller
{
    private static $JWT_TTL = 60*24*30;
    /**
     * Redirect to Google.
     * 
     * User can login using google authorization.
     * 
     * This will redirect user to Google and signin there.
     * This is for web only. You must implement yourself in mobile.
     * @unauthenticated
     */
    // if you use xampp you might find error when hit handleGoogleCallback
    // go to https://stackoverflow.com/a/55263864/11683936
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Callback from Google
     * 
     * _Token lifetime for user is 60*24*30 minutes (1 month)._
     * You can check token expiration time using exp field returned.
     * Visit here <a href="https://www.epochconverter.com/">https://www.epochconverter.com/</a>
     * 
     * @queryParam code string required Google auth code. Example: 4%2F0AY0e-g6EBhLCybi1F4m1dCNyasrDTKVrqOQJ5T1PWefprvlq3oXh1_JqF6r2U5XT_vM7Jg
     * @response status=200 scenario="login success" {
     *  "id": 6,
     *  "nama": "Dr. Mathias Rohan II",
     *  "nip": null,
     *  "email": someemail@gmail.com,
     *  "email_verified_at": "2020-12-10T17:18:49.000000Z",
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 0,
     *  "stasiun_id": null,
     *  "created_at": "2020-12-10T17:18:49.000000Z",
     *  "updated_at": null,
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYwNzczMzU4NSwiZXhwIjoxNjA3NzM3MTg1LCJuYmYiOjE2MDc3MzM1ODUsImp0aSI6ImMzOE5PamNxQUpsQmtFd0UiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JpDgBWIhpY3O3BubirPIIhcvbk-1QJ3epw7MGpbva8E",
     *  "exp": 1607737185
     * }
     * @response status=201 scenario="first time login" {
     *  "nama": "Dr. Mathias Rohan II",
     *  "nip": null,
     *  "email": someemail@gmail.com,
     *  "email_verified_at": "2020-12-10T17:18:49.000000Z",
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 0,
     *  "stasiun_id": null,
     *  "created_at": "2020-12-10T17:18:49.000000Z",
     *  "updated_at": null,
     *  "id": 6,
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYwNzczMzU4NSwiZXhwIjoxNjA3NzM3MTg1LCJuYmYiOjE2MDc3MzM1ODUsImp0aSI6ImMzOE5PamNxQUpsQmtFd0UiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JpDgBWIhpY3O3BubirPIIhcvbk-1QJ3epw7MGpbva8E",
     *  "exp": 1607737185
     * }
     * @response status=400 scenario="token already used" {
     *  "message": "Client error: `POST https://www.googleapis.com/oauth2/v4/token` resulted in a `400 Bad Request` response:\n{\n  \"error\": \"invalid_grant\",\n  \"error_description\": \"Bad Request\"\n}\n",
     * }
     * @response status=401 scenario="using code from other oauth2 account" {
     *  "message": "Authentication credentials are incorrect."
     * }
     * @unauthenticated
     */
    public function handleGoogleCallback(Request $request) {
        // example request: domain.com?code=4%2F0AY0e-g6EBhLCybi1F4m1dCNyasrDTKVrqOQJ5T1PWefprvlq3oXh1_JqF6r2U5XT_vM7Jg

        $googleAuthCode = $request->input('code'); 
        $accessTokenResponse = Socialite::driver('google')->getAccessTokenResponse($googleAuthCode);
        $accessToken = $accessTokenResponse["access_token"];
        $account = Socialite::driver('google')->userFromToken($accessToken);

        // verfy token
        // documentation https://developers.google.com/identity/sign-in/android/backend-auth
        $config = config('services.google');
        $client = new Google_Client(['client_id' => $config['client_id']]);  // Specify the CLIENT_ID of the app that accesses the backend
        $idToken = $accessTokenResponse["id_token"];
        $payload = $client->verifyIdToken($idToken);
        if ($payload) {
            $aud = $payload['aud'];
            if ($aud != $config['client_id']) {
                // Token generated outside this backend.
                throw new ApiException("Authentication credentials are incorrect.", 401);
            }
        } else {
            // Invalid ID token
            throw new ApiException("Authentication credentials are incorrect.", 401);
        }

        // create user if not exists
        $userData = [
            'nama'=>$account->user['name'],
            'email'=>$account->user['email'],
            'password'=>bcrypt(env("OAUTH2_DEFAULT_PASSWORD")),
            'image'=>$account->user['picture'],
            'role'=>0 // user default (0)
        ];
        $validator = Validator::make($userData, [
            'email'=>'unique:users',
        ]);
        $statusCode = 200;
        if (!$validator->fails()) {
            // new user is coming. register him.
            $userData['email_verified_at'] = Carbon::now(); // oauth2 user auto verify email
            $user = User::create($userData);
            $statusCode = 201;
        }

        // Auth success! give him jwt token.
        $user=User::where('email','=',$userData['email'])->first();
        $token = auth('api')->setTTL($this::$JWT_TTL)->login($user); 
        $exp = JWTAuth::setToken($token)->getPayload()->get('exp'); 
        $responseData = $user->toArray()+[
            'token'=>$token,
            'exp'=>$exp
        ];
        return response()->json($responseData, $statusCode);
    }
}

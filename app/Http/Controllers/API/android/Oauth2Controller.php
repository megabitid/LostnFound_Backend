<?php

namespace App\Http\Controllers\API\android;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Google_Client;

// reference https://www.codesenior.com/en/tutorial/Php-Laravel-Socialite-And-Android-Google-Sign-In-Operation
class Oauth2Controller extends Controller
{
    // if you use xampp you might find error when hit handleGoogleCallback
    // go to https://stackoverflow.com/a/55263864/11683936
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

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
            'password'=>bcrypt(env("OAUTH2_DEFAILT_PASSWORD")),
            'image'=>$account->user['picture'],
            'role'=>0 // user default (0)
        ];
        $validator = Validator::make($userData, [
            'email'=>'unique:users',
        ]);
        $statusCode = 200;
        if (!$validator->fails()) {
            // new user is coming. register him.
            $user = User::create($userData);
            $statusCode = 201;
        }

        // Auth success! give him jwt token.
        $user=User::where('email','=',$userData['email'])->first();

        // ============================= change this later
        $jwtToken = 'example token';
        //==============================

        $responseData = $user->toArray()+[
            'token'=>$jwtToken
        ];
        return response()->json($responseData, $statusCode);
    }
}

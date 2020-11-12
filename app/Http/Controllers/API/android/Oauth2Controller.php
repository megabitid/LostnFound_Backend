<?php

namespace App\Http\Controllers\API\android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class Oauth2Controller extends Controller
{
    // if you use xampp you might find error when hit handleGoogleCallback
    // go to https://stackoverflow.com/a/55263864/11683936
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request) {
        // return response()->json(['request'=>$request->all()['code']], 200);
        $googleAuthCode = $request->input('code');
        $accessTokenResponse = Socialite::driver('google')->getAccessTokenResponse($googleAuthCode);
        $accessToken = $accessTokenResponse["access_token"];
        // $expiresIn = $accessTokenResponse["expires_in"];
        // $idToken = $accessTokenResponse["id_token"];
        // $refreshToken = isset($accessTokenResponse["refresh_token"])?$accessTokenResponse["refresh_token"]:"";
        // $tokenType = $accessTokenResponse["token_type"];
        $user = Socialite::driver('google')->userFromToken($accessToken);
        return response()->json(['user'=>$user, 'access_token_response'=>$accessTokenResponse], 200);
    }
}

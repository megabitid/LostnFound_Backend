<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;
use Illuminate\Support\Str;

class EmailController extends Controller
{
    public function verify($token) {
        JWTAuth::setToken($token);
        $user = JWTAuth::toUser();
        if ($user) {
            JWTAuth::invalidate();
            return response()->json(['message' => 'Berhasil', 'success' => 'Email sukses diverifikasi'], 200);
        }
        return response()->json(['message' => 'Whoops', 'error' => 'Invalid verifikasi email'], 400);
    }

    public function resetPassword(Request $request) {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['message' => 'Whoops', 'error' => 'Email not found'], 400);
        }
        $waktuExpireTokenDalamMenit = 30;
        $token = auth('api')->setTTL($waktuExpireTokenDalamMenit)->login($user);
        dispatch(new SendEmailResetPassword($user, $token));
    }

    public function updatePassword(Request $request, $token) {
        JWTAuth::setToken($token);
        $user = JWTAuth::toUser();
        if (!$user) {
            return response()->json(['message' => 'Whoops', 'error' => 'Token Invalid'], 400);
        }
        $user->update([
            'password' => $request->password
        ]);
        JWTAuth::invalidate(); 
        return response()->json(['message' => 'Berhasil', 'success' => 'Berhasil ubah password'], 400);

    }
}

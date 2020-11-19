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
        $user = User::where('activate_token', $token)->first();
        if ($user) {
            $user->update([
                'activate_token' => null,
                'email_verified_at' => Carbon::now();
            ]);
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
        $token = Str::random(30);
        User::create([
            'reset_password_token' => $token
        ]);
        dispatch(new SendEmailResetPassword($user));
    }

    public function updatePassword(Request $request, $token) {
        $tokenUser = User::where('reset_password_token', '=', $token)->first();
        if (!$tokenUser || !$token) {
            return response()->json(['message' => 'Whoops', 'error' => 'Token Invalid'], 400);
        }
        $user->update([
            'password' => $request->password,
            'reset_password_token' => null
        ]);
        return response()->json(['message' => 'Berhasil', 'success' => 'Berhasil ubah password'], 400);

    }
}

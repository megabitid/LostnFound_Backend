<?php

namespace App\Http\Controllers\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke()
    {
        try {
            Auth::logout();
            return response()->json(['message' => 'successfully logout!']);            
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }
}

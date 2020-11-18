<?php

namespace App\Http\Controllers\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\LoginResource;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        try {
            $data = $request->all();
            if (! $token = auth()->attempt($data)) {
                return response()->json(['message' => 'Authentication credentials were missing or incorrect'], 401);
            }
            $data          = Auth::user();
            $data['token'] = $token; 
            return LoginResource::make($data);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
        
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\Admin\AdminController as AdminControllerV1;
use App\Http\Controllers\v1\Android\AuthController as AuthControllerV1;
use App\Http\Controllers\v1\Admin\AuthController as AdminAuthControllerV1;
use App\Http\Controllers\v1\Android\Oauth2Controller as Oauth2ControllerV1;
use App\Http\Controllers\v1\android\UserController as UserControllerV1;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function() {
    //API for admin web
    Route::prefix('web')->group(function () {
        // admin users
        Route::middleware('jwt.auth')->prefix('users')->group(function() {
            route::get('{id}', [AdminControllerV1::class, 'show']);
            Route::put('{id}', [AdminControllerV1::class, 'update']);
            Route::get('', [AdminControllerV1::class, 'index']);
        });
        // auth admin
        Route::prefix('auth')->group(function () {
            Route::post('login', [AdminAuthControllerV1::class, 'login']);
            Route::post('register', [AdminAuthControllerV1::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AuthControllerV1::class, 'logout']);
        });
    });

    //API for Android
    Route::prefix('android')->group(function () {
        //users
        Route::middleware('jwt.auth')->prefix('users')->group(function() {
            route::get('{id}', [UserControllerV1::class, 'show']);
            Route::put('{id}', [UserControllerV1::class, 'update']);
            Route::get('', [UserControllerV1::class, 'index']);
        });
        // auth users
        Route::prefix('auth')->group(function () {
            Route::post('login', [AuthControllerV1::class, 'login']);
            Route::post('register', [AuthControllerV1::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AuthControllerV1::class, 'logout']);
            // oauth2
            Route::get('oauth2/google/authorize', [Oauth2ControllerV1::class, 'handleGoogleCallback']);
        });
    });
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Api\android\AuthController;
use App\Http\Controllers\Api\android\Oauth2Controller;
use App\Http\Controllers\Api\android\UserController;


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

//API for admin web
Route::namespace('Admin')->middleware('auth:api')->prefix('web/admin')->group(function () {
    Route::get('', [AdminController::class, 'index']);
    Route::get('/{user}', [AdminController::class, 'show']);
});

//API for Android
Route::prefix('android')->group(function () {
    //users
    Route::middleware('jwt.auth')->prefix('users')->group(function() {
        route::get('{id}', [UserController::class, 'show']);
        Route::put('{id}', [UserController::class, 'update']);
        Route::get('', [UserController::class, 'index']);
    });
    //users Auth
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::middleware('jwt.auth')->get('logout', [AuthController::class, 'logout']);
        // oauth2
        Route::get('oauth2/google/authorize', [Oauth2Controller::class, 'handleGoogleCallback']);
    });
});
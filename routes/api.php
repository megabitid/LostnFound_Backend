<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\API\android\Oauth2Controller;
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

Route::prefix('auth')->group(function () {
    Route::get('oauth2/google/authorize', [Oauth2Controller::class, 'handleGoogleCallback']);
});

//API for admin web
Route::namespace('Admin')->middleware('auth:api')->prefix('web/admin')->group(function () {
    Route::get('', [AdminController::class, 'index']);
    Route::get('/{user}', [AdminController::class, 'show']);
    Route::delete('/{user}', [AdminController::class, 'destroy']);
});

//API for Android
Route::group(['prefix' => 'android'], function () {
    //users Auth
    Route::group(['prefix' => 'users'], function () {
        Route::post('/login', [UserController::class, 'login']);
        Route::post('/register', [UserController::class, 'register']);
        Route::get('/show', [UserController::class, 'show'])->middleware('auth:api');
        Route::post('/update', [UserController::class, 'update'])->middleware('auth:api');
        Route::get('/logout', [UserController::class, 'logout'])->middleware('auth:api');
    });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\Auth\{LoginController, LogoutController};
use App\Http\Controllers\v1\Backend\{AdminController,  BarangController, StasiunController};

use App\Http\Controllers\v1\Android\AuthController as AuthControllerV1;
use App\Http\Controllers\v1\Android\UserController as UserControllerV1;
use App\Http\Controllers\v1\Android\Oauth2Controller as Oauth2ControllerV1;
use App\Http\Controllers\v1\BarangImageController as BarangImageControllerV1;
use App\Http\Controllers\v1\BarangStatusController as BarangStatusControllerV1;
use App\Http\Controllers\v1\BarangKategoriController as BarangKategoriControllerV1;

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
        Route::prefix('admin')->middleware('jwt.auth')->group(function(){
            Route::get('', [AdminController::class, 'index']);
            Route::post('', [AdminController::class, 'store']);
            Route::patch('/{user:nip}', [AdminController::class, 'update']);
            Route::delete('/{user:nip}', [AdminController::class, 'destory']);
        });
        // auth admin
        Route::prefix('auth')->group(function () {
            Route::post('login', LoginController::class);
            Route::post('logout', LogoutController::class)->middleware('jwt.auth');
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

    // global route
    
    Route::prefix('barang')->middleware('jwt.auth')->group(function() {
        Route::resource('', BarangController::class);
    });
    Route::prefix('stasiun')->middleware('jwt.auth')->group(function() {
        Route::get('', [StasiunController::class, 'index']);
        Route::post('', [StasiunController::class, 'store']);
        Route::patch('/{stasiun:id}', [StasiunController::class, 'update']);
        Route::delete('/{stasiun:id}', [StasiunController::class, 'destory']);
    });
    Route::prefix('barang-kategoris')->middleware('jwt.auth')->group(function() {
        Route::get('{id}', [BarangKategoriControllerV1::class, 'show']);
        Route::get('', [BarangKategoriControllerV1::class, 'index']);
    });
    Route::prefix('barang-images')->middleware('jwt.auth')->group(function() {
        Route::get('{id}', [BarangImageControllerV1::class, 'show']);
        Route::get('', [BarangImageControllerV1::class, 'index']);
    });
    Route::prefix('barang-statuses')->middleware('jwt.auth')->group(function() {
        Route::get('{id}', [BarangStatusControllerV1::class, 'show']);
        Route::get('', [BarangStatusControllerV1::class, 'index']);
    });
});
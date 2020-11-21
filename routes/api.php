<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\v1\Admin\AdminController as AdminControllerV1;
use App\Http\Controllers\v1\Admin\AuthController as AdminAuthControllerV1;

use App\Http\Controllers\v1\Android\AuthController as AuthControllerV1;
use App\Http\Controllers\v1\Android\UserController as UserControllerV1;
use App\Http\Controllers\v1\Android\Oauth2Controller as Oauth2ControllerV1;

use App\Http\Controllers\v1\GlobalApi as GlobalApiV1;

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
        Route::prefix('users')->middleware('jwt.auth')->group(function(){
            Route::get('{id}', [AdminControllerV1::class, 'show']);
            Route::put('{id}', [AdminControllerV1::class, 'update']);
            // Route::delete('{id}', [AdminControllerV1::class, 'destroy']); // to do: soft delete
            Route::get('', [AdminControllerV1::class, 'index']);
        });

        // auth admin
        Route::prefix('auth')->group(function () {
            Route::post('login', [AdminAuthControllerV1::class, 'login']);
            Route::middleware('jwt.auth')->post('register', [AdminAuthControllerV1::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AdminAuthControllerV1::class, 'logout']);
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
        Route::delete('{id}', [GlobalApiV1\BarangController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV1\BarangController::class, 'update']);
        Route::get('{id}', [GlobalApiV1\BarangController::class, 'show']);
        Route::post('', [GlobalApiV1\BarangController::class, 'store']);
        Route::get('', [GlobalApiV1\BarangController::class, 'index']);
    });
    Route::prefix('stasiun')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV1\StasiunController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV1\StasiunController::class, 'update']);
        Route::get('{id}', [GlobalApiV1\StasiunController::class, 'show']);
        Route::post('', [GlobalApiV1\StasiunController::class, 'store']);
        Route::get('', [GlobalApiV1\StasiunController::class, 'index']);
    });
    Route::prefix('barang-kategori')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV1\BarangKategoriController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV1\BarangKategoriController::class, 'update']);
        Route::get('{id}', [GlobalApiV1\BarangKategoriController::class, 'show']);
        Route::post('', [GlobalApiV1\BarangKategoriController::class, 'store']);
        Route::get('', [GlobalApiV1\BarangKategoriController::class, 'index']);;
    });
    Route::prefix('barang-images')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV1\BarangImageController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV1\BarangImageController::class, 'update']);
        Route::get('{id}', [GlobalApiV1\BarangImageController::class, 'show']);
        Route::post('', [GlobalApiV1\BarangImageController::class, 'store']);
        Route::get('', [GlobalApiV1\BarangImageController::class, 'index']);;
    });
    Route::prefix('barang-status')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV1\BarangStatusController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV1\BarangStatusController::class, 'update']);
        Route::get('{id}', [GlobalApiV1\BarangStatusController::class, 'show']);
        Route::post('', [GlobalApiV1\BarangStatusController::class, 'store']);
        Route::get('', [GlobalApiV1\BarangStatusController::class, 'index']);;
    });
});
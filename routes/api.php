<?php

use Illuminate\Support\Facades\Route;


// v1
use App\Http\Controllers\v1\Admin\AdminController as AdminControllerV1;
use App\Http\Controllers\v1\Admin\AuthController as AdminAuthControllerV1;

use App\Http\Controllers\v1\Android\AuthController as AuthControllerV1;
use App\Http\Controllers\v1\Android\UserController as UserControllerV1;
use App\Http\Controllers\v1\Android\Oauth2Controller as Oauth2ControllerV1;

use App\Http\Controllers\v1\GlobalApi as GlobalApiV1;


// v2
use App\Http\Controllers\v2\Admin\AdminController as AdminControllerV2;
use App\Http\Controllers\v2\Admin\AuthController as AdminAuthControllerV2;

use App\Http\Controllers\v2\Android\AuthController as AuthControllerV2;
use App\Http\Controllers\v2\Android\UserController as UserControllerV2;
use App\Http\Controllers\v2\Android\Oauth2Controller as Oauth2ControllerV2;

use App\Http\Controllers\v2\GlobalApi as GlobalApiV2;

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
            Route::middleware('jwt.auth')->get('refresh', [AdminAuthControllerV1::class, 'refreshToken']);
        });

    });

    //API for Android
    Route::prefix('android')->group(function () {
        //users
        Route::middleware('jwt.auth')->prefix('users')->group(function() {
            Route::get('{id}', [UserControllerV1::class, 'show']);
            Route::put('{id}', [UserControllerV1::class, 'update']);
            Route::get('', [UserControllerV1::class, 'index']);
        });
        // auth users
        Route::prefix('auth')->group(function () {
            Route::post('login', [AuthControllerV1::class, 'login']);
            Route::post('register', [AuthControllerV1::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AuthControllerV1::class, 'logout']);
            Route::middleware('jwt.auth')->get('refresh', [AuthControllerV1::class, 'refreshToken']);
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


// ============================= V2 
Route::prefix('v2')->group(function() {
    //API for admin web
    Route::prefix('web')->group(function () {      
        // admin users
        Route::middleware('jwt.auth')->prefix('users')->group(function() {
            Route::get('{id}', [AdminControllerV2::class, 'show']);
            Route::put('{id}', [AdminControllerV2::class, 'update']);
            // Route::delete('{id}', [AdminControllerV2::class, 'destroy']); // to do: soft delete
            Route::get('', [AdminControllerV2::class, 'index']);
        });

        // auth admin
        Route::prefix('auth')->group(function () {
            Route::post('login', [AdminAuthControllerV1::class, 'login']);
            Route::middleware('jwt.auth')->post('register', [AdminAuthControllerV2::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AdminAuthControllerV2::class, 'logout']);
            Route::middleware('jwt.auth')->get('refresh', [AdminAuthControllerV2::class, 'refreshToken']);
        });

    });

    //API for Android
    Route::prefix('android')->group(function () {
        //users
        Route::middleware('jwt.auth')->prefix('users')->group(function() {
            Route::get('{id}', [UserControllerV2::class, 'show']);
            Route::put('{id}', [UserControllerV2::class, 'update']);
            Route::get('', [UserControllerV2::class, 'index']);
        });
        // auth users
        Route::prefix('auth')->group(function () {
            Route::post('login', [AuthControllerV2::class, 'login']);
            Route::post('register', [AuthControllerV2::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AuthControllerV2::class, 'logout']);
            Route::middleware('jwt.auth')->get('refresh', [AuthControllerV2::class, 'refreshToken']);

            Route::get('verify/{token}', [AuthControllerV2::class, 'verifyEmail'])->name('user.verify');
            Route::post('reset-password', [AuthControllerV2::class, 'resetPassword']);
            Route::get('reset-password/{token}', [AuthControllerV2::class, 'updatePasswordAction']);
            Route::post('reset-password/{token}', [AuthControllerV2::class, 'updatePassword'])->name('user.reset');
            // oauth2
            Route::get('oauth2/google/authorize', [Oauth2ControllerV2::class, 'handleGoogleCallback']);
        });
    });
    // global route
    Route::prefix('barang')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV2\BarangController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV2\BarangController::class, 'update']);
        Route::get('{id}', [GlobalApiV2\BarangController::class, 'show']);
        Route::post('', [GlobalApiV2\BarangController::class, 'store']);
        Route::get('', [GlobalApiV2\BarangController::class, 'index']);
    });
    Route::prefix('stasiun')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV2\StasiunController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV2\StasiunController::class, 'update']);
        Route::get('{id}', [GlobalApiV2\StasiunController::class, 'show']);
        Route::post('', [GlobalApiV2\StasiunController::class, 'store']);
        Route::get('', [GlobalApiV2\StasiunController::class, 'index']);
    });
    Route::prefix('barang-kategori')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV2\BarangKategoriController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV2\BarangKategoriController::class, 'update']);
        Route::get('{id}', [GlobalApiV2\BarangKategoriController::class, 'show']);
        Route::post('', [GlobalApiV2\BarangKategoriController::class, 'store']);
        Route::get('', [GlobalApiV2\BarangKategoriController::class, 'index']);;
    });
    Route::prefix('barang-images')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV2\BarangImageController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV2\BarangImageController::class, 'update']);
        Route::get('{id}', [GlobalApiV2\BarangImageController::class, 'show']);
        Route::post('', [GlobalApiV2\BarangImageController::class, 'store']);
        Route::get('', [GlobalApiV2\BarangImageController::class, 'index']);;
    });
    Route::prefix('barang-status')->middleware('jwt.auth')->group(function() {
        Route::delete('{id}', [GlobalApiV2\BarangStatusController::class, 'destroy']);
        Route::put('{id}', [GlobalApiV2\BarangStatusController::class, 'update']);
        Route::get('{id}', [GlobalApiV2\BarangStatusController::class, 'show']);
        Route::post('', [GlobalApiV2\BarangStatusController::class, 'store']);
        Route::get('', [GlobalApiV2\BarangStatusController::class, 'index']);;
    });
});

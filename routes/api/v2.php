<?php

use App\Http\Controllers\v2\Admin\AdminController;
use App\Http\Controllers\v2\Admin\AuthController as AdminAuthController;

use App\Http\Controllers\v2\Android\AuthController;
use App\Http\Controllers\v2\Android\UserController;
use App\Http\Controllers\v2\Android\Oauth2Controller;

use App\Http\Controllers\v2\GlobalApi;

Route::prefix('v2')->group(function () {
    //API for admin web
    Route::prefix('web')->group(function () {
        // admin users
        Route::middleware('jwt.auth')->prefix('users')->group(function () {
            Route::get('{id}', [AdminController::class, 'show']);
            Route::put('{id}', [AdminController::class, 'update']);
            Route::delete('{id}', [AdminController::class, 'delete']);
            Route::patch('{id}', [AdminController::class, 'updatePartial']);
            Route::patch('{id}/restore', [AdminController::class, 'restore']);
            Route::get('', [AdminController::class, 'index']);
        });

        // auth admin
        Route::prefix('auth')->group(function () {
            Route::post('login', [AdminAuthController::class, 'login']);
            Route::middleware('jwt.auth')->post('register', [AdminAuthController::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AdminAuthController::class, 'logout']);
            Route::middleware('jwt.auth')->get('refresh', [AdminAuthController::class, 'refreshToken']);
        });
    });

    //API for Android
    Route::prefix('android')->group(function () {
        //users
        Route::middleware('jwt.auth')->prefix('users')->group(function () {
            Route::get('{id}', [UserController::class, 'show']);
            Route::put('{id}', [UserController::class, 'update']);
            Route::patch('{id}', [UserController::class, 'updatePartial']);
            Route::get('', [UserController::class, 'index']);
        });
        // auth users
        Route::prefix('auth')->group(function () {
            Route::post('login', [AuthController::class, 'login']);
            Route::post('register', [AuthController::class, 'register']);
            Route::middleware('jwt.auth')->get('logout', [AuthController::class, 'logout']);
            Route::middleware('jwt.auth')->get('refresh', [AuthController::class, 'refreshToken']);

            Route::get('verify/{token}', [AuthController::class, 'verifyEmail'])->name('user.verify');
            Route::post('reset-password', [AuthController::class, 'resetPassword']);
            Route::get('reset-password/{token}', [AuthController::class, 'updatePasswordAction']);
            Route::post('reset-password/{token}', [AuthController::class, 'updatePassword'])->name('user.reset');
            // oauth2
            Route::get('oauth2/google/authorize', [Oauth2Controller::class, 'handleGoogleCallback']);
        });
    });
    // global route
    Route::prefix('barang')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\BarangController::class, 'destroy']);
        Route::put('{id}', [GlobalApi\BarangController::class, 'update']);
        Route::patch('{id}', [GlobalApi\BarangController::class, 'updatePartial']);
        Route::get('{id}', [GlobalApi\BarangController::class, 'show']);
        Route::get('list/eagerload', [GlobalApi\BarangController::class, 'indexEagerLoad']);
        Route::post('', [GlobalApi\BarangController::class, 'store']);
        Route::get('', [GlobalApi\BarangController::class, 'index']);
    });
    Route::prefix('stasiun')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\StasiunController::class, 'destroy']);
        Route::put('{id}', [GlobalApi\StasiunController::class, 'update']);
        Route::get('{id}', [GlobalApi\StasiunController::class, 'show']);
        Route::post('', [GlobalApi\StasiunController::class, 'store']);
        Route::get('', [GlobalApi\StasiunController::class, 'index']);
    });
    Route::prefix('barang-kategori')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\BarangKategoriController::class, 'destroy']);
        Route::put('{id}', [GlobalApi\BarangKategoriController::class, 'update']);
        Route::get('{id}', [GlobalApi\BarangKategoriController::class, 'show']);
        Route::post('', [GlobalApi\BarangKategoriController::class, 'store']);
        Route::get('', [GlobalApi\BarangKategoriController::class, 'index']);;
    });
    Route::prefix('barang-images')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\BarangImageController::class, 'destroy']);
        Route::put('{id}', [GlobalApi\BarangImageController::class, 'update']);
        Route::patch('{id}', [GlobalApi\BarangImageController::class, 'updatePartial']);
        Route::get('{id}', [GlobalApi\BarangImageController::class, 'show']);
        Route::post('', [GlobalApi\BarangImageController::class, 'store']);
        Route::get('', [GlobalApi\BarangImageController::class, 'index']);;
    });
    Route::prefix('barang-status')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\BarangStatusController::class, 'destroy']);
        Route::put('{id}', [GlobalApi\BarangStatusController::class, 'update']);
        Route::get('{id}', [GlobalApi\BarangStatusController::class, 'show']);
        Route::post('', [GlobalApi\BarangStatusController::class, 'store']);
        Route::get('', [GlobalApi\BarangStatusController::class, 'index']);;
    });
});

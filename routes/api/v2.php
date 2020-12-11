<?php

use App\Http\Controllers\v2\Android\AuthController;
use App\Http\Controllers\v2\Android\UserController;
use App\Http\Controllers\v2\Android\Oauth2Controller;

Route::prefix('v2')->group(function () {
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
});

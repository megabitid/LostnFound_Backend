<?php

use Illuminate\Support\Facades\Route;

// v1
use App\Http\Controllers\v1\Admin\AdminController;
use App\Http\Controllers\v1\Admin\AuthController as AdminAuthController;

use App\Http\Controllers\v1\Android\AuthController;
use App\Http\Controllers\v1\Android\UserController;
use App\Http\Controllers\v1\Android\Oauth2Controller;

use App\Http\Controllers\v1\GlobalApi;

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

Route::prefix('v1')->group(function () {
    //API for admin web
    Route::prefix('web')->group(function () {
        // admin users
        Route::middleware('jwt.auth')->prefix('users')->group(function () {
            Route::get('{id}', [AdminController::class, 'show']);
            Route::put('{id}', [AdminController::class, 'update']);
            Route::patch('{id}', [AdminController::class, 'updatePartial']);
            // Route::delete('{id}', [AdminControllerV1::class, 'destroy']); // to do: soft delete
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
            // oauth2
            Route::get('oauth2/google/authorize', [Oauth2Controller::class, 'handleGoogleCallback']);
        });
    });

    // global route

    //barang
    Route::prefix('barang')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\BarangController::class, 'destroy']);
        Route::put('{id}', [GlobalApi\BarangController::class, 'update']);
        Route::patch('{id}', [GlobalApi\BarangController::class, 'updatePartial']);
        Route::get('{id}', [GlobalApi\BarangController::class, 'show']);
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
        Route::get('', [GlobalApi\BarangStatusController::class, 'index']);
    });

    Route::prefix('histories')->middleware('jwt.auth')->group(function() {
        Route::get('', [GlobalApi\HistoryController::class, 'index']);
    });

    //claims
    Route::prefix('claims')->middleware('jwt.auth')->group(function () {
        Route::delete('{id}', [GlobalApi\ClaimController::class, 'destroy']);
        Route::put('{id}/verified', [GlobalApi\ClaimController::class, 'updateVerified']);
        Route::put('{id}', [GlobalApi\ClaimController::class, 'update']);
        Route::patch('{id}', [GlobalApi\ClaimController::class, 'updatePartial']);
        Route::get('{id}', [GlobalApi\ClaimController::class, 'show']);
        Route::post('', [GlobalApi\ClaimController::class, 'store']);
        Route::get('', [GlobalApi\ClaimController::class, 'index']);
    });
});

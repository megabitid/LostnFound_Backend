<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\AdminController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Admin')->middleware('auth:api')->prefix('web/admin')->group(function(){
    Route::get('', [AdminController::class, 'index']);
    Route::get('/{user}', [AdminController::class, 'show']);
    Route::delete('/{user}', [AdminController::class, 'destroy']);
});

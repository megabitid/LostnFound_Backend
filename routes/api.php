<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::prefix('auth')->group(function() {
    Route::get('oauth2/google/authorize', [Oauth2Controller::class, 'handleGoogleCallback']);
});
Route::get('users/{id}', [UserController::class, 'show']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

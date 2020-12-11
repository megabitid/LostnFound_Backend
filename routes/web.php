<?php

use App\Http\Controllers\docs\SwaggerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\Android\Oauth2Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('auth/oauth2/google', [Oauth2Controller::class, 'redirectToGoogle']);
Route::get('documentation/swagger', [SwaggerController::class, 'show']);
Route::get('documentation/openapi', [SwaggerController::class, 'apispec']);
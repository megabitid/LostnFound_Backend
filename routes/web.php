<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\API\android\Oauth2Controller;
Route::get('oauth2/google', [Oauth2Controller::class, 'redirectToGoogle']);
Route::get('/', function () {
    return view('welcome');
});

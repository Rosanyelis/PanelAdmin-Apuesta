<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiCountryController;
use App\Http\Controllers\Api\ApiCurrencyController;
use App\Http\Controllers\Api\WebAuthController;

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

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('logout', [WebAuthController::class, 'logout']);
});

Route::post('register', [WebAuthController::class, 'register']);
Route::post('login', [WebAuthController::class, 'login']);

Route::get('monedas', [ApiCurrencyController::class, 'index']);
Route::get('paises', [ApiCountryController::class, 'index']);

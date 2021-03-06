<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', [ 'as' => 'login', 'uses' => 'App\Http\Controllers\Auth\UserAuthController@login']);

Route::apiResource('/product', 'App\Http\Controllers\ProductController')->middleware('auth:api');

Route::apiResource('/category', 'App\Http\Controllers\CategoryController')->middleware('auth:api');
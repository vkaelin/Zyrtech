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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/loginChef', 'API\ChefLoginController@login');

Route::post('/products/{product}/star', 'API\StarController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/findChef', 'API\ChefController@search');
});

Route::group(['middleware' => ['auth', 'role:owner']], function () {
    Route::patch('/editSet/{set}', 'API\OwnerSetController@update');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/findProduct', 'API\ProductController@search');
    Route::get('/findUser', 'API\UserController@search');
});

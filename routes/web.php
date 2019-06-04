<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// Users
Route::get('/users/{user}', 'UserController@show');

// PRODUCTS 
Route::resource('products', 'ProductController');

// Admin Dashboard
Route::group(['middleware' => ['auth']], function () {
    // Users
    Route::get('/dashboard/users', 'DashboardUserController@index');
    Route::get('/dashboard/users/create', 'DashboardUserController@create');
    Route::post('/dashboard/users/', 'DashboardUserController@store');
    Route::get('/dashboard/users/{user}/show', 'DashboardUserController@show');
    Route::get('/dashboard/users/{user}/edit', 'DashboardUserController@edit');
});
// /dashboard/users
// /dashboard/products

Auth::routes();

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
Route::group(['middleware' => ['groupName']], function () {
    // Users
    Route::get('/users/{user}/show', 'UserController@show');
    Route::get('/users/{user}/edit', 'UserController@edit');
});
// /dashboard/users
// /dashboard/products

Auth::routes();

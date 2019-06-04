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

// Admin/Owner Dashboard
Route::group(['middleware' => ['web', 'auth']], function () {
    // Administrator
        // Users
    Route::get('/admin/users', 'AdminUserController@index');
    Route::get('/admin/users/create', 'AdminUserController@create');
    Route::post('/admin/users/', 'AdminUserController@store');
    Route::get('/admin/users/{user}/show', 'AdminUserController@show');
    Route::get('/admin/users/{user}/edit', 'AdminUserController@edit');

    // Owners
        // Users
    Route::get('/dashboard/chefs/create', 'owner\OwnerChefController@create');
    Route::post('/dashboard/chefs/', 'owner\OwnerChefController@store');
});
// /dashboard/users
// /dashboard/products

Auth::routes();

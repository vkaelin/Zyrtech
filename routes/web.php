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

// Login Chef
Route::post('/login/chefs/', 'Auth\ChefLoginController@login');

// Users
Route::get('/users/{user}', 'UserController@show');

// PRODUCTS 
Route::resource('products', 'ProductController');

// Dashboard for Admins
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
    // Users
    Route::get('/users', 'Admin\AdminUserController@index');
    Route::get('/users/create', 'Admin\AdminUserController@create');
    Route::post('/users/', 'Admin\AdminUserController@store');
    Route::get('/users/{user}/show', 'Admin\AdminUserController@show');
    Route::get('/users/{user}/edit', 'Admin\AdminUserController@edit');

    // Products
    Route::get('/products', 'Admin\AdminProductController@index');
    Route::get('/products/create', 'Admin\AdminProductController@create');
    Route::post('/products/', 'Admin\AdminProductController@store');
    Route::get('/products/{product}/edit', 'Admin\AdminProductController@edit');
    Route::patch('/products/{product}/edit', 'Admin\AdminProductController@update');
    Route::delete('/products/{product}', 'Admin\AdminProductController@destroy');
});

// Dashboard for Owners
Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function () {
    // Users
    Route::get('/chefs/', 'Owner\OwnerChefController@index');
    Route::get('/chefs/create', 'Owner\OwnerChefController@create');
    Route::post('/chefs/', 'Owner\OwnerChefController@store');

    // Sets
    Route::get('/sets/', 'Owner\OwnerSetController@index');
    Route::get('/sets/create', 'Owner\OwnerSetController@create');

});

// Chefs
Route::group(['middleware' => 'auth'], function () {
    Route::get('/sets/', 'SetController@index');
});

Auth::routes();

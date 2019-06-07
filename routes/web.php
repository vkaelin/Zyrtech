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

// Homepage
Route::get('/', 'HomeController@index');

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

    //Types
    Route::get('/attributes', 'Admin\AdminAttributeController@index');
    Route::get('/attributes/create', 'Admin\AdminAttributeController@create');
    Route::post('/attributes/', 'Admin\AdminAttributeController@store');
    Route::get('/attributes/{attribute}/edit', 'Admin\AdminAttributeController@edit');
    Route::patch('/attributes/{attribute}/edit', 'Admin\AdminAttributeController@update');
    Route::delete('/attributes/{attribute}', 'Admin\AdminAttributeController@destroy');
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
    Route::post('/sets/', 'Owner\OwnerSetController@store');
});

// Chefs
Route::group(['middleware' => 'auth'], function () {
    Route::get('/sets/', 'SetController@index');
});

Auth::routes();

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

// Admin/Owner Dashboard
Route::group(['middleware' => ['auth']], function () {
    // Administrator
    // Users
    Route::get('/admin/users', 'admin\AdminUserController@index');
    Route::get('/admin/users/create', 'admin\AdminUserController@create');
    Route::post('/admin/users/', 'admin\AdminUserController@store');
    Route::get('/admin/users/{user}/show', 'admin\AdminUserController@show');
    Route::get('/admin/users/{user}/edit', 'admin\AdminUserController@edit');

    // Products
    Route::get('/admin/products', 'admin\AdminProductController@index');
    Route::get('/admin/products/create', 'admin\AdminProductController@create');
    Route::post('/admin/products/', 'admin\AdminProductController@store');
    Route::get('/admin/products/{product}/edit', 'admin\AdminProductController@edit');
    Route::patch('/admin/products/{product}/edit', 'admin\AdminProductController@update');
    Route::delete('/admin/products/{product}', 'admin\AdminProductController@destroy');


    // Owners
    // Users
    Route::get('/dashboard/chefs/', 'owner\OwnerChefController@index');
    Route::get('/dashboard/chefs/create', 'owner\OwnerChefController@create');
    Route::post('/dashboard/chefs/', 'owner\OwnerChefController@store');
});
// /dashboard/users
// /dashboard/products

Auth::routes();

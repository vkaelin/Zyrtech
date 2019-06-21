<?php

// Homepage
Route::get('/', 'HomeController@index');

// Products Public
Route::resource('/products', 'ProductController');
Route::post('/products/{product}/comment', 'CommentController@store');

// Dashboard for Admins
Route::group(['prefix' => 'admin',  'middleware' => ['auth', 'role:admin']], function () {
    // Users
    Route::resource('users', 'Admin\AdminUserController', [
        'except' => ['show']
    ]);

    // Products
    Route::resource('products', 'Admin\AdminProductController', [
        'except' => ['show']
    ]);

    // Attributes
    Route::get('/products/attributes', 'Admin\AdminAttributeController@index');

    // Types
    Route::resource('products/attributes/types', 'Admin\AdminTypeController', [
        'except' => ['index', 'show']
    ]);

    // Periods
    Route::resource('products/attributes/periods', 'Admin\AdminPeriodController', [
        'except' => ['index', 'show']
    ]);

    // Labels
    Route::resource('products/attributes/labels', 'Admin\AdminLabelController', [
        'except' => ['index', 'show']
    ]);
});

// Dashboard for Owners
Route::group(['prefix' => 'dashboard',  'middleware' => ['auth', 'role:owner']], function () {
    // Chefs
    Route::resource('chefs', 'Owner\OwnerChefController', [
        'except' => ['show']
    ]);

    // Sets
    Route::resource('sets', 'Owner\OwnerSetController');
});

// Chefs
Route::group(['middleware' => 'auth'], function () {
    Route::get('/sets/', 'SetController@index');
    Route::post('/products/{product}/rating', 'RatingController@store');
});

// Auth
Auth::routes();

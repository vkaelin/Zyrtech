<?php

// Homepage
Route::get('/', 'HomeController@index');

// Login Chef
Route::post('/login/chefs/', 'Auth\ChefLoginController@login');

// Users
Route::get('/users/{user}', 'UserController@show');

// Products 
Route::resource('products', 'ProductController');

// Stars
Route::post('/products/{product}/star', 'StarController@store');

// Dashboard for Admins
Route::group(['prefix' => 'admin',  'middleware' => ['auth', 'role:admin']], function () {
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

    //Attributes
    Route::get('/products/attributes', 'Admin\AdminAttributeController@index');

    //Types
    Route::get('/products/attributes/types/create', 'Admin\AdminTypeController@create');
    Route::post('/products/attributes/types/', 'Admin\AdminTypeController@store');
    Route::get('/products/attributes/types/{type}/edit', 'Admin\AdminTypeController@edit');
    Route::patch('/products/attributes/types/{type}/edit', 'Admin\AdminTypeController@update');
    Route::delete('/products/attributes/types/{type}', 'Admin\AdminTypeController@destroy');

    //Periods
    Route::get('/products/attributes/periods/create', 'Admin\AdminPeriodController@create');
    Route::post('/products/attributes/periods/', 'Admin\AdminPeriodController@store');
    Route::get('/products/attributes/periods/{period}/edit', 'Admin\AdminPeriodController@edit');
    Route::patch('/products/attributes/periods/{period}/edit', 'Admin\AdminPeriodController@update');
    Route::delete('/products/attributes/periods/{period}', 'Admin\AdminPeriodController@destroy');

    //Labels
    Route::get('/products/attributes/labels/create', 'Admin\AdminLabelController@create');
    Route::post('/products/attributes/labels/', 'Admin\AdminLabelController@store');
    Route::get('/products/attributes/labels/{label}/edit', 'Admin\AdminLabelController@edit');
    Route::patch('/products/attributes/labels/{label}/edit', 'Admin\AdminLabelController@update');
    Route::delete('/products/attributes/labels/{label}', 'Admin\AdminLabelController@destroy');
});

// Dashboard for Owners
Route::group(['prefix' => 'dashboard',  'middleware' => ['auth', 'role:owner']], function () {
    // Users
    Route::get('/chefs/', 'Owner\OwnerChefController@index');
    Route::get('/chefs/create', 'Owner\OwnerChefController@create');
    Route::post('/chefs/', 'Owner\OwnerChefController@store');

    // Sets
    // Route::get('/sets/', 'Owner\OwnerSetController@index');
    // Route::get('/sets/create', 'Owner\OwnerSetController@create');
    // Route::post('/sets/', 'Owner\OwnerSetController@store');
    // Route::get('/sets/{set}/edit', 'Owner\OwnerSetController@edit');
    // Route::patch('/sets/{set}', 'Owner\OwnerSetController@update');
    // Route::delete('/sets/{set}', 'Owner\OwnerSetController@destroy');
    Route::resource('sets', 'Owner\OwnerSetController');
});

// Chefs
Route::group(['middleware' => 'auth'], function () {
    Route::get('/sets/', 'SetController@index');
    Route::post('/products/{product}/rating', 'RatingController@store');
});

Auth::routes();

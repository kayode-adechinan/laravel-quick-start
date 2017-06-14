<?php

// home route
Route::get('/', function () {
    return view('welcome');
})->name('home');


// prefix based routes
Route::group(['prefix' => 'admin'], function () {
    Route::resource('products', 'ProductController');
});


// test based routes
Route::group(['prefix' => 'test'], function () {
    Route::get('/', 'TestController@index');
});


// authenticated based routes
Route::group(['middleware' => 'UserAuthentication'], function () {
    Route::get('protected', function () {
        echo  "protected";
    });
});



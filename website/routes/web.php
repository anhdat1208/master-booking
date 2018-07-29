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

Route::group(['middleware' => 'setDefaultGuard:admin', 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Auth::routes();
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'HomeController@index')->name('home');
    });
});

Route::group(['middleware' => 'setDefaultGuard:bo', 'prefix' => 'bo', 'namespace' => 'Bo', 'as' => 'bo.'], function () {
    Auth::routes();
    Route::group(['middleware' => 'auth:bo'], function () {
        Route::get('/', 'HomeController@index')->name('home'); 
    });
});

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'HomeController@index')->name('home');
    });
});

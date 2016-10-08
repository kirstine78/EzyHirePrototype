<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// HomeController
Route::get('/','HomeController@index' );

// SuburbController
Route::get('suburbs','SuburbController@index' );

// BrandController
Route::get('brands','BrandController@index' );

// ArchiveController
Route::get('archive','ArchiveController@index' );

// RegisterController
Route::get('register','RegisterController@index' );

// LogoutController
Route::get('logout','LogoutController@index' );







// SuburbController
Route::get('customer','BrandController@index' );

// SuburbController
Route::get('brands','BrandController@index' );

// SuburbController
Route::get('brands','BrandController@index' );

// SuburbController
Route::get('brands','BrandController@index' );

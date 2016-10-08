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

// CustomerController
Route::get('customer/add','CustomerController@addCustomer' );
Route::get('customer/update','CustomerController@updateCustomer' );
Route::get('customer/delete','CustomerController@deleteCustomer' );
Route::get('customer/bookinglist','CustomerController@listBookingsByCustomer' );
Route::get('customer/damagelist','CustomerController@listDamageByCustomer' );

// VehicleController
Route::get('vehicle/add','VehicleController@addVehicle' );
Route::get('vehicle/retire','VehicleController@retireVehicle' );
Route::get('vehicle/rateupdate','VehicleController@updateHireRate' );

// ReportController
Route::get('report/damage','ReportController@showDamagesReport' );
Route::get('report/fault','ReportController@showFaultsReport' );

// ArchiveController
Route::get('archive','ArchiveController@index' );

// RegisterController
Route::get('register','RegisterController@index' );

// LoginController
Route::get('login','LoginController@index' );

// LogoutController
Route::get('logout','LogoutController@index' );

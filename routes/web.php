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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

Route::resource('employee', 'EmployeeController');
Route::get('/employee-edit/{id}', 'EmployeeController@editEmployee');

Route::resource('jobposition', 'EmployeeratesController');
Route::get('/jobdescription-edit/{id}', 'EmployeeratesController@editJobdescription');

Route::resource('cargo', 'CargoController');
Route::get('/cargo-edit/{id}', 'CargoController@editCargo');

Route::get('/cargo-transaction', 'CargoController@addtransaction');
Route::resource('cargorates', 'CargoRatesController');
Route::get('/cargorates-edit/{id}', 'CargoRatesController@editCargoRates');

//helper
Route::resource('helper', 'HelperController');

//Driver
Route::resource('driver', 'DriverController');

Route::resource('payroll', 'PayrollController');


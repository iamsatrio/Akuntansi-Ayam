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
Route::resource('/customer','CustomerController');
Route::resource('/account_group','AccountGroupController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/indexCustomer', 'CustomerController@index')->name('indexCustomer');
Route::get('/createCustomer', 'CustomerController@create')->name('createCustomer');

Route::get('/indexAccountGroup', 'AccountGroupController@index')->name('indexAccountGroup');
Route::get('/createAccountGroup', 'AccountGroupController@create')->name('createAccountGroup');

Route::get('/indexAccount', 'AccountController@index')->name('indexAccount');
Route::get('/createAccount', 'AccountController@create')->name('createAccount');

Route::get('/indexReminder', 'ReminderController@index')->name('indexReminder');
Route::get('/createReminder', 'ReminderController@create')->name('createReminder');

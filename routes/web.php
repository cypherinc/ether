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
    return view('customer.login');
});
Route::get('registration', function () {
    return view('customer.register');
});
Route::post('/home', function () {
    return view('customer.home');
});

Route::get('/trade', function () {
    return view('customer.trade');
});

Auth::routes();

Route::get('/home', 'ApiController@btcusd')->name('home');

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

Route::group(['middleware' => ['api', 'auth']], function () {
    Route::get('dashboard', function () {
        var_dump(Auth::user()->email);
        return 'You are authenticated via token.';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

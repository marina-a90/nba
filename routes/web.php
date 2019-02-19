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
})->name('home');

Route::resource('/teams', 'TeamsController');

Route::resource('/players', 'PlayersController');

Route::get('/register', 'RegisterController@create')->name('register-show');

Route::post('/register', 'RegisterController@store')->name('register');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/login', 'LoginController@create')->name('login-show');

Route::post('/login', 'LoginController@store')->name('login');
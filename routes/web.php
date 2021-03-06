<?php

use Illuminate\Support\Facades\Route;

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
})->name('home');;

Route::get('/register', 'App\Http\Controllers\RegistrationController@create')->name('register_form');
Route::post('register', 'App\Http\Controllers\RegistrationController@store')->name('register_send');

Route::get('/login', 'App\Http\Controllers\SessionsController@create')->name('login_form');
Route::post('login', 'App\Http\Controllers\SessionsController@store')->name('login_send');

Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy')->name('logout');
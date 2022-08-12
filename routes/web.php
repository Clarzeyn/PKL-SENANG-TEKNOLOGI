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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('masyarakat');
Route::resource('home', 'HomeController')->middleware('masyarakat');

Route::get('home/{id}/show/', 'HomeController@showing')->name('home.showing');
Route::post('/', 'HomeController@komentar')->name('home.komentar');
Route::get('login-user', function () {
    return view('login/index');
});

Route::get('daftar-login', function () {
    return view('login/daftar');
});

Route::post('login-user', 'Auth\LoginController@login')->name('loginpost');
Route::post('daftar-login', 'Auth\RegisterController@showRegistrationForm')->name('register-create');

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
})->name('welcome');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// Route::get('carender', 'CalendarController@show')->name('carender-index');
Route::get('carender', 'YoyakusController@index')->name('carender-index');
Route::get('carender-create', 'YoyakusController@create')->name('carender-create');
Route::post('yoyaku.stoer', 'YoyakusController@store')->name('yoyaku-store');
Route::delete('/yoyaku.delete/{id}', 'YoyakusController@destroy')->name('yoyaku-delete');

Route::get('kakuninn.index', 'SearchController@index')->name('kakuninn-index');
Route::get('search', 'SearchController@show')->name('search');





Route::get('tuuti', 'TuutiController@index')->name('tuuti');

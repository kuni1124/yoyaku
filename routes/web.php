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
Route::get('/', 'WelcomeController@index')->name('/');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::get('carender', 'YoyakusController@index')->name('carender-index');
Route::get('carender-create', 'YoyakusController@create')->name('carender-create');
Route::post('yoyaku.store', 'YoyakusController@store')->name('yoyaku.store');
Route::post('yoyaku.update', 'YoyakusController@update')->name('yoyaku.update');
Route::delete('/yoyaku.delete/{id}', 'YoyakusController@destroy')->name('yoyaku-delete');
Route::get('/yoyaku.edit/{id}', 'YoyakusController@edit')->name('yoyaku-edit');
Route::post('/yoyaku.editb/{id}', 'YoyakusController@editb')->name('yoyaku-editb');
Route::post('/yoyaku.update/{id}', 'YoyakusController@update')->name('yoyaku-update');


Route::get('kakuninn.index', 'SearchController@index')->name('kakuninn-index');
Route::get('search', 'SearchController@show')->name('search');


Route::match(['get', 'post'],'staff.index', 'StaffController@index')->name('staff-index');
Route::get('staff.show', 'StaffController@show')->name('staff-show');
Route::get('staff.delete', 'StaffController@destroy')->name('staff-delete');
Route::delete('/staff.delete/{id}', 'StaffController@destroy2')->name('staff-delete2');
Route::get('/staff.edit/{id}', 'StaffController@edit')->name('staff-edit');
Route::post('/staff.post/{id}', 'StaffController@store')->name('staff-store');


Route::get('tuuti', 'TuutiController@index')->name('tuuti');


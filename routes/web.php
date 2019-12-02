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


Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm')->name('loginform');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@register')->name('update');
Route::get('/manage', 'ManageController@index')->name('manage');
Route::post('/manage/{id}', 'ManageController@acceptForm')->name('acceptform');




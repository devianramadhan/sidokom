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

//Admin
Route::get('/admin','AdminController@index');
Route::get('/Amember','AdminController@member');
Route::get('/Alogin','AdminController@login');
Route::get('/AeditPass','AdminController@editPass');
Route::get('/Alog','AdminController@log');

//User
Route::get('/user','UserController@index');
Route::get('/Ulogin','UserController@login');
Route::get('/UeditPass','UserController@editPass');
Route::get('/Ulog','UserController@log');

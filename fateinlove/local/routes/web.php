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



Route::get('/signup_and_login','UserController@getSignUp');
Route::post('/signup','UserController@postSignUp');

Route::post('/login','UserController@postLogin');
Route::get('/index','PageController@page');
?>
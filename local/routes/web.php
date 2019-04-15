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
Route::get('/index', function () {
    return view('viewpage.index');
});
Route::get('/signup_and_login','UserController@getSignUp');
Route::post('/signup_and_login','UserController@postSignUp');

Route::get('/index','PageController@page');
Route::get('/myprofile','PageController@myprofile');
Route::get('/editprofile','PageController@editprofile');
Route::get('/profile','PageController@profile');


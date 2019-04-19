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
Route::post('/login','UserController@postLogin');
Route::get('/logout','UserController@getLogout');

Route::get('/home','PageController@page');
Route::get('/myprofile/{id}','PageController@getMyProfile');
Route::get('/profile/{id}','PageController@getProfile');

Route::get('/editprofile/{id}','PageController@getEditProfile');
Route::post('/editprofile/{id}','PageController@postEditProfile');

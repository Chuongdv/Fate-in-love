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

Route::get('admin/dangnhap','UserController@getDangnhapAdmin');
Route::post('admin/dangnhap','UserController@postDangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');

Route::group(['prefix'=>'admin'/*,'middleware'=>'adminLogin'*/],function(){
	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('sua','UserController@getSua');
		Route::post('sua','UserController@postSua');

		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');

		Route::get('xoa','UserController@getXoa');
	});
	Route::group(['prefix'=>'truong'],function(){
		Route::get('danhsach','TruongController@getDanhSach');

		Route::get('sua','TruongController@getSua');
		Route::post('sua','TruongController@postSua');

		Route::get('them','TruongController@getThem');
		Route::post('them','TruongController@postThem');

		Route::get('xoa','TruongController@getXoa');
	});
});
?>
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
Route::get('/home_school/{id}','PageController@home_school');
Route::get('/home','PageController@page');
Route::get('/contact','PageController@contact');
Route::get('/myprofile/{id}','PageController@getMyProfile');
Route::get('/profile/{id}','PageController@getProfile');
Route::get('/profile_school/{id}','PageController@getProfile_School');

Route::get('/editprofile/{id}','PageController@getEditProfile');
Route::post('/editprofile/{id}','PageController@postEditProfile');

Route::get('/crush/{id}','PageController@crush');
Route::get('/follow_crush/{id}/{cid}','PageController@follow_crush');
Route::get('/unfollow_crush/{id}/{cid}','PageController@unfollow_crush');
Route::get('/follow_school/{id}/{sid}','PageController@follow_school');
Route::get('/unfollow_school/{id}/{sid}','PageController@unfollow_school');
Route::get('/follow/{id}/{did}','PageController@follow');
Route::get('/unfollow/{id}/{did}','PageController@unfollow');
Route::get('/follow_fschool/{id}/{did}','PageController@follow_fschool');
Route::get('/unfollow_fschool/{id}/{did}','PageController@unfollow_fschool');
Route::post('/timkiem/{sid}','UserController@timkiem');
Route::get('/chat','PageController@chat');
Route::get('/thongbao','PageController@thongbao');

Route::prefix('authenticate')->group(function(){
    Route::get('admin/dangnhap','AdminAuthController@getDangnhapAdmin')->name('admin.login');
	Route::post('admin/dangnhap','AdminAuthController@postDangnhapAdmin');
	Route::get('admin/logout','AdminAuthController@getDangXuatAdmin');
});


Route::group(['prefix'=>'manager','middleware'=>'CheckLoginAdmin'],function(){
	Route::group(['prefix'=>'admin'],function(){
		Route::get('danhsach','AdminController@getDanhSach')->name('get.admin.danhsach');

		Route::get('sua/{id}','AdminController@getSua');
		Route::post('sua/{id}','AdminController@postSua');

		Route::get('them','AdminController@getThem');
		Route::post('them','AdminController@postThem');

		Route::get('xoa/{id}','AdminController@getXoa');
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','ManagerUserController@getDanhSach');

		Route::get('chitiet/{id}','ManagerUserController@getChiTiet');

		Route::get('xoa/{id}','ManagerUserController@getXoa');
	});
	Route::group(['prefix'=>'school'],function(){
		Route::get('danhsach','SchoolController@getDanhSach');

		Route::get('sua/{id}','SchoolController@getSua');
		Route::post('sua/{id}','SchoolController@postSua');

		Route::get('them','SchoolController@getThem');
		Route::post('them','SchoolController@postThem');

		Route::get('xoa/{id}','SchoolController@getXoa');
	});
});

//chat

Route::get('/conversation/{id}', 'ChatsController@getMessagesFor');
Route::post('/conversation/send','ChatsController@send');





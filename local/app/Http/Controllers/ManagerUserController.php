<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ManagerUserController extends Controller
{
    function getDanhSach(){
    	$user = DB::table('users')->get();
    	//$user = User::all();
    	return view('manager.user.danhsach', ['user' => $user]);
    }

    function getChiTiet(){
    	return view('manager.user.chitiet');
    }

    function getXoa($id){
    	DB::table('users')->where('id', '=', $id)->delete();
    	return redirect('manager/user/danhsach')->with('thongbao', 'Xoá người dùng thành công');
    }
}

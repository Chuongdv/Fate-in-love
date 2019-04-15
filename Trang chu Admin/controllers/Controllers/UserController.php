<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\User;
use view;

class UserController extends Controller
{
    //
    public function getDanhSach(){
    	return view('admin.user.danhsach');
    }

    public function getThem(){
    	return view('admin.user.them');
    }

    public function postThem(Request $request){
    	return redirect('admin/user/them');
    }

    public function getSua($id){
    	return view('admin.user.sua');
    }

    public function postSua(Request $request, $id){
    	return redirect('admin/user/sua');
    }

    public function getXoa($id){
    	return redirect('admin/user/danhsach');
    }

    public function getDangnhapAdmin(){
        return view('admin.login');
    }

    public function postDangnhapAdmin(Request $request){
        return redirect('admin/theloai/danhsach');
    }

    public function getDangXuatAdmin(){
        //Auth::logout();
        return redirect('admin/dangnhap');
    }
}

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

    public function postThem(){
    	return redirect('admin/user/them');
    }

    public function getSua(){
    	return view('admin.user.sua');
    }

    public function postSua(){
    	return redirect('admin/user/sua');
    }

    public function getXoa(){
    	return redirect('admin/user/danhsach');
    }

    public function getDangnhapAdmin(){
        return view('admin.login');
    }

    public function postDangnhapAdmin(){
        return redirect('admin/truong/danhsach');
    }

    public function getDangXuatAdmin(){
        //Auth::logout();
        return redirect('admin/dangnhap');
    }
}

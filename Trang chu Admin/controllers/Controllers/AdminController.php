<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDanhSach(){
    	return view('admin.admin.danhsach');
    }

    public function getThem(){
    	return view('admin.admin.them');
    }

    public function postThem(){
    	return redirect('admin/admin/them');
    }

    public function getSua(){
    	return view('admin.admin.sua');
    }

    public function postSua(){
    	return redirect('admin/admin/sua');
    }

    public function getXoa(){
    	return redirect('admin/admin/danhsach');
    }

    public function getDangnhapAdmin(){
        return view('admin.login');
    }

    public function postDangnhapAdmin(){
        return redirect('admin/admin/danhsach');
    }

    public function getDangXuatAdmin(){
        //Auth::logout();
        return redirect('admin/dangnhap');
    }
}

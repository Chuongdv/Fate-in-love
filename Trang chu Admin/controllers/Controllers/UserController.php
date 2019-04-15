<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function getDanhSach(){
    	return view('admin.user.danhsach');
    }

    public function getChiTiet(){
    	return view('admin.user.chitiet');
    }

    public function postSua(){
    	return redirect('admin/user/sua');
    }

    public function getXoa(){
    	return redirect('admin/user/danhsach');
    }
}

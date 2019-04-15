<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use view;

class TruongController extends Controller
{
    //
    public function getDanhSach(){
    	return view('admin.truong.danhsach');
    }

    public function getThem(){
    	return view('admin.truong.them');
    }

    public function postThem(){
        return redirect('admin/truong/them');
    }

    public function getSua(){
        return view('admin.truong.sua');
    }

    public function postSua(){

        return redirect('admin/truong/sua');
    }

    public function getXoa(){
        return redirect('admin/truong/danhsach');
    }
}

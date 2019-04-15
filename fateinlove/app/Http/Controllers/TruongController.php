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

    public function postThem(Request $request){
        return redirect('admin/truong/them');
    }

    public function getSua($id){
        return view('admin.truong.sua');
    }

    public function postSua(Request $request, $id){

        return redirect('admin/truong/sua');
    }

    public function getXoa($id){
        return redirect('admin/truong/danhsach');
    }
}

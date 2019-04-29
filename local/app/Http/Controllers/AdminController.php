<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function getDanhSach(){
        $data = DB::table('Admin')->get();
    	return view ('manager.admin.danhsach', ['admin' => $data]);
    }

    function getSua($id){
        $data = DB::table('Admin')->where('id', '=', $id)->get();
    	return view ('manager.admin.sua', ['admin' => $data]);
    }

    function postsua(){

    }

    function getThem(){
        return view('manager.admin.them');

    }

    function postThem(){

    }

    function getXoa($id){
        DB::table('Admin')->where('id', '=', $id)->delete();
    }
}



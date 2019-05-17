<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

    function postsua(Request $request, $id){
        DB::table('admin')->where('id', '=', $id)->update(['name'=> $request->name, 'email' => $reuqest->email, 'password'=>bcrypt($request->password)]);

        return redirect('manager/admin/sua/' . $id)->with('thongbao', 'Thay đổi thành công');
    }

    function getThem(){
        return view('manager.admin.them');

    }

    function postThem(Request $request){
        $admin = DB::table('admin')->get();
        foreach($admin as $item){
            if($request->email == $item->id){
                return redirect('manager/admin/them')->with('thongbao', 'Thêm thất bại do email này đã sử dụng');
            }
        }
        DB::table('admin')->insert(['name'=> $request->name, 'email' => $reuqest->email, 'password'=>bcrypt($request->password)]);
        return redirect('manager/admin/them')->with('thongbao', 'Thêm thành công');
    }

    function getXoa($id){
        DB::table('Admin')->where('id', '=', $id)->delete();
    }


}



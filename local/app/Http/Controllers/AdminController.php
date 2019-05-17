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
 $this->validate($request,
        [
         'name'=>'required|min:3',
         'email'=>'required|email|unique:users,email',
         'password'=>'required|min:6|max:32',
         'passwordAgain'=>'required|same:password',
         

        ],
        [
            'name.required'=>'Bạn cần tạo tên tài khoản',
            'name.min'=>'Tên tài khoản quá ngắn',
            'email.required'=>'Bận cần nhập email để đăng ký tài khoản',
            'email.email'=>'Bạn cần nhập đúng định dạng email',
            'email.unique'=>'Ai đó đã sử dụng email này để đăng ký trước đó',
            'password.required'=>'Nhập mật khẩu của bạn',
            'password.min'=>'Mật khẩu không an toàn cho tài khoản của bạn',
            'password.max'=>'Bạn nên đặt mật khẩu mang tính gợi nhớ',
            'passwordAgain.required'=>'Bạn cần nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu không trùng khớp',
        ]);
        $admin = DB::table('admin')->get();
        
        
        DB::table('admin')->insert(['name'=> $request->name, 'email' => $request->email, 'password'=>bcrypt($request->password)]);
        return redirect('manager/admin/them')->with('thongbao', 'Thêm thành công');
    }

    function getXoa($id){
        DB::table('Admin')->where('id', '=', $id)->delete();
    }


}



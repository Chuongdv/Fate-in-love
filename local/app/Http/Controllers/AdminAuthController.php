<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function getDangnhapAdmin(){
        return view('manager.login');
    }
    public function postDangnhapAdmin(Request $request){
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập Password'
            ]);
        $data = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($data)) {
            //
            return redirect()->route('get.admin.danhsach');
        }

        return redirect()->back()->with('thongbao','Đăng nhập không thành công');
    }

    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('authenticate/admin/dangnhap');
    }
}

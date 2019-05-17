<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Schools;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //

     function getSignUp(){
        $school = Schools::all();

    	return view('viewpage.login_signup',['school'=>$school]);
    }

   function postSignUp(Request $request){
        $this->validate($request,
        [
         'name'=>'required|min:3',
         'email'=>'required|email|unique:users,email',
         'password'=>'required|min:6|max:32',
         'passwordAgain'=>'required|same:password',
         'birthday'=>'required',
         'gender'=>'required',
         'school'=>'required'

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
            'birthday.required'=>'Bạn chưa điền ngày tháng năm sinh',
            'gender.required'=>'Giới tính của bạn là gì???',
            'id.unique'=>'Ai đó đã dùng mã ID cá nhân này',
            'school.required'=>'Bạn đang học tại trường đại học nào??'

        ]);

        $user = new User;
        $user->id = rand();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->sid = $request->school;
        $user->image= 'avatar.jpg';
        $user->save();

        return redirect('signup_and_login')->with('thongbao','Đăng ký thành công!!');


    }
   
   function postLogin(Request $request){

   	$this->validate($request,

   [
'email'=>'required|email',
'password'=>'required|min:6|max:32'
   	],

   	[
'email.required'=>'Vui lòng nhập email!',
'email.email'=>'Bạn cần nhập đúng định dạng email',
'password.required'=>'Nhập mật khẩu của bạn',
    		'password.min'=>'Mật khẩu không an toàn cho tài khoản của bạn',
    		'password.max'=>'Bạn nên đặt mật khẩu mang tính gợi nhớ'
   	]);

 if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
 	return redirect('home');
 } else{
    return redirect('signup_and_login')->with('thongbao','Email không tồn tại hoặc sai mật khẩu!');
 }
   }

    public function getLogout(){
      Auth::logout();
      return redirect('signup_and_login');
    }

   
}

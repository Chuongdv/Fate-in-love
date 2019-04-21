<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Schools;
class PageController extends Controller
{
    //

    function __construct(){
    	$users = User::all();
    	view()->share('users',$users);
    }
     function page(){
         if(Auth::check()){
        $user = Auth::user();
      }
    	return view ('viewpage.index',['user'=>$user]);

    }

   public function getMyProfile($id){
       if(Auth::check()){
        $my = Auth::user();
      }
    	return view ('view_profile.myprofile',['my'=>$my]);

    }
     function editprofile(){
      if(Auth::check()){
        $user = Auth::user();
}
        return view ('view_profile.editprofile',['user'=>$user]);
      

    }
   public  function getProfile($id){
    if(Auth::check()){
      $user = Auth::user();
    }
    $user_page= User::find($id); 
    return view('view_profile.profile',['user_page'=>$user_page,'user'=>$user]);
         //return view('view_profile.profile');
     }

      public function getEditProfile($id){
        $school = Schools::all();
      if(Auth::check()){
        $user_edit = Auth::user();
      }
       return view('view_profile.editprofile',['user_edit'=>$user_edit,'school'=>$school]);
        //return view('view_profile.editprofile',['school'=>$school]);
    }

    public function postEditProfile(Request $request,$id){
       $this->validate($request,
             ['name'=>'required|min:5|max:20',

               'email'=>'required',
               'home'=>'required',
               'introduce'=>'required',
               'school'=>'required'


           ],

             [
              'name.required'=>'Bạn chưa tạo tên này???',
              'name.min'=>'Tên của  bạn phải tên 5 ký tự!!',
              'name.max'=>'Tên của bạn dài quá. Tạo một cái tên khác nhé',
              'home.required'=>'Bạn nên ghi địa chỉ',
              'introduce.required'=>'Hãy giới thiệu đôi chút về mình đi nào!!',
              'school.required'=>'Bạn đang học ở trường đại học nào'



             ]);
   if(Auth::check()){
        $user_edit = Auth::user();
      }
        $user_edit->name = $request->name;
        $user_edit->home =$request->home;
        $user_edit->introduce = $request->introduce;
        $user_edit->sid = $request->school;
        $user_edit->save();

        return redirect('editprofile/'.$id)->with('thongbao','Bạn đã cập nhật thông tin cá nhân mới!');
    }

}

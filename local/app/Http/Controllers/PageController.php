<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Schools;
use App\Fschool;
use App\Crush;
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
    function contact(){
      if(Auth::check()){
        $user = Auth::user();
      }
      return view ('viewpage.contact',['user'=>$user]);

    }


    function home_school(Request $request,$id){
       if(Auth::check()){
        $user = Auth::user();
      }
      $school = Schools::find($id);
      $userSr = User::with('school:id');
      if($request->name) $userSr->where('name','like','%'.$request->name.'%');

      $userSr = $userSr->orderByDesc('id')->paginate(8);
      //dd($userSr);
      $viewData = [
        'user'=>$user,
        'school'=>$school,
        'userSr' => $userSr
      ];
      
      return view('viewpage.index_school',$viewData);
    }

   public function getMyProfile($id){
       if(Auth::check()){
        $my = Auth::user();
      }
      
    	return view ('view_profile.myprofile',['my'=>$my]);

    }
    
   public  function getProfile($id){
    if(Auth::check()){
      $user = Auth::user();
    }
    $user_page= User::find($id); 
    return view('view_profile.profile',['user_page'=>$user_page,'user'=>$user]);
         //return view('view_profile.profile');
     }
public function getProfile_School($id){
if(Auth::check()){
      $user = Auth::user();
    }
     $school = Schools::find($id);
     return view('view_profile.profile_school',['user'=>$user,'school'=>$school]);

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
       $name = $user_edit->name;

        if($request->hasFile('new_image')){
             $file = $request->file('new_image');
             //File::delete('image/logo/' .)
            $request->file('new_image')->move('image/profile', $user_edit->id .  "." .$file->getClientOriginalExtension());
            
             DB::table('users')->where('id', '=', $id)->update(['name'=>$request->name,'birthday'=>$request->birthday,'introduce'=>$request->introduce, 'sid'=>$request->school,'home'=>$request->home, 'image'=> $user_edit->id . "." . $file->getClientOriginalExtension()]);
        }
        else{
            DB::table('users')->where('id', '=', $id)->update(['name'=>$request->name,'birthday'=>$request->birthday,'introduce'=>$request->introduce, 'sid'=>$request->school,'home'=>$request->home]);
        }

        return redirect('editprofile/'.$id)->with('thongbao','Bạn đã cập nhật thông tin cá nhân mới!');
    }

    function crush(){
      if(Auth::check()){
        $user = Auth::user();
      }
      $user_cr = User::all()->shuffle();
    $school = Schools::all();
      return view('viewpage.crush',['user'=>$user,'school'=>$school,'user_cr'=>$user_cr]);
    }

function unfollow($uid,$did){
   
 if(Auth::check()){
        $user = Auth::user();
      }
 $user_page= User::find($did); 
  
   $crush = DB::table('crush')->where([
    ['uid', '=', $uid],
    ['cid', '=', $did],
    ])->delete();
      return view('view_profile.profile',['user'=>$user,'user_page'=>$user_page]);    
    }

     function follow($uid,$did){
            if(Auth::check()){
        $user = Auth::user();
      }
      $user_page= User::find($did); 
  
    $crush = DB::table('crush')->insertGetId(
    ['uid'=>$uid,'cid' => $did]
     );
      return view('view_profile.profile',['user'=>$user,'user_page'=>$user_page]);    
    }
    
function unfollow_fschool($uid,$sid){
   
 if(Auth::check()){
        $user = Auth::user();
      }
$school = Schools::find($sid);
   $crush = DB::table('fschool')->where([
    ['uid', '=', $uid],
    ['sid', '=', $sid],
    ])->delete();
      return view('view_profile.profile_school',['user'=>$user,'school'=>$school]);    
    }

     function follow_fschool($uid,$sid){
            if(Auth::check()){
        $user = Auth::user();
      }
      $school = Schools::find($sid);
  
    $crush = DB::table('fschool')->insertGetId(
    ['uid'=>$uid,'sid' => $sid]
     );
      return view('view_profile.profile_school',['user'=>$user,'school'=>$school]);    
    }
    
    

    function follow_crush($uid,$cid){
            if(Auth::check()){
        $user = Auth::user();
      }
      $user_cr = User::all()->shuffle();
  
    $crush = DB::table('crush')->insertGetId(
    ['uid'=>$uid,'cid' => $cid]
     );
      return view('viewpage.crush',['user'=>$user,'user_cr'=>$user_cr]);    
    }

   function unfollow_crush($uid,$cid){
   
 if(Auth::check()){
        $user = Auth::user();
      }
    $user_cr = User::all()->shuffle();
      $user_cr = User::all()->shuffle();

   $crush = DB::table('crush')->where([
    ['uid', '=', $uid],
    ['cid', '=', $cid],
    ])->delete();
      return view('viewpage.crush',['user'=>$user,'user_cr'=>$user_cr]);    
    }
     function follow_school($uid,$sid){
            if(Auth::check()){
        $user = Auth::user();
      }
      $user_cr = User::all()->shuffle();
  
    $school = DB::table('fschool')->insertGetId(
    ['uid'=>$uid,'sid' => $sid]
     );
      return view('viewpage.crush',['user'=>$user,'user_cr'=>$user_cr]);    
    }
    function unfollow_school($uid,$sid){
   
 if(Auth::check()){
        $user = Auth::user();
      }
    $user_cr = User::all()->shuffle();

   $school = DB::table('fschool')->where([
    ['uid', '=', $uid],
    ['sid', '=', $sid],
    ])->delete();
      return view('viewpage.crush',['user'=>$user,'user_cr'=>$user_cr]);    
    }

    function chat(){
      if(Auth::check()){      
        $user = Auth::user(); 
      } 
      return view('viewpage.chat',['user'=>$user]);
    }

    function thongbao(){
      return view('viewpage.thongbao');
    }
}

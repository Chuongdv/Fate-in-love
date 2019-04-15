<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class PageController extends Controller
{
    //

    function __construct(){
    	$users = User::all();
    	view()->share('users',$users);
    }
     function page(){
    	return view ('viewpage.index');

    }

    function myprofile(){
    	return view ('view_profile.myprofile');

    }
     function editprofile(){
        return view ('view_profile.editprofile');

    }
     function profile(){
        return view ('view_profile.profile');

    }
}

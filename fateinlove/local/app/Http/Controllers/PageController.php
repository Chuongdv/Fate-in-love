<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PageController extends Controller
{
    function page(){
    	return view ('viewpage.index');

    }
}

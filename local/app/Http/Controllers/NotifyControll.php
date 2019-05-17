<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotifyEvent;
use Illuminate\Broadcasting\BroadcastException;

class NotifyControll extends Controller
{
    function notify(){
    	broadcast(new NotifyEvent("hihi"));
    	return "hihi";
    }
}

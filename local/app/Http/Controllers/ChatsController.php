<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Messages;
use App\Events\NewMessage;
use App\Events;

class ChatsController extends Controller
{
    
    public function get()
    {
        // get all users except the authenticated one
        $cids = array();
        $crushIds = array();
        $cids = DB::table('crush')->select('cid')->where('uid', '=', auth()->id())->get();
        foreach ($cids as $key) { 
        	array_push($crushIds, $key->cid);
        }
    //    $contacts = DB::table('users')->whereNotIn('id', $crushIds)->select('users.name', 'users.image')->get();
   //     return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {

        // mark all messages with the selected contact as read
       
       DB::table('messages')->where('source', '=', auth()->id())->where('destination','=', $id)->update(['seen' =>'1']);

        // get all messages between the authenticated user and the selected user
        $idc = null;
    	if((int) auth()->id() > (int) $id)
          	 $idc = auth()->id() . $id;
         else
             $idc = $id . auth()->id() ;    

        $message = DB::table('messages')->where('idc', '=', $idc)->get();

        return response()->json($message);
    }

    public function send(Request $request)
    {
    	$idc = null;
    	if((int) auth()->id() > (int) $request->crushId)
          	 $idc = auth()->id() . $request->crushId;
         else
             $idc = $request->crushId . auth()->id() ;




         DB::table('messages')->insert(['idc'=> $idc, 'source' =>auth()->id(), 'destination' => $request->crushId, 
         	'message' => $request->message]);

	

         $mess = DB::table('messages')->where('source', '=', auth()->id())->where('destination', '=', $request->crushId)->get()->last();
         var_dump($mess);
         broadcast(new NewMessage($mess));
      return $mess->destination;
    }
}

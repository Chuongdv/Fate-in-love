<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Messages;
use App\Events\NewMessage;

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
        $contacts = DB::table('users')->whereNotIn('id', $crushIds)->select('users.name', 'users.image')->get();

        echo $contacts;
        //return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->contact_id,
            'text' => $request->text
        ]);

        broadcast(new NewMessage($message));

        return response()->json($message);
    }
}

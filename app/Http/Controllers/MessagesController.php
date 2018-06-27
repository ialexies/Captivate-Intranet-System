<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function submit(Request $request) {  //use the Request as paramater then assign a variable $request to receive the value
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        //return 'SUCCESS';

        //Create new message
        $message = new Message;
        $message->name = $request->input('name'); 
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();
        //Redirect
        return redirect('/contact')->with('success', 'message Sent');

    }

    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }

}

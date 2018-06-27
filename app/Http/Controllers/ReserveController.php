<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class ReserveController extends Controller
{
   //
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'agenda' => 'required',
            'time' => 'required',
            'date' =>'required'
        ]);

        $meeting = new Form;
        $meeting ->name = $request -> input('name');
        $meeting ->agenda = $request->input('agenda');
        $meeting ->time = $request->input('time');
        $meeting ->date = $request->input('date');
        $meeting->save();

        return redirect('/meeting-room')->with('success','Reserved Successfuly!');
    }
    public function getMeetingRoom(){
        $messages = Form::all();
        return view('inc.mrb')->with('mrb', $meeting);
    }
}
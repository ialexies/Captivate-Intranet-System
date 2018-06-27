<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alignment;
class AlignmentController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'agenda' => 'required',
            'venue' => 'required',
            'date' =>'required'
        ]);

        $alignment = new Form;
        $alignment ->name = $request -> input('name');
        $alignment ->agenda = $request->input('agenda');
        $alignment ->venue = $request->input('venue');
        $alignment ->date = $request->input('date');
        $alignment->save();

        return redirect('/')->with('success','Reserved Successfuly!');
    }
    public function getAlignment(){
        $alignment = Alignment::all();
        return view('/')->with('alignment-meeting', $alignment);
    }
}

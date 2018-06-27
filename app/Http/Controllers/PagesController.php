<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHOme(){
        return view('home');
    }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }

    public function getPeopleCalendar(){
        return view('people-calendar');
    }

    public function getOBA(){
        return view('oba');
    }

    public function getTimeKeeping(){
        return view('time-keeping');
    }

    public function getOLM(){
        return view('olm');
    }
}

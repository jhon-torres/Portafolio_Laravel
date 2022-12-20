<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function experience(){
        return view('experience');
    }
}

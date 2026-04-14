<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task9Controller extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function photos()
    {
        return view('photos');
    }

    public function contact()
    {
        return view('contact');
    }
}
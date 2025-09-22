<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class a extends Controller
{
    public function ab(){
        return view('AboutUs');
    }
    public function ba(){
        return view('Contact');
    }
}

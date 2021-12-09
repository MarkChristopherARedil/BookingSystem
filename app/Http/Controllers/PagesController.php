<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function account(){
        return view('account'); 
    }

    public function booking(){
        return view('booking'); 
    }
}

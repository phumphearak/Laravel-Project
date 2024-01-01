<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example01Controller extends Controller
{
    public function home(){ 
        return view("example01.home"); 
    } 
    public function news(){ 
        return view("example01.news");
     } 
     public function apple(){//
        return view("example01.apple"); 
    }
}

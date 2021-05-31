<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test(){
        return view('test');
    }
    public function home(){
        return view('home');
    }


}

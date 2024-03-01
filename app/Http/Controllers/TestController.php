<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function mostafa(){
        return view('welcome2');
    }

    public function printName($x='no one'){
        dd("Hello $x from print function");
    }
}

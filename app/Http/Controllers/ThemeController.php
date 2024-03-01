<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about(){
        return view('theme.about');
    }
    public function service(){
        return view('theme.service');
    }
    public function contact(){
        return view('theme.contact');
    }
    public function store(Request $req){
      $validatedData=  $req->validate([
            'first_name'=>'required | min:5| alpha:ascii',
            'last_name'=>'required | min:5| alpha:ascii',
            'email'=>'required | min:5| email',
            'message'=>'',
        ],[
            'first_name.required'=> 'This is the customized message',
            'first_name.min'=> 'This is the customized message for min'
        ]);
        dd($validatedData);
    }
}

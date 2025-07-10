<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
     public function index(){
       
        
        
        return view('register-member');
    }

    public function store(){
        $aaa = 123;
        dd($aaa);
    }
}

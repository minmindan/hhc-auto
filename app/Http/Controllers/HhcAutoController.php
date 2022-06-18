<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HhcAutoController extends Controller
{
    //
    public function index(){
        return view ('index');
    }

    public function login(){
        return view('index');
    }

    public function termsofservice(){
        return view ('termsofservice.termsofservice');
    }

    public function privacypolic(){
        return view ('PrivacyPolic.Privacy');
    }
}

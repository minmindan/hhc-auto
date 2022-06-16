<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HhcAutoController extends Controller
{
    //
    public function index(){
        return view ('template.template');
    }

    public function login(){
        return view('login.login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //首頁
    public function index(){
        return view('aboutUs.aboutUs');
    }
}

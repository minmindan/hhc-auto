<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;
use App\Models\Report;

class HhcAutoController extends Controller
{
    //

    // 首頁重複
    // 首頁重複
    // 首頁重複
    // public function index(){
    //     $abus =Aboutus_banner::get();
    //     return view ('index',compact('abus'));
    // }

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

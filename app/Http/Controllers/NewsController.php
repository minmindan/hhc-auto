<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;

class NewsController extends Controller
{
    //

    public function topics_index(){
        $datas = News::get();
        return view ('basic_info.topics',compact('datas'));
    }

    public function topics_create(){}

    public function topics_stroe(){}

    public function topics_edit(Request $request,$id){
        // $datas = News::find($id);
        // return view ('formbackstage.formbackstage' , compact('datas'));
    }

    public function topics_update(){}







}

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
        $datas = News::orderby('id','desc')->take(3)->get();
        return view ('basic_info.topics',compact('datas'));
    }

    public function topics_create(){
        $datas = News::orderby('id','desc')->take(2)->get();
        return view ('basic_info.topics_create',compact('datas'));
    }
    public function topics_store(Request $request){
        $data = News::create([
            'time'=>$request->time,
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        $data->save();
        return redirect ('/topics-manage');
    }

    public function topics_delete($id){
        $data = News::find($id);
        $data->delete();
        $datas = News::orderby('id','desc')->take(3)->get();
        return redirect ('/topics-manage');
        // $datas = News::find($id);
        // return view ('formbackstage.formbackstage' , compact('datas'));
    }

    public function topics_update(){}







}

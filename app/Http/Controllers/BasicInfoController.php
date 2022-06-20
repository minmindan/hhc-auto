<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Milestone;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;

class BasicInfoController extends Controller
{
    //最新消息 已完成
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
    }



    //公司沿革 已完成
    public function milestones_index(){
        $datas = Milestone::all();
        return view ('basic_info.milestones',compact('datas'));
    }

    public function milestones_create(){
        $datas = Milestone::orderby('id','desc')->take(2)->get();
        return view ('basic_info.milestones_create',compact('datas'));
    }
    public function milestones_edit(Request $request, $id){
        $data = Milestone::find($id);
        return view ('basic_info.milestones_edit',compact('data'));
    }
    public function milestones_store(Request $request, $id){
        // dd('1');
          $create = Milestone::where('id',$id)->update([
            'years'=>$request->years,
            'month'=>$request->month,
            'content'=>$request->content,
        ]);
        return redirect ('/milestones-manage');
    }

    public function milestones_delete($id){
        $data = Milestone::find($id);
        $data->delete();
        return redirect ('/milestones-manage');
    }
}

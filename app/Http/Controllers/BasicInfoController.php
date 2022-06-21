<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Milestone;
use App\Models\profile;
use App\Models\report;
use App\Models\contact;
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
        Milestone::where('id',$id)->update([
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


    //聯絡我們
    public function contact_index(){
        $data = profile::get();
        return view ('basic_info.porfile' , compact('data'));
    }

    public function contact_create(){
        return view ('basic_info.milestones_create',compact('datas'));
    }
    public function contact_edit(){
        $data = profile::get();
        return view ('basic_info.porfile_edit',compact('data'));
    }
    public function contact_store(Request $request){
        profile::where('id', 1)->update([
            'company_name'=>$request->company_name,
            'found'=>$request->found,
            'address'=>$request->address,
            'opening'=>$request->opening,
            'phone'=>$request->phone,
        ]);
        return redirect ('/contact-manage');
    }

    public function contact_delete($id){
        return redirect ('/milestones-manage');
    }



    //回報表單列表
    public function contactlist_index(){
        $datas = report::get();
        // dd($datas);
        return view ('formbackstage.formbackstage' , compact('datas'));
    }
    public function contactlist_edit($id){
        $data = report::find($id);
        return view ('formbackstage.formbackstage_edit',compact('data'));
    }
    public function contactlist_store(Request $request){
        profile::where('id', 1)->update([
            'company_name'=>$request->company_name,
            'found'=>$request->found,
            'address'=>$request->address,
            'opening'=>$request->opening,
            'phone'=>$request->phone,
        ]);
        return redirect ('/contactlist-manage');
    }
    public function contactlist_update(Request $request ,$id){

        report::find($id)->update([
            'state'=>$request->state,
            'remake'=>$request->remake,
        ]);
        return redirect ('/contact/list');
    }
    public function contactlist_delete($id){
        return redirect ('/milestones-manage');
    }
}



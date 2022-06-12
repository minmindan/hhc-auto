<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Report;


class ContactController extends Controller
{
    //首頁
    public function index()
    {
        // dd('123');
        return view('Contact.contact1');
    }

    public function contact2(Request $request){

        Report::create([
            'type' => $request->type,
            'company' => $request->company,
            'title' => $request->appellation,
            'name' => $request->name,
            'phone' => $request->tel,
            'address' => $request->email,
            'demand' => $request->demand,
            'state' => 1,
            'img_path' => '',
        ]);

        $form = Report::orderby('id', 'desc')->take(1)->get();


        return view('Contact.contact2', compact('form'));
    }


    public function contact3(){



        return view('Contact.contact3');
    }


    // 儲存頁
    public function store()
    {}

    // 編輯頁
    public function edit()
    {}

    // 更新頁
    public function update()
    {}

     // 刪除頁
     public function delete($id){
        $form = Report::orderby('id', 'desc')->take(1)->delete($id);

        return view('Contact.contact1');
     }

}

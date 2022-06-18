<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Report;
use App\storage\sessions;
use App\Models\Contact_banner;


class ContactController extends Controller
{
    //首頁
    public function index(Request $request)
    {
        $contact = Contact_banner::get();
        $data = session()->all();
        // dd($data);
        return view('Contact.contact1', compact('data','contact'));
    }

    public function contact2(Request $request){
        // dd($request->all());

        $contact = Contact_banner::get();


        session([
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
        $data = session()->all();
        // if ($data['type'] = '1') {
        //     dd('1');
        // };
        // if ($data['type'] = '2') {
        //     dd('2');
        // };
        // if ($data['type'] = '101') {
        //     dd('101');
        // };
        // dd($data);
        // Report::create([
        //     'type' => $request->type,
        //     'company' => $request->company,
        //     'title' => $request->appellation,
        //     'name' => $request->name,
        //     'phone' => $request->tel,
        //     'address' => $request->email,
        //     'demand' => $request->demand,
        //     'state' => 1,
        //     'img_path' => '',
        // ]);

        // $form = Report::orderby('id', 'desc')->take(1)->get();


        return view('Contact.contact2', compact('data','contact'));
    }


    public function contactin(Request $request){
        // $data = session()->all();
        // dd($data);
        // dd($request);


        Report::create([
            'type' => session()->get('type'),
            'company' => session()->get('company'),
            'title' => session()->get('title'),
            'name' => session()->get('name'),
            'phone' => session()->get('phone'),
            'address' => session()->get('address'),
            'demand' => session()->get('demand'),
            'state' => 1,
            'remark' => '',
        ]);



        return redirect('/contact3');
    }

    public function contact3(){
        $contact = Contact_banner::get();

        return view('Contact.contact3',compact('contact'));
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

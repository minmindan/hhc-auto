<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FilesController;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;

class HomePageController extends Controller
{
    //首頁
    public function index()
    {
        return view('index');
    }
    public function aboutus()
    {
        $abus = Aboutus_banner::get();
        return view('aboutus.aboutus',compact('abus'));
    }
    public function product()
    {
        $product = Product_banner::get();
        return view('equipment.product',compact('product'));
    }




    public function equipment()
    {
        return view('equipment-all.product-all');
    }
    public function equipmentdetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function software()
    {
        return view('equipment-all.product-all');
    }
    public function softwaredetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function parts()
    {
        return view('equipment-all.product-all');
    }
    public function partsdetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function consumables()
    {
        return view('equipment-all.product-all');
    }
    public function consumablesdetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function maintenance()
    {
        return view('equipment-all.product-all');
    }public function maintenancedetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }




    public function process()
    {
        $process = Process_banner::get();
        return view('Process_cssunset.process',compact('process'));
    }
    public function topics()
    {
        return view('index');
    }











    //表單相關

    public function contact()
    {
        $data = session()->all();
        // dd($data);
        return view('Contact.contact1', compact('data'));
    }
    public function contact2(Request $request){
        // dd($request->all());
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


        return view('Contact.contact2', compact('data'));
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
        return view('Contact.contact3');
    }

}

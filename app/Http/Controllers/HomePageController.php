<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FilesController;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;
use App\Models\News;
use App\Models\company;
use App\Models\profile;
use App\Models\Components_img;
use App\Models\Components_product;
use App\Models\Consumables_img;
use App\Models\Consumables_product;
use App\Models\Equipment_img;
use App\Models\Equipment_product;
use App\Models\Repair_img;
use App\Models\Repair_product;
use App\Models\Software_img;
use App\Models\Software_product;

class HomePageController extends Controller
{
    //首頁
    public function index()
    {
        $profile = profile::get();
        $companys = company::get();
        $abus =Aboutus_banner::get();
        $datas = News::orderby('id','desc')->take(3)->get();



// 新增圖片測試
$equipment = Equipment_product::where('primary','<','6')->get();
$software = Software_product::where('primary','<','6')->get();
$components = Components_product::where('primary','<','6')->get();
$consumables = Consumables_product::where('primary','<','6')->get();
$maintenance = Repair_product::where('primary','<','6')->get();





        return view('index',compact('abus','datas','companys','profile','equipment','software','components','consumables','maintenance'));
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
        $title = '設備';
        $subtitle = 'Equipment';
        return view('equipment-all.product-all' ,compact('title','subtitle') );
    }
    public function equipmentdetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function software()
    {
        $title = '軟體';
        $subtitle = 'Software';
        return view('equipment-all.product-all' ,compact('title','subtitle'));
    }
    public function softwaredetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function parts()
    {
        $title = '部品零件';
        $subtitle = 'Parts';
        return view('equipment-all.product-all' ,compact('title','subtitle'));
    }
    public function partsdetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function consumables()
    {
        $title = '耗材';
        $subtitle = 'Consumables';
        return view('equipment-all.product-all' ,compact('title','subtitle'));
    }
    public function consumablesdetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }

    public function maintenance()
    {
        $title = '維修';
        $subtitle = 'Maintenance';
        return view('equipment-all.product-all' ,compact('title','subtitle'));
    }public function maintenancedetail($id)
    {
        return view('equipment-detail.equipment-detail');
    }




    public function process()
    {
        $process = Process_banner::get();
        $product = Product_banner::get();
        $contact = Contact_banner::get();
        return view('Process_cssunset.process',compact('process','product','contact'));
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

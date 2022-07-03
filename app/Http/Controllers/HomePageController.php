<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\company;
use App\Models\Profile;
use App\Models\Milestone;
use App\Models\Index_banner;
use App\Models\Aboutus_banner;
use App\Models\Contact_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Consumables_product;
use App\Models\Components_product;
use App\Models\Equipment_product;
use App\Models\Repair_product;
use App\Models\Software_product;
use App\Models\Consumables_img;
use App\Models\Components_img;
use App\Models\Equipment_img;
use App\Models\Repair_img;
use App\Models\Software_img;


class HomePageController extends Controller
{
    //首頁
    public function index()
    {
        // $profile = profile::get();
        $companys = company::get();
        $abus = Aboutus_banner::get();
        $datas = News::orderBy('id', 'desc')->take(3)->get();

        // 新增圖片測試
        $equipment = Equipment_product::where('primary', '<', '6')->get();
        $software = Software_product::where('primary', '<', '6')->get();
        $components = Components_product::where('primary', '<', '6')->get();
        $consumables = Consumables_product::where('primary', '<', '6')->get();
        $maintenance = Repair_product::where('primary', '<', '6')->get();
        $banners = Index_banner::get();
        return view('index', compact('abus', 'datas', 'companys', 'equipment', 'software', 'components', 'consumables', 'maintenance','banners'));
    }

    public function aboutus()
    {
        $abus = Aboutus_banner::get();
        $Profile = Profile::get();
        $Milestones = Milestone::get();
        // dd($Milestones);
        return view('aboutUs.aboutUs', compact('abus' , 'Profile' , 'Milestones'));
    }

    public function product()
    {

        //產品排序前兩項
        $equipment = Equipment_product::orderBy('weights', 'asc')->take(2)->get();
        $software = Software_product::orderBy('weights', 'asc')->take(2)->get();
        $components = Components_product::orderBy('weights', 'asc')->take(2)->get();
        $consumables = Consumables_product::orderBy('weights', 'asc')->take(2)->get();
        $maintenance = Repair_product::orderBy('weights', 'asc')->take(1)->get();

        $product = Product_banner::get();
        return view('equipment.product', compact('product', 'equipment', 'software', 'components', 'consumables', 'maintenance'));
    }

    // 產品列表頁面
    public function equipment()
    {
        $title = '設備';
        $subtitle = 'Equipment';
        $item = 'equipment';

        $product = Equipment_product::orderBy('weights', 'asc')->get();
        $product2 = Equipment_product::orderBy('weights', 'asc')->get();

        return view('equipment-all.product-all', compact('title', 'subtitle', 'product', 'item','product2'));
    }

    public function software()
    {
        $title = '軟體';
        $subtitle = 'Software';
        $item = 'software';

        $product = Software_product::orderBy('weights', 'asc')->get();
        $product2 = Software_product::orderBy('weights', 'asc')->get();

        return view('equipment-all.product-all', compact('title', 'subtitle', 'product', 'item','product2'));
    }

    public function parts()
    {
        $title = '部品零件';
        $subtitle = 'Parts';
        $item = 'parts';

        $product = Components_product::orderBy('weights', 'asc')->get();
        $product2 = Components_product::orderBy('weights', 'asc')->get();

        return view('equipment-all.product-all', compact('title', 'subtitle', 'product', 'item','product2'));
    }

    public function consumables()
    {
        $title = '耗材';
        $subtitle = 'Consumables';
        $item = 'consumables';

        $product = Consumables_product::orderBy('weights', 'asc')->get();
        $product2 = Consumables_product::orderBy('weights', 'asc')->get();

        return view('equipment-all.product-all', compact('title', 'subtitle', 'product', 'item','product2'));
    }

    public function maintenance()
    {
        $title = '維修';
        $subtitle = 'Maintenance';
        $item = 'maintenance';

        $product = Repair_product::orderBy('weights', 'asc')->get();
        $product2 = Repair_product::orderBy('weights', 'asc')->get();

        return view('equipment-all.product-all', compact('title', 'subtitle', 'product', 'item','product2'));
    }

    // 產品詳細頁面
    public function equipmentdetail($id)
    {
        $title = '設備';
        $subtitle = 'Equipment';
        $item = 'equipment';
        $product = Equipment_product::where('id', $id)->get();
        $product2 = Equipment_img::where('iid', $id)->get();
        $product3 = Equipment_img::where('iid', $id)->get();


        return view('equipment-detail.equipment-detail', compact('title', 'subtitle', 'item', 'product','product2','product3'));
    }

    public function softwaredetail($id)
    {
        $title = '軟體';
        $subtitle = 'Software';
        $item = 'software';
        $product = Software_product::where('id', $id)->get();
        $product2 = Software_img::where('iid', $id)->get();
        $product3 = Software_img::where('iid', $id)->get();

        return view('equipment-detail.equipment-detail', compact('title', 'subtitle', 'item', 'product','product2','product3'));
    }

    public function partsdetail($id)
    {
        $title = '部品零件';
        $subtitle = 'Parts';
        $item = 'parts';
        $product = Components_product::where('id', $id)->get();
        $product2 = Components_img::where('iid', $id)->get();
        $product3 = Components_img::where('iid', $id)->get();
        // dd($product2);

        return view('equipment-detail.equipment-detail', compact('title', 'subtitle', 'item', 'product','product2','product3'));
    }

    public function consumablesdetail($id)
    {
        $title = '耗材';
        $subtitle = 'Consumables';
        $item = 'consumables';
        $product = Consumables_product::where('id', $id)->get();
        $product2 = Consumables_img::where('iid', $id)->get();
        $product3 = Consumables_img::where('iid', $id)->get();
        return view('equipment-detail.equipment-detail', compact('title', 'subtitle', 'item', 'product','product2','product3'));
    }

    public function maintenancedetail($id)
    {
        $title = '維修';
        $subtitle = 'Maintenance';
        $item = 'maintenance';
        $product = Repair_product::where('id', $id)->get();
        $product2 = Repair_img::where('iid', $id)->get();
        $product3 = Repair_img::where('iid', $id)->get();
        return view('equipment-detail.equipment-detail', compact('title', 'subtitle', 'item', 'product','product2','product3'));
    }

    public function process()
    {
        $process = Process_banner::get();
        $product = Product_banner::get();
        $contact = Contact_banner::get();
        return view('Process_cssunset.process', compact('process', 'product', 'contact'));
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
    public function contact2(Request $request)
    {
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

        // $form = Report::orderBy('id', 'desc')->take(1)->get();

        return view('Contact.contact2', compact('data'));
    }

    public function contactin(Request $request)
    {
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

    public function contact3()
    {
        return view('Contact.contact3');
    }

}

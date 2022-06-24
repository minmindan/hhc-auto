<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;
use App\Models\Profile;


use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function equipment_index(){

        return view('equipment.product');
    }

    public function createtosql(){

        return view('createtosql.createtosql');
    }


    public function cminfo(Request $request){

        $info = Profile::create([
            'company_name' => $request->company_name,
'found' => $request->found,
'address' => $request->address,
'opening' => $request->opening,
'phone' => $request->phone,
'serve' => $request->serve,
        ]);

        return redirect('/weneedtoaddmoreinfonmation/createtosql');
    }
    public function index_b(Request $request){

$product = Aboutus_banner::create([
    'img_path' => $request->img_path,
    'tittle' => $request->tittle,
    'subtittle' => $request->subtittle,
]);
        return redirect('/weneedtoaddmoreinfonmation/createtosql');
    }
    public function abus_b(Request $request){

$product = Index_banner::create([
    'img_path' => $request->img_path,
    'tittle' => $request->tittle,
    'subtittle' => $request->subtittle,
]);
        return redirect('/weneedtoaddmoreinfonmation/createtosql');
    }
    public function cont_b(Request $request){

$product = Process_banner::create([
    'img_path' => $request->img_path,
    'tittle' => $request->tittle,
    'subtittle' => $request->subtittle,
]);
        return redirect('/weneedtoaddmoreinfonmation/createtosql');
    }
    public function poces_b(Request $request){

$product = Product_banner::create([
    'img_path' => $request->img_path,
    'tittle' => $request->tittle,
    'subtittle' => $request->subtittle,
]);
        return redirect('/weneedtoaddmoreinfonmation/createtosql');
    }
    public function product_b(Request $request){

$product = Contact_banner::create([
    'img_path' => $request->img_path,
    'tittle' => $request->tittle,
    'subtittle' => $request->subtittle,
]);
        return redirect('/weneedtoaddmoreinfonmation/createtosql');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FilesController;
use App\Models\Aboutus_banner;
use App\Models\Index_banner;
use App\Models\Process_banner;
use App\Models\Product_banner;
use App\Models\Contact_banner;
use App\Models\Report;

use Illuminate\Http\Request;

class BannerManageController extends Controller
{
    // BANNER管理

    // 首頁 BANNER管理
    // 首頁
    public function homepage_index()
    {
        return view('banner_manage.index_banner');
    }

    // 新增頁
    public function homepage_create()
    {}

    // 儲存頁
    public function homepage_store()
    {}

    // 編輯頁
    public function homepage_edit()
    {
        $index_banner = Index_banner::get();

        return view('banner_manage.index_banner', compact('index_banner'));}

    // 更新頁
    public function homepage_update(Request $request, $id)
    {

        $index_banner = Index_banner::find($id);

        if ($request->hasfile('img_path')) {
            FilesController::deleteUpload($index_banner->img_path); //小工具刪除圖片
            $path = FilesController::imgUpload($request->img_path, 'Index');

            $index_banner->img_path = $path;
        }

        $index_banner->save();

        return redirect("banner-manage/aboutus/edit");

    }




    // 關於我們 BANNER管理
    // 首頁
    public function aboutus_index()
    {
    }

    // 新增頁
    public function aboutus_create()
    {

    }

    // 儲存頁
    public function aboutus_store()
    {}

    // 編輯頁
    public function aboutus_edit()
    {
        $abus_banner = Aboutus_banner::get();

        return view('banner_manage.aboutus_banner', compact('abus_banner'));
    }

    // 更新頁
    public function aboutus_update(Request $request, $id)
    {

        $abus_banner = Aboutus_banner::find($id);

        if ($request->hasfile('img_path')) {
            FilesController::deleteUpload($abus_banner->img_path); //小工具刪除圖片
            $path = FilesController::imgUpload($request->img_path, 'banner');

            $abus_banner->img_path = $path;
        }

        $abus_banner->save();

        return redirect("banner-manage/aboutus/edit");

    }






    // 產品介紹 BANNER管理
    // 首頁
    public function product_index()
    {
    }

    // 新增頁
    public function product_create()
    {}

    // 儲存頁
    public function product_store()
    {}

    // 編輯頁
    public function product_edit()
    {

        $product_banner = Product_banner::get();
        return view('banner_manage.product_banner',compact('product_banner'));

    }

    // 更新頁
    public function product_update(Request $request, $id)
    {

        $product_banner = Product_banner::find($id);

        if ($request->hasfile('img_path')) {
            FilesController::deleteUpload($product_banner->img_path); //小工具刪除圖片
            $path = FilesController::imgUpload($request->img_path, 'banner');

            $product_banner->img_path = $path;
        }

        $product_banner->save();

        return redirect("banner-manage/aboutus/edit");

    }







    // 產品製作流程 BANNER管理
    // 首頁
    public function process_index()
    {

    }

    // 新增頁
    public function process_create()
    {}

    // 儲存頁
    public function process_store()
    {}

    // 編輯頁
    public function process_edit()
    {

        $process_banner = Process_banner::get();
        return view('banner_manage.process_banner',compact('process_banner'));
    }

    // 更新頁
    public function process_update(Request $request, $id)
    {

        $process_banner = Process_banner::find($id);

        if ($request->hasfile('img_path')) {
            FilesController::deleteUpload($process_banner->img_path); //小工具刪除圖片
            $path = FilesController::imgUpload($request->img_path, 'banner');

            $process_banner->img_path = $path;
        }

        $process_banner->save();

        return redirect("banner-manage/aboutus/edit");

    }



    public function contactlist_index(){
        $datas = Report::get();
        return view ('formbackstage.formbackstage' , compact('datas'));
    }
    public function contactlist_edit($id){
        $datas = Report::find($id);
        return view ('formbackstage.formbackstage' , compact('datas'));
    }



    // 聯絡我們 BANNER管理
    // 首頁
    public function contact_index()
    {
        dd('123');

    }

    // 新增頁
    public function contact_create()
    {
        return view ('form-backstage.form-backstage');
    }

    // 儲存頁
    public function contact_store()
    {}

    // 編輯頁
    public function contact_edit()
    {
        $contact_banner = Contact_banner::get();
        return view('banner_manage.contact_banner',compact('contact_banner'));

    }

    // 更新頁
    public function contact_update(Request $request, $id)
    {

        $contact_banner = Contact_banner::find($id);

        if ($request->hasfile('img_path')) {
            FilesController::deleteUpload($contact_banner->img_path); //小工具刪除圖片
            $path = FilesController::imgUpload($request->img_path, 'banner');

            $contact_banner->img_path = $path;
        }

        $contact_banner->save();

        return redirect("banner-manage/aboutus/edit");

    }
}




// // 首頁 TOPICS管理
//     // 首頁
//     public function homepage_index()
//     {
//         return view('banner_manage.index_banner');
//     }

//     // 新增頁
//     public function homepage_create()
//     {}

//     // 儲存頁
//     public function homepage_store()
//     {}

//     // 編輯頁
//     public function homepage_edit()
//     {
//         $index_banner = Index_banner::get();

//         return view('banner_manage.index_banner', compact('index_banner'));}

//     // 更新頁
//     public function homepage_update(Request $request, $id)
//     {

//         $index_banner = Index_banner::find($id);

//         if ($request->hasfile('img_path')) {
//             FilesController::deleteUpload($index_banner->img_path); //小工具刪除圖片
//             $path = FilesController::imgUpload($request->img_path, 'Index');

//             $index_banner->img_path = $path;
//         }

//         $index_banner->save();

//         return redirect("banner-manage/aboutus/edit");

//     }

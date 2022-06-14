<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FilesController;
use App\Models\Aboutus_banner;
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
        $abus_banner = Index_banne::get();

        return view('banner_manage.aboutus_banner', compact('abus_banner'));}

    // 更新頁
    public function homepage_update()
    {}

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

        $abus_banner = aboutus_banner::find($id);

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
        return view('banner_manage.product_banner');
    }

    // 新增頁
    public function product_create()
    {}

    // 儲存頁
    public function product_store()
    {}

    // 編輯頁
    public function product_edit()
    {}

    // 更新頁
    public function product_update()
    {}

    // 產品製作流程 BANNER管理
    // 首頁
    public function process_index()
    {
        return view('banner_manage.process_banner');

    }

    // 新增頁
    public function process_create()
    {}

    // 儲存頁
    public function process_store()
    {}

    // 編輯頁
    public function process_edit()
    {}

    // 更新頁
    public function process_update()
    {}

    // 聯絡我們 BANNER管理
    // 首頁
    public function contact_index()
    {
        return view('banner_manage.contact_banner');

    }

    // 新增頁
    public function contact_create()
    {}

    // 儲存頁
    public function contact_store()
    {}

    // 編輯頁
    public function contact_edit()
    {}

    // 更新頁
    public function contact_update()
    {}

}

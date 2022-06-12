<?php

namespace App\Http\Controllers;

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
    {}

    // 更新頁
    public function homepage_update()
    {}

    // 刪除頁
    public function homepage_delete()
    {}

    // 關於我們 BANNER管理
    // 首頁
    public function aboutus_index()
    {
        return view('banner_manage.aboutus_banner');

    }

    // 新增頁
    public function aboutus_create()
    {}

    // 儲存頁
    public function aboutus_store()
    {}

    // 編輯頁
    public function aboutus_edit()
    {}

    // 更新頁
    public function aboutus_update()
    {}

    // 刪除頁
    public function aboutus_delete()
    {}

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

    // 刪除頁
    public function product_delete()
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

    // 刪除頁
    public function process_delete()
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

    // 刪除頁
    public function contact_delete()
    {}
}

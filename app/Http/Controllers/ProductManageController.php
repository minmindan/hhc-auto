<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consumables_product;
use App\Models\Components_product;
use App\Models\Equipment_product;
use App\Models\Repair_product;
use App\Models\Software_product;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;


class ProductManageController extends Controller
{
    //產品管理

    public function test(){
        return view('equipment-detail.equipment-detail');
    }

    public function test_all(){
        return view('equipment-all(未完成).product-all');
    }


    
    // 設備
    // 首頁
    public function equipment_index()
    {
        return view('product_manage.product_equipment');
    }

    // 新增頁
    public function equipment_create()
    {
        // Equipment_product::create([
        //     //
        // ]);
        return view('product_create.equipment_create');
    }

    // 儲存頁
    public function equipment_store()
    {

    }

    // 編輯頁
    public function equipment_edit()
    {

    }

    // 更新頁
    public function equipment_update()
    {

    }

    // 刪除頁
    public function equipment_delete()
    {}







    // 軟體
    // 首頁
    public function software_index()
    {
        return view('product_manage.product_software');

    }

    // 新增頁
    public function software_create()
    {
        return view('product_create.software_create');

    }

    // 儲存頁
    public function software_store()
    {}

    // 編輯頁
    public function software_edit()
    {}

    // 更新頁
    public function software_update()
    {}

    // 刪除頁
    public function software_delete()
    {}









    // 部品零件
    // 首頁
    public function parts_index()
    {
        return view('product_manage.product_parts');

    }

    // 新增頁
    public function parts_create()
    {

        return view('product_create.parts_create');

    }

    // 儲存頁
    public function parts_store(Request $request)
    {
        dd($request->all());
        return redirect('/product-manage/parts');
    }

    // 編輯頁
    public function parts_edit()
    {}

    // 更新頁
    public function parts_update()
    {}

    // 刪除頁
    public function parts_delete()
    {}






    // 耗材
    // 首頁
    public function consumables_index()
    {
        return view('product_manage.product_consumables');
    }

    // 新增頁
    public function consumables_create()
    {
        return view('product_create.consumables_create');

    }

    // 儲存頁
    public function consumables_store()
    {}

    // 編輯頁
    public function consumables_edit()
    {}

    // 更新頁
    public function consumables_update()
    {}

    // 刪除頁
    public function consumables_delete()
    {}








    // 維修
    // 首頁
    public function maintenance_index()
    {
        return view('product_manage.product_maintenance');
    }

    // 新增頁
    public function maintenance_create()
    {
        return view('product_create.maintenance_create');

    }

    // 儲存頁
    public function maintenance_store()
    {}

    // 編輯頁
    public function maintenance_edit()
    {}

    // 更新頁
    public function maintenance_update()
    {}

    // 刪除頁
    public function maintenance_delete()
    {}

}

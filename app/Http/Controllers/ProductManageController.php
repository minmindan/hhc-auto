<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FilesController;
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
use Illuminate\Http\Request;

class ProductManageController extends Controller
{
    //產品管理

    public function test()
    {
        return view('equipment-detail.equipment-detail');
    }

    public function test_all()
    {
        return view('equipment-all(未完成).product-all');
    }

    // 設備
    // 首頁
    public function equipment_index()
    {
        $product = Equipment_product::get();

        return view('product_manage.product_equipment', compact('product'));
    }

    // 新增頁
    public function equipment_create()
    {
        return view('product_create.equipment_create');
    }

    // 儲存頁
    public function equipment_store(Request $request)
    {

        // dd($request->all());

        $path = FilesController::imgUpload($request->product_img, 'equipment');

        // 主要圖片

        $product = Equipment_product::create([
            'product_name' => $request->product_name,
            'primary_img' => $path,
            'model' => $request->product_model,
            'primary' => $request->items,
            'weights' => 0,
            'standard' => $request->standard,
            'feature' => $request->feature,
            'illustrate' => $request->illustrate,
        ]);

        //次要圖片
        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'equipment');

                Equipment_img::Create([
                    'path' => $path,
                    'iid' => $product->id,
                ]);
            }
        }

        return redirect('/product-manage/equipment');
    }

    // 編輯頁
    public function equipment_edit($id)
    {
        $product = Equipment_product::find($id);

        $count = Equipment_img::where('iid','=',$id)->count();

        return view('product_edit.equipment_edit', compact('product','count'));
    }

    // 更新頁
    public function equipment_update(Request $request, $id)
    {


        $product = Equipment_product::find($id);

        // dd(($request->all()),$product);


        // 如果主要圖片有更新,套用新圖片

        if ($request->hasfile('product_img')) {
            FilesController::deleteUpload($product->primary_img); //小工具刪除圖片
            $path = FilesController::imgUpload($request->product_img, 'product');

            $product->primary_img = $path;
        }

        // 如果次要圖片有更新,套用新圖片

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'product');

                Equipment_img::Create([
                    'path' => $path,
                    'iid' => $product->id,
                ]);
            }
        }


        // 如果有更新資料,套用新資料

        if (($request->standard) != null) {
            $product->standard = $request->standard;
        };

        if (($request->feature) != null) {
            $product->feature = $request->feature;
        };

        if (($request->illustrate) != null) {
            $product->illustrate = $request->illustrate;
        };


        $product->product_name = $request->product_name;
        $product->model = $request->product_model;
        $product->primary = $request->primary;
        $product->weights = $request->weights;
        $product->save();




        return redirect('/product-manage/equipment');

    }

    // 刪除頁
    public function equipment_delete($id)
    {

        $main_img = Equipment_product::find($id);
        $other_imgs = Equipment_img::where('iid', $id)->get();
        foreach ($other_imgs as $key => $value) {
            FilesController::deleteUpload($value->path);
            $value->delete();
        }
        FilesController::deleteUpload($main_img->primary_img);
        $main_img->delete();

        redirect('/product-manage/equipment');
    }

    // 刪除次要圖片

    public function d_sec_img($id){

        $img = Equipment_img::find($id);
        FilesController::deleteUpload($img->path);
        $img->delete();



        $product = Equipment_product::find($id);
        $product_id = $product->id;

        return redirect('/product-manage/equipment/' . $product_id);

    }








    // 軟體
    // 首頁
    public function software_index()
    {

        $product = Software_product::get();

        return view('product_manage.product_software', compact('product'));

    }

    // 新增頁
    public function software_create()
    {
        return view('product_create.software_create');
    }

    // 儲存頁
    public function software_store(Request $request)
    {
        // dd($request->all());

        $path = FilesController::imgUpload($request->product_img, 'software');

        // 主要圖片

        $product = Software_product::create([
            'product_name' => $request->product_name,
            'primary_img' => $path,
            'model' => $request->product_model,
            'primary' => $request->items,
            'weights' => 0,
            'standard' => $request->standard,
            'feature' => $request->feature,
            'illustrate' => $request->illustrate,
        ]);

        //次要圖片
        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'software');

                Software_img::Create([
                    'path' => $path,
                    'iid' => $product->id,
                ]);
            }
        }
        return redirect('/product-manage/software/');
    }

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
        $product = Components_product::get();

        return view('product_manage.product_parts', compact('product'));

    }

    // 新增頁
    public function parts_create()
    {

        return view('product_create.parts_create');

    }

    // 儲存頁
    public function parts_store(Request $request)
    {
        // dd($request->all());

        $path = FilesController::imgUpload($request->product_img, 'parts');

        // 主要圖片

        $product = Components_product::create([
            'product_name' => $request->product_name,
            'primary_img' => $path,
            'model' => $request->product_model,
            'primary' => $request->items,
            'weights' => 0,
            'standard' => $request->standard,
            'feature' => $request->feature,
            'illustrate' => $request->illustrate,
        ]);

        //次要圖片
        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'parts');

                Components_img::Create([
                    'path' => $path,
                    'iid' => $product->id,
                ]);
            }
        }
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

        $product = Consumables_product::get();

        return view('product_manage.product_consumables', compact('product'));
    }

    // 新增頁
    public function consumables_create()
    {
        return view('product_create.consumables_create');

    }

    // 儲存頁
    public function consumables_store(Request $request)
    { // dd($request->all());

        $path = FilesController::imgUpload($request->product_img, 'consumables');

        // 主要圖片

        $product = Consumables_product::create([
            'product_name' => $request->product_name,
            'primary_img' => $path,
            'model' => $request->product_model,
            'primary' => $request->items,
            'weights' => 0,
            'standard' => $request->standard,
            'feature' => $request->feature,
            'illustrate' => $request->illustrate,
        ]);

        //次要圖片
        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'consumables');

                Consumables_img::Create([
                    'path' => $path,
                    'iid' => $product->id,
                ]);
            }
        }

        return redirect('/product-manage/consumables');

    }

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
        $product = Repair_product::get();

        return view('product_manage.product_maintenance', compact('product'));
    }

    // 新增頁
    public function maintenance_create()
    {
        return view('product_create.maintenance_create');

    }

    // 儲存頁
    public function maintenance_store(Request $request)
    {

// dd($request->all());

        $product = Repair_product::create([
            'product_name' => $request->product_name,
            'model' => $request->product_model,
            'primary' => $request->items,
            'weights' => 0,
            'standard' => $request->standard,
            'feature' => $request->feature,
            'illustrate' => $request->illustrate,
        ]);

        // dd($request->all());
        if ($request->hasfile('product_img')) {
            $path = FilesController::imgUpload($request->product_img, 'repair');
            // 主要圖片
            $product = Repair_product::create([
                'primary_img' => $path,
            ]);
        }

        //次要圖片
        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'repair');

                Repair_img::Create([
                    'path' => $path,
                    'iid' => $product->id,
                ]);
            }
        }
        return redirect('/product-manage/maintenance');

    }

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

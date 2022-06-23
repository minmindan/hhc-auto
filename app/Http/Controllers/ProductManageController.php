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
use DB;

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

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

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
                    'weight' =>'-',
                ]);
            }
        }

        return redirect('/product-manage/equipment');
    }

    // 編輯頁
    public function equipment_edit($id)
    {
        $product = Equipment_product::find($id);
        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();


        $imgs = equipment_img::orderby('weight', 'asc')->get();
        $count = Equipment_img::where('iid','=',$id)->count();

        return view('product_edit.equipment_edit', compact('product','count','imgs','equipment','software','components','consumables','maintenance'));
    }



    // 更新頁
    public function equipment_update(Request $request, $id)
    {


        $product = Equipment_product::find($id);
        $imgs = Equipment_img::where('iid','=',$id)->get();


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
                Equipment_img::create([
                    'path' => $path,
                    'iid' => $product->id,
                    'weight'=>'-',
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
        $product->primary = $request->items;
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
    public function equi_sec_img($id){

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

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

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
    {
        $product = Software_product::find($id);
        $imgs = Software_img::orderby('weight', 'asc')->get();

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

        $count = Software_img::where('iid','=',$id)->count();

        return view('product_edit.software_edit', compact('product','count','imgs','equipment','software','components','consumables','maintenance'));
    }

    // 更新頁
    public function software_update()
    {


        $product = software_product::find($id);
        $imgs = software_img::where('iid','=',$id)->get();


        // 如果主要圖片有更新,套用新圖片

        if ($request->hasfile('product_img')) {
            FilesController::deleteUpload($product->primary_img); //小工具刪除圖片
            $path = FilesController::imgUpload($request->product_img, 'software');

            $product->primary_img = $path;
        }

        // 如果次要圖片有更新,套用新圖片

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'software');
                software_img::create([
                    'path' => $path,
                    'iid' => $product->id,
                    'weight'=>'-',
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
        $product->primary = $request->items;
        $product->weights = $request->weights;
        $product->save();




        return redirect('/product-manage/software');
    }

    // 刪除頁
    public function software_delete()
    {
        $main_img = software_product::find($id);
        $other_imgs = software_img::where('iid', $id)->get();
        foreach ($other_imgs as $key => $value) {
            FilesController::deleteUpload($value->path);
            $value->delete();
        }
        FilesController::deleteUpload($main_img->primary_img);
        $main_img->delete();

        redirect('/product-manage/software');
    }

    // 刪除次要圖片

    public function soft_sec_img($id){

        $img = software_img::find($id);
        FilesController::deleteUpload($img->path);
        $img->delete();



        $product = software_product::find($id);
        $product_id = $product->id;

        return redirect('/product-manage/software/' . $product_id);

    }

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
        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

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
    {
        $product = Components_product::find($id);
        $imgs = Components_img::orderby('weight', 'asc')->get();

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

        $count = Components_img::where('iid','=',$id)->count();

        return view('product_edit.parts_edit', compact('product','count','imgs','equipment','software','components','consumables','maintenance'));
    }

    // 更新頁
    public function parts_update()
    {      $product = Components_product::find($id);
        $imgs = Components_img::where('iid','=',$id)->get();


        // 如果主要圖片有更新,套用新圖片

        if ($request->hasfile('product_img')) {
            FilesController::deleteUpload($product->primary_img); //小工具刪除圖片
            $path = FilesController::imgUpload($request->product_img, 'parts');

            $product->primary_img = $path;
        }

        // 如果次要圖片有更新,套用新圖片

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'parts');
                Components_img::create([
                    'path' => $path,
                    'iid' => $product->id,
                    'weight'=>'-',
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
        $product->primary = $request->items;
        $product->weights = $request->weights;
        $product->save();




        return redirect('/product-manage/parts');}

    // 刪除頁
    public function parts_delete()
    {

        $main_img = Components_product::find($id);
        $other_imgs = Components_img::where('iid', $id)->get();
        foreach ($other_imgs as $key => $value) {
            FilesController::deleteUpload($value->path);
            $value->delete();
        }
        FilesController::deleteUpload($main_img->primary_img);
        $main_img->delete();

        redirect('/product-manage/parts');
    }

    // 刪除次要圖片

    public function part_sec_img($id){

        $img = Components_img::find($id);
        FilesController::deleteUpload($img->path);
        $img->delete();



        $product = Components_product::find($id);
        $product_id = $product->id;

        return redirect('/product-manage/parts/' . $product_id);

    }






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

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

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
    {

        $product = consumables_product::find($id);
        $imgs = consumables_img::orderby('weight', 'asc')->get();
        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();


        $count = consumables_img::where('iid','=',$id)->count();

        return view('product_edit.consumables_edit', compact('product','count','imgs','equipment','software','components','consumables','maintenance'));
    }

    // 更新頁
    public function consumables_update()
    {

        $product = consumables_product::find($id);
        $imgs = consumables_img::where('iid','=',$id)->get();


        // 如果主要圖片有更新,套用新圖片

        if ($request->hasfile('product_img')) {
            FilesController::deleteUpload($product->primary_img); //小工具刪除圖片
            $path = FilesController::imgUpload($request->product_img, 'consumables');

            $product->primary_img = $path;
        }

        // 如果次要圖片有更新,套用新圖片

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'consumables');
                consumables_img::create([
                    'path' => $path,
                    'iid' => $product->id,
                    'weight'=>'-',
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
        $product->primary = $request->items;
        $product->weights = $request->weights;
        $product->save();




        return redirect('/product-manage/consumables');
    }

    // 刪除頁
    public function consumables_delete()
    {
        $main_img = consumables_product::find($id);
        $other_imgs = consumables_img::where('iid', $id)->get();
        foreach ($other_imgs as $key => $value) {
            FilesController::deleteUpload($value->path);
            $value->delete();
        }
        FilesController::deleteUpload($main_img->primary_img);
        $main_img->delete();

        redirect('/product-manage/consumables');
    }


    // 刪除次要圖片

    public function cons_sec_img($id){

        $img = consumables_img::find($id);
        FilesController::deleteUpload($img->path);
        $img->delete();



        $product = consumables_product::find($id);
        $product_id = $product->id;

        return redirect('/product-manage/consumables/' . $product_id);

    }

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

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

        return view('product_create.maintenance_create');

    }

    // 儲存頁
    public function maintenance_store(Request $request)
    {


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
    {
        $product =  Repair_product::find($id);
        $imgs =  maintenance_img::orderby('weight', 'asc')->get();

        $equipment = Equipment_product::where('primary','<','6')->get();
        $software = Software_product::where('primary','<','6')->get();
        $components = Components_product::where('primary','<','6')->get();
        $consumables = Consumables_product::where('primary','<','6')->get();
        $maintenance = Repair_product::where('primary','<','6')->get();

        $count =  maintenance_img::where('iid','=',$id)->count();

        return view('product_edit. maintenance_edit', compact('product','count','imgs','equipment','software','components','consumables','maintenance'));
    }

    // 更新頁
    public function maintenance_update()
    {
        $product = Repair_product::find($id);
        $imgs = maintenance_img::where('iid','=',$id)->get();


        // 如果主要圖片有更新,套用新圖片

        if ($request->hasfile('product_img')) {
            FilesController::deleteUpload($product->primary_img); //小工具刪除圖片
            $path = FilesController::imgUpload($request->product_img, 'maintenance');

            $product->primary_img = $path;
        }

        // 如果次要圖片有更新,套用新圖片

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'maintenance');
                maintenance_img::create([
                    'path' => $path,
                    'iid' => $product->id,
                    'weight'=>'-',
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
        $product->primary = $request->items;
        $product->weights = $request->weights;
        $product->save();




        return redirect('/product-manage/maintenance');
    }

    // 刪除頁
    public function maintenance_delete()
    {

        $main_img = Repair_product::find($id);
        $other_imgs = maintenance_img::where('iid', $id)->get();
        foreach ($other_imgs as $key => $value) {
            FilesController::deleteUpload($value->path);
            $value->delete();
        }
        FilesController::deleteUpload($main_img->primary_img);
        $main_img->delete();

        redirect('/product-manage/maintenance');
    }


    // 刪除次要圖片

    public function main_sec_img($id){

        $img = maintenance_img::find($id);
        FilesController::deleteUpload($img->path);
        $img->delete();



        $product = Repair_product::find($id);
        $product_id = $product->id;

        return redirect('/product-manage/maintenance/' . $product_id);

    }

}

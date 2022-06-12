<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhcAutoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BannerManageController;
use App\Http\Controllers\ProductManageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('hhc-auto')->group(function (){
    Route::get('/',[HhcAutoController::class, 'index']);
});


// 首頁 手建
Route::prefix('/hhc-auto/index')->group(function (){
    Route::get('/',[HomePageController::class, 'index']); //總表
    Route::get('/create',[HomePageController::class, 'create']); //新增頁面
    Route::post('/store',[HomePageController::class, 'store']); //儲存頁面
    Route::get('/edit',[HomePageController::class, 'edit']); //編輯頁面
    Route::post('/update',[HomePageController::class, 'update']); //更新頁面
    Route::post('/delete',[HomePageController::class, 'delete']); //刪除頁面
});


// 關於我們 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[AboutUsController::class, 'index']); //總表
    Route::get('/create',[AboutUsController::class, 'create']); //新增頁面
    Route::post('/store',[AboutUsController::class, 'store']); //儲存頁面
    Route::get('/edit',[AboutUsController::class, 'edit']); //編輯頁面
    Route::post('/update',[AboutUsController::class, 'update']); //更新頁面
    Route::post('/delete',[AboutUsController::class, 'delete']); //刪除頁面
});



// 表單 手建

    Route::get('/contact',[ContactController::class, 'index']); //表1
    Route::post('/contact2',[ContactController::class, 'contact2']); //表2
    Route::post('/contact3',[ContactController::class, 'contact3']); //表3

    Route::post('/store',[ContactController::class, 'store']); //儲存頁面
    Route::get('/edit',[ContactController::class, 'edit']); //編輯頁面
    Route::post('/update',[ContactController::class, 'update']); //更新頁面

    Route::get('/contact/delete/{id}',[ContactController::class, 'delete']); //刪除頁面
    // 以下用不到
    //Route::get('/create',[ContactController::class, 'create']); //新增頁面





// 產品管理
// 設備 手建
Route::prefix('/product-manage/equipment')->group(function (){
    Route::get('/',[ProductManageController::class, 'equipment_index']); //總表
    Route::get('/create',[ProductManageController::class, 'equipment_create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'equipment_store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'equipment_edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'equipment_update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'equipment_delete']); //刪除頁面
});

// 軟體 手建
Route::prefix('/product-manage/software')->group(function (){
    Route::get('/',[ProductManageController::class, 'software_index']); //總表
    Route::get('/create',[ProductManageController::class, 'software_create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'software_store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'software_edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'software_update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'software_delete']); //刪除頁面
});

// 部品零件 手建
Route::prefix('/product-manage/parts')->group(function (){
    Route::get('/',[ProductManageController::class, 'parts_index']); //總表
    Route::get('/create',[ProductManageController::class, 'parts_create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'parts_store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'parts_edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'parts_update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'parts_delete']); //刪除頁面
});

// 耗材 手建
Route::prefix('/product-manage/consumables')->group(function (){
    Route::get('/',[ProductManageController::class, 'consumables_index']); //總表
    Route::get('/create',[ProductManageController::class, 'consumables_create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'consumables_store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'consumables_edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'consumables_update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'consumables_delete']); //刪除頁面
});

// 維修 手建
Route::prefix('/product-manage/maintenance')->group(function (){
    Route::get('/',[ProductManageController::class, 'maintenance_index']); //總表
    Route::get('/create',[ProductManageController::class, 'maintenance_create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'maintenance_store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'maintenance_edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'maintenance_update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'maintenance_delete']); //刪除頁面
});







// BANNER管理
// 首頁 手建
Route::prefix('/banner-manage/homepage')->group(function (){
    Route::get('/',[BannerManageController::class, 'homepage_index']); //總表
    Route::get('/create',[BannerManageController::class, 'homepage_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'homepage_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'homepage_edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'homepage_update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'homepage_delete']); //刪除頁面
});

// 關於我們 手建
Route::prefix('/banner-manage/aboutus')->group(function (){
    Route::get('/',[BannerManageController::class, 'aboutus_index']); //總表
    Route::get('/create',[BannerManageController::class, 'aboutus_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'aboutus_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'aboutus_edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'aboutus_update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'aboutus_delete']); //刪除頁面
});

// 產品介紹 手建
Route::prefix('/banner-manage/product')->group(function (){
    Route::get('/',[BannerManageController::class, 'product_index']); //總表
    Route::get('/create',[BannerManageController::class, 'product_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'product_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'product_edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'product_update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'product_delete']); //刪除頁面
});

// 產品製作流程 手建
Route::prefix('/banner-manage/process')->group(function (){
    Route::get('/',[BannerManageController::class, 'process_index']); //總表
    Route::get('/create',[BannerManageController::class, 'process_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'process_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'process_edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'process_update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'process_delete']); //刪除頁面
});

// 聯絡我們 手建
Route::prefix('/banner-manage/contact')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'contact_update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'contact_delete']); //刪除頁面
});





// 首頁
// HomePageController

// 關於我們
// AboutUsController

// Banner管理
//BannerManageController

// 產品管理
//ProductManageController

// 表單
// ContactController

// 隱私權政策
// 網站協議

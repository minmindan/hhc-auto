<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhcAutoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BannerManageController;
use App\Http\Controllers\ProductManageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;


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
Route::get('/test', function () {
    return view('form-backstage.banner-manage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/back.php';
require __DIR__.'/bannermanage.php';
require __DIR__.'/produvtmanage.php';

Route::get('/',[HomePageController::class,'index']);






// 前台頁面
// 首頁 手建
Route::prefix('/hhc-auto')->group(function (){
    Route::get('/',[HomePageController::class, 'index']); //總表
    Route::get('/aboutus',[HomePageController::class, 'index']);//關於我們
    Route::get('/product',[HomePageController::class, 'product']);//產品總覽

    //產品分類預覽
    Route::get('/equipment',[HomePageController::class, 'equipment']);//產品分類預覽(設備)
    Route::get('/software',[HomePageController::class, 'software']);//產品分類預覽(軟體)
    Route::get('/parts',[HomePageController::class, 'parts']);//產品分類預覽(部品零件)
    Route::get('/consumables',[HomePageController::class, 'consumables']);//產品分類預覽(耗材)
    Route::get('/maintenance',[HomePageController::class, 'maintenance']);//產品分類預覽(維修)

    //個別產品詳情
    Route::get('/equipment/{id}',[HomePageController::class, 'equipmentdetail']);//產品細項
    Route::get('/software/{id}',[HomePageController::class, 'softwaredetail']);//產品細項
    Route::get('/parts/{id}',[HomePageController::class, 'parts']);//產品細項
    Route::get('/consumables/{id}',[HomePageController::class, 'consumablesdetail']);//產品細項
    Route::get('/maintenance/{id}',[HomePageController::class, 'maintenancedetail']);//產品細項


    Route::get('/process',[HomePageController::class, 'process']);//流程
    Route::get('/topics',[HomePageController::class, 'topics']);//最新消息
    Route::get('/contact',[HomePageController::class, 'contact']);//回報表單
});

// 表單 手建

    Route::get('/contact',[ContactController::class, 'index']); //表1
    Route::post('/contact2',[ContactController::class, 'contact2']); //表2
    Route::post('/contactin',[ContactController::class, 'contactin']);
    Route::get('/contact3',[ContactController::class, 'contact3']); //表3

    Route::post('/store',[ContactController::class, 'store']); //儲存頁面
    Route::get('/edit',[ContactController::class, 'edit']); //編輯頁面
    Route::post('/update',[ContactController::class, 'update']); //更新頁面

    Route::get('/contact/delete/{id}',[ContactController::class, 'delete']); //刪除頁面
    // 以下用不到
    //Route::get('/create',[ContactController::class, 'create']); //新增頁面




// 產品首頁
// Route::get('/equipment',[Controller::class, 'equipment_index']);
// Route::get('/equipment/detail',[ProductManageController::class, 'test']);
// Route::get('/equipment/all',[ProductManageController::class, 'test_all']);




// // 產品管理
// // 設備 手建
// Route::prefix('/product-manage/equipment')->group(function (){
//     Route::get('/',[ProductManageController::class, 'equipment_index']); //總表
//     Route::get('/create',[ProductManageController::class, 'equipment_create']); //新增頁面
//     Route::post('/store',[ProductManageController::class, 'equipment_store']); //儲存頁面
//     Route::get('/edit',[ProductManageController::class, 'equipment_edit']); //編輯頁面
//     Route::post('/update',[ProductManageController::class, 'equipment_update']); //更新頁面
//     Route::post('/delete',[ProductManageController::class, 'equipment_delete']); //刪除頁面
// });

// // 軟體 手建
// Route::prefix('/product-manage/software')->group(function (){
//     Route::get('/',[ProductManageController::class, 'software_index']); //總表
//     Route::get('/create',[ProductManageController::class, 'software_create']); //新增頁面
//     Route::post('/store',[ProductManageController::class, 'software_store']); //儲存頁面
//     Route::get('/edit',[ProductManageController::class, 'software_edit']); //編輯頁面
//     Route::post('/update',[ProductManageController::class, 'software_update']); //更新頁面
//     Route::post('/delete',[ProductManageController::class, 'software_delete']); //刪除頁面
// });

// // 部品零件 手建
// Route::prefix('/product-manage/parts')->group(function (){
//     Route::get('/',[ProductManageController::class, 'parts_index']); //總表
//     Route::get('/create',[ProductManageController::class, 'parts_create']); //新增頁面
//     Route::post('/store',[ProductManageController::class, 'parts_store']); //儲存頁面
//     Route::get('/edit',[ProductManageController::class, 'parts_edit']); //編輯頁面
//     Route::post('/update',[ProductManageController::class, 'parts_update']); //更新頁面
//     Route::post('/delete',[ProductManageController::class, 'parts_delete']); //刪除頁面
// });

// // 耗材 手建
// Route::prefix('/product-manage/consumables')->group(function (){
//     Route::get('/',[ProductManageController::class, 'consumables_index']); //總表
//     Route::get('/create',[ProductManageController::class, 'consumables_create']); //新增頁面
//     Route::post('/store',[ProductManageController::class, 'consumables_store']); //儲存頁面
//     Route::get('/edit',[ProductManageController::class, 'consumables_edit']); //編輯頁面
//     Route::post('/update',[ProductManageController::class, 'consumables_update']); //更新頁面
//     Route::post('/delete',[ProductManageController::class, 'consumables_delete']); //刪除頁面
// });

// // 維修 手建
// Route::prefix('/product-manage/maintenance')->group(function (){
//     Route::get('/',[ProductManageController::class, 'maintenance_index']); //總表
//     Route::get('/create',[ProductManageController::class, 'maintenance_create']); //新增頁面
//     Route::post('/store',[ProductManageController::class, 'maintenance_store']); //儲存頁面
//     Route::get('/edit',[ProductManageController::class, 'maintenance_edit']); //編輯頁面
//     Route::post('/update',[ProductManageController::class, 'maintenance_update']); //更新頁面
//     Route::post('/delete',[ProductManageController::class, 'maintenance_delete']); //刪除頁面
// });







// // BANNER管理
// // 首頁 手建
// Route::prefix('/banner-manage/homepage')->group(function (){
//     Route::get('/',[BannerManageController::class, 'homepage_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'homepage_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'homepage_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'homepage_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'homepage_update']); //更新頁面
// });

// // 關於我們 手建
// Route::prefix('/banner-manage/aboutus')->group(function (){
//     Route::get('/',[BannerManageController::class, 'aboutus_index']); //總表
//     Route::post('/create',[BannerManageController::class, 'aboutus_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'aboutus_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'aboutus_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'aboutus_update']); //更新頁面
// });

// // 產品介紹 手建
// Route::prefix('/banner-manage/product')->group(function (){
//     Route::get('/',[BannerManageController::class, 'product_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'product_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'product_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'product_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'product_update']); //更新頁面
// });

// // 產品製作流程 手建
// Route::prefix('/banner-manage/process')->group(function (){
//     Route::get('/',[BannerManageController::class, 'process_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'process_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'process_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'process_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'process_update']); //更新頁面
// });

// // 聯絡我們 手建
// Route::prefix('/banner-manage/contact')->group(function (){
//     Route::get('/',[BannerManageController::class, 'contact_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
// });



//聯絡我們 表單及送出頁
// Route::prefix('/contact')->group(function (){
//     Route::get('/',[ContactController::class, 'index']); //表1
//     Route::post('/confirm',[ContactController::class, 'contact2']); //表2
//     Route::post('/contactin',[ContactController::class, 'contactin']);
//     Route::get('/finish',[ContactController::class, 'contact3']); //表3

//     Route::post('/store',[ContactController::class, 'store']); //儲存頁面
//     Route::get('/edit',[ContactController::class, 'edit']); //編輯頁面
//     Route::post('/update',[ContactController::class, 'update']); //更新頁面

//     Route::get('/contact/delete/{id}',[ContactController::class, 'delete']); //刪除頁面
// });
    // 以下用不到
    //Route::get('/create',[ContactController::class, 'create']); //新增頁面

// 首頁
// HomePageController

//最新消息
// Route::prefix('/banner-topics')->group(function (){
//     Route::get('/',[BannerManageController::class, 'contact_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
// });
// //合作廠商
// Route::prefix('/banner-company')->group(function (){
//     Route::get('/',[BannerManageController::class, 'contact_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
//     Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
//     Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
// });



// // 關於我們
// // AboutUsController

// //公司沿革
// Route::prefix('/aboutsus-history')->group(function (){
//     Route::get('/',[BannerManageController::class, 'contact_index']); //總表
//     Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
//     Route::post('/store',[BannerManageController::class, 'contact_store']

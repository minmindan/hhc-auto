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
require __DIR__.'/productmanage.php';


// 前台頁面
// 首頁 手建
Route::prefix('/')->group(function (){
    Route::get('/',[HomePageController::class, 'index']); //總表
    Route::get('/aboutus',[HomePageController::class, 'aboutus']);//關於我們
    Route::get('/product',[HomePageController::class, 'product']);//產品總覽
    Route::get('/process',[HomePageController::class, 'process']);//流程
    Route::get('/topics',[HomePageController::class, 'topics']);//最新消息
    Route::get('/contact',[ContactController::class, 'index']);//回報表單

    //產品分類預覽
    Route::get('/equipment',[HomePageController::class, 'equipment']);//產品分類預覽(設備)
    Route::get('/software',[HomePageController::class, 'software']);//產品分類預覽(軟體)
    Route::get('/parts',[HomePageController::class, 'parts']);//產品分類預覽(部品零件)
    Route::get('/consumables',[HomePageController::class, 'consumables']);//產品分類預覽(耗材)
    Route::get('/maintenance',[HomePageController::class, 'maintenance']);//產品分類預覽(維修)

    //個別產品詳情
    Route::get('/equipment/{id}',[HomePageController::class, 'equipmentdetail']);//產品細項
    Route::get('/software/{id}',[HomePageController::class, 'softwaredetail']);//產品細項
    Route::get('/parts/{id}',[HomePageController::class, 'partsdetail']);//產品細項
    Route::get('/consumables/{id}',[HomePageController::class, 'consumablesdetail']);//產品細項
    Route::get('/maintenance/{id}',[HomePageController::class, 'maintenancedetail']);//產品細項
});

// 表單 手建
Route::prefix('/hhc-auto')->group(function (){
     //表1
    Route::post('/contact2',[ContactController::class, 'contact2']); //表2
    Route::post('/contactin',[ContactController::class, 'contactin']);
    Route::get('/contact3',[ContactController::class, 'contact3']); //表3
    Route::get('/mail',[ContactController::class, 'contact_mail']); //Mail

    Route::post('/store',[ContactController::class, 'store']); //儲存頁面
    Route::get('/edit',[ContactController::class, 'edit']); //編輯頁面
    Route::post('/update',[ContactController::class, 'update']); //更新頁面

    Route::get('/contact/delete/{id}',[ContactController::class, 'delete']); //刪除頁面
});

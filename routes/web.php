<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhcAutoController;
use App\Http\Controllers\AboutUsController;


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
    return view('equipment.product');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('hhc-auto')->group(function (){
    Route::get('/',[HhcAutoController::class, 'index']);
});


// 首頁 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
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
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[ContactController::class, 'index']); //總表
    Route::get('/create',[ContactController::class, 'create']); //新增頁面
    Route::post('/store',[ContactController::class, 'store']); //儲存頁面
    Route::get('/edit',[ContactController::class, 'edit']); //編輯頁面
    Route::post('/update',[ContactController::class, 'update']); //更新頁面
    Route::post('/delete',[ContactController::class, 'delete']); //刪除頁面
});




// 產品管理
// 設備 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[ProductManageController::class, 'index']); //總表
    Route::get('/create',[ProductManageController::class, 'create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'delete']); //刪除頁面
});

// 軟體 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[ProductManageController::class, 'index']); //總表
    Route::get('/create',[ProductManageController::class, 'create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'delete']); //刪除頁面
});

// 部品零件 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[ProductManageController::class, 'index']); //總表
    Route::get('/create',[ProductManageController::class, 'create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'delete']); //刪除頁面
});

// 耗材 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[ProductManageController::class, 'index']); //總表
    Route::get('/create',[ProductManageController::class, 'create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'delete']); //刪除頁面
});

// 維修 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[ProductManageController::class, 'index']); //總表
    Route::get('/create',[ProductManageController::class, 'create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[ProductManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'update']); //更新頁面
    Route::post('/delete',[ProductManageController::class, 'delete']); //刪除頁面
});







// BANNER管理
// 首頁 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[BannerManageController::class, 'index']); //總表
    Route::get('/create',[BannerManageController::class, 'create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'delete']); //刪除頁面
});

// 關於我們 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[BannerManageController::class, 'index']); //總表
    Route::get('/create',[BannerManageController::class, 'create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'delete']); //刪除頁面
});

// 產品介紹 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[BannerManageController::class, 'index']); //總表
    Route::get('/create',[BannerManageController::class, 'create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'delete']); //刪除頁面
});

// 產品製作流程 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[BannerManageController::class, 'index']); //總表
    Route::get('/create',[BannerManageController::class, 'create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'delete']); //刪除頁面
});

// 聯絡我們 手建
Route::prefix('/hhc-auto/aboutus')->group(function (){
    Route::get('/',[BannerManageController::class, 'index']); //總表
    Route::get('/create',[BannerManageController::class, 'create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'edit']); //編輯頁面
    Route::post('/update',[BannerManageController::class, 'update']); //更新頁面
    Route::post('/delete',[BannerManageController::class, 'delete']); //刪除頁面
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

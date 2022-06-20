<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhcAutoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BannerManageController;
use App\Http\Controllers\ProductManageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;


// 產品管理頁面
// 設備 手建
Route::prefix('/product-manage/equipment')->group(function (){
    Route::get('/',[ProductManageController::class, 'equipment_index']); //總表
    Route::get('/create',[ProductManageController::class, 'equipment_create']); //新增頁面
    Route::post('/store',[ProductManageController::class, 'equipment_store']); //儲存頁面
    Route::post('/edit/{id}',[ProductManageController::class, 'equipment_edit']); //編輯頁面
    Route::post('/update',[ProductManageController::class, 'equipment_update']); //更新頁面
    Route::post('/delete/{id}',[ProductManageController::class, 'equipment_delete']); //刪除頁面

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

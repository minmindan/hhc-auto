<?php

use App\Http\Controllers\ProductManageController;
use Illuminate\Support\Facades\Route;

// 產品管理頁面
// 設備 手建
Route::prefix('/product-manage/equipment')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductManageController::class, 'equipment_index']); //總表
    Route::get('/create', [ProductManageController::class, 'equipment_create']); //新增頁面
    Route::post('/store', [ProductManageController::class, 'equipment_store']); //儲存頁面
    Route::post('/edit/{id}', [ProductManageController::class, 'equipment_edit']); //編輯頁面
    Route::post('/update/{id}', [ProductManageController::class, 'equipment_update']); //更新頁面
    Route::post('/delete/{id}', [ProductManageController::class, 'equipment_delete']); //刪除頁面
    Route::post('/d_sec_img/{id}', [ProductManageController::class, 'equi_sec_img']); //刪除頁面

});

// 軟體 手建
Route::prefix('/product-manage/software')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductManageController::class, 'software_index']); //總表
    Route::get('/create', [ProductManageController::class, 'software_create']); //新增頁面
    Route::post('/store', [ProductManageController::class, 'software_store']); //儲存頁面
    Route::post('/edit/{id}', [ProductManageController::class, 'software_edit']); //編輯頁面
    Route::post('/update/{id}', [ProductManageController::class, 'software_update']); //更新頁面
    Route::post('/delete/{id}', [ProductManageController::class, 'software_delete']); //刪除頁面
    Route::post('/d_sec_img/{id}', [ProductManageController::class, 'soft_sec_img']); //刪除頁面
});

// 部品零件 手建
Route::prefix('/product-manage/parts')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductManageController::class, 'parts_index']); //總表
    Route::get('/create', [ProductManageController::class, 'parts_create']); //新增頁面
    Route::post('/store', [ProductManageController::class, 'parts_store']); //儲存頁面
    Route::post('/edit/{id}', [ProductManageController::class, 'parts_edit']); //編輯頁面
    Route::post('/update/{id}', [ProductManageController::class, 'parts_update']); //更新頁面
    Route::post('/delete/{id}', [ProductManageController::class, 'parts_delete']); //刪除頁面
    Route::post('/d_sec_img/{id}', [ProductManageController::class, 'part_sec_img']); //刪除頁面
});

// 耗材 手建
Route::prefix('/product-manage/consumables')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductManageController::class, 'consumables_index']); //總表
    Route::get('/create', [ProductManageController::class, 'consumables_create']); //新增頁面
    Route::post('/store', [ProductManageController::class, 'consumables_store']); //儲存頁面
    Route::post('/edit/{id}', [ProductManageController::class, 'consumables_edit']); //編輯頁面
    Route::post('/update/{id}', [ProductManageController::class, 'consumables_update']); //更新頁面
    Route::post('/delete/{id}', [ProductManageController::class, 'consumables_delete']); //刪除頁面
    Route::post('/d_sec_img/{id}', [ProductManageController::class, 'cons_sec_img']); //刪除頁面
});

// 維修 手建
Route::prefix('/product-manage/maintenance')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductManageController::class, 'maintenance_index']); //總表
    Route::get('/create', [ProductManageController::class, 'maintenance_create']); //新增頁面
    Route::post('/store', [ProductManageController::class, 'maintenance_store']); //儲存頁面
    Route::post('/edit/{id}', [ProductManageController::class, 'maintenance_edit']); //編輯頁面
    Route::post('/update/{id}', [ProductManageController::class, 'maintenance_update']); //更新頁面
    Route::post('/delete/{id}', [ProductManageController::class, 'maintenance_delete']); //刪除頁面
    Route::post('/d_sec_img/{id}', [ProductManageController::class, 'd_sec_img']); //刪除頁面
});

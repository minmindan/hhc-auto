<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhcAutoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BannerManageController;
use App\Http\Controllers\ProductManageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;


// BANNER管理
// 首頁 手建
Route::prefix('/banner-manage/homepage')->middleware(['auth'])->group(function (){
    Route::get('/',[BannerManageController::class, 'homepage_index']); //總表
    Route::get('/create',[BannerManageController::class, 'homepage_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'homepage_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'homepage_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'homepage_update']); //更新頁面
});

// 關於我們 手建
Route::prefix('/banner-manage/aboutus')->middleware(['auth'])->group(function (){
    Route::get('/',[BannerManageController::class, 'aboutus_index']); //總表
    Route::post('/create',[BannerManageController::class, 'aboutus_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'aboutus_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'aboutus_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'aboutus_update']); //更新頁面
});

// 產品介紹 手建
Route::prefix('/banner-manage/product')->middleware(['auth'])->group(function (){
    Route::get('/',[BannerManageController::class, 'product_index']); //總表
    Route::get('/create',[BannerManageController::class, 'product_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'product_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'product_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'product_update']); //更新頁面
});

// 產品製作流程 手建
Route::prefix('/banner-manage/process')->middleware(['auth'])->group(function (){
    Route::get('/',[BannerManageController::class, 'process_index']); //總表
    Route::get('/create',[BannerManageController::class, 'process_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'process_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'process_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'process_update']); //更新頁面
});

// 聯絡我們 手建
Route::prefix('/banner-manage/contact')->middleware(['auth'])->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});

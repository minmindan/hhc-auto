<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhcAutoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BannerManageController;
use App\Http\Controllers\ProductManageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;





// 首頁
// HomePageController

//最新消息
Route::prefix('/banner-topics')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});
//合作廠商
Route::prefix('/banner-company')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});



// 關於我們
// AboutUsController

//公司沿革
Route::prefix('/aboutsus-history')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});

//聯絡方式
Route::prefix('/aboutsus-contact')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});





// Banner管理
//BannerManageController
Route::prefix('/banner-manage/contact')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});
// 產品管理
//ProductManageController
Route::prefix('/banner-manage/contact')->group(function (){
    Route::get('/',[BannerManageController::class, 'contact_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit',[BannerManageController::class, 'contact_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});
// 表單
// ContactController
Route::prefix('/contact/list')->group(function (){
    Route::get('/',[BannerManageController::class, 'contactlist_index']); //總表
    Route::get('/create',[BannerManageController::class, 'contact_create']); //新增頁面
    Route::post('/store',[BannerManageController::class, 'contact_store']); //儲存頁面
    Route::get('/edit{id}',[BannerManageController::class, 'contactlist_edit']); //編輯頁面
    Route::post('/update/{id}',[BannerManageController::class, 'contact_update']); //更新頁面
});
// 隱私權政策
Route::get('/privacypolic',[HhcAutoController::class,'privacypolic']);

//使用條款
Route::get('/termsofservice',[HhcAutoController::class,'termsofservice']);

// Route::get('/',[HhcAutoController::class,'login']);


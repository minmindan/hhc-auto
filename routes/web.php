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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('hhc-auto')->group(function (){
    Route::get('/',[HhcAutoController::class, 'index']);
});




// 關於我們 手建
Route::prefix('/aboutUs')->group(function (){
    Route::get('/',[AboutUsController::class, 'index']); //總表
    Route::get('/create',[AboutUsController::class, 'create']); //新增頁面
    Route::post('/store',[AboutUsController::class, 'store']); //儲存頁面
    Route::get('/edit',[AboutUsController::class, 'edit']); //編輯頁面
    Route::post('/update',[AboutUsController::class, 'update']); //更新頁面
    Route::post('/delete',[AboutUsController::class, 'delete']); //刪除頁面
});

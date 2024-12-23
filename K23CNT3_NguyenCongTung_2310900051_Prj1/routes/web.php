<?php

use App\Http\Controllers\ctLoaiSanPhamController;
use App\Http\Controllers\ctLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome')->name('home');
});
route::get('/login',[ctLoginController::class,'ctIndex']);
route::post('/login',[ctLoginController::class,'ctLoginSubmit'])->name('CongTung.Login');
route::get('/home',function(){
    return view('ctList.Home');
})->name('CongTung.Home');
route::get('/ctAdmin',function(){
    return view('ctAdmin.index');
});
route::get('/ctAdmin/ct-list',[ctLoaiSanPhamController::class,'ctList'])->name('CongTung.List');
route::get('ctAdmin/ct-create',[ctLoaiSanPhamController::class,'ctCreate'])->name('CongTung.Create');
route::post('ctAdmin/ct-create',[ctLoaiSanPhamController::class,'ctCreateSubmit'])->name('CongTung.Create');
route::get('ctAdmin/ct-edit/{id}',[ctLoaiSanPhamController::class,'ctEdit'])->name('CongTung.Edit');
route::post('ctAdmin/ct-edit/{id}',[ctLoaiSanPhamController::class,'ctEditSubmit'])->name('CongTung.EditSubmit');
route::get('ctAdmin/ct-delete/{id}',[ctLoaiSanPhamController::class,'ctDelete'])->name('CongTung.Delete');
route::get('ctAdmin/ct-view/{id}',[ctLoaiSanPhamController::class,'ctView'])->name('CongTung.View');
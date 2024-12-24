<?php

use App\Http\Controllers\ctLoaiSanPhamController;
use App\Http\Controllers\ctLoginController;
use App\Http\Controllers\ctSanPhamController;
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
#dangnhap dangky dangxuat
Route::get('/ctAdmin/ct-register', function () {return view('ctLogIn.Register');})->name('CongTung.Register');
Route::post('/ctAdmin/ct-register', [ctLoginController::class, 'ctRegister']);
Route::get('/ctAdmin/ct-login', function () {return view('ctLogIn.Login');})->name('CongTung.Login');
Route::post('/ctAdmin/ct-login', [ctLoginController::class, 'ctLoginSubmit']);
Route::post('/logout', [ctLoginController::class, 'ctLogout'])->name('CongTung.Logout');
#end dangnhap dangky dangxuat
#route::get('/ctAdmin/ct-Login',[ctLoginController::class,'ctIndex']);
#route::post('/ctAdmin/ct-Login',[ctLoginController::class,'ctLoginSubmit'])->name('CongTung.Login');
#Loai San Pham
route::get('/ctAdmin',[ctLoaiSanPhamController::class,'ctHome'])->name('CongTung.Home');
route::get('/ctAdmin/ct-list',[ctLoaiSanPhamController::class,'ctList'])->name('CongTung.List');
route::get('/ctAdmin/ct-create',[ctLoaiSanPhamController::class,'ctCreate'])->name('CongTung.Create');
route::post('/ctAdmin/ct-create',[ctLoaiSanPhamController::class,'ctCreateSubmit'])->name('CongTung.Create');
route::get('/ctAdmin/ct-edit/{id}',[ctLoaiSanPhamController::class,'ctEdit'])->name('CongTung.Edit');
route::post('/ctAdmin/ct-edit/{id}',[ctLoaiSanPhamController::class,'ctEditSubmit'])->name('CongTung.EditSubmit');
route::get('/ctAdmin/ct-delete/{id}',[ctLoaiSanPhamController::class,'ctDelete'])->name('CongTung.Delete');
route::get('/ctAdmin/ct-view/{id}',[ctLoaiSanPhamController::class,'ctView'])->name('CongTung.View');
#end Loai San Pham
# San Pham
route::get('/ctAdmin/SanPham/ct-list',[ctSanPhamController::class,'ctList'])->name('CongTung.SanPham.List');
route::get('/ctAdmin/SanPham/ct-create',[ctSanPhamController::class,'ctCreate'])->name('CongTung.SanPham.Create');
route::post('/ctAdmin/SanPham/ct-create',[ctSanPhamController::class,'ctCreateSubmit'])->name('CongTung.SanPham.Create');
route::get('/ctAdmin/SanPham/ct-create',[ctLoaiSanPhamController::class,'ctPutToList'])->name('CongTung.Foreign.Key');
route::get('/ctAdmin/SanPham/ct-edit/{id}',[ctSanPhamController::class,'ctEdit'])->name('CongTung.SanPham.Edit');
route::post('/ctAdmin/SanPham/ct-edit/{id}',[ctSanPhamController::class,'ctEditSubmit'])->name('CongTung.SanPham.EditSubmit');
#end Loai San Pham
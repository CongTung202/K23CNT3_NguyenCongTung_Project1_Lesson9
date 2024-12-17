<?php

use App\Http\Controllers\ctNhacCCcontroller;
use App\Http\Controllers\ctSinhVien;
use App\Http\Controllers\ctVatTuController;
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



route::get('/',function(){
    return view('welcome');
})->name('congtung.home'    );
route::get('/ct/them',[ctSinhVien::class,'ctCreate']);
route::post('/ct/them',[ctSinhVien::class,'ctCreateSubmit'])->name('create.sinhvien');
route::get('/NhaCC',[ctNhacCCcontroller::class,'list'])->name('congtung.list');
route::get('ViewNhaCC',function(){
    return view('ctNhaCC.View');
});
route::get('/ViewVatTu',[ctVatTuController::class,'list']);
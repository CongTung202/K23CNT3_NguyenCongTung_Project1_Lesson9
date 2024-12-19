<?php

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
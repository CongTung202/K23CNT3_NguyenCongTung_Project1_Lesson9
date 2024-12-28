<?php

namespace App\Http\Controllers;

use App\Models\ctSanPhamModel;
use Illuminate\Http\Request;

class ctGuestController extends Controller
{
    //
    public function ctList(){
        $ctGuestSanPham=ctSanPhamModel::take(4)->get();
        return view('ctGuest.ct-home',['ctGuestSanPham'=>$ctGuestSanPham]);
    }
    public function ctIntroduction(){
        return view('ctGuest.ct-introduction');
    }
    public function ctListSanPham(){
        $ctGuestSanPham = ctSanPhamModel::where('ctTrangThai', 1)->get();
        return view('ctGuest.ct-listsp',['ctGuestSanPham'=>$ctGuestSanPham]);
    }
}

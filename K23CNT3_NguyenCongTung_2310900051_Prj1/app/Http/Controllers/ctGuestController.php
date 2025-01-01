<?php

namespace App\Http\Controllers;

use App\Models\CT_LOAI_SAN_PHAM;
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
    public function ctListSanPham()
{
    $ctGuestLoaiSanPham = CT_LOAI_SAN_PHAM::all();
    $ctGuestSanPham = ctSanPhamModel::all();
    return view('ctGuest.ct-listsp', compact('ctGuestSanPham', 'ctGuestLoaiSanPham'));
}
}

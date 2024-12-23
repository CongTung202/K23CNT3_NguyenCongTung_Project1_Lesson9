<?php

namespace App\Http\Controllers;

use App\Models\CT_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class ctLoaiSanPhamController extends Controller
{
    // crud
    //list
    public function ctHome(){
        return view('ctAdmin.index');
    }
    public function ctList(){
        $ctLoaiSanPham=CT_LOAI_SAN_PHAM::paginate(5);
        return view('ctAdmin.ctLoaiSanPham.ct-list',['ctLoaiSanPham'=>$ctLoaiSanPham]);
    }
    public function ctCreate(){
        return view('ctAdmin.ctLoaiSanPham.ct-create');
    }
    public function ctCreateSubmit(Request $request) {
        $request->validate([
            'ctMaLoai' => 'required|string|max:255|unique:CT_LOAI_SAN_PHAM',
            'ctTenLoai' => 'required|string|max:255',
            'ctTrangThai'=>'required|boolean'
        ]);

        $ctLoaiSanPham = new CT_LOAI_SAN_PHAM;
        $ctLoaiSanPham->ctMaLoai = $request->ctMaLoai;
        $ctLoaiSanPham->ctTenLoai = $request->ctTenLoai;
        $ctLoaiSanPham->ctTrangThai = $request->ctTrangThai;
        $ctLoaiSanPham->save();
        return redirect('/ctAdmin/ct-list');
    }
    public function ctEdit($id) {
        $ctLoaiSanPham = CT_LOAI_SAN_PHAM::find($id);
        return view('ctAdmin.ctLoaiSanPham.ct-edit', ['ctLoaiSanPham' => $ctLoaiSanPham]);
    }
    # edit submit
    public function ctEditSubmit(Request $request,$id)
    {
        $request->validate([
            'ctMaLoai' => 'required|string|max:255',
            'ctTenLoai' => 'required|string|max:255',
            'ctTrangThai'=>'required|boolean'
        ]);
        
        $maloai = $request->input('ctMaLoai');
        $tenloai = $request->input('ctTenLoai');
        $trangthai=$request->input('ctTrangThai');
        $ctLoaiSanPham = CT_LOAI_SAN_PHAM::find($id);
        $ctLoaiSanPham->ctMaLoai = $maloai;
        $ctLoaiSanPham->ctTenLoai = $tenloai;
        $ctLoaiSanPham->ctTrangThai = $trangthai;
        $ctLoaiSanPham->save(); 
        return redirect('/ctAdmin/ct-list');
    }
    public function ctDelete($id)
    {
        $ctLoaiSanPham = CT_LOAI_SAN_PHAM::find($id);
        $ctLoaiSanPham->delete();
        return redirect()->route('CongTung.List');
    }
    public function ctView($id) {
        $ctLoaiSanPham = CT_LOAI_SAN_PHAM::find($id);
        return view('ctAdmin.ctLoaiSanPham.ct-view', ['ctLoaiSanPham' => $ctLoaiSanPham]);
    }
}
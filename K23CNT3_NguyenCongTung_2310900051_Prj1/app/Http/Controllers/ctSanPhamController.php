<?php

namespace App\Http\Controllers;

use App\Models\ctSanPhamModel;
use Illuminate\Http\Request;

class ctSanPhamController extends Controller
{
    //
    public function ctList(){
        $ctSanPham=ctSanPhamModel::paginate(5);
        return view('ctAdmin.ctSanPham.ct-list',['ctSanPham'=>$ctSanPham]);
    }
    public function ctCreate(){
        return view('ctAdmin.ctSanPham.ct-create');
    }
    public function ctCreateSubmit(Request $request) {
        $request->validate([
            'ctMaSanPham' => 'required|string|unique:CT_SAN_PHAM',
            'ctTenSanPham' => 'required|string',
            'ctHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'ctSoLuong' => 'required|numeric',
            'ctDonGia' => 'required|numeric',
            'ctMaLoai' => 'required',
            'ctTrangThai' => 'required|boolean'
        ]);
    
        $ctSanPham = new ctSanPhamModel();
        $ctSanPham->ctMaSanPham = $request->ctMaSanPham;
        $ctSanPham->ctTenSanPham = $request->ctTenSanPham;
        // Xử lý hình ảnh
        if ($request->hasFile('ctHinhAnh')) {
            $ctGetAnh = $request->file('ctHinhAnh');
            $SaveAs = time() . '.' . $ctGetAnh->getClientOriginalExtension(); // Tạo tên file duy nhất
            $ctGetAnh->move(public_path('images'), $SaveAs); // Lưu hình ảnh vào thư mục public/images
            $ctSanPham->ctHinhAnh = $SaveAs; // Lưu tên file vào cơ sở dữ liệu
        }
    
        $ctSanPham->ctSoLuong = $request->ctSoLuong;
        $ctSanPham->ctDonGia = $request->ctDonGia;
        $ctSanPham->ctMaLoai = $request->ctMaLoai;
        $ctSanPham->ctTrangThai = $request->ctTrangThai;
        $ctSanPham->save();
    
        return redirect('/ctAdmin/SanPham/ct-list');
    }

}

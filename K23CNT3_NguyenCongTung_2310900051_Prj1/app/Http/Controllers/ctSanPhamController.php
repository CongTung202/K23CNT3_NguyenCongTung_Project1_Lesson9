<?php

namespace App\Http\Controllers;

use App\Models\ctSanPhamModel;
use Illuminate\Http\Request;

class ctSanPhamController extends Controller
{
    //
    public function ctList(){
        $ctSanPham=ctSanPhamModel::paginate(2);
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
    public function ctEdit($id) {
        $ctSanPham = ctSanPhamModel::find($id); // Sử dụng findOrFail để tự động trả về 404 nếu không tìm thấy
        return view('ctAdmin.ctSanPham.ct-edit', [
            'ctSanPham' => $ctSanPham,
    ]);
    }
    public function ctEditSubmit(Request $request, $id)
{
    $request->validate([
        'ctMaSanPham' => 'required|string|unique:CT_SAN_PHAM,ctMaSanPham,' . $id, // Kiểm tra duy nhất, ngoại trừ sản phẩm hiện tại
        'ctTenSanPham' => 'required|string',
        'ctHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,jfif',
        'ctSoLuong' => 'required|numeric',
        'ctDonGia' => 'required|numeric',
        'ctMaLoai' => 'required',
        'ctTrangThai' => 'required|boolean'
    ]);

    $ctSanPham = ctSanPhamModel::find($id); // Tìm sản phẩm theo ID

    // Cập nhật thông tin sản phẩm
    $ctSanPham->ctMaSanPham = $request->ctMaSanPham;
    $ctSanPham->ctTenSanPham = $request->ctTenSanPham;

    // Xử lý hình ảnh
    if ($request->hasFile('ctHinhAnh')) {
        // Xóa hình ảnh cũ nếu có
        if ($ctSanPham->ctHinhAnh) {
            $oldImagePath = public_path('images/' . $ctSanPham->ctHinhAnh);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Xóa hình ảnh cũ
            }
        }

        // Lưu hình ảnh mới
        $ctGetAnh = $request->file('ctHinhAnh');
        $SaveAs = time() . '.' . $ctGetAnh->getClientOriginalExtension(); // Tạo tên file duy nhất
        $ctGetAnh->move(public_path('images'), $SaveAs); // Lưu hình ảnh vào thư mục public/images
        $ctSanPham->ctHinhAnh = $SaveAs; // Lưu tên file vào cơ sở dữ liệu
    }

    // Cập nhật các trường khác
    $ctSanPham->ctSoLuong = $request->ctSoLuong;
    $ctSanPham->ctDonGia = $request->ctDonGia;
    $ctSanPham->ctMaLoai = $request->ctMaLoai;
    $ctSanPham->ctTrangThai = $request->ctTrangThai;

    // Lưu sản phẩm
    $ctSanPham->save();

    // Chuyển hướng về danh sách sản phẩm
    return redirect()->route('CongTung.SanPham.List')->with('success', 'Cập nhật sản phẩm thành công!');
}

}

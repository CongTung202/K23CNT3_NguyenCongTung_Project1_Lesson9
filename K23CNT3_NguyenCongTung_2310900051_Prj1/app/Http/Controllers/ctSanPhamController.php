<?php

namespace App\Http\Controllers;

use App\Models\CT_LOAI_SAN_PHAM;
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
    public function ctEdit($id) {
        // Lấy sản phẩm từ cơ sở dữ liệu
        $ctSanPham = ctSanPhamModel::findOrFail($id);    
        // Lấy danh sách loại sản phẩm
        $ctLoaiSanPham = CT_LOAI_SAN_PHAM::all();    
        // Trả về view với cả hai biến
        return view('ctAdmin.ctSanPham.ct-edit', compact('ctSanPham', 'ctLoaiSanPham'));
    }
    
    public function ctEditSubmit(Request $request, $id) {
        // Xác thực dữ liệu
        $request->validate([
            'ctMaSanPham' => 'required|string|unique:CT_SAN_PHAM,ctMaSanPham,' . $id,
            'ctTenSanPham' => 'required|string',
            'ctHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,jfif',
            'ctSoLuong' => 'required|numeric',
            'ctDonGia' => 'required|numeric',
            'ctMaLoai' => 'required',
            'ctTrangThai' => 'required|boolean'
        ]);
    
        // Cập nhật thông tin sản phẩm
        $ctSanPham = ctSanPhamModel::findOrFail($id);
        $ctSanPham->ctMaSanPham = $request->input('ctMaSanPham');
        $ctSanPham->ctTenSanPham = $request->input('ctTenSanPham');
    
        // Xử lý hình ảnh
        $this->ctHandleImageUpload($request, $ctSanPham);
    
        // Cập nhật các trường khác
        $ctSanPham->ctSoLuong = $request->input('ctSoLuong');
        $ctSanPham->ctDonGia = $request->input('ctDonGia');
        $ctSanPham->ctMaLoai = $request->input('ctMaLoai');
        $ctSanPham->ctTrangThai = $request->input('ctTrangThai');
    
        // Lưu sản phẩm
        $ctSanPham->save();
    
        // Chuyển hướng về danh sách sản phẩm
        return redirect()->route('CongTung.SanPham.List')->with('success', 'Cập nhật sản phẩm thành công!');
    }
    
    private function ctHandleImageUpload(Request $request, $ctSanPham) {
        if ($request->hasFile('ctHinhAnh')) {
            // Xóa hình ảnh cũ nếu có
            if ($ctSanPham->ctHinhAnh) {
                $oldImagePath = public_path('images/' . $ctSanPham->ctHinhAnh);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Lưu hình ảnh mới
            $ctGetAnh = $request->file('ctHinhAnh');
            $SaveAs = time() . '.' . $ctGetAnh->getClientOriginalExtension();
            $ctGetAnh->move(public_path('images'), $SaveAs);
            $ctSanPham->ctHinhAnh = $SaveAs;
        }
    }
    public function ctDelete($id)
    {
        $ctSanPham = ctSanPhamModel::find($id);
        $ctSanPham->delete();
        return redirect()->route('CongTung.SanPham.List');
    }

}

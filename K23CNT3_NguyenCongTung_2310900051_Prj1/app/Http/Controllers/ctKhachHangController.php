<?php

namespace App\Http\Controllers;

use App\Models\ctKhachHangModel;
use Illuminate\Http\Request;

class ctKhachHangController extends Controller
{
    //
    public function ctList(){
        $ctKhachHang=ctKhachHangModel::paginate(5);
        return view('ctAdmin.ctKhachHang.ct-list',compact('ctKhachHang'));
    }
    public function ctCreate(){
        return view('ctAdmin.ctKhachHang.ct-create');
    }
    public function ctCreateSubmit(Request $request) {
        $request->validate([
            'ctMaKhachHang' => 'required|string|max:255|unique:CT_KHACH_HANG',
            'ctHoTenKhachHang' => 'required|string|max:255',
            'ctEmail' => 'required|string|max:255',
            'ctMatKhau' => 'required|string|min:6',
            'ctDienThoai' => 'required|string|max:15',
            'ctDiaChi' => 'required|string|max:255',
        ]);
    
        $ctKhachHang = new ctKhachHangModel();
        $ctKhachHang->ctMaKhachHang = $request->ctMaKhachHang;
        $ctKhachHang->ctHoTenKhachHang = $request->ctHoTenKhachHang;
        $ctKhachHang->ctEmail = $request->ctEmail;
        $ctKhachHang->ctMatKhau = $request->ctMatKhau;
        $ctKhachHang->ctDienThoai = $request->ctDienThoai;
        $ctKhachHang->ctDiaChi = $request->ctDiaChi;
        $ctKhachHang->save();
        session()->flash('success', 'Khách hàng đã được tạo thành công!');
        return redirect('/ctAdmin/Khach/ct-list');
    }
    public function ctCreatewithGuest(){
        return view('ctGuest.ct-create');
    }
    public function ctCreateSubmitwithGuest(Request $request) {
        $request->validate([
            'ctMaKhachHang' => 'required|string|max:255|unique:CT_KHACH_HANG',
            'ctHoTenKhachHang' => 'required|string|max:255',
            'ctEmail' => 'required|string|max:255',
            'ctMatKhau' => 'required|string|min:6',
            'ctDienThoai' => 'required|string|max:15',
            'ctDiaChi' => 'required|string|max:255',
        ]);
    
        $ctKhachHang = new ctKhachHangModel();
        $ctKhachHang->ctMaKhachHang = $request->ctMaKhachHang;
        $ctKhachHang->ctHoTenKhachHang = $request->ctHoTenKhachHang;
        $ctKhachHang->ctEmail = $request->ctEmail;
        $ctKhachHang->ctMatKhau = $request->ctMatKhau;
        $ctKhachHang->ctDienThoai = $request->ctDienThoai;
        $ctKhachHang->ctDiaChi = $request->ctDiaChi;
        $ctKhachHang->save();
        session()->flash('success', 'Khách hàng đã được tạo thành công!');
        return redirect('/ctGuest/Home');
    }
    public function ctView($id) {
        $ctKhach = ctKhachHangModel::find($id);
        return view('ctAdmin.ctKhachHang.ct-view', ['ctKhach' => $ctKhach]);
    }
}

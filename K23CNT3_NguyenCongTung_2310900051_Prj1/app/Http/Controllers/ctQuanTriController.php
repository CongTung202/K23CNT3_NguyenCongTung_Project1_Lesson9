<?php

namespace App\Http\Controllers;

use App\Models\CT_LOAI_SAN_PHAM;
use App\Models\ctKhachHangModel;
use App\Models\ctQuanTriModels;
use App\Models\ctSanPhamModel;
use Illuminate\Http\Request;

class ctQuanTriController extends Controller
{
    //
    
    
    public function ctBoxHome() {
        $ctSoLoaiSanPham = CT_LOAI_SAN_PHAM::count();
        $ctSoQuanTri = ctQuanTriModels::count();
        $ctSoSanPham=ctSanPhamModel::count();
        $ctSoKhachHang=ctKhachHangModel::count();
        // Count all records in the model
        return view('ctAdmin.index', compact('ctSoLoaiSanPham','ctSoQuanTri','ctSoSanPham','ctSoKhachHang'));
    }
    public function ctList(){
        $ctAdmin=ctQuanTriModels::paginate(5);
        return view('ctAdmin.ctAdmin.ct-list',compact('ctAdmin'));
    }
    public function ctDelete($id)
    {
        $ctAdmin = ctQuanTriModels::find($id);
        $ctAdmin->delete();
        return redirect()->route('CongTung.Admin.List');
    }
    public function ctEdit($id) {
        $ctAdmin = ctQuanTriModels::find($id);
        return view('ctAdmin.ctAdmin.ct-edit', ['ctAdmin' => $ctAdmin]);
    }
    # edit submit
    public function ctEditSubmit(Request $request,$id)
    {
        $request->validate([
            'ctTrangThai'=>'required|boolean'
        ]);
        $trangthai=$request->input('ctTrangThai');
        $ctAdmin = ctQuanTriModels::find($id);
        $ctAdmin->ctTrangThai = $trangthai;
        $ctAdmin->save(); 
        return redirect('/ctAdmin/Admin/ct-list');
    }
}

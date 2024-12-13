<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ctSinhVienModel;

class ctSinhVien extends Controller
{
    //
    public function ctList(){
        $ctSinhVien = ctSinhVienModel::all();
        return view('ctSinhVien.list',['SinhVien'=>$ctSinhVien]);
    }
    public function ctCreate(){
        return view('ctSinhVien.create');
    }
    
    public function ctCreateSubmit(Request $request){
        // Validate the request
        $request->validate([
            'MASV' => 'required|string|max:10',
            'HOSV' => 'required|string|max:50',
            'TENSV' => 'required|string|max:50',
            'PHAI' => 'required|in:0,1',
            'NGAYSINH' => 'required|date',
            'NOISINH' => 'required|string|max:100',
            'HOCBONG' => 'nullable|numeric',
            'DIEMTB' => 'nullable|numeric',
        ]);
    
        $CTsinhvien = new ctSinhVienModel();
        $CTsinhvien->MASV = $request->MASV;
        $CTsinhvien->HOSV = $request->HOSV;
        $CTsinhvien->TENSV = $request->TENSV;
        $CTsinhvien->PHAI = $request->PHAI;
        $CTsinhvien->NGAYSINH = $request->NGAYSINH;
        $CTsinhvien->NOISINH = $request->NOISINH;
        $CTsinhvien->MAKH=$request->MAKHOA;
        $CTsinhvien->HOCBONG = $request->HOCBONG;
        $CTsinhvien->DIEMTB = $request->DIEMTB;
        $CTsinhvien->save();
    
        return redirect()->route('congtung.home')->with('success', 'Sinh viên đã được thêm thành công!');
    }
}

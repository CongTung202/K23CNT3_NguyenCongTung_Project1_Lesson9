<?php

namespace App\Http\Controllers;

use App\Models\ctKhachHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        return redirect('/ctGuest/Home');
    }
    public function ctLoginSubmitGuest(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $request->validate([
        'ctEmail' => 'required|string',
        'ctMatKhau' => 'required|string',
    ]);

    // Tìm kiếm người dùng trong cơ sở dữ liệu
    $users = ctKhachHangModel::where('ctEmail', $request->ctEmail)->first();

    // Kiểm tra xem người dùng có tồn tại không
    if ($users) {
        // Kiểm tra trạng thái tài khoản
        if ($users->ctTrangThai == 0) {
            return back()->withErrors([
                'ctTaiKhoan' => 'Tài khoản của bạn đã bị vô hiệu hóa.',
            ]);
        }
        // Kiểm tra mật khẩu
        if ($request->ctMatKhau === $users->ctMatKhau) {
            // Lưu cookie người dùng 
            $request->session()->regenerate();
            return redirect('/ctGuest/Home')->withCookie(cookie('ctEmail', $request->ctEmail, 60 * 24 * 30)); // Lưu cookie trong 30 ngày
        }
    }
    // Nếu không tìm thấy người dùng hoặc mật khẩu không đúng, trả về lỗi
    return back()->withErrors([
        'ctTaiKhoan' => 'Thông tin đăng nhập không chính xác.',
    ]);
}
    public function ctLogoutwithGuest()
    {
        // Xóa cookie và session
        Session::flush();
        return redirect('/ctGuest/Home')->withCookie(cookie('ctEmail', null, -1)); // Xóa cookie
    }
    public function ctView($id) {
        $ctKhach = ctKhachHangModel::find($id);
        return view('ctAdmin.ctKhachHang.ct-view', ['ctKhach' => $ctKhach]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ctQuanTriModels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class ctLoginController extends Controller
{
    //
    
    public function ctRegister(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $request->validate([
        'ctTaiKhoan' => 'required|string|max:255|unique:ct_quan_tri,ctTaiKhoan', // Đảm bảo tài khoản là duy nhất
        'ctMatKhau' => 'required|string|min:6', // Xác nhận mật khẩu
    ]);
    // Tạo người dùng mới
    $admin = ctQuanTriModels::create([
        'ctTaiKhoan' => $request->ctTaiKhoan,
        'ctMatKhau' => Hash::make($request->ctMatKhau), // Băm mật khẩu
    ]);
    // Chuyển hướng đến trang đăng nhập hoặc trang chính
    return redirect('/ctAdmin');
}
public function ctLoginSubmit(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $request->validate([
        'ctTaiKhoan' => 'required|string',
        'ctMatKhau' => 'required|string',
    ]);

    // Tìm kiếm người dùng trong cơ sở dữ liệu
    $admin = ctQuanTriModels::where('ctTaiKhoan', $request->ctTaiKhoan)->first();

    // Kiểm tra xem người dùng có tồn tại không
    if ($admin) {
        // Kiểm tra trạng thái tài khoản
        if ($admin->ctTrangThai == 0) {
            return back()->withErrors([
                'ctTaiKhoan' => 'Tài khoản của bạn đã bị vô hiệu hóa.',
            ]);
        }
        // Kiểm tra mật khẩu
        if (Hash::check($request->ctMatKhau, $admin->ctMatKhau)) {
            // Lưu cookie người dùng 
            $request->session()->regenerate();
            return redirect('/ctAdmin')->withCookie(cookie('ctTaiKhoan', $request->ctTaiKhoan, 60 * 24 * 30)); // Lưu cookie trong 30 ngày
        }
    }
    // Nếu không tìm thấy người dùng hoặc mật khẩu không đúng, trả về lỗi
    return back()->withErrors([
        'ctTaiKhoan' => 'Thông tin đăng nhập không chính xác.',
    ]);
}
    public function ctLogout()
    {
        // Xóa cookie và session
        Session::flush();
        return redirect('/ctAdmin')->withCookie(cookie('ctTaiKhoan', null, -1)); // Xóa cookie
    }
}

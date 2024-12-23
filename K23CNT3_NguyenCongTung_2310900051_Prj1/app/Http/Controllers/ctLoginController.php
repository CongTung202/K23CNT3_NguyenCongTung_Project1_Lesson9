<?php

namespace App\Http\Controllers;

use App\Models\ctQuanTriModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ctLoginController extends Controller
{
    //
    public function ctIndex(){
        return view('ctLogIn.Login');
    }
    public function ctLoginSubmit(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $request->validate(rules: [
        'ctTaiKhoan' => 'required',
        'ctMatKhau' => 'required',
    ]);
    // Tìm kiếm người dùng trong cơ sở dữ liệu
    $admin = ctQuanTriModels::where('ctTaiKhoan', $request->ctTaiKhoan)
        ->where('ctMatKhau', $request->ctMatKhau)
        ->first();

    // Kiểm tra xem người dùng có tồn tại không
    if ($admin) {
        // Lưu cookie nếu người dùng chọn "Remember Me"
        if ($request->has('ctRemember')) {
            $request->session()->regenerate();
            return redirect()->route('CongTung.Home')->withCookie(cookie('ctTaiKhoan', $request->ctTaiKhoan, 60 * 24 * 30)); // Lưu cookie trong 30 ngày
        }
        return redirect()->route('CongTung.Home');
    }
    // Nếu không tìm thấy người dùng, trả về lỗi
    return back()->withErrors([
        'ctTaiKhoan' => 'Thông tin đăng nhập không chính xác.',
    ]);   
}
}

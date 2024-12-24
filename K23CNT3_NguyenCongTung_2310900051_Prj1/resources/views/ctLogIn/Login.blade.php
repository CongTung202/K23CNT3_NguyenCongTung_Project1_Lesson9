<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Đăng Nhập</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Đăng Nhập</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('CongTung.Login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ctTaiKhoan" class="form-label">Tài Khoản</label>
                <input type="text" name="ctTaiKhoan" id="ctTaiKhoan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="ctMatKhau" class="form-label">Mật Khẩu</label>
                <input type="password" name="ctMatKhau" id="ctMatKhau" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
                Bạn Chưa Có Tài Khoản?
                <a href="/ctAdmin/ct-register">Đăng Ký</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
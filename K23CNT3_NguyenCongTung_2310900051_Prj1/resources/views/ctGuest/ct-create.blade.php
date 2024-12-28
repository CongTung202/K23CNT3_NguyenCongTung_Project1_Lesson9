<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3 w-50">
        <form action="{{ route('CongTung.Guest.CreateSubmit') }}" method="post">
            @csrf 
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2>Đăng Ký Khách Hàng</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="ctMaKhachHang" class="form-label">Mã Khách Hàng</label>
                        <input type="text" class="form-control" id="ctMaKhachHang" name="ctMaKhachHang" required />
                        @error('ctMaKhachHang')
                            <div class="text-danger">{{ 'Mã Khách Hàng Đã Tồn Tại' }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ctHoTenKhachHang" class="form-label">Tên Khách Hàng</label>
                        <input type="text" class="form-control" id="ctHoTenKhachHang" name="ctHoTenKhachHang" required />
                        @error('ctHoTenKhachHang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ctEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="ctEmail" name="ctEmail" required />
                        @error('ctEmail')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ctMatKhau" class="form-label">Mật Khẩu</label>
                        <input type="password" class="form-control" id="ctMatKhau" name="ctMatKhau" required />
                        @error('ctMatKhau')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ctDienThoai" class="form-label">Điện Thoại</label>
                        <input type="text" class="form-control" id="ctDienThoai" name="ctDienThoai" required />
                        @error('ctDienThoai')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ctDiaChi" class="form-label">Địa Chỉ</label>
                        <input type="text" class="form-control" id="ctDiaChi" name="ctDiaChi" required />
                        @error('ctDiaChi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Ghi Lại</button>
                    <a href="{{ route('CongTung.Guest.Home') }}" class="btn btn-secondary">Quay Lại</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
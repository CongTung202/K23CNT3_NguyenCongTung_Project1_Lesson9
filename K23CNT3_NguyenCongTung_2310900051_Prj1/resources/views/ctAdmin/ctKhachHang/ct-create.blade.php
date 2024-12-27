@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Thêm Mới Khách Hàng')    

@section('content-body')
<form action="{{ route('CongTung.KhachHang.CreateSubmit') }}" method="post">
    @csrf 
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2>Thêm mới khách hàng</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctMaKhachHang" class="col-sm-2 col-form-label">Mã khách hàng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctMaKhachHang" name="ctMaKhachHang" required />
                    @error('ctMaKhachHang')
                        <div class="text-danger">{{ 'Mã Khách Hàng Đã Tồn Tại' }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctHoTenKhachHang" class="col-sm-2 col-form-label">Tên khách hàng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctHoTenKhachHang" name="ctHoTenKhachHang" required />
                    @error('ctHoTenKhachHang')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="ctEmail" class="form-control" id="ctEmail" name="ctEmail" required />
                    @error('ctEmail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctMatKhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="ctMatKhau" name="ctMatKhau" required />
                    @error('ctMatKhau')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDienThoai" class="col-sm-2 col-form-label">Điện Thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctDienThoai" name="ctDienThoai" required />
                    @error('ctDienThoai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDiaChi" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctDiaChi" name="ctDiaChi" required />
                    @error('ctDiaChi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Ghi lại</button>
            <a href="{{ route('CongTung.KhachHang.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection
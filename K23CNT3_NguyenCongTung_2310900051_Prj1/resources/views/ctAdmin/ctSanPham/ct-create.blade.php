@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Thêm Mới Sản Phẩm')    

@section('content-body')
<form action="{{ route('CongTung.SanPham.Create') }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Thêm mới loại sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctMaSanPham" class="col-sm-2 col-form-label">Mã San Pham</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctMaSanPham" name="ctMaSanPham" required />
                    @error('ctMaSanPham')
                        <div class="text-danger">{{ 'Mã Loại Đã Tồn Tại' }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctTenSanPham" class="col-sm-2 col-form-label">Tên San Pham</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctTenSanPham" name="ctTenSanPham" required />
                </div>
                @error('ctTenSanPham')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 row">
                <label for="ctHinhAnh" class="col-sm-2 col-form-label">Hinh Anh</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="ctHinhAnh" name="ctHinhAnh"/>
                </div>
                <div class="mb-3 row">
                    <label for="ctSoLuong" class="col-sm-2 col-form-label">So Luong</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ctSoLuong" name="ctSoLuong" required />
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDonGia" class="col-sm-2 col-form-label">Don Gia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctDonGia" name="ctDonGia" required />
                    @error('ctDonGia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctMaLoai" class="col-sm-2 col-form-label">Mã Loai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctMaLoai" name="ctMaLoai" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="ctTrangThai1" name="ctTrangThai" value="1" checked />
                    <label for="ctTrangThai1">Hiển thị</label>
                    &nbsp;
                    <input type="radio" id="ctTrangThai0" name="ctTrangThai" value="0" />
                    <label for="ctTrangThai0">Khóa</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Ghi lại</button>
            <a href="{{ route('CongTung.SanPham.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection
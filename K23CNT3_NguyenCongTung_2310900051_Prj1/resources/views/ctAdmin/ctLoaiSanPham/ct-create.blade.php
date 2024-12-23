@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Thêm Mới Loại Sản Phẩm')    

@section('content-body')
<form action="{{ route('CongTung.Create') }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Thêm mới sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctMaLoai" name="ctMaLoai" required />
                    @error('ctMaLoai')
                        <div class="text-danger">{{ 'Mã Loại Đã Tồn Tại' }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctTenLoai" class="col-sm-2 col-form-label">Tên loại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctTenLoai" name="ctTenLoai" required />
                </div>
                @error('ctTenLoai')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
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
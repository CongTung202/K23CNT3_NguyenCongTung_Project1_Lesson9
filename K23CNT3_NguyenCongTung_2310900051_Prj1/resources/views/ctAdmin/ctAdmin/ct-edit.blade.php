@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Chỉnh Sửa Admin')    

@section('content-body')
<form action="{{ route('CongTung.Admin.EditSubmit', $ctAdmin->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa Admin</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctTenLoai" class="col-sm-2 col-form-label">Tài Khoản</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctTenLoai" value="{{ $ctAdmin->ctTaiKhoan }}" name="ctTenLoai" readonly />
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="ctTrangThai1" name="ctTrangThai" value="1" {{ $ctAdmin->ctTrangThai == 1 ? 'checked' : '' }} />
                    <label for="ctTrangThai1">Hiển thị</label>
                    &nbsp;
                    <input type="radio" id="ctTrangThai0" name="ctTrangThai" value="0" {{ $ctAdmin->ctTrangThai == 0 ? 'checked' : '' }} />
                    <label for="ctTrangThai0">Khóa</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Ghi lại</button>
            <a href="{{route('CongTung.Admin.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection
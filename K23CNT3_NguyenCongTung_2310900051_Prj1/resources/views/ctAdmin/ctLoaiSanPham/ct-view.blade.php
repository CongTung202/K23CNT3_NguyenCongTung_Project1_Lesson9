@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Xem Loại Sản Phẩm')    

@section('content-body')
<form action="{{ route('CongTung.View', $ctLoaiSanPham->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Xem loại sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctMaLoai" class="col-sm-2 col-form-label">Mã loại:</label>
                <div class="col-sm-10">
                    <p  id="ctMaLoai" readonly value="" name="ctMaLoai" >{{ $ctLoaiSanPham->ctMaLoai }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctTenLoai" class="col-sm-2 col-form-label">Tên loại:</label>
                <div class="col-sm-10">
                    <p  id="ctTenLoai" readonly value="" name="ctTenLoai" >{{ $ctLoaiSanPham->ctTenLoai }} </p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">

                    @if($ctLoaiSanPham->ctTrangThai==1)
                        <p>Hiển Thị</p>
                    @else
                        <p>Khóa</p>
                    
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('CongTung.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection
@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Xem Loại Sản Phẩm')    

@section('content-body')
<form action="{{ route('CongTung.Khach.View', $ctKhach->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Xem Khách</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctMaKhach" class="col-sm-2 col-form-label">Mã Khách:</label>
                <div class="col-sm-10">
                    <p  id="ctMaKhach" readonly value="" name="ctMaKhach" >{{ $ctKhach->ctMaKhachHang }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctTenKhach" class="col-sm-2 col-form-label">Tên Khách:</label>
                <div class="col-sm-10">
                    <p  id="ctTenKhach" readonly value="" name="ctTenKhach" >{{ $ctKhach->ctHoTenKhachHang }} </p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctEmail" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <p  id="ctEmail" readonly value="" name="ctEmail" >{{ $ctKhach->ctEmail }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctMatKhau" class="col-sm-2 col-form-label">Mật Khẩu:</label>
                <div class="col-sm-10">
                    <p  id="ctMatKhau" readonly value="" name="ctMatKhau" >{{ $ctKhach->ctMatKhau }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDienThoai" class="col-sm-2 col-form-label">Điện Thoại:</label>
                <div class="col-sm-10">
                    <p  id="ctDienThoai" readonly value="" name="ctDienThoai" >{{ $ctKhach->ctDienThoai }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDiaChi" class="col-sm-2 col-form-label">Địa Chỉ:</label>
                <div class="col-sm-10">
                    <p  id="ctDiaChi" readonly value="" name="ctDiaChi" >{{ $ctKhach->ctDiaChi }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctNgayDangKy" class="col-sm-2 col-form-label">Ngày Đăng Ký:</label>
                <div class="col-sm-10">
                    <p  id="ctNgayDangKy" readonly value="" name="ctNgayDangKy" >{{ $ctKhach->ctNgayDangKy }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">

                    @if($ctKhach->ctTrangThai==1)
                        <p>Hiển Thị</p>
                    @else
                        <p>Khóa</p>
                    
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('CongTung.KhachHang.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection
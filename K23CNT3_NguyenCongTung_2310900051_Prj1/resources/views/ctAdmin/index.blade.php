@extends('_ctLayouts.ctAdmin._master')
@section('title','Quan Tri Noi Dung')
@section('content-body')
<div class="container">
    <div class="row">
        <h1>Thống Kê Hệ Thống</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"> <!-- Each card takes up 3 columns on medium and larger screens -->
                <div class="card" style="width: 100%;"> <!-- Set width to 100% to fill the column -->
                    <div class="card-body" style="background-color: #DC143C; color: #fff;">
                        <h1 class="card-title text-center">{{$ctSoSanPham}}</h1>
                        <p class="card-text text-center">Sản phẩm</p>
                        <a href="/ctAdmin/SanPham/ct-list" class="btn btn-outline-light text-center">Chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #00c5d3; color: #fff;">
                        <h1 class="card-title text-center">{{$ctSoKhachHang}}</h1>
                        <p class="card-text text-center">Khách Hàng</p>
                        <a href="/ctAdmin/Khach/ct-list" class="btn btn-outline-light text-center">Chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #56d600; color: #fff;">
                        <h1 class="card-title text-center">{{$ctSoLoaiSanPham}}</h1>
                        <p class="card-text text-center">Loại Sản Phẩm</p>
                        <a href="/ctAdmin/ct-list" class="btn btn-outline-light text-center">Chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #ebfa1f; color: #000000;">
                        <h1 class="card-title text-center">{{$ctSoQuanTri}}</h1>
                        <p class="card-text text-center">Quản Trị</p>
                        <a href="/ctAdmin/Admin/ct-list" class=" btn    btn-outline-light text-center" style="color: black; border:.1px solid black;">Chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
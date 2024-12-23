@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Danh Sách Loại Sản Phẩm')    

@section('content-body')
<div class="container border">
    <div class="col-12">
        <h1>Danh Sách Loại Sản Phẩm</h1>
        <a href="/ctAdmin/ct-create" class="btn btn-primary">Thêm</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ctLoaiSanPham as  $item)
                    <tr>
                        <td>{{  1 }}</td>
                        <td>{{ $item->ctMaLoai }}</td>
                        <td>{{ $item->ctTenLoai }}</td>
                        <td>{{ $item->ctTrangThai }}</td>
                        <td>
                            <a href="/ctAdmin/ct-view/{{$item->id}}" class="btn btn-info">
                                Xem</a>
                            <a href="/ctAdmin/ct-edit/{{$item->id}}" class="btn btn-primary">
                                Sửa</a>
                            <a href="/ctAdmin/ct-delete/{{$item->id}}" class="btn btn-danger">
                                Xóa</a>
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Chưa Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
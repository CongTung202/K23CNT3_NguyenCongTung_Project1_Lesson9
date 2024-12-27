@extends('_ctLayouts.ctAdmin._master')
@section('title', 'Danh Sách Khách Hàng')    
@section('content-body')
<div class="container border mt-4 p-4">
    <div class="col-12 mb-3">
        <h1 class="text-center">Danh Sách Khách Hàng</h1>
        <a href="/ctAdmin/Khach/ct-create" class="btn btn-primary">Thêm Khách Hàng</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Mã Khách</th>
                        <th>Tên Khách</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Đăng Ký</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ctKhachHang as $item)
                    <tr>
                        <td>{{ $loop->iteration + ($ctKhachHang->currentPage() - 1) * $ctKhachHang->perPage() }}</td>
                        <td>{{ $item->ctMaKhachHang }}</td>
                        <td>{{ $item->ctHoTenKhachHang }}</td>
                        <td>{{ $item->ctEmail }}</td>
                        <td>{{ $item->ctMatKhau }}</td>
                        <td>{{ $item->ctDienThoai }}</td>
                        <td>{{ $item->ctDiaChi }}</td>
                        <td>{{ $item->ctNgayDangKy }}</td>
                        <td>{{ $item->ctTrangThai }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Xem</a>
<!--                            <a href="/ctAdmin/KhachHang/ct-edit/{{$item->id}}" class="btn btn-primary btn-sm">Sửa</a>
                            <a href="/ctAdmin/KhachHang/ct-delete/{{$item->id}}" class="btn btn-danger btn-sm" onclick="return ctNotice();">Xóa</a>   
-->
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        < td colspan="10" class="text-center">Chưa Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $ctKhachHang->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

<script>
    function ctNotice() {
        return confirm("Bạn có chắc chắn muốn xóa mục này?"); 
    }
</script>
@endsection
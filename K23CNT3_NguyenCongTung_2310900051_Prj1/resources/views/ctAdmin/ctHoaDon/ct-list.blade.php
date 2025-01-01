@extends('_ctLayouts.ctAdmin._master')
@section('title', 'Danh Sách Hóa Đơn')    
@section('content-body')
<div class="container border mt-4 p-4">
    <div class="col-12 mb-3">
        <h1 class="text-center">Danh Sách Hóa Đơn</h1>
        <a href="#" class="btn btn-primary">Thêm Hóa Đơn</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Khách Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng Trị Giá</th>
                        <th>Ngày Hóa Đơn</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ctHoaDon as $item)
                    <tr>
                        <td>{{ $loop->iteration + ($ctHoaDon->currentPage() - 1) * $ctHoaDon->perPage() }}</td>
                        <td>{{ $item->ctMaHoaDon }}</td>
                        <td>{{ $item->ctMaKhachHang }}</td>
                        <td>{{ $item->ctHoTenKhachHang }}</td>
                        <td>{{ $item->ctEmail }}</td>
                        <td>{{ $item->ctDienThoai }}</td>
                        <td>{{ $item->ctDiaChi }}</td>
                        <td>{{ number_format($item->ctTongTriGia, 0, ',', '.') }} VNĐ</td>
                        <td>{{ \Carbon\Carbon::parse($item->ctNgayHoaDon)->format('d/m/Y') }}</td>
                        <td>
                            @if($item->ctTrangThai == 1)
                               Đã Thanh Toán
                            @else
                                Chưa Thanh Toán
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Chi Tiết</a>
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        <td colspan="11" class="text-center">Chưa Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $ctHoaDon->links('pagination::bootstrap-5') }}
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
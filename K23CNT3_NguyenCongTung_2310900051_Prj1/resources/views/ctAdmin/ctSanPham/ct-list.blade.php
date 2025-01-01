@extends('_ctLayouts.ctAdmin._master')
@section('title', 'Danh Sách Sản Phẩm')    
@section('content-body')
<div class="container border mt-4 p-4">
    <div class="col-12 mb-3">
        <h1 class="text-center">Danh Sách Sản Phẩm</h1>
        <a href="/ctAdmin/SanPham/ct-create" class="btn btn-primary">Thêm Sản Phẩm</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Mã Loại</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ctSanPham as $item)
                    <tr>
                        <td>{{ $loop->iteration + ($ctSanPham->currentPage() - 1) * $ctSanPham->perPage() }}</td>
                        <td>{{ $item->ctMaSanPham }}</td>
                        <td>{{ $item->ctTenSanPham }}</td>
                        <td>
                            @if($item->ctHinhAnh)
                                <img src="{{ asset('images/' . $item->ctHinhAnh) }}" alt="{{ $item->ctTenSanPham }}" style="max-width: 100px; height: auto;">
                            @else
                                <span>Không có hình ảnh</span>
                            @endif
                        </td>
                        <td>{{ $item->ctSoLuong }}</td>
                        <td>{{ number_format($item->ctDonGia, 0, ',', '.') }}</td>
                        <td>{{ $item->ctMaLoai }}</td>
                        <td>
                            @if($item->ctTrangThai == 1)
                                Hiển Thị
                            @else
                                Khóa
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Xem</a>
                            <a href="/ctAdmin/SanPham/ct-edit/{{$item->id}}" class="btn btn-primary btn-sm">Sửa</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return ctNotice();">Xóa</a>   
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">Chưa Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $ctSanPham->links('pagination::bootstrap-5') }}
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
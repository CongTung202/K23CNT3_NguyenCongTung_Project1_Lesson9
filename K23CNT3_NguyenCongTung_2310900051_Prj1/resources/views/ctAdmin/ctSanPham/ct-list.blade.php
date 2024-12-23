@extends('_ctLayouts.ctAdmin._master')
@section('title', 'Danh Sách Sản Phẩm')    
@section('content-body')
<div class="container border">
    <div class="col-12">
        <h1>Danh Sách Loại Sản Phẩm</h1>
        <a href="/ctAdmin/SanPham/ct-create" class="btn btn-primary">Thêm</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã San Pham</th>
                        <th>Tên San Pham</th>
                        <th>Hinh Anh</th>
                        <th>So Luong</th>
                        <th>Don Gia</th>
                        <th>Ma Loai</th>
                        <th>Trang Thai</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($ctSanPham as  $item)
                    <tr>
                        <td>{{$loop->iteration+($ctSanPham->currentPage()-1)*$ctSanPham->perPage()}}</td>
                        <td>{{ $item->ctMaSanPham }}</td>
                        <td>{{ $item->ctTenSanPham }}</td>
                        <td>{{ $item->ctHinhAnh }}</td>
                        <td>{{ $item->ctSoLuong }}</td>
                        <td>{{ $item->ctDonGia }}</td>
                        <td>{{ $item->ctMaLoai }}</td>
                        <td>{{ $item->ctTrangThai }}</td>
                        <td>
                            <a href="#" class="btn btn-info">
                                Xem</a>
                            <a href="#" class="btn btn-primary">
                                Sửa</a>
                                <a href="#" class="btn btn-danger" onclick="return ctNoitice();">
                                    Xóa
                                </a>   
                                <script>
                                    function ctNoitice() {
                                        return confirm("Bạn có chắc chắn muốn xóa mục này?"); 
                                    }
                                </script>
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Chưa Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
            <tr>{{$ctSanPham->links('pagination::bootstrap-5')}}</tr>
        </div>
        
    </div>
    
</div>
@endsection
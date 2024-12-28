@extends('_ctLayouts.ctAdmin._master')
@section('title', 'Danh Sách Admin')    
@section('content-body')
<div class="container border">
    <div class="col-12">
        <h1>Danh Sách Các Admin</h1>
        <a href="/ctAdmin/ct-register" class="btn btn-primary">Thêm Mới</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ctAdmin as  $item)
                    <tr>
                        <td>{{$loop->iteration+($ctAdmin->currentPage()-1)*$ctAdmin->perPage()}}</td>
                        <td>{{ $item->ctTaiKhoan }}</td>
                        <td>{{ $item->ctMatKhau }}</td>
                        <td>{{ $item->ctTrangThai }}</td>
                        <td>
                                <a href="/ctAdmin/Admin/ct-list/{{$item->id}}" class="btn btn-danger" onclick="return ctNoitice();">
                                    Xóa
                                </a>
                                <a href="/ctAdmin/Admin/ct-edit/{{$item->id}}" class="btn btn-primary">
                                    Sửa
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
            <tr>{{$ctAdmin->links('pagination::bootstrap-5')}}</tr>
        </div>
        
    </div>
    
</div>
@endsection
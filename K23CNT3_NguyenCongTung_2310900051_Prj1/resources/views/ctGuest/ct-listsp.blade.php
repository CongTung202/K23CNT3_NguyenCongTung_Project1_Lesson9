@extends('_ctLayouts.ctGuest._master')
@section('title', 'Sản Phẩm')    

@section('content-body')
<div class="product-header btn">
    <h3 style="background-color:aquamarine; font-weight:bold; padding: 10px; text-align: center;">Một Số Sản Phẩm</h3>
</div>  
<div class="product-container">
    @forelse ($ctGuestSanPham as $item)
        <div class="product-card">
            @if($item->ctHinhAnh)
                <img src="{{ asset('images/' . $item->ctHinhAnh) }}" alt="{{ $item->ctTenSanPham }}" class="product-image">
            @else
                <span>Không có hình ảnh</span>
            @endif
            <div class="product-info">
                <h5>{{ $item->ctTenSanPham }}</h5>
                <p class="price">{{ number_format($item->ctDonGia, 0, ',', '.') }}đ</p>
                <p class="category">
                    @if($item->ctLoaiSanPham) <!-- Kiểm tra xem loại sản phẩm có tồn tại không -->
                        {{ $item->ctLoaiSanPham->ctTenLoai }} <!-- Truy cập tên loại sản phẩm -->
                    @else
                        Không có loại
                    @endif
                </p> 
                <p class="status">
                    @if($item->ctTrangThai == 1)
                        Còn Hàng
                    @else
                        Hết Hàng
                    @endif
                </p>
                
                @if($item->ctTrangThai == 1) 
                    <a href="#" class="btn btn-primary">Đặt Hàng</a>
                @else
                    <a href="#" class="btn btn-secondary">Đặt Trước</a>
                @endif
                <a href="#" class="btn btn-info">Xem chi tiết</a>
            </div>
        </div>
    @empty
        <p>Không có sản phẩm nào.</p>
    @endforelse
</div>
@endsection
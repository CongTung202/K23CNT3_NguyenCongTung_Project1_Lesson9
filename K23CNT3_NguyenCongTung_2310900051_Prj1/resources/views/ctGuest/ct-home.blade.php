@extends('_ctLayouts.ctGuest._master')
@section('title', 'Trang Chu')    

@section('content-body')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('imgbanner/banner1.png') }}" class="d-block" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imgbanner/banner2.png') }}" class="d-block" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imgbanner/banner3.png') }}" class="d-block" alt="Image 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<span><h3 style="background-color:aquamarine;font-weight:bold;width:calc(30%)">Một Số Sản Phẩm Nổi Bật</h3></span>
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
            </div>
        </div>
    @empty
        <p>Không có sản phẩm nào.</p>
    @endforelse
    </div>  
@endsection
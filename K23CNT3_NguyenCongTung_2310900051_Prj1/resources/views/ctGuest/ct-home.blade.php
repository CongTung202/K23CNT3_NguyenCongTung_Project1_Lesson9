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
<span><h3 style="background-color:aquamarine;font-weight:bold;width:calc(30%)">Một Số Sản Phẩm Nổi Bật</h3></span>
<div class="hot-sale">
     
    <div class="row">
        @forelse ($ctGuestSanPham as $item)
            <div class="column">
                <div class="card">
                    @if($item->ctHinhAnh)
                        <img src="{{ asset('images/' . $item->ctHinhAnh) }}" alt="{{ $item->ctTenSanPham }}" class="product-image">
                    @else
                        <span>Không có hình ảnh</span>
                    @endif
                    <div class="container">
                        <h5>{{ $item->ctTenSanPham }}</h5>
                        <p class="title">{{ number_format($item->ctDonGia, 0, ',', '.') }}đ</p>
                        <p>{{ $item->ctMaLoai }}</p>
                        <p>{{ $item->ctTrangThai }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>Không có sản phẩm nào.</p>
        @endforelse
    </div>
</div>  
@endsection
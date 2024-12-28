@extends('_ctLayouts.ctGuest._master')
@section('title', 'Sản Phẩm')    

@section('content-body')
<span><h3 style="background-color:aquamarine;font-weight:bold;width:calc(30%)">Một Số Sản Phẩm</h3></span>  
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
@endsection
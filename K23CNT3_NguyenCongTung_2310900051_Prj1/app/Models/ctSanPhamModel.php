<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctSanPhamModel extends Model
{
    use HasFactory;
    protected $table='CT_SAN_PHAM';
    protected $fillable = [
        'ctMaSanPham',
        'ctTenSanPham',
        'ctHinhAnh',
        'ctSoLuong',
        'ctDonGia',
        'ctMaLoai',
        'ctTrangThai'
    ];
}

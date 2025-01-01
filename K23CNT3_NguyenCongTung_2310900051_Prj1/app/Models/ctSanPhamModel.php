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
    public function ctLoaiSanPham()
    {
        return $this->belongsTo(CT_LOAI_SAN_PHAM::class, 'ctMaLoai', 'ctMaLoai');
    }
}

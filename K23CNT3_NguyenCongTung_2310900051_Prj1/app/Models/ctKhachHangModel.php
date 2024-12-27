<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctKhachHangModel extends Model
{
    use HasFactory;
    protected $table ='CT_KHACH_HANG';
    protected $fillable=['ctMaKhachHang','ctHoTenKhachHang','ctEmail','ctMatKhau','ctDienThoai','ctDiaChi'];
}

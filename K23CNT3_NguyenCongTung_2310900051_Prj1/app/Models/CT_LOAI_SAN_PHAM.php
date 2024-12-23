<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CT_LOAI_SAN_PHAM extends Model
{
    use HasFactory;
    protected $table='CT_LOAI_SAN_PHAM';
    protected $fillable = [
        'ctMaLoai',
        'ctTenLoai',
        'ctTrangThai',
    ];
}

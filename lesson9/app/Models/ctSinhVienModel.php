<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctSinhVienModel extends Model
{
    use HasFactory;
    protected $table='SINHVIEN';
    public $timestamps = false; // Tắt tính năng timestamps
}

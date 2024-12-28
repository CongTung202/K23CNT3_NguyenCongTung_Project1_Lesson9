<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctQuanTriModels extends Model
{
    use HasFactory;
    protected $table = "ct_quan_tri"; 
    protected $fillable = ['ctTaiKhoan','ctMatKhau','ctTrangThai'];
    protected $hidden = ['ctMatKhau','remember_token'];
    protected $timestamp =false;
}


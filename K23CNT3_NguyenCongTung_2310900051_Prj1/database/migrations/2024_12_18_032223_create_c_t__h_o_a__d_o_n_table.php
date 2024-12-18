<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('ctMaHoaDon',255)->unique();
            $table->string('ctMaKhachHang')->references('ctMaKhachHang')->on('CT_KHACH_HANG');
            $table->string('ctMaSanPham');
            $table->date('ctNgayHoaDon');
            $table->string('ctHoTenKhachHang');
            $table->string('ctEmail');
            $table->string('ctDienThoai',10);
            $table->string('ctDiaChi');
            $table->float('ctTongTriGia');
            $table->string('ctTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CT_HOA_DON');
    }
};

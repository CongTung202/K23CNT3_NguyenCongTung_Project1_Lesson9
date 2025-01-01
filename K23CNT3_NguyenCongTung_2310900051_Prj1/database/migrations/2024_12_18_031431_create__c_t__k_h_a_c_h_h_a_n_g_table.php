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
        Schema::create('CT_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('ctMaKhachHang',255)->unique();
            $table->string('ctHoTenKhachHang',255);
            $table->string('ctEmail',255);
            $table->string('ctMatKhau',255);
            $table->string('ctDienThoai',255);
            $table->string('ctDiaChi',255);
            $table->date('ctNgayDangKy')->default(now());
            $table->tinyInteger('ctTrangThai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_c_t__k_h_a_c_h_h_a_n_g');
    }
};

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
            $table->string('ctMaKhachHang');
            $table->foreign('ctMaKhachHang')->references('ctMaKhachHang')->on('CT_KHACH_HANG')->onDelete('cascade');
            $table->date('ctNgayHoaDon')->default(now());
            $table->string('ctHoTenKhachHang');
            $table->string('ctEmail')->unique();
            $table->string('ctDienThoai',10)->unique();
            $table->string('ctDiaChi');
            $table->decimal('ctTongTriGia',15,3);
            $table->string('ctTrangThai')->default(1);
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

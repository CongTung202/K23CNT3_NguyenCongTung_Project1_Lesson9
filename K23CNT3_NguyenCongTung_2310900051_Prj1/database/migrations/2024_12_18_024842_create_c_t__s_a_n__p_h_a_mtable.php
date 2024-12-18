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
        Schema::create('CT_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('ctMaSanPham')->unique();
            $table->string('ctTenSanPham');
            $table->string('ctHinhAnh');
            $table->integer('ctSoLuong');
            $table->float('ctDonGia');
            $table->string('ctMaLoai')->references('ctMaLoai')->on('CT_LOAI_SAN_PHAM');
            $table->tinyInteger('ctTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CT_SAN_PHAM');
    }
};

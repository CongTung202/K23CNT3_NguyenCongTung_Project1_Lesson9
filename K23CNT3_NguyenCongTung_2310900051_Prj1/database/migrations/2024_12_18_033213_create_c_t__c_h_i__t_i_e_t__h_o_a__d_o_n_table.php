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
        Schema::create('CT_CHI_TIET_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('ctHoaDonID')->references('id')->on('CT_HOA_DON');
            $table->string('sanPhamID')->references('id')->on('CT_SAN_PHAM');
            $table->integer('ctSoLuongMua');
            $table->float('ctDonGiaMua');
            $table->float('ctThanhTien');
            $table->tinyInteger('ctTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CT_CHI_TIET_HOA_DON');
    }
};

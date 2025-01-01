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
            $table->unsignedBigInteger('ctHoaDonID');
            $table->foreign('ctHoaDonID')->references('id')->on('CT_HOA_DON')->onDelete('cascade');
            $table->unsignedBigInteger('ctSSanPhamID');
            $table->foreign('ctSSanPhamID')->references('id')->on('CT_SAN_PHAM')->onDelete('cascade');
            $table->integer('ctSoLuongMua');
            $table->decimal('ctDonGiaMua',15,3);
            $table->decimal('ctThanhTien',15,3);
            $table->tinyInteger('ctTrangThai')->default(1);
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

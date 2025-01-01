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
        Schema::create('CT_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('ctTaiKhoan',255)->unique();
            $table->string('ctMatKhau',255);
            $table->tinyInteger('ctTrangThai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CT_QUAN_TRI');
    }
};

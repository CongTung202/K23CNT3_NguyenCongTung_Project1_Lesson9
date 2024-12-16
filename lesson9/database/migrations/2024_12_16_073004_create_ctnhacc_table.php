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
        Schema::create('ctnhacc', function (Blueprint $table) {
         //   $table->id();
          //  $table->timestamps();
        $table->string('MaNCC')->primary();
        $table->string('TenNCC');
        $table->string('Diachi');
        $table->string('Dienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctnhacc');
    }
};

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
        Schema::create('ctchitietpnhap', function (Blueprint $table) {
            $table->string('SoPn');
          $table->string('mavattu');
          $table->integer('soluongnhap');
          $table->float('dongianhap');
          $table->primary(['soPn','mavattu']);
          $table->foreign('SoPn')->references('SoPn')->on('ctpnhap');
          $table->foreign('mavattu')->references('mavattu')->on('ctvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctchitietpnhap');
    }
};

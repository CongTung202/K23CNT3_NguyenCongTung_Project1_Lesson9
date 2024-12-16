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
        Schema::create('ctchitietpxuat', function (Blueprint $table) {
            $table->string('SoPx');
          $table->string('mavattu');
          $table->integer('soluongxuat');
          $table->float('dongiaxuat');
          $table->primary(['soPx','mavattu']);
          $table->foreign('SoPx')->references('SoPx')->on('ctPxuat');
          $table->foreign('mavattu')->references('mavattu')->on('ctvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctchitietpxuat');
    }
};

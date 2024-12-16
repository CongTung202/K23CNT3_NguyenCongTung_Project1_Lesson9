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
        Schema::create('cttonkho', function (Blueprint $table) {
            $table->string('NamThang');
          $table->string('mavattu');
          $table->integer('soluongdau');
          $table->integer('tongsln');
          $table->integer('tongslx');
          $table->integer('soluongcuoi');
          $table->primary(['NamThang','mavattu']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cttonkho');
    }
};

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
        Schema::create('ctchitietdh', function (Blueprint $table) {
          //  $table->id();
           // $table->timestamps();
           $table->string('SoDH');
          $table->string('mavattu');
          $table->integer('soluongdat');
          $table->primary(['sodh','mavattu']);
          $table->foreign('SoDH')->references('SoDH')->on('ctdondh');
          $table->foreign('mavattu')->references('mavattu')->on('ctvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctchitietdh');
    }
};

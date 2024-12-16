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
        Schema::create('ctpnhap', function (Blueprint $table) {
            $table->string('SoPn');
            $table->date('ngaynhap');
            $table->string('sodonhang');
            
            $table->primary(['soPn']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpnhap');
    }
};

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
        Schema::create('ctpxuat', function (Blueprint $table) {
            $table->string('SoPx');
            $table->dateTime('NgayXuat');
            $table->string('TenKH');
            $table->primary(['SoPx']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpxuat');
    }
};

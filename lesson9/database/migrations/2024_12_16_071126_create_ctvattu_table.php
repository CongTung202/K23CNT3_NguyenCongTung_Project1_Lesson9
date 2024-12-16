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

            Schema::create('ctvattu',function (Blueprint $table){
                $table->string('mavattu')->primary();
                $table->string('tenvattu')->unique();
                $table->string('donvitinh');
                $table->float('phantram');           
           // $table->id();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctvattu');
    }
};

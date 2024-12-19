<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ctQUANTRITABLEseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        DB::table('CT_QUAN_TRI')->insert([
            'ctTaiKhoan'=>'CongTungBTR',
            'ctMatKhau'=>'Tung1234@',
            'ctTrangThai'=>0,
        ]);
        
        db::table('CT_QUAN_TRI')->insert([
            'ctTaiKhoan'=>'0334402527',
            'ctMatKhau'=>'Tung123@',
            'ctTrangThai'=>0,
        ]);
    }
}

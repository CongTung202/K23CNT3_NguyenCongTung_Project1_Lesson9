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
        $matkhau=md5("20022005");
        DB::table('CT_QUAN_TRI')->insert([
            'ctTaiKhoan'=>'CongTungBTR',
            'ctMatKhau'=>$matkhau,
            'ctTrangThai'=>0,
        ]);
        
        db::table('CT_QUAN_TRI')->insert([
            'ctTaiKhoan'=>'0334402527',
            'ctMatKhau'=>$matkhau,
            'ctTrangThai'=>0,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ctLOAISANPHAMseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('CT_LOAI_SAN_PHAM')->insert([
            'ctMaLoai'=>'DT001',
            'ctTenLoai'=>'Dien Thoai Co Dien',
            'ctTrangThai'=>'1',
        ]);
        DB::table('CT_LOAI_SAN_PHAM')->insert([
            'ctMaLoai'=>'DT002',
            'ctTenLoai'=>'Dien Thoai Thoi Trang',
            'ctTrangThai'=>'1',
        ]);
        DB::table('CT_LOAI_SAN_PHAM')->insert([
            'ctMaLoai'=>'DT003',
            'ctTenLoai'=>'Dien Thoai Phong Cach',
            'ctTrangThai'=>'0',
        ]);
    }
}

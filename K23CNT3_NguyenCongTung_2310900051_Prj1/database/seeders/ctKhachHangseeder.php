<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ctKhachHangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('CT_KHACH_HANG')->insert([
            'ctMaKhachHang'=>'KH01',
            'ctHoTenKhachHang'=>'Donald Trump',
            'ctEmail'=>'donaldtrump123@gmail.com',
            'ctMatKhau'=>'donaldeptrai',
            'ctDienThoai'=>'0123456789',
            'ctDiaChi'=>'NewYork',
            'ctNgayDangKy'=>now(),
            'ctTrangThai'=>'1',

        ]);
    }
}

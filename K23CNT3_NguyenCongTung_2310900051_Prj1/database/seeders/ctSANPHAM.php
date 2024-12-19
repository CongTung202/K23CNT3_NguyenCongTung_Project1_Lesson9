<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ctSANPHAM extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('CT_SAN_PHAM')->insert([
            'ctMaSanPham'=>'SP001',
            'ctTenSanPham'=>'Iphone 13',
            'ctHinhAnh'=>'images/sanpham/iphone13',
            'ctSoLuong'=>1,
            'ctDonGia'=>130000,
            'ctMaLoai'=>'DT001',
            'ctTrangThai'=>1,

        ]);
        DB::table('CT_SAN_PHAM')->insert([
            'ctMaSanPham'=>'SP002',
            'ctTenSanPham'=>'Iphone X',
            'ctHinhAnh'=>'images/sanpham/iphoneX',
            'ctSoLuong'=>1,
            'ctDonGia'=>800000,
            'ctMaLoai'=>'DT001',
            'ctTrangThai'=>1,
        ]);
        DB::table('CT_SAN_PHAM')->insert([
            'ctMaSanPham'=>'SP003',
            'ctTenSanPham'=>'SS S24 Ultra',
            'ctHinhAnh'=>'images/sanpham/SSS24U',
            'ctSoLuong'=>1,
            'ctDonGia'=>280000,
            'ctMaLoai'=>'DT002',
            'ctTrangThai'=>1,
        ]);
        DB::table('CT_SAN_PHAM')->insert([
            'ctMaSanPham'=>'SP003',
            'ctTenSanPham'=>'VIVO N5',
            'ctHinhAnh'=>'images/sanpham/VIVON5',
            'ctSoLuong'=>1,
            'ctDonGia'=>400000,
            'ctMaLoai'=>'DT003',
            'ctTrangThai'=>1,
        ]);
        DB::table('CT_SAN_PHAM')->insert([
            'ctMaSanPham'=>'SP004',
            'ctTenSanPham'=>'SS S23 Ultra',
            'ctHinhAnh'=>'images/sanpham/SSS23U',
            'ctSoLuong'=>1,
            'ctDonGia'=>300000,
            'ctMaLoai'=>'DT002',
            'ctTrangThai'=>1,
        ]);

    }
}

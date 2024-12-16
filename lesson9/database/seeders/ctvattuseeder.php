<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ctvattuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ctvattu')->insert([
            'mavattu' => 'DD01',
            'tenvattu' => 'Đầu DVD Hitachi 1 cửa',
            'donvitinh' => 'Bộ',
            'phantram' => 40,
        ]);
    }
}

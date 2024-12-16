<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ctnhaccseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker= Faker::create();
        foreach(range(1,18)as $index){
            DB::table('ctnhacc')->insert([
                'MaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'TenNCC'=>$faker->sentence(5),
                'Diachi'=>$faker->address(),
                'Dienthoai'=>$faker->phoneNumber(10),
                


            ]);
        }
    }
}

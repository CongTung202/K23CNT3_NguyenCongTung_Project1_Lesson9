<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ctvattuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        foreach(range(1,18)as $index){
            DB::table('ctvattu')->insert([
                'mavattu'=>$faker->word(),
                // 'MaNCC'=>$faker->word(15),
                'tenvattu'=>$faker->sentence(5),
                'donvitinh'=>$faker->word(3),
                'phantram'=>$faker->randomFloat('2',1,100)]);
                
        }
    }
}

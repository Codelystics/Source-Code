<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $priceList = ['free', '20.500', '100.000', '50.000', '999.999.999', '12.000', '25.000', 'free'];
        //
        $bootcampDatas=[
        ];

        for($i = 0; $i < 10; $i++){
            $name = 'bootcamp';
            $name .= $i;
            $temp = [
                'name' => $name,
                'details' => $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
                'price' => $faker->randomElements($priceList),
                'capacity' => $faker->numberBetween(1,99),
                'organizer_id' => $faker->numberBetween(1,3),
            ];

            array_push($bootcampDatas, $temp);
        };

        DB::table('bootcamps')->insert($bootcampDatas);
    }
}

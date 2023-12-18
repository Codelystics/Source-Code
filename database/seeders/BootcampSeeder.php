<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // init faker & price template
        $faker = Faker::create();
        $types = [
            'Frontend', 
            'Backend', 
            'Datascience', 
            'Fullstack', 
            'DevOps'
        ];
        // arr to contain all data
        $bootcampDatas=[
        ];
        // generate 10 datas
        for($i = 0; $i < 10; $i++){
            
            $startDate = $faker->dateTimeBetween('-2 week', '-1 day');
            $endDate = $faker->dateTimeBetween('now', '+1 month');
            $name = 'bootcamp '. $i . ' by juan hitam';
            
            $price = Null;
            if($faker->numberBetween(1,10) < 3){
                $price = 'free';
            }
            else{
                $temp = $faker->numberBetween(25,999) * 1000;
                $price = (string)$temp;
            }

            $temp = [
                'name' => $name,
                'details' => $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
                'price' => $price,
                'capacity' => $faker->numberBetween(1,199),
                'type' => $faker->randomElement($types),
                'start' => $startDate->format('Y-m-d H:i:s'),
                'end' => $endDate->format('Y-m-d H:i:s'),
                'organizer_id' => $faker->numberBetween(1,3),
            ];

            array_push($bootcampDatas, $temp);
        };

        DB::table('bootcamps')->insert($bootcampDatas);
    }
}

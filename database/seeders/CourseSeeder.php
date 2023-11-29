<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
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
        $courseDatas=[
        ];
        // generate 10 datas
        for($i = 0; $i < 10; $i++){
            $startDate = $faker->dateTimeBetween('-2 week', '-1 day');
            $endDate = $faker->dateTimeBetween('now', '+1 month');
            $name = $faker->randomElement($types)." ". $i;

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
                'type' => $faker->randomElement($types),
                'rating' => $faker->randomFloat(1,1,5),
                'organizer_id' => $faker->numberBetween(1,3),
            ];

            array_push($courseDatas, $temp);
        };

        DB::table('courses')->insert($courseDatas);
    }
}

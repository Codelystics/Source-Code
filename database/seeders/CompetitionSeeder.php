<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //// init faker & price template
        $faker = Faker::create();
        $types = [
            'Frontend', 
            'Backend', 
            'Datascience', 
            'Fullstack', 
            'GameDev', 
            'CaptureTheFlag'
        ];
        $locations = [
            'Semanggi, Senayan City',
            'Binus University, Kemanggisan',
            'ITC Binus kmg',
            'Palmerah, Kemanggisan',
            'Binus University, Alam Sutera',
            'BSD tempat tinggal sy',
            'Wakanda Forever'
        ];
        $cupNames = [
            'Reza Kecap Cup',
            'Julen Handoko Cup',
            'Juan Hitam Cup',
            'Dusteen Charity cup'
        ];
        // arr to contain all data
        $competitionDatas=[
        ];
        // generate 10 datas
        for($i = 0; $i < 10; $i++){
            $startDate = $faker->dateTimeBetween('-2 week', '-1 day');
            $endDate = $faker->dateTimeBetween('now', '+1 month');
            $name = $faker->randomElement($cupNames)." ". $i;

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
                'capacity' => $faker->numberBetween(1,99),
                'start' => $startDate->format('Y-m-d H:i:s'),
                'end' => $endDate->format('Y-m-d H:i:s'),
                'venue' => $faker->randomElement($locations),
                'organizer_id' => $faker->numberBetween(1,3),
            ];

            array_push($competitionDatas, $temp);
        };

        DB::table('competitions')->insert($competitionDatas);
    }
}

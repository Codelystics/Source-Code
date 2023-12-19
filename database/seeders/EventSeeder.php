<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use SebastianBergmann\Type\NullType;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $types = ['Conference', 'Seminar', 'Talkshow'];
        $locations = [
            'Semanggi, Senayan City',
            'Binus University, Kemanggisan',
            'ITC Binus kmg',
            'Palmerah, Kemanggisan',
            'Binus University, Alam Sutera',
            'BSD tempat tinggal sy',
            'Wakanda Forever'
        ];
        // arr to contain all data
        $eventDatas=[
        ];
        // generate 10 datas
        for($i = 0; $i < 10; $i++){
            
            $startDate = $faker->dateTimeBetween('-2 month', '-1 day');
            $endDate = $faker->dateTimeBetween('now', '+1 month');
            $name = "Mikel events ". $i;
            
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
                'start' => $startDate,
                'end' => $endDate,
                'venue' => $faker->randomElement($locations),
                'organizer_id' => $faker->numberBetween(1,3),
            ];

            array_push($eventDatas, $temp);
        };

        DB::table('events')->insert($eventDatas);
    }
}

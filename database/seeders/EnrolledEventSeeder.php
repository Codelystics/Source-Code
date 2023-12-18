<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EnrolledEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $userid = [2,2,6,7,8,9,9,10,10,10];
        $eventid = [7,9,7,5,3,1,5,4,8,10];
        $datas = [];
        for ($i=0; $i < 10; $i++) { 
            $temp = [
                // 'user_id'=>$faker->numberBetween(2,10),
                // 'event_id'=>$faker->numberBetween(1,10)
                'user_id'=>$userid[$i],
                'event_id'=>$eventid[$i]
            ];
            array_push($datas, $temp);
        }

        DB::table('enrolled_events')->insert($datas);
    }
}

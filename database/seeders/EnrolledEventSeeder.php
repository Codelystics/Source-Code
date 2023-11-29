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
        
        $datas = [];
        for ($i=0; $i < 10; $i++) { 
            $temp = [
                'user_id'=>$faker->numberBetween(2,10),
                'event_id'=>$faker->numberBetween(1,10)
            ];
            array_push($datas, $temp);
        }

        DB::table('enrolled_events')->insert($datas);
    }
}

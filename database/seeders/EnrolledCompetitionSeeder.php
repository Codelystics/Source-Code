<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EnrolledCompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        
        $userid = [2,3,3,4,4,6,6,7,8,9];
        $competitionid = [7,4,6,1,9,3,7,8,8,1];
        $datas = [];
        for ($i=0; $i < 10; $i++) { 
            $temp = [
                // 'user_id'=>$faker->numberBetween(2,10),
                // 'competition_id'=>$faker->numberBetween(1,10)
                'user_id'=>$userid[$i],
                'competition_id'=>$competitionid[$i]
            ];
            array_push($datas, $temp);
        }

        DB::table('enrolled_competitions')->insert($datas);
    }
}

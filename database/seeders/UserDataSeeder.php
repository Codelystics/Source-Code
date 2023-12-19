<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        $datas = [
            [
                'nik'=>'1122334455',
                'phone'=>$faker->phoneNumber(),
                'user_id'=>1,
                'organizer_id'=>1
            ]
        ];
        for ($i=2; $i < 5; $i++) { 
            $temp = [
                'nik'=>'1122334455',
                'phone'=>$faker->phoneNumber(),
                'user_id'=>$i,
                'organizer_id'=>$i-1
            ];
            array_push($datas, $temp);
        }
        DB::table('user_data')->insert($datas);
    }
}

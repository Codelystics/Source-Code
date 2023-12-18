<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'name' => 'mandalanian',
                'alias' => 'mdl'
            ],
            [
                'name' => 'erkaybe',
                'alias' => 'rkb'
            ],
            [
                'name' => 'bekasi',
                'alias' => 'bks'
            ]
        ];

        DB::table('organizers')->insert($datas);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userDatas = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => 'admin',
                'is_admin' => 1,
                'is_verified' => 0
            ],
            [
                'name' => 'Mikel Jon tan',
                'email' => 'mikel@example.com',
                'password' => 'mikel',
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'name' => 'Jefri Dam',
                'email' => 'jeff@example.com',
                'password' => 'jeff',
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'name' => 'Steven Handoko',
                'email' => 'steven@example.com',
                'password' => 'steven',
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'name' => 'Err Yoshi',
                'email' => 'err@example.com',
                'password' => 'err',
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'name' => 'Juna Chrish',
                'email' => 'juan@example.com',
                'password' => 'juan',
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'name' => 'Mas Hansen',
                'email' => 'hansen@example.com',
                'password' => 'hansen',
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'name' => 'Julen Hitam',
                'email' => 'julen@example.com',
                'password' => 'julen',
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'name' => 'Reza Kecap',
                'email' => 'reza@example.com',
                'password' => 'reza',
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'name' => 'dummy',
                'email' => 'dummy@example.com',
                'password' => 'dummy',
                'is_admin' => 0,
                'is_verified' => 0
            ],
        ];
        DB::table('users')->insert($userDatas);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
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
        $datas = [
            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'), 
                'is_admin' => 1,
                'is_verified' => 0
            ],
            [
                'username' => 'Mikel Jon tan',
                'email' => 'mikel@example.com',
                'password' => Hash::make('mikel'),
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'username' => 'Jefri Dam',
                'email' => 'jeff@example.com',
                'password' => Hash::make('jeff'),
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'username' => 'Steven Handoko',
                'email' => 'steven@example.com',
                'password' => Hash::make('steven'),
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'username' => 'Err Yoshi',
                'email' => 'err@example.com',
                'password' => Hash::make('err'),
                'is_admin' => 0,
                'is_verified' => 1
            ],
            [
                'username' => 'Juna Chrish',
                'email' => 'juan@example.com',
                'password' => Hash::make('juan'),
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'username' => 'Mas Hansen',
                'email' => 'hansen@example.com',
                'password' => Hash::make('hansen'),
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'username' => 'Julen Hitam',
                'email' => 'julen@example.com',
                'password' => Hash::make('julen'),
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'username' => 'Reza Kecap',
                'email' => 'reza@example.com',
                'password' => Hash::make('reza'),
                'is_admin' => 0,
                'is_verified' => 0
            ],
            [
                'username' => 'dummy',
                'email' => 'dummy@example.com',
                'password' => Hash::make('dummy'),
                'is_admin' => 0,
                'is_verified' => 0
            ],
        ];
        DB::table('users')->insert($datas);
    }
}

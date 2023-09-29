<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'BEMSSE FLORA',
            'email' => 'flora@gmail.com',
            'username' => 'B.FLORA',
            'roles_id' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MARAYO RUCIEN',
            'email' => 'rucien@gmail.com',
            'username' => 'M.RUCIEN',
            'roles_id' => 2,
            'password' => Hash::make('password'),
        ]); 

        DB::table('users')->insert([
            'name' => 'ROKUNDO BELYSE',
            'email' => 'rokundo@gmail.com',
            'username' => 'R.BELYSE',
            'roles_id' => 3,
            'password' => Hash::make('password'),
        ]); 
    }
}

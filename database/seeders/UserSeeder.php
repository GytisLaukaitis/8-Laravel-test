<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            [
            'name' => 'Mindaugas',
            'email' => 'mindaugas@gmail.com',
            'password' => Hash::make('mindaugas'),
            ],
            [
                'name' => 'Gytis',
                'email' => 'gytislaukaitis@gmail.com',
                'password' => Hash::make('gytis'),
                ],
        ]);
    }
}
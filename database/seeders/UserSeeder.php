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
        DB::table('users')->insert([
            [
                'name' => 'Alex Oscar',
                'password' => 'asd123',
                'age' => 28,
                'gender' => 'Masculino',
                'identification' => 70218511,
                'high' => 1.8,
                'weight' => 72
            ],
            [
                'name' => 'María Perla',
                'password' => 'asd123',
                'age' => 34,
                'gender' => 'Femenino',
                'identification' => 80218522,
                'high' => 1.5,
                'weight' => 50
            ],
            [
                'name' => 'Cielo Celeste',
                'password' => 'asd123',
                'age' => 50,
                'gender' => 'Femenino',
                'identification' => 23888591,
                'high' => 1.6,
                'weight' => 60
            ]
        ]);
    }
}

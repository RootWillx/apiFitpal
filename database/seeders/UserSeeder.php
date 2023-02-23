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
                'email' => 'Alex.oscar@hotmail.com',
                'password' => 'asd123',
                'age' => 28,
                'gender' => 'Masculino',
                'high' => 1.8,
                'weight' => 72,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'María Perla',
                'email' => 'Maria.Perla@gmail.com',
                'password' => 'asd123',
                'age' => 34,
                'gender' => 'Femenino',
                'high' => 1.5,
                'weight' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cielo Celeste',
                'email' => 'Cielo.Celeste@hotmail.com',
                'password' => 'asd123',
                'age' => 50,
                'gender' => 'Femenino',
                'high' => 1.6,
                'weight' => 60,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}

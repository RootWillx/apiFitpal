<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        DB::table('schedules')->insert([
            [
                'availability' => 'Si',
                'available_at' => date('Y-m-d H:i:s'),
                'class' => 'Zumba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'availability' => 'No',
                'available_at' => date('Y-m-d H:i:s'),
                'class' => 'Salsa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'availability' => 'Si',
                'available_at' => date('Y-m-d H:i:s'),
                'class' => 'Yoga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'availability' => 'Si',
                'available_at' => date('Y-m-d H:i:s'),
                'class' => 'Mambo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'availability' => 'No',
                'available_at' => date('Y-m-d H:i:s'),
                'class' => 'Sparring',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
    
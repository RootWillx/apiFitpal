<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('schedules')->insert([
            [
                'available' => '2023-03-05 13:12:00',
                'class' => 'Zumba'
            ],
            [
                'available' => '2023-03-05 15:12:00',
                'class' => 'Salsa'
            ],
            [
                'available' => '2023-03-05 11:12:00',
                'class' => 'Yoga'
            ],
            [
                'available' => '2023-03-05 19:12:00',
                'class' => 'Mambo'
            ],
            [
                'available' => '2023-03-05 14:12:00',
                'class' => 'Sparring'
            ]
        ]);
    }
}
    
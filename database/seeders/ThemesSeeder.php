<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('themes')->insert(
            array(
                array(
                    'description' => 'Book',
                ),
                array(
                    'description' => 'Characters',
                ),
                array(
                    'description' => 'Judges',
                ),
                array(
                    'description' => 'Lands',
                ),
                array(
                    'description' => 'Magic System',
                ),
                array(
                    'description' => 'Orders',
                ),
                array(
                    'description' => 'Protagonist',
                ),
                array(
                    'description' => 'Races',
                ),
                array(
                    'description' => 'Religion',
                ),
                array(
                    'description' => 'Others',
                ),
            )
        );

    }
}

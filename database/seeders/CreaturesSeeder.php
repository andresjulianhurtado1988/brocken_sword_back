<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreaturesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        DB::table('creatures')->insert(
            array(
                array(
                    'creature_name' => 'Shadow Hound',
                    'land_id' => mt_rand(1, 19),
                    'description' => '',

                ),
                array(
                    'creature_name' => 'Kiri',
                    'land_id' => mt_rand(1, 19),
                    'description' => '',

                ),
                array(
                    'creature_name' => 'Desert Dragoneer',
                    'land_id' => mt_rand(1, 19),
                    'description' => '',

                ),
                array(
                    'creature_name' => 'Giant Spider',
                    'land_id' => mt_rand(1, 19),
                    'description' => '',

                ),
                array(
                    'creature_name' => 'Ghost',
                    'land_id' => mt_rand(1, 19),
                    'description' => '',

                ),
                array(
                    'creature_name' => 'Kraken',
                    'land_id' => mt_rand(1, 19),
                    'description' => '',

                ),

            )
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LandsNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('lands_names')->insert(
            array(
                array(
                    'name' => 'Ostiria',
                    'land_type_id' => 1,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Vergginess',
                    'land_type_id' => 1,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Gheboren',
                    'land_type_id' => 1,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Kalter',
                    'land_type_id' => 1,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Naventi',
                    'land_type_id' => 1,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Berilo',
                    'land_type_id' => 7,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Bekan',
                    'land_type_id' => 3,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Apathia',
                    'land_type_id' => 6,
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Glynn',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Mohen',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Asa',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Vish Valanda',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Wulff',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Érdam',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Kerluke Kalian',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Yinkins',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Túrcoth',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                array(
                    'name' => 'Sipis',
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                // array(
                //     'name' => fake()->name(),
                //     'land_type_id' => mt_rand(2, 7),
                //     'created_by_migration' => 1,
                // ),
                array(
                    'name' => fake()->name(),
                    'land_type_id' => mt_rand(2, 7),
                    'created_by_migration' => 1,
                ),

            )
        );
    }
}
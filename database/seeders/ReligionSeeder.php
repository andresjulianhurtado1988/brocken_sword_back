<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('religion')->insert(
            array(
                array(
                    'deity' => 'Alensia',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Gárnor',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Vasterus',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Novgórod',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Kinsha',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Jan-zahan',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Tahl-Gara',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Phirya',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Ilvana',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Parina',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Hansín',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),
                array(
                    'deity' => 'Kriegd',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => mt_rand(1, 6),
                    'main_altar_land_id' => mt_rand(1, 5),
                    // por definir
                ),

                array(
                    'deity' => 'Dágoren',
                    'deity_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_pattern_id' => 8,
                    'main_altar_land_id' => 6,
                ),

            )
        );


    }
}
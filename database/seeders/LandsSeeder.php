<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lands')->insert(
            array(
                array(
                    'land_type_id' => 2,
                    'land_name' => 'Numbra',
                    'image' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'land_type_id' => 3,
                    'land_name' => 'Merak',
                    'image' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'land_type_id' => 4,
                    'land_name' => 'Meldáric',
                    'image' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'land_type_id' => 7,
                    'land_name' => 'Nammin',
                    'image' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'land_type_id' => 6,
                    'land_name' => 'Barakosia',
                    'image' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'land_type_id' => 1,
                    'land_name' => 'The Abbys',
                    'image' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                )
            )
        );

    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert(
            array(
                array(
                    'id_land' => 1,
                    'id_race' => 1,
                    'character_name' => 'Terissa of Numbra',
                    'magic_user' => 1,
                    'id_magic_system' => 6,
                    'age' => 16,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 2,
                    'id_race' => 1,
                    'character_name' => 'Haggen of Merak',
                    'magic_user' => 1,
                    'id_magic_system' => 3,
                    'age' => 35,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 4,
                    'id_race' => 1,
                    'character_name' => 'Ardos of Meldáric',
                    'magic_user' => 1,
                    'id_magic_system' => 7,
                    'age' => 27,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 4,
                    'id_race' => 1,
                    'character_name' => 'Hanna Black Fish',
                    'magic_user' => 1,
                    'id_magic_system' => 5,
                    'age' => 24,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 5,
                    'id_race' => 1,
                    'character_name' => 'Darius',
                    'magic_user' => 0,
                    'id_magic_system' => 1,
                    'age' => 50,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 6,
                    'id_race' => 2,
                    'character_name' => 'Dágoren',
                    'magic_user' => 1,
                    'id_magic_system' => 8,
                    'age' => 1000,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 2
                )
            )
        );
    }
}
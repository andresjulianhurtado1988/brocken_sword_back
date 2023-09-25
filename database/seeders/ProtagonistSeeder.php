<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProtagonistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('protagonist')->insert(
            array(
                array(
                    'name' => 'Haguen of Merak',
                    'land_id' => 2,
                    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem libero repudiandae laudantium quaerat, animi corporis nostrum, sit recusandae excepturi dolor nam unde sequi corrupti dolores molestiae aliquam eos! Aspernatur, asperiores.',
                ),
                array(
                    'name' => 'Terissa of Numbra',
                    'land_id' => 1,
                    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem libero repudiandae laudantium quaerat, animi corporis nostrum, sit recusandae excepturi dolor nam unde sequi corrupti dolores molestiae aliquam eos! Aspernatur, asperiores.',
                ),
                array(
                    'name' => 'Ardos of Meldaric',
                    'land_id' => 3,
                    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem libero repudiandae laudantium quaerat, animi corporis nostrum, sit recusandae excepturi dolor nam unde sequi corrupti dolores molestiae aliquam eos! Aspernatur, asperiores.',
                ),
                array(
                    'name' => 'Hanna "The Black Fish" of Naminn',
                    'land_id' => 4,
                    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem libero repudiandae laudantium quaerat, animi corporis nostrum, sit recusandae excepturi dolor nam unde sequi corrupti dolores molestiae aliquam eos! Aspernatur, asperiores.',
                ),

            )
        );
    }
}
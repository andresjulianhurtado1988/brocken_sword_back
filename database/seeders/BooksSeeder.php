<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('books')->insert(
            array(
                array(
                    'name' => 'A Dance With The Shadows',
                    'cover_image' => '',
                    'pages' => 0
                ),
                array(
                    'name' => 'The Frozen Bridge',
                    'cover_image' => '',
                    'pages' => 0
                ),
                array(
                    'name' => 'The Red Mirror',
                    'cover_image' => '',
                    'pages' => 0
                ),
                array(
                    'name' => 'The Broken Sword',
                    'cover_image' => '',
                    'pages' => 0
                ),

            )
        );
    }
}
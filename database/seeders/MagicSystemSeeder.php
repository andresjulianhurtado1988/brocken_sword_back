<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagicSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('magic_system')->insert(
            array(
                array(

                    'magic_name' => 'Not User',
                ),
                array(

                    'magic_name' => 'Hand Signs',
                ),
                array(

                    'magic_name' => 'Shadows',
                ),
                array(

                    'magic_name' => 'Stones',
                ),
                array(

                    'magic_name' => 'Whisper',
                ),
                array(

                    'magic_name' => 'The Vision',
                ),
                array(

                    'magic_name' => 'The Pulse or Impulse',
                ),
                array(

                    'magic_name' => 'The Mist of Darkness',
                )
            )
        );
    }
}
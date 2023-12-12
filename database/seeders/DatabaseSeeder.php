<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            LandTypeSeeder::class,
            LandsSeeder::class,
            RacesSeeder::class,
            MagicSystemSeeder::class,
            OrderSeeder::class,
            ReligionSeeder::class,
            CharacterSeeder::class,
            JudgeSeeder::class,
            CharactersNameSeeder::class,
            LandsNameSeeder::class,
            ProtagonistSeeder::class,
            BooksSeeder::class,
            ThemesSeeder::class,
            CreaturesSeeder::class,
            ImgThemesWorldSeeder::class
        ]);
    }
}

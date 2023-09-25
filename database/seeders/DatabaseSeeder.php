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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

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
            BooksSeeder::class
        ]);
    }
}
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            BrancheSeeder::class,
            menuItemSeeder::class,
            sauceSeeder::class,
            saladSeeder::class,
            drinkSeeder::class,
        ]);
    }
}

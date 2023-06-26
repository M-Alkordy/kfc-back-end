<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sauce')->delete();
        DB::table('sauce')->insert([
            ["id" => 1,
            "name" => "Buffalo Ranch",
            "price" => "1"],
            ["id" => 2,
            "name" => "KFC Sauce",
            "price" => "1.5"],
            ["id" => 3,
            "name" => "Honey BBQ",
            "price" => "1.5"],
            ["id" => 4,
            "name" => "Classic Ranch",
            "price" => "1.5"],
            ["id" => 5,
            "name" => "Honey Mustered",
            "price" => "1.5"],
            ["id" => 6,
            "name" => "No Sauce",
            "price" => "0"]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class drinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink')->delete();
        DB::table('drink')->insert([
            ["id" => 1,
            "name" => "Pepsi",
            "price" => "1"],
            ["id" => 2,
            "name" => "Diet pepsi",
            "price" => "1.5"],
            ["id" => 3,
            "name" => "Starry",
            "price" => "1.5"],
            ["id" => 4,
            "name" => "Mountain Dew",
            "price" => "1.5"],
            ["id" => 5,
            "name" => "Dr. Pepsi",
            "price" => "1.5"],
            ["id" => 6,
            "name" => "Lemonade",
            "price" => "0"]
        ]);
    }
}

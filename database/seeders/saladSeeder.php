<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class saladSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salad')->delete();
        DB::table('salad')->insert([
            ["id" => 1,
            "name" => "Secret Recipe Fries",
            "price" => "1"],
            ["id" => 2,
            "name" => "Mac & Cheese",
            "price" => "1.5"],
            ["id" => 3,
            "name" => "Mashed Potatoes",
            "price" => "1.5"],
            ["id" => 4,
            "name" => "Cole Slaw",
            "price" => "1.5"],
            ["id" => 5,
            "name" => "Sweet Corn",
            "price" => "1.5"],
            ["id" => 6,
            "name" => "Gravy",
            "price" => "2"]
        ]);
    }
}

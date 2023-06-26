<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menuItem')->delete();
        DB::table('menuItem')->insert([
            "id" => 1,
            "name" => "12 PC Tenders",
            "price" => "5",
            "calorie" => "15",
        ]);
    }
}

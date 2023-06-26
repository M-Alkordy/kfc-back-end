<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Country')->delete();
        DB::table('Country')->insert([
            ["id" => 1,
            "name" => "Anchorage",
            "postal_code" => "99503",],
            ["id" => 2,
            "name" => "Piedmont",
            "postal_code" => "36272",],
            ["id" => 3,
            "name" => "Forestdale",
            "postal_code" => "35214",],
        ]);
    }
}

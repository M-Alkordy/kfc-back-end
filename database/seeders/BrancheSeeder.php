<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Branch')->delete();
        DB::table('Branch')->insert([
            ["id" => 1,
            "name" => "1021 W Northern Lights Blvd",
            "location_lat" => "61.195517",
            "location_lng" => "-149.902049",
            "country_id" => 1],
            ["id" => 2,
            "name" => "206 Highway 278 Bypass East",
            "location_lat" => "33.9340956381629",
            "location_lng" => "-85.6106108628338",
            "country_id" => 2],
            ["id" => 3,
            "name" => "1229 Forestdale Boulevard",
            "location_lat" => "33.5607255877146",
            "location_lng" => "-86.8918061221074",
            "country_id" => 3],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "name" => Str::random(10),
                "description" => Str::random(40)
            ],
            [
                "name" => Str::random(10),
                "description" => Str::random(40)
            ],
            [
                "name" => Str::random(10),
                "description" => Str::random(40)
            ],
            [
                "name" => Str::random(10),
                "description" => Str::random(40)
            ],
            [
                "name" => Str::random(10),
                "description" => Str::random(40)
            ],
            [
                "name" => Str::random(10),
                "description" => Str::random(40)
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("colors")->insert([
            'id' => '1',
            'nombre'=> '#000000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("colors")->insert([
            'id' => '2',
            'nombre'=> '#ffffff',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("colors")->insert([
            'id' => '3',
            'nombre'=> '#0000ff',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("colors")->insert([
            'id' => '4',
            'nombre'=> '#ff0000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("rols")->insert([
            'id' => '1',
            'rol' => 'Admin',
            'label'=> 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("rols")->insert([
            'id' => '2',
            'rol' => 'Vendedor',
            'label'=> 'vendedor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("rols")->insert([
            'id' => '3',
            'rol' => 'Usuario',
            'label'=> 'usuario',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

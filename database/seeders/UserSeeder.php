<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'id' => '1',
            'rols_id' => '1',
            'name'=> 'paulina',
            'email'=> 'paulina@gmail.com',
            'password'=>'123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("users")->insert([
            'id' => '3',
            'rols_id' => '1',
            'name'=> 'oskitar',
            'email'=> 'oskitar@gmail.com',
            'password'=>'123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("users")->insert([
            'id' => '4',
            'rols_id' => '1',
            'name'=> 'jonatican',
            'email'=> 'jonatican@gmail.com',
            'password'=>'123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("users")->insert([
            'id' => '5',
            'rols_id' => '1',
            'name'=> 'samuelito',
            'email'=> 'samuelito@gmail.com',
            'password'=>'123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("users")->insert([
            'id' => '6',
            'rols_id' => '2',
            'name'=> 'un vendedor x',
            'email'=> 'vendedorsito@gmail.com',
            'password'=>'123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("users")->insert([
            'id' => '7',
            'rols_id' => '3',
            'name'=> 'usuario normal',
            'email'=> 'usuario@gmail.com',
            'password'=>'123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

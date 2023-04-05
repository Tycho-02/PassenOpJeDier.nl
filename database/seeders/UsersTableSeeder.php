<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('huisdier'),
            'role' => "Admin",        
        ]);

        DB::table('users')->insert([
            'name' => "Nienke",
            'email' => "nienke@gmail.com",
            'password' => bcrypt('huisdier'),
        ]);

        DB::table('users')->insert([
            'name' => "Mitch",
            'email' => "mitch@gmail.com",
            'password' => bcrypt('huisdier'),
        ]);

        DB::table('users')->insert([
            'name' => "Hans",
            'email' => "hans@gmail.com",
            'password' => bcrypt('huisdier'),         
        ]);

        DB::table('users')->insert([
            'name' => "Esther",
            'email' => "esther@gmail.com",
            'password' => bcrypt('huisdier'),
        ]);

    }
}

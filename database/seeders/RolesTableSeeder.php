<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Admin'
       ]);

       DB::table('roles')->insert([
          'role' => 'Gast'
     ]);

     DB::table('roles')->insert([
        'role' => 'Geblokkeerd'
   ]);
    }
}

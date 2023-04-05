<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SoortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soorten')->insert([
            'soort' => 'hond'
       ]);

       DB::table('soorten')->insert([
          'soort' => 'kat'
        ]);

       DB::table('soorten')->insert([
        'soort' => 'vogel'
        ]);

       DB::table('soorten')->insert([
         'soort' => 'vis'
        ]);

        DB::table('soorten')->insert([
            'soort' => 'overig'
           ]);

        
    }
}

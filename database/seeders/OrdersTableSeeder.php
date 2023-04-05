<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  DB;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       

        DB::table('orders')->insert([
            'user_id' => '1',
            'huisdier_id' => '1',
            'oppasser_id' => '2',
            'bericht' =>  'Hoi Nienke ik wil op je dier passen.'
        ]);
    }
}

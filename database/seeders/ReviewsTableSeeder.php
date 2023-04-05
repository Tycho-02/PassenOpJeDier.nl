<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'review' => "Bedankt voor de oppas!",
            'user_id' => "1",
            'huisdier_id' => "1",
            'order_id' => "1",
            'oppasser_id' => "2",
        ]);
    }
}


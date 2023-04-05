<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('images')->insert([
                'image' => '/img/huisdieren/hond.jpg',
                'image640' => '/img/huisdieren/hond640.webp',
                'image1280' => '/img/huisdieren/hond1280.webp',
                'image1920' => '/img/huisdieren/hond1920.webp',
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/overig.jpg',
                'image640' => '/img/huisdieren/overig640.webp',
                'image1280' => '/img/huisdieren/overig1280.webp',
                'image1920' => '/img/huisdieren/overig1920.webp',
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/vis.jpg',
                'image640' => '/img/huisdieren/vis640.webp',
                'image1280' => '/img/huisdieren/vis1280.webp',
                'image1920' => '/img/huisdieren/vis1920.webp',
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/vogel.jpg',
                'image640' => '/img/huisdieren/vogel640.webp',
                'image1280' => '/img/huisdieren/vogel1280.webp',
                'image1920' => '/img/huisdieren/vogel1920.webp',
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/kat.jpg',
                'image640' => '/img/huisdieren/kat640.webp',
                'image1280' => '/img/huisdieren/kat1280.webp',
                'image1920' => '/img/huisdieren/kat1920.webp',
            ]);
    }
}
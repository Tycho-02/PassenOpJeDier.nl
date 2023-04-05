<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class HuisdierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdier')->insert([
            'naam' => "Max",
            'image' => "/img/huisdieren/hond.jpg",
            'image640' => "/img/huisdieren/hond640.webp",
            'image1280' => "/img/huisdieren/hond1280.webp",
            'image1920' => "/img/huisdieren/hond1920.webp",
            'soort' => 'hond',
            'wanneer' => "27 Septemeber",
            'hoelang' => "3",
            'uurtarief' => "10.00",
            'user_id' => "1",
            'beschrijving' => "Max is een vriendelijke middelgrote hond die graag wandelt en apporteert. Goed getraind en zindelijk, kan soms verlegen zijn bij harde geluiden.",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Tessa",
            'image' => "/img/huisdieren/kat.jpg",
            'image640' => "/img/huisdieren/kat640.webp",
            'image1280' => "/img/huisdieren/kat1280.webp",
            'image1920' => "/img/huisdieren/kat1920.webp",
            'soort' => 'kat',
            'wanneer' => "3 februari",
            'hoelang' => "7",
            'uurtarief' => "15.00",
            'user_id' => "2",
            'beschrijving' => "Tessa is een rustige, volwassen kat die af en toe graag speelt. Ze houdt van knuffelen en heeft dagelijks wat aandacht nodig.",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Arie",
            'image' => "/img/huisdieren/vogel.jpg",
            'image640' => "/img/huisdieren/vogel640.webp",
            'image1280' => "/img/huisdieren/vogel1280.webp",
            'image1920' => "/img/huisdieren/vogel1920.webp",
            'soort' => 'vogel',
            'wanneer' => "26 februari",
            'hoelang' => "2",
            'uurtarief' => "12.00",
            'user_id' => "3",
            'beschrijving' => "Arie is een vrolijke, gezellige vogel die graag fluit en praat. Hij heeft dagelijks voldoende aandacht nodig en is dol op speeltjes en lekkers.",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Jan-Pieter",
            'image' => "/img/huisdieren/vis.jpg",
            'image640' => "/img/huisdieren/vogel640.webp",
            'image1280' => "/img/huisdieren/vis1280.webp",
            'image1920' => "/img/huisdieren/vis1920.webp",
            'soort' => 'vis',
            'wanneer' => "3 maart",
            'hoelang' => "1",
            'uurtarief' => "7.00",
            'user_id' => "4",
            'beschrijving' => "Jan-Pieter is een stille, kalme vis die regelmatig gevoerd moet worden en een schone omgeving nodig heeft. Hij houdt van een rustige en vredige omgeving.",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Youri",
            'image' => "/img/huisdieren/overig.jpg",
            'image640' => "/img/huisdieren/overig640.webp",
            'image1280' => "/img/huisdieren/overig1280.webp",
            'image1920' => "/img/huisdieren/overig1920.webp",
            'soort' => 'overig',
            'wanneer' => "26 februari",
            'hoelang' => "8",
            'uurtarief' => "8.00",
            'user_id' => "5",
            'beschrijving' => "Youri is een lief en speels konijn dat graag knabbelt aan hooi en groenten. Regelmatig oppakken en aaien wordt gewaardeerd. Houdt van een schoon en ruim hok.",
        ]);
    }
}

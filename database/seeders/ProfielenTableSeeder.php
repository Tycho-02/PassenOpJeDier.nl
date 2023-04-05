<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProfielenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profielen')->insert([
            'user_id' => '1',
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_daan.jpg',
            'foto_woonkamer640' => '/img/profielFotos/foto_woonkamer_daan640.webp',
            'foto_woonkamer1280' => '/img/profielFotos/foto_woonkamer_daan1280.webp',
            'foto_woonkamer1920' => '/img/profielFotos/foto_woonkamer_daan1920.webp',
            'foto_keuken' => '/img/profielFotos/foto_keuken_daan.jpg',
            'foto_keuken640' => '/img/profielFotos/foto_keuken_daan640.webp',
            'foto_keuken1280' => '/img/profielFotos/foto_keuken_daan1280.webp',
            'foto_keuken1920' => '/img/profielFotos/foto_keuken_daan1920.webp',
            'foto_huis' => '/img/profielFotos/foto_huis_daan.jpg',
            'foto_huis640' => '/img/profielFotos/foto_huis_daan640.webp',
            'foto_huis1280' => '/img/profielFotos/foto_huis_daan1280.webp',
            'foto_huis1920' => '/img/profielFotos/foto_huis_daan1920.webp',
            'beschrijving_woonkamer' => 'Dit is mijn woonkamer. Zoals je ziet er is genoeg plek voor het huisdier.',
            'beschrijving_keuken' => 'In de keuken plaats ik een voederbak, hier zal het huisdier eten.',
            'beschrijving_huis' => 'Dit is het vooraanzicht van het huis om een beeld te krijgen.',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '2',
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_cees.jpg',
            'foto_woonkamer640' => '/img/profielFotos/foto_woonkamer_cees640.webp',
            'foto_woonkamer1280' => '/img/profielFotos/foto_woonkamer_cees1280.webp',
            'foto_woonkamer1920' => '/img/profielFotos/foto_woonkamer_cees1920.webp',
            'foto_keuken' => '/img/profielFotos/foto_keuken_cees.jpg',
            'foto_keuken640' => '/img/profielFotos/foto_keuken_cees640.webp',
            'foto_keuken1280' => '/img/profielFotos/foto_keuken_cees1280.webp',
            'foto_keuken1920' => '/img/profielFotos/foto_keuken_cees1920.webp',
            'foto_huis' => '/img/profielFotos/foto_huis_cees.jpg',
            'foto_huis640' => '/img/profielFotos/foto_huis_cees640.webp',
            'foto_huis1280' => '/img/profielFotos/foto_huis_cees1280.webp',
            'foto_huis1920' => '/img/profielFotos/foto_huis_cees1920.webp',
            'beschrijving_woonkamer' => 'Hier de woonkamer het dier zal hier slapen.',
            'beschrijving_keuken' => 'In de keuken zal gegeten worden, ook door het dier.',
            'beschrijving_huis' => 'Hier een foto van het huis.',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '3',
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_woonkamer640' => '/img/profielFotos/default_foto_woonkamer640.webp',
            'foto_woonkamer1280' => '/img/profielFotos/default_foto_woonkamer1280.webp',
            'foto_woonkamer1920' => '/img/profielFotos/default_foto_woonkamer1920.webp',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_keuken640' => '/img/profielFotos/default_foto_keuken640.webp',
            'foto_keuken1280' => '/img/profielFotos/default_foto_keuken1280.webp',
            'foto_keuken1920' => '/img/profielFotos/default_foto_keuken1920.webp',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
            'foto_huis640' => '/img/profielFotos/default_foto_huis640.webp',
            'foto_huis1280' => '/img/profielFotos/default_foto_huis1280.webp',
            'foto_huis1920' => '/img/profielFotos/default_foto_huis1920.webp',
            'beschrijving_woonkamer' => 'In de foto is de woonkamer te zien. Klein maar gezellig.',
            'beschrijving_keuken' => 'De keuken is pas verbouwd en is gloednieuw. Beter plast het dier niet binnen hahaha',
            'beschrijving_huis' => 'Nou dit is de voorkant. Ook pas verbouwd.',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '4',
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_woonkamer640' => '/img/profielFotos/default_foto_woonkamer640.webp',
            'foto_woonkamer1280' => '/img/profielFotos/default_foto_woonkamer1280.webp',
            'foto_woonkamer1920' => '/img/profielFotos/default_foto_woonkamer1920.webp',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_keuken640' => '/img/profielFotos/default_foto_keuken640.webp',
            'foto_keuken1280' => '/img/profielFotos/default_foto_keuken1280.webp',
            'foto_keuken1920' => '/img/profielFotos/default_foto_keuken1920.webp',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
            'foto_huis640' => '/img/profielFotos/default_foto_huis640.webp',
            'foto_huis1280' => '/img/profielFotos/default_foto_huis1280.webp',
            'foto_huis1920' => '/img/profielFotos/default_foto_huis1920.webp',
            'beschrijving_woonkamer' => 'Hier de woonkamer. Het dier mag op de bank slapen, tenzij het een vogel of vis is.',
            'beschrijving_keuken' => 'In de keuken eet het dier.',
            'beschrijving_huis' => 'Dit is de voorkant van het huis.',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '5',
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_woonkamer640' => '/img/profielFotos/default_foto_woonkamer640.webp',
            'foto_woonkamer1280' => '/img/profielFotos/default_foto_woonkamer1280.webp',
            'foto_woonkamer1920' => '/img/profielFotos/default_foto_woonkamer1920.webp',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_keuken640' => '/img/profielFotos/default_foto_keuken640.webp',
            'foto_keuken1280' => '/img/profielFotos/default_foto_keuken1280.webp',
            'foto_keuken1920' => '/img/profielFotos/default_foto_keuken1920.webp',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
            'foto_huis640' => '/img/profielFotos/default_foto_huis640.webp',
            'foto_huis1280' => '/img/profielFotos/default_foto_huis1280.webp',
            'foto_huis1920' => '/img/profielFotos/default_foto_huis1920.webp',
            'beschrijving_woonkamer' => 'Ontzetten leuke woonkamer, vind je ook niet? hahaha',
            'beschrijving_keuken' => 'Hier de keuken waar lekker wordt gegeten.',
            'beschrijving_huis' => 'Het huis is groot zat, veel ruimte voor het dier dus.',
        ]);
    }
}




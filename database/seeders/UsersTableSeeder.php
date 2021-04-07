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
            'name' => "Tycho van Veen",
            'email' => "mail@tychovanveen.nl",
            'password' => bcrypt('12345678'),
            'role' => "Admin",
            'geboortedatum' => "2002-02-03",
        ]);

        DB::table('users')->insert([
            'name' => "Mitch van Veen",
            'email' => "mitch@mail.nl",
            'password' => bcrypt('12345678'),
            'isHuisdier' => true,
            'geboortedatum' => "2005-01-03",
        ]);

        DB::table('users')->insert([
            'name' => "Hans van Veen",
            'email' => "hans@mail.nl",
            'password' => bcrypt('12345678'),
            'isOppasser' => true,
            'geboortedatum' => "1968-05-04",
        ]);

        DB::table('users')->insert([
            'name' => "Esther van Veen",
            'email' => "esther@mail.nl",
            'password' => bcrypt('12345678'),
            'isOppasser' => true,
            'isHuisdier' => true,
            'geboortedatum' => "1972-12-12",
            'isBlocked' => true,
        ]);
    }
}

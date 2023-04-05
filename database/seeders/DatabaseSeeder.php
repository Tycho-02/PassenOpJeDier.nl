<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            SoortTableSeeder::class,
            ImagesTableSeeder::class,
            HuisdierTableSeeder::class,
            OrdersTableSeeder::class,
            ReviewsTableSeeder::class,    
            ProfielenTableSeeder::class,  
            RolesTableSeeder::class, 
        ]);
    }
}

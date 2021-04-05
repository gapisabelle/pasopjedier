<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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

            ImagesTableSeeder::class,
            KindOfPetTableSeeder::class,
            RolesTableSeeder::class,  
            UsersTableSeeder::class,
            CatPetTableSeeder::class,
            DogPetTableSeeder::class,       
            ResponseTableSeeder::class,
            

        ]);
}
}

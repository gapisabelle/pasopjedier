<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfPetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $kind_of_pet_array=["hond", "kat"];

            foreach($kind_of_pet_array as $kind_of_pet){
                DB::table('kind_of_pet')->insert([
                    'soort'=> $kind_of_pet
        
                ]);
        }
    }
}

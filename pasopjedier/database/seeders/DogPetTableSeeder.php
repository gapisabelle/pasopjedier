<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DogPetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet')->insert([
            'naam'=> "Bengel",
            'soort'=> 'hond',
            'datum'=> '2021-4-08',
            'uurtarief' => 12,
            'aantal_dagen' => 9,
            'belangrijke_zaken'=> "Bengel houdt van ballen vangen.",
            'owner'=>1,
            'image'=> '/img/dog_default.jpg',

        ]);
    }
}

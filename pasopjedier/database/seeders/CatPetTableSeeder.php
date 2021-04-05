<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatPetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pet')->insert([
            'naam'=> "Jane",
            'soort'=> 'kat',
            'datum'=> '12-4-2021',
            'uurtarief' => 10,
            'aantal_dagen' => 14,
            'belangrijke_zaken'=> "Jane houdt van kroelen",
            'owner'=>1,
            


        ]);
        DB::table('pet')->insert([
            'naam'=> "Bowie",
            'soort'=> 'kat',
            'datum'=> '21-4-2021',
            'uurtarief' => 15,
            'aantal_dagen' => 7,
            'belangrijke_zaken'=> "Als Bowie iets niet wilt, moet je het ook niet doen",
            'owner'=>2,

        ]);

    }
}


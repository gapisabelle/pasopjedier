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
            'name' => 'Jeroen Rijsdijk',
            'email' => 'rijsdijk.j@hsleiden.nl',
            'password' => bcrypt('laravel'),
            'role'=>'Admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Isabelle Oosterbaan',
            'email' => 'vuilnisbuiltje@gmail.com',
            'password' => bcrypt('isa'),
        ]);
        DB::table('users')->insert([
            'name' => 'Paula Rijsdijk',
            'email' => 'rijsdijk.p@hsleiden.nl',
            'password' => bcrypt('laravel'),
            'blocked' => true,
        ]);
    }
}

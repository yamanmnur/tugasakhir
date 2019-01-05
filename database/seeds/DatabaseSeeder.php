<?php

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
        $this->call(
            // UsersTableSeeder::class,
            // AnggtoaEkskulTableSeeder::class,
            // PelatihTableSeeder::class,
            // PembimbingTableSeeder::class,
            ArtikelTableSeeder::class
        );
        // $this->call(AnggtoaEkskulTableSeeder::class);
    }
}

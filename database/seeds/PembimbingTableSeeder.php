<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PembimbingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1,10) as $i) {
            DB::table('tb_pembimbing')->insert([
                   'nik' => $faker->nik,
                   'kode_ekskul' => 'EKS00'.$i,
                   'nama_pembimbing' =>$faker->name,
                   'jenis_kelamin' => $faker->randomElement(['Laki-laki' , 'Perempuan']),
                    'notlp' => $faker->phoneNumber, 
                   'foto' => 'xx',
                   'email' => $faker->email,
                   
            ]);    
        }
    }
}

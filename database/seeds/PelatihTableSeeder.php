<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PelatihTableSeeder extends Seeder
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
            DB::table('tb_pelatih')->insert([
                    'kode_pelatih' => 'KPL00'.$i,
                    'kode_ekskul' => 'EKS00'.$i,
                    'nama_pelatih' =>$faker->name,
                    'jenis_kelamin' => $faker->randomElement(['Laki-laki' , 'Perempuan']),
                    'agama' => $faker->randomElement(['islam' , 'kristen']),
                    'alamat' => $faker->address, 
                    'foto' => 'xx',
                    'tanggal_lahir' => '1908-12-06',
                    
            ]);    
        }    
    }
}

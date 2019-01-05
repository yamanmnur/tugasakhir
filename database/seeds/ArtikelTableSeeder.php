<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1,100) as $i) {
            DB::table('tb_artikel')->insert([
                    'kode_artikel' => 'ARK'.str_random(6),
                    
                    'judul' =>$faker->title,
                    'konten' => $faker->text,
                    'tujuan' => $faker->randomElement(
                        [
                            'semua' ,
                            'EKS001' , 'EKS002',
                        'EKS003' , 'EKS004',
                        'EKS005' , 'EKS006',
                        'EKS007' , 'EKS008',
                        'EKS009' , 'EKS010',
                        ]
                    ),
                    'status' => $faker->randomElement(['belum_dibaca' , 'dibaca']),
                    'pengirim' => 'admin'
                    
                    
            ]);    
        } 
    }
}

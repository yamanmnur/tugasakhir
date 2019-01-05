<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggtoaEkskulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->get();
        $faker = Faker::create('id_ID');
        foreach ($user as $i) {
            DB::table('tb_anggota_ekskul')->insert([
                    'nis' => $i->nis,
                    'kode_ekskul' => 
                    $faker->randomElement([
                        
                        'EKS001' , 'EKS002',
                        'EKS003' , 'EKS004',
                        'EKS005' , 'EKS006',
                        'EKS007' , 'EKS008',
                        'EKS009' , 'EKS010',
                        
                        ])
                    ,
                    'jabatan' =>$faker->randomElement(['ketua' , 'sekertaris','anggota']),
                    'status' => 'diterima',
                    
                    
            ]); 
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     ''
        // ]);
        
         $faker = Faker::create('id_ID');
         
         foreach (range(0,2000) as $i) {
             DB::table('users')->insert([
                    'nis' => $faker->nik,
                    'nama' =>$faker->name,
                    'kelas' => $faker->randomElement([
                        'XII TKI' , 'XII MESIN',
                        'XI TKI', 'XI MESIN',
                        'X TKI', 'X MESIN'
                        ]),
                    'agama' => $faker->randomElement(['Islam' , 'Kristen']),
                    'jenis_kelamin' => $faker->randomElement(['Laki-laki' , 'Perempuan']),
                    'alamat' => $faker->address,
                    'foto' => 'xx',
                    'email' => $faker->email,
                    'password' => Hash::make('password')
             ]);
         }
    }
}

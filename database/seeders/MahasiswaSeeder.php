<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use DB;
use Illuminate\Validation\Rules\Unique;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        

        for($i = 1; $i <= 200; $i++){
            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'nim' => $faker->unique()->numberBetween(2021220001, 2021129999),
                'jurusan' => 'Akuntansi'
                // 'jurusan' => 'SI' 32
                // 'jurusan' => 'RPL' 34
                // 'jurusan' => 'TI' 31
                // 'jurusan' => 'Manajemen administrasi' 12
                // 'jurusan' => 'Akuntansi' 21
                // Administrasi Perkantoran 11

            ]);

        }
    }
}

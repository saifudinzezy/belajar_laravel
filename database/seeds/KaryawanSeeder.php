<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker indonesia
        $faker = Faker::create('id_ID');

        //membuat data dummy sebanyak 10 buah
        for ($i=1; $i <= 10; $i++) { 
        	//insert data dummy pegawai faker
        	DB::table('karyawan')->insert([
        		'nama' => $faker->name,
        		'alamat' => $faker->address,
        	]);
        }
    }
}

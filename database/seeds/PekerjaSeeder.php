<?php

use Illuminate\Database\Seeder;
//panggil class Faker
use Faker\Factory as Faker;

class PekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kemudian simpan ke variabel $faker
    	//isi kode negara sesuai keinginan indonesia = id_ID
    	$faker = Faker::create('id_ID');
    	//https://github.com/fzaninotto/Faker
    	//https://laravel.com/docs/5.7/database-testing#writing-factories
    	for ($i=1; $i <= 50; $i++) { 
    		// insert data ke table pegawai
	        DB::table('pekerja')->insert([
	        	'nama' => $faker->name,	       
	        	'alamat' => $faker->address
	        ]);
        }
    }
}
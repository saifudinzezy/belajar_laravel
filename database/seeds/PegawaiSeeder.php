<?php

//faker untuk manipulasi memasukan data palsu
use Illuminate\Database\Seeder;
//panggil class Faker
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
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
	        DB::table('pegawai')->insert([
	        	'pegawai_nama' => $faker->name,
	        	'pegawai_jabatan' => $faker->jobTitle,
	        	'pegawai_umur' => $faker->numberBetween(25,40),
	        	'pegawai_alamat' => $faker->address
	        ]);
    	}

        /*// insert data ke table pegawai
        DB::table('pegawai')->insert([
        	'pegawai_nama' => 'Joni',
        	'pegawai_jabatan' => 'Web Designer',
        	'pegawai_umur' => 25,
        	'pegawai_alamat' => 'Jl. Panglateh'
        ]);*/
    }
}

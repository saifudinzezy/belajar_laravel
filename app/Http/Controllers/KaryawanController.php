<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model karyawan
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
    	//https://www.malasngoding.com/eloquent-laravel/
    	
    	//mengambil semua data karyawan
    	// $karyawan = Karyawan::all();

    	//mengambil data pertama karyawan
    	//$karyawan = Karyawan::first();

    	// mengambil data pegawai yang id nya 1
		//$karyawan = Karyawan::find(1); 

		// mengambil data pegawai yang bernama Salwa Aryani
		//$karyawan = Karyawan::where('nama', 'Prayoga'); 

		// mengambil data pegawai yang bernama Jamal Uwais
		//$karyawan = Karyawan::where('nama', '=' , 'Caturangga Prayoga'); 

		// mengambil data pegawai yang id nya lebih besar sama dengan 10 
		//$karyawan = Karyawan::where('id', '>=' , 10);

		// mengambil data pegawai yang di namanya ada huruf a 
		//$karyawan = Karyawan::where('nama', 'like' , '%a%');

		// menampilkan 10 data pegawai per halaman
		$karyawan = Karyawan::paginate(10);

    	//mengirim data karyawan ke view Karyawan
    	return view('karyawan', ['karyawan' => $karyawan]);
    }
}

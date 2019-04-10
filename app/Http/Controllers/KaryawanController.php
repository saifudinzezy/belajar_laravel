<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model karyawan
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
    	//mengambil semua data karyawan
    	$karyawan = Karyawan::all();

    	//mengirim data karyawan ke view Karyawan
    	return view('karyawan', ['karyawan' => $karyawan]);
    }
}

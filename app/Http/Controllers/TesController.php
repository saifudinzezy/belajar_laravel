<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    // menampilkan isi session
	public function tampilkanSession(Request $request) {
        //cek session jika ada
		if($request->session()->has('nama')){
            //ambil session 
			echo $request->session()->get('nama');
		}else{
			echo 'Tidak ada data dalam session.';
		}
	}
 
	// membuat session
	public function buatSession(Request $request) {
        //membuar session
		$request->session()->put('nama','Diki Alfarabi Hadi');
		echo "Data telah ditambahkan ke session.";
	}
 
	// menghapus session
	public function hapusSession(Request $request) {
        //hapus session
		$request->session()->forget('nama');
		echo "Data telah dihapus dari session.";
	}
}

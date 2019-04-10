<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
    	// return "Halllo ini di Controller dosen";
    	//memanggil view di resource/view
    	$nama = "Saifudin";
    	$pelajaran = ["Algoritma", "kalkulus", "Web"];
    	//kirim nilai ke view biodata
    	return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//panggil class Model Pegawai
use App\Pekerja;

class PekerjaController extends Controller
{
    public function index()
    {
    	$pekerja = Pekerja::all();
    	return view('pekerja', ['pekerja' => $pekerja]);
    }
}

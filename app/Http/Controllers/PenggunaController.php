<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//memanggil model pengguna
use App\Pengguna;

class PenggunaController extends Controller
{
    //
    public function index()
    {
        //mengambil semua data pengguna
        $pengguna = Pengguna::All();
        //return data ke view
        return view('pengguna', ['pengguna' => $pengguna]);
    }
}

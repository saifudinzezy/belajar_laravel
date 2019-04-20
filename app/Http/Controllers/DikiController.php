<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model
use App\Anggota;
use App\Hadiah;

class DikiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]);
    }
}

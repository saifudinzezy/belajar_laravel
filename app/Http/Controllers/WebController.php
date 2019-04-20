<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model article
use App\Article;

class WebController extends Controller
{
    //
    public function index()
    {
        //ambil semua data atikel beserta relasinya
        $artikel = Article::all();
        //kirim data ke view
        return view('article', ['artikel' => $artikel]);
    }
}

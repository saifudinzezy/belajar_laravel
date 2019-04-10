<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //home
    public function home()
    {
    	return view('home');
    }

    //tentang
    public function tentang()
    {
    	return view('tentang');
    }

    //kontak
    public function kontak()
    {
    	return view('kontak');
    }
}

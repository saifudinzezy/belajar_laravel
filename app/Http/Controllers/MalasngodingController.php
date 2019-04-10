<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
    	return view('input');
    }

    public function proses(Request $request)
    {
    	//custom pesan error
    	$message = [
    		'required' => ':attribute wajib diisi',
    		'min' => ':attribute harus diisi minimal :min karakter',
    		'max' => ':attribute harus diisi maksimal :max karakter',
    		'numeric' => ':attribute harus diisi angka'
    	];

    	//validasi form
    	/*$this->validate($request, [
    		'nama' => 'required|min:5|max:20',
    		'pekerjaan' => 'required',
    		'usia' => 'required|numeric'
    	]);*/

    	$this->validate($request, [
    		'nama' => 'required|min:5|max:20',
    		'pekerjaan' => 'required',
    		'usia' => 'required|numeric'
    	], $message);

    	return view('proses', ['data' => $request]);
    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//panggil class Model Pegawai
use App\Pekerja;

class PekerjaController extends Controller
{
	//load semua data
    public function index()
    {
    	$pekerja = Pekerja::all();
    	return view('pekerja.pekerja', ['pekerja' => $pekerja]);
    }

    //form create
    public function tambah()
    {
    	return view('pekerja.pekerja_tambah');
    }

    //create
    public function store(Request $request)
    {
    	//cek error / data kosong
    	$this->validate($request, [
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);

    	//jika data sukses di validasi maka simpan ditabel
    	//model dengan elequent
    	Pekerja::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);

    	return redirect('/pekerja');
    }
}

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

    //update
    //tangkap data sesuai parameter kiriman dari controller
    public function edit($id)
    {
    	//ambil data sesuai dengan id
    	$pekerja = Pekerja::find($id);
    	return view('pekerja.pekerja_edit', ['pekerja' => $pekerja]);
    }

    //update dengan put
    public function update($id, Request $request)
    {
        //validasi kiriman data cek kosong/tidak
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        //ambi data dan cari data sesuai id
        $pekerja = Pekerja::find($id);
        //masukan data ke field
        $pekerja->nama = $request->nama;
        //tadi error salah penyembutan request menjadi required
        $pekerja->alamat = $request->alamat;
        //simpan data
        $pekerja->save();
        return redirect('/pekerja');
    }
}
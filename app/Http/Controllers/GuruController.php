<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//model guru
use App\Guru;

class GuruController extends Controller
{
    //menampilkan data guru
    public function index()
    {
    	$guru = Guru::All();
    	return view('guru', ['guru' => $guru]);
    }

    //hapus sementara
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }

    //menampilkan data yang sudah dihapus
    public function trash()
    {
        //mengambil data guru yg telah dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

    //restore data yang sudah dihapus
    public function kembalikan($id)
    {
        //cari data yang sudah ke hapus(softdelete) sesuai id
        $guru = Guru::onlyTrashed()->where('id', $id);
        //kembalikan data
        $guru->restore();
        return redirect('/guru/trash');
    }

    //restore semua data
    public function kembalikan_semua()
    {
        //cari semua data yang ke softdelete
        $guru = Guru::onlyTrashed();
        //kembalikan data
        $guru->restore();
        return redirect('/guru/trash');
    }

    //hapus permanen
    public function hapus_permanen($id)
    {
        //hapus permanen sesuai id data
        $guru = Guru::onlyTrashed()->where('id', $id);
        //hapus data
        $guru->forceDelete();
        return redirect('/guru/trash');
    }

    //hapus permanen semua
    public function hapus_permanen_semua()
    {
        //hapus permanen semua data yang sudah ke softdelete
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();
        return redirect('/guru/trash');
    }
}

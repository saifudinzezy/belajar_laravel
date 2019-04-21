<?php

namespace App\Http\Controllers;
//panggil class session utk memakai fitur session flash()
use Session;

use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index(){
		return view('notifikasi');
    }
    
    public function sukses()
    {
        Session::flash('sukses', 'Ini  notif sukses');
        return redirect('pesan');
    }

    public function peringatan(){
		Session::flash('peringatan','Ini notifikasi PERINGATAN');
		return redirect('pesan');
	}

	public function gagal(){
		Session::flash('gagal','Ini notifikasi GAGAL');
		return redirect('pesan');
	}
}

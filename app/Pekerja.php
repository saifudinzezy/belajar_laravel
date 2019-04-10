<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
	//supaya mengakses tabel pekerja
    protected $table = 'pekerja';
    //tambah perintah untuk methode create
    //utk menempatkan nama kolom/field yang boleh diinput
    //simpan di variabel $guard jika ingin membuat proteksi kolom yang tidak
    //boleh diinput
    protected $fillable = ['nama','alamat'];
}
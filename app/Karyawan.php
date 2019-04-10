<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //agar model menghandel table karyawan bukan karyawans
    protected $table = "karyawan";
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//panggil lib soft deletenya
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    //pake class soft delete
    use SoftDeletes;
    //gunakan tabel guru
    protected $table = "guru";
    //gunakan fitur softdelete
    protected $dates = ['deleted_at'];
}

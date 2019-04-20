<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota";
    //membuat methode hadiah utk menghubungkan model anggota dan model hadiah
    public function hadiah()
    {
        return $this->belongsToMany('App\Hadiah');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
    protected $table = "pengguna";
    public function telepon()
    {
        //memberikan model pengguna bahwa tabel pengguna mpy relasi 1 ke model atau table telepon
        return $this->hasOne('App\Telepon');
    }
}

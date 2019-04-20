<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    //
    protected $table = "telepon";
    public function pengguna()
    {
        //model telepon terhubung ke model pengguna
        return $this->belongsTo('App\Pengguna');
    }
}

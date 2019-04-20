<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function article()
    {
        //deklarasikan table tags ini memiliki atau terhubung dengan model/table article
        return $this->belongsTo('App\Article');
    }
}

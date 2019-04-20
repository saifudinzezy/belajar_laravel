<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function tags()
    {
        //membuat relasi many ke model(table Tags), dan berarti article bisa mpy banyak tags
        return $this->hasMany('App\Tag');
    }
}

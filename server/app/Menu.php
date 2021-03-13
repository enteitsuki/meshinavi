<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function restaurant()
    {
        return $this->belongTo('App\Restaurant');
    }
}

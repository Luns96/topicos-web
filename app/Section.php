<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function class()
    {
        return $this->hasMany('App\schedule');
    }
}

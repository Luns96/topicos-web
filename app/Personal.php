<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public function schedule()
    {
        return $this->hasMany('App\schedule');
    }

    
}

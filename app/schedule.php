<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
   public function section()
    {
        return $this->hasOne('App\Section');
    }

    public function personal()
    {
        return $this->hasOne('App\Personal');
    }
}

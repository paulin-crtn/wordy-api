<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function definitions()
    {
        return $this->hasMany('App\Definition');
    }
}

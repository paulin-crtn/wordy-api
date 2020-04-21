<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    public function antonyms()
    {
        return $this->hasMany('App\Antonym');
    }

    public function synonyms()
    {
        return $this->hasMany('App\Synonym');
    }
}

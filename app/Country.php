<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public function cities(){
        return $this->hasMany('App\City');
    }

    public function formattedDate()
    {
        return $this->created_at->format('Y');
    }
}

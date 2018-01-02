<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    public function course(){
        return $this->hasMany('App\Course');
    }
}

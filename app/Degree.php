<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function course(){
        return $this->belongsTo('App/Course');
    }

    public function universities(){
        return $this->belongsToMany('App\Universities');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cyrildewit\PageVisitsCounter\Traits\HasPageVisitsCounter;

class Course extends Model
{


  public function univerity(){
    return $this->belongsTo('App\University');
  }
  public function discipline(){
      return $this->belongsTo('App\Discipline');
  }

  public function degree(){
      return $this->hasOne('App\Degree');
  }
}

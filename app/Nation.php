<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    public function athletes(){
      return $this->hasMany('App\Athlete');
    }
}

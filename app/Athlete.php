<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Athlete extends Model
{
    public function nation(){
        return $this->belongsTo('App\Nation');
    }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    protected $fillable = [
        'name',
        'genre',
        'nation_id',
    ];
}

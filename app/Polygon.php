<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polygon extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function coordinates()
    {
        return $this->hasMany('App\Coordinate');
    }
}

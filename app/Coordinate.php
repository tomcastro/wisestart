<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    public function polygon()
    {
        return $this->belongsTo('App\Polygon');
    }
}

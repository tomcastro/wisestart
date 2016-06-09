<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $guarded = [
    'id',
    ];

    public function polygons()
    {
        return $this->hasMany('App\Polygon');
    }
}
	
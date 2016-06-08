<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $guarded = [
    'id',
    ];

    public function polygons()
    {
        return $this->hasMany('App\Polygon');
    }
}
	
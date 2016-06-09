<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Coordinate;
use App\Polygon;
use App\Area;
use App\Http\Requests;


class MapController extends Controller
{
    public function index(){
    	$areas = Area::all();
    	return view('index', compact('areas'));
    }

    public function getPolygons($id){
    	$polygons = Area::find($id)->polygons;

    	foreach ($polygons as $key => $polygon) {
    		$coordinates = Polygon::find($polygon->id)->coordinates;
    		$polygon->coordinates = $coordinates;
    	}
    	
    	
    	return $polygons;
    }
}

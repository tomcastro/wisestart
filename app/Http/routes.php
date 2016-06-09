<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MapController@index');
Route::get('/edit', 'MapController@edit');
Route::get('/area/{id}/polygons', 'MapController@getPolygons');
Route::get('/area/{id}', 'MapController@getArea');
Route::get('/report', function () {
    return view('report');
});



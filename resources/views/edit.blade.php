@extends('layouts.app')
@section('scripts')
<script src="min/plugin-min.js"></script>
<script src="min/custom-min.js"></script>
<script src="js/gmaps.js"></script>
<script src="js/getPolygonsBy.js"></script>
<script src="js/countMarkersInside.js"></script>
<script src="js/colorByMarkers.js" ></script>
<script src="js/editMap.js"></script>
<script src="js/searchForPlaces.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDa8MJk2VV9QBkzjnEratB11lpuxkcxgyE&libraries=places&callback=initMap">
</script>
@endsection
@section('body')
<div class="section scrollspy" id="work">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <h2 class="header text_b">Agregar Sectores a una comuna </h2>
        <div class="row">
            <div class="col s12 m12">
                <div class="card" style="height: 400px">
                    <div id="map" class="card-content" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
            	<button id="add_polygon_btn" class="btn"><i class="material-icons left">mode_edit</i>Agregar Poligono</button>
                <button id="delete_polygon_btn" class="btn red" disabled><i class="material-icons left">delete</i>Borrar Poligono</button>
                <button id="save_polygon_btn" class="btn blue right" disabled><i class="material-icons left">done</i>Guardar Poligono</button>
            </div>
        </div>
        <div class="row">
            <div class="col s4 m4">
                <select class="browser-default" id="area_polygon_select">
                    <option disabled selected>Elige una comuna</option>
                    @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="divider"></div>       
    </div>
</div>
@endsection
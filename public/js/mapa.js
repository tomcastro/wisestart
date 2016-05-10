var map;
var markers = [];
var typeSelect = $('#type');

function initMap() {
    var penalolenCenter = new google.maps.LatLng(-33.4857978,-70.5487625);


    var penalolenCoords = [
    {lat: -33.459127,  lng: -70.572177},
    {lat: -33.462531,  lng: -70.562262},
    {lat: -33.463536,  lng: -70.544663},
    {lat: -33.462822,  lng: -70.541800},
    {lat: -33.465312,  lng: -70.531491},
    {lat: -33.459025,  lng: -70.529556},
    {lat: -33.459363,  lng: -70.515493},
    {lat: -33.463790,  lng: -70.515696},
    {lat: -33.498008,  lng: -70.508617},
    {lat: -33.512269,  lng: -70.541202},
    {lat: -33.509956,  lng: -70.588551},
    {lat: -33.508544,  lng:-70.589516}];

    map = new google.maps.Map(document.getElementById('map'), {
        center: penalolenCenter,
        zoom: 13
    });


    var penalolenPoly = new google.maps.Polygon({
    paths: penalolenCoords,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FFFF00',
    fillOpacity: 0.35,
    editable: false
  });



    penalolenPoly.setMap(map);

    

    typeSelect.on('change', function(){
        var type = this.value;

        deleteMarkers();

        var request = {
            location: penalolenCenter,
            radius: '3000',
            types: [type]
        };

        var search = new google.maps.places.PlacesService(map);
        search.nearbySearch(request, callback);

    });
    

    function createMarker(place) {
        var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location
        });
        markers.push(marker);
        var infowindow = new google.maps.InfoWindow({
           content: place.name
        });

        marker.addListener('click', function() {
        infowindow.open(map, marker);

        });
    }

    function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                createMarker(place);
            }
            var markersInPoly = countMarkersInside(penalolenPoly);
            ColorPolyByMarkers(penalolenPoly, markersInPoly);
        }
    }





    function setMapOnAll(map) {
      for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
      }
    }

    function clearMarkers() {
      setMapOnAll(null);
    }

    function deleteMarkers() {
      clearMarkers();
      markers = [];
    }

    function countMarkersInside(poly){
        var markersInside = 0;
        for (var i = 0; i < markers.length; i++) {
          if(google.maps.geometry.poly.containsLocation(markers[i].position , poly))
          {
            markersInside++;
          }
        }
        return markersInside;
    }
  

    function ColorPolyByMarkers(poly, number){

        if(number == 0){
            poly.setOptions({fillColor: "#AAAAAA"});
        }
        else if(number < 4){
            poly.setOptions({fillColor: "#0000FF"});
        }
        else{
            poly.setOptions({fillColor: "#FF0000"});
        }
    }

}
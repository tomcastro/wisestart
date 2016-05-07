var map;
var markers = [];

function initMap() {
    var penalolen = new google.maps.LatLng(-33.4857978,-70.5487625);

    map = new google.maps.Map(document.getElementById('map'), {
        center: penalolen,
        zoom: 14
    });

    var typeSelect = $('#type');

    typeSelect.on('change', function(){
        var type = this.value;

        clearMarkers();
        var request = {
            location: penalolen,
            radius: '1000',
            types: [type]
        };

        var search = new google.maps.places.PlacesService(map);
        search.nearbySearch(request, callback);
    });
}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            var place = results[i];
            createMarker(place);
        }
    }
}

function createMarker(place) {
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });
    markers.push(marker);
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
var map;

function initMap() {
    var penalolen = new google.maps.LatLng(-33.4857978,-70.5487625);

    map = new google.maps.Map(document.getElementById('map'), {
        center: penalolen,
        zoom: 14
    });

    var select = $('#rubro');

    select.on('change', function(){
        var value = this.value;

        var request = {
            location: penalolen,
            radius: "500",
            query: value
        };

        var search = new google.maps.places.PlacesService(map);
        search.search(request, callback);
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
    console.log(place.name);
    var marker = new google.maps.Marker({
        map: map,
        title: place.name,
        position: place.geometry.location
    });
}


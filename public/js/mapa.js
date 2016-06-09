var map;
var markers = [];
var activePolygons = [];
var activeArea;
var typeSelect = $('#type');
var areaSelect = $('#area');
var trafficSelect = $('#traffic');

$(document).ready(function(){
    
});

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.4857978, lng: -70.5487625},
        zoom: 13,
        scrollwheel: false
    });


    areaSelect.on('change', function(){
        let area = this.value;

        if(area != null)
        {   
            typeSelect.prop('disabled', false);
            typeSelect.val("0");
        }

        for(let polygon of activePolygons)
        {
            polygon.setMap(null);
        }

        activePolygons = [];

        $.ajax({
            url: "/area/"+area,
            success: function(result){
                map.panTo(result);
            }
        });

        $.ajax({
            url: "/area/"+area+"/polygons",
            success: function(result){
                for(let polygon of result){
                    polygon = new google.maps.Polygon({
                        paths: polygon.coordinates,
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#33FFFF',
                        fillOpacity: 0.35,
                        editable: false
                      });

                    activePolygons.push(polygon);

                }
                for(let polygon of activePolygons)
                    {
                        polygon.setMap(map);
                    }
            }
        });
    });


    typeSelect.on('change', function(){
        var type = this.value;

        deleteMarkers();

        var request = {
            location: activeArea.center,
            radius: '3000',
            types: [type]
        };

        var search = new google.maps.places.PlacesService(map);
        search.nearbySearch(request, callback);
        for(let polygon of activePolygons){

            let markers = countMarkersInside(polygon);

        }

    });

    
    var bikeLayer = new google.maps.BicyclingLayer();
    var trafficLayer = new google.maps.TrafficLayer();
    
    trafficSelect.on('change', function(){
        let type = this.value;

        switch (type) {
            case "auto":
                bikeLayer.setMap(null);
                trafficLayer.setMap(map);
                break;

            case "bici":
                trafficLayer.setMap(null);
                bikeLayer.setMap(map);
                break;

            case "loco":
                trafficLayer.setMap(null);
                bikeLayer.setMap(map);
                break;

            default:
                trafficLayer.setMap(null);
                bikeLayer.setMap(null);
                break;
        }
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
            for(let polygon of activePolygons)
            {
                for (var i = 0; i < results.length; i++)
                {
                    var place = results[i];
                    if(google.maps.geometry.poly.containsLocation(place.geometry.location, polygon))
                    {
                        createMarker(place);
                    }
                    
                } 
            }
             
        }
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
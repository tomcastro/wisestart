var addPolyBtn = $('#add_polygon_btn');
var deletePolyBtn = $('#delete_polygon_btn');
var savePolyBtn = $('#save_polygon_btn');
var polygon;
function initMap() {

	map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.4857978, lng: -70.5487625},
        zoom: 13,
        scrollwheel: false
    });

	addPolyBtn.on('click', function(){

		$(this).prop('disabled', true);
		deletePolyBtn.prop('disabled', false);
		savePolyBtn.prop('disabled', false);
		
		let polyCoords = [
     	 {lat: -33.488879 , lng: -70.549700 },
     	 {lat: -33.486364, lng: -70.557789}
  		];
  		
  		 polygon = new google.maps.Polygon({
		    paths: polyCoords,
		    strokeColor: '#FF0000',
		    strokeOpacity: 0.8,
		    strokeWeight: 3,
		    fillColor: '#FF0000',
		    fillOpacity: 0.35,
		    draggable: true,
		    editable: true
		  });
		  polygon.setMap(map);
	});

	deletePolyBtn.on('click', function(){
		polygon.setMap(null);
		polygon = null;
		$(this).prop('disabled', true);
		addPolyBtn.prop('disabled', false);
	});
}
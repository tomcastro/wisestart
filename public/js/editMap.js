var addPolyBtn = $('#add_polygon_btn');
var deletePolyBtn = $('#delete_polygon_btn');
var savePolyBtn = $('#save_polygon_btn');
var areaPolySelect = $('#area_polygon_select');
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
		savePolyBtn.prop('disabled', true);
	});

	savePolyBtn.on('click', function(){
		if(areaPolySelect.val() == null){
			alert("selecciona una comuna!!!  Aweonao.");
			return
		}
		var polygonPath = polygon.getPath();
		let path = [];
		for(let i = 0; i < polygonPath.getLength(); i++){
			let vertex = polygonPath.getAt(i);
			let coordinate = {lat: vertex.lat(), lng: vertex.lng()};
			path.push(coordinate);
		}
		let token = $('input[name=_token]').val();
		let area = areaPolySelect.val();
		console.log(path);
		$.ajax({
			url: "/polygons",
			type: "POST",
			data: {
				_token: token,
				path: path,
				area: area
			},
			success: function(result){
				alert("se creo la wea");
			},
		});
	});
}
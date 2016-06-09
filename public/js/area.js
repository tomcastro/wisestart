class Area {
    constructor(center, polygons) {
        this.center = center;
        this.polygons = polygons;
    }

    colorByMarkers(){
        for(let polygon of this.polygons)
        {
            let markersInside = this.countMarkersInside(polygon);
            if(markersInside == 0)
            {
                polygon.setOptions({fillColor: "#33FFFF"})
            }
            else if(markersInside < 3)
            {
                polygon.setOptions({fillColor: "#33FF33"});
            }
            else if(markersInside < 5)
            {
                polygon.setOptions({fillColor: "#FFFF33"});
            }
            else if(markersInside < 8)
            {
                polygon.setOptions({fillColor: "#FF9933"});
            }
            else if(markersInside < 10)
            {
                polygon.setOptions({fillColor: "#FF3333"});
            }
            else
            {
               polygon.setOptions({fillColor: "#FF0000"}); 
            }
        }
        
    }

    countMarkersInside(polygon){
        let markersInside = 0;

        for(let value of markers)
        {
            if(google.maps.geometry.poly.containsLocation(value.position, polygon))
            {
                markersInside++;
            }
        }
        return markersInside;
    }
    clear(){
        for(let polygon of this.polygons)
        {
            polygon.setMap(null);
        }
    }

    show(){

        for(let polygon of this.polygons)
        {
            polygon.setMap(map);
        }
    }
    resetColor(){
        for(let polygon of this.polygons)
        {
            polygon.setOptions({fillColor: "#33FFFF"}); 
        }
    }
}
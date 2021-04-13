
window.addEventListener('load', function () {

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD5Nf-Bw1vZ4ZtH0N-tbk7t6lDEvXVdALc&callback=createMap';
    document.body.appendChild(script);
});


//builds map and adds style
function createMap() {
    var mapOptions = {
        center: new google.maps.LatLng(53.810344,-1.910221),
        zoom: 12.3,
        disableDefaultUI: false,
        mapTypeControl: true,
        gestureHandling: "greedy",
        streetViewControl: false,
        //map style JSON information
        styles: [
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
        ],
    };
    var map = new google.maps.Map(document.getElementById("mapDiv"), mapOptions);
    drawWalk(map);
}


function drawWalk(map) {
    var directory = object_name.templateUrl;
    //iteration through an array that holds the lat and lang coordinates of a route
    fetch(directory + "/assets/json/bronte-walk.json").then(function (response) {
        return response.json();
    }).then(function (json) {
        var routes = json;
        var route = new google.maps.Polyline({
            path:routes[0],
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 0.7,
            strokeWeight:3
        });
        route.setMap(map);
    });
}


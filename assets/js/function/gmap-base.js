// if HTML DOM Element that contains the map is found...
//if (document.getElementById('map-canvas')){

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var icon = "../assets/img/ui/map-pin-school.png";

    var infoWindow = new google.maps.InfoWindow();

    for (var i = 0; i < markers.length; i++) {
        var data = markers[i];
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: icon,
            title: data.title,
        });
        infoWindow.setContent("<div class='info-window bs-strong'>" + "<div class='h5 font-weight-bold text-row-3'>" + data.title + "</div><div class='text-muted my-2'><i class='fas fa-map-marker-alt'></i>" + data.address + "</div><div class='text-row-1'>" + data.desc + "</div></div>");
                infoWindow.open(map, marker);
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("<div class='info-window bs-strong'>" + "<div class='h5 font-weight-bold text-row-3'>" + data.title + "</div><div class='text-muted my-2'><i class='fas fa-map-marker-alt'></i>" + data.address + "</div><div class='text-row-1'>" + data.desc + "</div></div>");
                infoWindow.open(map, marker);
            });
        })(marker, data);


    }

//}

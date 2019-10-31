var locations = [
    ['Transportec <br> R. Frei Henrique de Coimbra, 2305 - Hauer, Curitiba - PR<br> (41) 3217-4000', -25.4840109, -49.262237],
    ['Coleta de Oleo de Cozinha Instuto Manah<br> Rua Manoel Hygino dos Santos, 728 - Guaíra, Curitiba - PR <br> (41) 99646-0080', -25.4686402, -49.2725636],
    ['Estre Ambiental<br> R. João Bettega, 5480 - Portão, Curitiba - PR <br> (41) 2141-6400', -25.5059444, -49.329283],
    ['CLS Reciclagem<br> R. Paul Garfunkel, 1625 - Cidade Industrial de Curitiba, Curitiba - PR <br> (41) 3247-1316', -25.540686, -49.3352829],
    ['BR Aparas<br> Estr. do Ganchinho, 2981 - Umbará, Curitiba - PR <br> (41) 3373-8858', -25.5587234, -49.2680122]

];

var styles = [{
    'stylers': [{
            'visibility': 'on'
        },

    ]
}, {
    'featureType': 'road',
    'stylers': [{
        'visibility': 'on'
    }]
}];

var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: new google.maps.LatLng(-25.4623598, -49.250846),
});

map.setOptions({
    styles: styles
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        label: locations[i][3],
        map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
        }
    })(marker, i));
}
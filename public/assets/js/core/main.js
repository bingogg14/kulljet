$( document ).ready(function() {

    initMap();

    $( window ).resize(function() {
        initMap();
    });

    // Определяем переменную map
    var map;

    // Функция initMap которая отрисует карту на странице
    function initMap() {
        var styledMapType = new google.maps.StyledMapType(
            [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#181818"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1b1b1b"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8a8a8a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#373737"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#3c3c3c"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#4e4e4e"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#3d3d3d"
                        }
                    ]
                }
            ],
            {name: 'Dark Mode'});
        // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
        map = new google.maps.Map(document.getElementById('mapAdressModal'), {
            // При создании объекта карты необходимо указать его свойства
            // center - определяем точку на которой карта будет центрироваться
            center: {lat: 50.4039054, lng: 30.6826007},
            // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
            zoom: 16,
            mapTypeControlOptions: {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
            },
            streetViewControl: false,
            fullscreenControl: false,

            // Добавляем свои стили для отображения карты
            styles: [ {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{"lightness": 50}, {"visibility": "simplified"}]
            }, {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "off"}]}]

            //Associate the styled map with the MapTypeId and set it to display.
        });

        // Создаем маркер на карте
        var marker = new google.maps.Marker({

            // Определяем позицию маркера
            position: {lat: 50.4039054, lng: 30.6826007},

            // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
            map: map,

            // Пишем название маркера - появится если навести на него курсор и немного подождать
            title: 'Надежда Реготун'
        });

        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');

        // Создаем наполнение для информационного окна
        var contentString = '<div id="content-map">Kull Jet</div>';

        // Создаем информационное окно
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 320
        });

        infowindow.open(map, marker);

    }

});


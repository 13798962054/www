
    (function ($, window, document, undefined) {
    $(function () {
    var gme = new Object();

    gme.zoomTypes = new Array(0,1,2);
    gme.defaultMapTypes = new Array("roadmap", "satellite", "hybrid", "terrain", "vs");

    gme.mapSettings = {
    id: 'gme-' + 2,
    title: 'Anfahrt SI',
    width: '100%',
    height: '100%',
    zoom: 13,
    minZoom: 0,
    maxZoom: 0,
    lat: 49.803856,
    lng: 10.000141,
    kmlUrl: '',
    kmlPreserveViewport: false,
    kmlLocal: 0,
    scrollZoom: 0,
    draggable: 0,
    doubleClickZoom: 1,
    markerCluster: 0,
    markerClusterZoom: null,
    markerClusterSize: null,
    
            markerClusterStyle: '',
        
    markerSearch: 0,
    defaultType: 4,
    panControl: 0,
    scaleControl: 0,
    streetviewControl: 0,
    fullscreenControl: 0,
    zoomControl: 0,
    zoomControlType: 0,
    mapTypeControl: 1,
    showRoute: 0,
    calcRoute: 0,
    travelMode: 0,
    unitSystem: 2,
    showForm: 0,
    showCategories: 0,
    styledMapName: 'vs',
    
            styledMapCode: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
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
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
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
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
],
        
    defaultZoom: 11
    }

    gme.mapSettings.mapTypes = new Array();
    
        gme.mapSettings.mapTypes[0] = gme.defaultMapTypes[4];
    

    gme.request = new Array();

    

    gme.addresses = new Array();
    
        gme.addresses[0]  = {
        uid: 1,
        title: 'VS',
        latitude: 49.803856,
        longitude: 10.000141,
        address: 'Friedrich-Bergius-Ring 19, 97076 Würzburg',
        
                
                        marker: 'https://www.serion-immunologics.com/fileadmin/user_upload/pin_lila.svg',
                        imageSize: 1,
                    
            

        imageWidth: 43,
        imageHeight: 63,
        infoWindowContent: '',
        infoWindowLink: 1,
        
                openByClick: 0,
            
        
                closeByClick: 0,
            
        opened: 0,
        categories: ''
        }
    
        gme.addresses[1]  = {
        uid: 3,
        title: 'SI',
        latitude: 49.803856,
        longitude: 10.000141,
        address: 'Friedrich-Bergius-Ring 19, 97076 Würzburg',
        
                
                        marker: 'https://www.serion-immunologics.com/fileadmin/user_upload/pin_blau.svg',
                        imageSize: 0,
                    
            

        imageWidth: 43,
        imageHeight: 63,
        infoWindowContent: '',
        infoWindowLink: 1,
        
                openByClick: 0,
            
        
                closeByClick: 0,
            
        opened: 0,
        categories: ''
        }
    
        gme.addresses[2]  = {
        uid: 1,
        title: 'VS',
        latitude: 49.803856,
        longitude: 10.000141,
        address: 'Friedrich-Bergius-Ring 19, 97076 Würzburg',
        
                
                        marker: 'https://www.serion-immunologics.com/fileadmin/user_upload/pin_lila.svg',
                        imageSize: 1,
                    
            

        imageWidth: 43,
        imageHeight: 63,
        infoWindowContent: '',
        infoWindowLink: 1,
        
                openByClick: 0,
            
        
                closeByClick: 0,
            
        opened: 0,
        categories: ''
        }
    

    gme.ll = {};
    gme.ll.alert = "Please enter a valid address.";
    gme.ll.submit = "Calculate Route";
    gme.ll.noSearchResults = "No results found.";
    gme.ll.infoWindowLinkText = "Calculate Route";
    var $element = jQuery("#" + gme.mapSettings.id);
    $element.gomapsext(gme);
    if(gme.mapSettings.width.indexOf('%') != -1) {
        jQuery(window).resize(function() {
            $element.trigger('mapresize');
        });
    }

    }); // end of closure
    })(jQuery, window, document);

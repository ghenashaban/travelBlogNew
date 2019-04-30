<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
  overflow: hidden;
}

.map-marker {
    /* adjusting for the marker dimensions
    so that it is centered on coordinates */
    margin-left: -8px;
    margin-top: -8px;
}
.map-marker.map-clickable {
    cursor: pointer;
}
.pulse {
    width: 10px;
    height: 10px;
    border: 5px solid #f7f14c;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    background-color: #716f42;
    z-index: 10;
    position: absolute;
  }
.map-marker .dot {
    border: 10px solid #fff601;
    background: transparent;
    -webkit-border-radius: 60px;
    -moz-border-radius: 60px;
    border-radius: 60px;
    height: 50px;
    width: 50px;
    -webkit-animation: pulse 3s ease-out;
    -moz-animation: pulse 3s ease-out;
    animation: pulse 3s ease-out;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    position: absolute;
    top: -20px;
    left: -20px;
    z-index: 1;
    opacity: 0;
  }
  @-moz-keyframes pulse {
   0% {
      -moz-transform: scale(0);
      opacity: 0.0;
   }
   25% {
      -moz-transform: scale(0);
      opacity: 0.1;
   }
   50% {
      -moz-transform: scale(0.1);
      opacity: 0.3;
   }
   75% {
      -moz-transform: scale(0.5);
      opacity: 0.5;
   }
   100% {
      -moz-transform: scale(1);
      opacity: 0.0;
   }
  }
  @-webkit-keyframes "pulse" {
   0% {
      -webkit-transform: scale(0);
      opacity: 0.0;
   }
   25% {
      -webkit-transform: scale(0);
      opacity: 0.1;
   }
   50% {
      -webkit-transform: scale(0.1);
      opacity: 0.3;
   }
   75% {
      -webkit-transform: scale(0.5);
      opacity: 0.5;
   }
   100% {
      -webkit-transform: scale(1);
      opacity: 0.0;
   }
  }
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.5);

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

// Add image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.data = [ {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Brussels",
  "latitude": 50.8371,
  "longitude": 4.3676
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Copenhagen",
  "latitude": 55.6763,
  "longitude": 12.5681
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Paris",
  "latitude": 48.8567,
  "longitude": 2.3510
  }, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Rome",
  "latitude": 41.89193,
  "longitude": 12.51133
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Reykjavik",
  "latitude": 64.1353,
  "longitude": -21.8952
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Moscow",
  "latitude": 55.7558,
  "longitude": 37.6176
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Madrid",
  "latitude": 40.4167,
  "longitude": -3.7033
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "London",
  "latitude": 51.5002,
  "longitude": -0.1262,
  "url": "http://www.google.co.uk"
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Peking",
  "latitude": 39.9056,
  "longitude": 116.3958
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "New Delhi",
  "latitude": 28.6353,
  "longitude": 77.2250
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Tokyo",
  "latitude": 35.6785,
  "longitude": 139.6823,
  "url": "http://www.google.co.jp"
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Ankara",
  "latitude": 39.9439,
  "longitude": 32.8560
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Buenos Aires",
  "latitude": -34.6118,
  "longitude": -58.4173
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Brasilia",
  "latitude": -15.7801,
  "longitude": -47.9292
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Ottawa",
  "latitude": 45.4235,
  "longitude": -75.6979
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Washington",
  "latitude": 38.8921,
  "longitude": -77.0241
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Kinshasa",
  "latitude": -4.3369,
  "longitude": 15.3271
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Cairo",
  "latitude": 30.0571,
  "longitude": 31.2272
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Pretoria",
  "latitude": -25.7463,
  "longitude": 28.1876
} ];

// add events to recalculate map position when the map is moved or zoomed
chart.events.on( "mappositionchanged", updateCustomMarkers );

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers( event ) {
  
  // go through all of the images
  imageSeries.mapImages.each(function(image) {
    // check if it has corresponding HTML element
    if (!image.dummyData || !image.dummyData.externalElement) {
      // create onex
      image.dummyData = {
        externalElement: createCustomMarker(image)
      };
    }

    // reposition the element accoridng to coordinates
    var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
    image.dummyData.externalElement.style.top = xy.y + 'px';
    image.dummyData.externalElement.style.left = xy.x + 'px';
  });

}

// this function creates and returns a new marker element
function createCustomMarker( image ) {
  
  var chart = image.dataItem.component.chart;

  // create holder
  var holder = document.createElement( 'div' );
  holder.className = 'map-marker';
  holder.title = image.dataItem.dataContext.title;
  holder.style.position = 'absolute';

  // maybe add a link to it?
  if ( undefined != image.url ) {
    holder.onclick = function() {
      window.location.href = image.url;
    };
    holder.className += ' map-clickable';
  }

  // create dot
  var dot = document.createElement( 'div' );
  dot.className = 'dot';
  holder.appendChild( dot );

  // create pulse
  var pulse = document.createElement( 'div' );
  pulse.className = 'pulse';
  holder.appendChild( pulse );

  // append the marker to the map container
  chart.svgContainer.htmlElement.appendChild( holder );

  return holder;
}

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
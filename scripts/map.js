var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 42.21245, lng: -83.251335},
          zoom: 15
        });
      }


/* function myMap() {
  var myCenter = new google.maps.LatLng(42.21245,-83.251335);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
} */
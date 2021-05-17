//Displaying Maps
var map = null;

function setMapbox(latitude, longitude, zoomlevel) {
  mapboxgl.accessToken = 'pk.eyJ1IjoibmVib2pzYTE5ODUiLCJhIjoiY2s2bDVleWpnMGFneTNscDdxODhnY2E4OSJ9.sCvLe8uljA-aexs2ZQQMyA';
  this.map = new mapboxgl.Map({
    container: 'map-box',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [longitude, latitude],
    zoom: zoomlevel
  });

  this.map.addControl(new mapboxgl.NavigationControl());
  this.map.addControl(new mapboxgl.FullscreenControl());
}

function showAllMarkers(latitude, longitude, name, direction, address) {
  var popup = new mapboxgl.Popup({ offset: 25 })
  .setHTML('<label class="name">'+name+'</label><br/><label class="address">'+address+'</label><br/><a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination='+direction+'">Routenplaner aufrufen</a>');

  var marker = new mapboxgl.Marker()
  .setLngLat([longitude, latitude])
  .setPopup(popup)
  .addTo(this.map);

}

function setLocation(latitude, longitude) {
  this.map.flyTo({
    zoom: 13,
    center: [
      longitude, latitude
    ]
  });
}

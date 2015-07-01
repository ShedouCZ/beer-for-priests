<style>
body {
    padding: 0;
    margin: 0;
}
html, body {
    height: 100%;
    width: 100%;
}
#map {
	position:absolute;
    height:auto;
    bottom:0;
    top:0;
    left:0;
    right:0;
	margin-top: 52px;
}
</style>

 <div id="map"></div>

<script type="text/javascript">
	var map = L.map('map').setView([49.661215, 15.097085], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
		maxZoom: 13,
		minZoom: 12,
		id: 'ptica.mi8llj5g',
		accessToken: 'pk.eyJ1IjoicHRpY2EiLCJhIjoiN2RlYmQxM2I1MTIzMzIzNTA0NTkyMGYxNzlhYTY5NTcifQ.w8kTBZnG3SCAU-1XCG8cXA'
	}).addTo(map);

	L.Icon.Default.imagePath = '/img/leaflet';

	var marker = L.marker([49.661215, 15.097085]).addTo(map);
	marker.bindPopup("<b>Hello world!</b><br>I am a popup.");

	// http://yohanboniface.github.io/Leaflet.Editable/example/index.html

	map.on('click', function addMarker(e){
		var newMarker = new L.marker(e.latlng).addTo(map);
	});

	$('marker').on('dragend', function(event){
		var marker = event.target;
		var position = marker.getLatLng();
		alert(position);
		marker.setLatLng([position],{id:uni,draggable:'true'}).bindPopup(position).update();
	});

</script>

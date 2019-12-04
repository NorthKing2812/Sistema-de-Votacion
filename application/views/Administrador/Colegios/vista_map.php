
<style>
#mapid{
height:400px;
}
</style>

<div id="mapid">Ver mapa</div>


<script>

var map = L.map('mapid').setView([18.7357, -70.1627], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([18.73, -70.16]).addTo(map)
    .bindPopup()
    .openPopup();


</script>
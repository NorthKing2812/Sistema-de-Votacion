 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
</div>
<!-- jQuery -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>dist/js/adminlte.min.js"></script>
<!-- FLOT CHARTS -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/flot-old/jquery.flot.pie.min.js"></script>
<!-- PAGE PLUGINS -->
<!-- DataTables -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- leaflet -->
<script src="<?=base_url('asseut/leaflet/')?>leaflet.js"></script>
<!-- ChartJS -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>dist/js/pages/dashboard2.js"></script>
<script>
$(function(){
if($('#bar-chart').length>0){
        /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'Leoner Fernandez'], [2,'Gonzalo Castillo'], [3,'Luis Abinader'], [4,'Miguel Vargas'], [5,'Hipolito Mejia']]
      }
    })
    /* END BAR CHART */
}
$("#example1").DataTable();


var map = L.map('map').setView([18.65657, -72.374343], 06);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([18.256, -62.27]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

});
</script>
</body>
</html>
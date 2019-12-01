 
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
<!-- Select2 -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/moment/moment.min.js"></script>
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- leaflet -->
<script src="<?=base_url('asseut/leaflet/')?>leaflet.js"></script>

<script>

$(function(){
    let base_url="<?=base_url()?>";
//modal Mesas
    $('.btn-view-formcolegio').on("click",function(){
let id_colegio=0;
$.ajax({
  url:base_url+ "index.php/modalsChange/vistaColegio",
  type:"POST",
  datatype:"html",
  data:{id:id_colegio},
  success:function(data){
    $("#modal-colegio .modal-body").html(data);
  }
  });
});
$('.select2').select2({
      theme: 'bootstrap4'
    });
//modal ver mapa
$(".btn-view-mapacolegio").on('click',function(){
let id_colegio=0;
$.ajax({
url:base_url+ "index.php/modalsChange/vistaMapaColegio",
  type:"POST",
  datatype:"html",
  data:{id:id_colegio},
  success:function(data){
    $("#modal-colegio .modal-body").html(data);
  }


});

});
// mapa del modal

if($('#mapid').length>0){
    var map = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

}
});

</script>
</body>
</html>
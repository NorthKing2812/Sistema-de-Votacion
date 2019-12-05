 
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
let id_colegio=$(this).val();
console.log(id_colegio);
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
let coord= $(this).val().split(',');

$.ajax({
url:base_url+ "index.php/modalsChange/vistaMapaColegio",
  type:"POST",
  datatype:"html",
  data:{latitud:latitud, longitud:longitud},
  success:function(data){
    $("#modal-colegio .modal-body").html(data);
  }
});

});

//inputmask
//inputmask-numeric
$('#CodColegio').inputmask({
  alias: 'numeric',
  rightAlign: false, 
  allowMinus: false,   
 mask:'9999'
});

//inputmask-coord
$('.coordGeo').inputmask({
  alias: 'decimal',   
  digits:5,
  rightAlign: true,
  digitsOptional: false,
  allowMinus: true,
  groupSeparator: ",",
  digits: 5,
  max:99
});
//inputmask-tel
$('#tel').inputmask("(999) 999-9999");

//inputmask-email

$('#email').inputmask("{1,20}@{1,20}.{3}[.{2}]")

//Verificar si existe cod
$('#verificar').on('click',function(){

let codigo=$('#CodColegio').val();

$.ajax({
  url:base_url+ "index.php/querySelect/queryColegio",
  type:"POST",
  datatype:"html",
  data:{colegio:codigo},
  success:function(data){
   
    if(data=='1'){
      alert('Existe');
    $("#target :input").prop("disabled", true);
  }else{
    alert('No existe');
    $("#target :input").prop("disabled", false); 
  }
  }
});
});

});

</script>
</body>
</html>
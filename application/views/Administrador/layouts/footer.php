 
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

<!-- Bootstrap4 Duallistbox -->

<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/toastr/toastr.min.js"></script>
<!-- InputMask -->

<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/moment/moment.min.js"></script>

<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<!-- bs-custom-file-input -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- date-range-picker -->

<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/daterangepicker/daterangepicker.js"></script>

<!-- bootstrap color picker -->

<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

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




<script>
$(function(){

//Error & success alerts
//Alerts
const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
<?php 
    if($this->session->flashdata("error")){
      echo "toastr.error('{$this->session->flashdata("error")}');";
                                                
                          }
    if($this->session->flashdata("success")){
                            echo "toastr.success('{$this->session->flashdata("success")}');";
                          }
    ?>
//
//modals candidato
$('.btn-edit').on('click',function(event){
  event.preventDefault();
let href = $(this).attr('href');
$.ajax({
  url:href,
  type:'GET',
  datatype:"html",
  success:function(response){
    $('#modal-example .modal-body').html(response);
  }
});
});
let base_url="<?=base_url()?>";
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
$("#example1").DataTable(
  
);


        //Colorpicker
        $('.my-colorpicker1').colorpicker()
   
        $('.my-colorpicker1').on('colorpickerChange', function(event) {
      $('.my-colorpicker1 .fa-square').css('color', event.color.toString());
    });
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });


$('.btn-view-formcolegio').on("click",function(){
let id_colegio=0;
$.ajax({
  url:base_url+ "index.php/Welcome/vistaColegio",
  type:"POST",
  datatype:"html",
  data:{id:id_colegio},
  success:function(data){
    $("#modal-colegio .modal-body").html(data);
  }
  });
//
});

//Puestos cambios
$("#puestos").change(function(){

$("#puestos option:selected").each(function(){
  let puestos = $(this).val();
if(puestos ==2 || puestos==3){
$('#provincia').prop('disabled', false);
}else{
  $('#provincia').prop('disabled', true);
}
if(puestos==4||puestos==5){
  $('#municipio').prop('disabled', false);

}else{
  $('#municipio').prop('disabled', true);

}
});


});

if($('#map').lenght>0){
  var map = L.map('map').setView([18.65657, -72.374343], 06);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([18.256, -62.27]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
}
});
</script>
</body>
</html>
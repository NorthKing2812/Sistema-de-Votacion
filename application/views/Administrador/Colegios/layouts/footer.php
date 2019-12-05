 
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
<!-- SweetAlert2 -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/toastr/toastr.min.js"></script>
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
  
//DataTable
$("#example1").DataTable();
//Alerts
const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    <?php 
    if($this->session->flashdata("error")){
      echo "
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Error',
          class: 'bg-danger', 
          autohide: true,
          delay: 750,
          body: '{$this->session->flashdata("error")}'
        })
      });
      ";
                                                
                          }
    if($this->session->flashdata("success")){
                            echo "toastr.success('{$this->session->flashdata("success")}');";
                          }
                          ?>
    let base_url="<?=base_url()?>";
//modal Mesas
$('.btn-view-formcolegio').on("click",function(){
let id_colegio=$(this).val();
$.ajax({
  url:base_url+ "index.php/Mesas/form",
  type:"GET",
  datatype:"html",
  data:{id_colegio:id_colegio},
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



});// End modal ver mapa


$('.btn-edit').on('click',function(event){
  event.preventDefault();
let href = $(this).attr('href');
console.log(href);
$.ajax({
  url:href,
  type:'GET',
  datatype:"html",
  success:function(response){
    $('#modal-colegio .modal-body').html(response);
  }
});

});// End modal edit

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
//Deshibilitar todos los input:
$("#target :input").prop("disabled", true);
$('#CodColegio').on('keyup',function(){
 
let codigo=$(this).val();
if(codigo.length ==4){
$.ajax({
  url:base_url+ "index.php/colegio/exits",
  type:"POST",
  datatype:"html",
  data:{colegio:codigo},
  success:function(data){
    if(data=='1'){
      Toast.fire({
        type: 'error',
        title: 'Codigo invalido:existe un colegio con ese codigo.'
      })
    $("#target :input").prop("disabled", true);
  }else{
    
      Toast.fire({
        type: 'success',
        title: 'Codigo valido: codigo ingresado disponible.'
      })
    $("#target :input").prop("disabled", false); 
  }
 
  }
});
}
});

      

$('.checked-computado').on('click',function(){
  let mesa=$(this).val();
  let computado;
  if( $(this).is(':checked') ){
    computado=1;
     } else {
     computado=0;
    }
     $.ajax({
      url:base_url+'index.php/Mesas/changeComputo',
      type:'POST',
      data:{computo:computado,id_mesa:mesa},
      success:function(data){
        if(data==1){
          $(this).prop('checked',true); 
          Toast.fire({
        type: 'success',
        title: 'Mesa computarizada.'
      })
        }if(data==0){
          $(this).prop('checked',false);
          Toast.fire({
        type: 'success',
        title: 'Mesa no computarizada.'
      })
        }
      },
     });
});
});

</script>
</body>
</html>
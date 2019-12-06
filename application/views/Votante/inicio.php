<?php
$base= base_url('asseut/');
  if ($_POST) {
    $cedula = $_POST['cedula'];
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vota.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="<?=$base?>base/no.css" rel="stylesheet">
  <script type="text/javascript" src="<?=$base?>base/propio.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <form class="form-signin" method = "POST" action = "<?=base_url('index.php/User/presidenciales')?>">
              <div class="form-label-group">
                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su Cedula" maxlength="13" onkeypress="cedulas(); if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" required>
                <label for="cedula">Ingrese su cedula...</label>
              </div>
          
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type = "submit">Entrar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Toastr -->
<script>
<?php

if($this->session->flashdata('error')){
$error=$this->session->flashdata('error');
echo "
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
Toast.fire({
  icon: 'error',
  title: '{$error}'
})

";

}

?>
</script>
</html>
<?php

include("conexion.php");
 $con = conectar();

if ($_POST) {
  $cedula = $_POST["cedula"];
  $insertar = "INSERT INTO ced(cedula) VALUES('$cedula')";
  $resultado = mysqli_query($con, $insertar);
  if (!$resultado) {
    echo "error";
  }else{
    header('Location: selecciona.php');
  }
  mysqli_close($con);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vota.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="base/no.css" rel="stylesheet">
  <script type="text/javascript" src="base/propio.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <form class="form-signin" method = "POST">
              <div class="form-label-group">
                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su Cedula" maxlength="13" onkeypress="cedulas(); if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                <label for="cedula">Ingrese su cedula...</label>
              </div>
          
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type = "submit">Entrar</button>
              <hr class="my-4">
              <a class="btn btn-lg btn-google btn-block text-uppercase" href="https://www.google.com.do"><i class="fab fa-google mr-2"></i>Encuentranos en Google</a>
              <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="https://www.facebook.com.do"><i class="fab fa-facebook-f mr-2"></i>Encuentranos en Facebook</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
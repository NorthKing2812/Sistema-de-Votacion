<?php
    $base= base_url('base');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vota.com</title>
  <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2015/12/09/22/24/filmklappe-1085692_960_720.png">


<!-- Bootstrap core CSS -->
<link href="<?= $base; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?= $base; ?>/css/heroic-features.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="<?= $base; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $base; ?>/css/modern-business.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto&display=swap" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #070d59">
  <div class="container">
      <a class="navbar-brand fuente_titulo" href="">
         Vota.com tu plataforma para las votaciones</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>


<br>
<div class='container'>
<div class = "text-center">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1f3c88">
                <div class="container">
                    <a class="navbar-brand" href=""> </a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <h1 class="display-6 text-center">
                                <span class = "font-weight fuente_titulo" style="margin-left: 90px; color: white">Bienvenido a vota.com seleccione una opción</span>
                            </h1>
                    </div>
                  </div>
                </nav> 
              </div>
                <br>
                <div class="card-group">

                  <!-- Cards -->
                  <div class="col-sm-4" style="padding: 6px; margin-left: 70px">
                      <div class="card">
                          <a href="<?= base_url('user/presidenciales') ?>"><img src="http://aytomengibar.com/wp-content/uploads/2019/04/generica-votaciones-votar-elecciones-democracia-745x450.jpg"
                              class="card-img-top" alt="..."></a>
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Votaciones Presidenciales</h5>
                              <a href="<?= base_url('user/presidenciales') ?>" class="card-link">Votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px; margin-left: 200px">
                      <div class="card">
                          <a href="<?= base_url('user/municipales') ?>"><img src="https://elindependienteiguazu.com/wp-content/uploads/2019/01/elecciones-2019.jpg" class="card-img-top"
                              alt="..."></a>
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Votaciones Municipales</h5>
                              <a href="<?= base_url('user/municipales') ?>" class="card-link">Votar</a>
                          </div>
                      </div>
                  </div>
      
                  
                  <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
    </div>
  </div>
</div>
<br><br><br><br><br><br><br>

  <!-- Footer -->
  <footer class="py-5 bg-blue" style="background-color: #1f3c88">
    <div class="container">
    <p class="m-0 text-center text-white fuente_titulo">Neo Techniques &copy;Copyright</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

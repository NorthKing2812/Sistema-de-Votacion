<?php
    $base= base_url('base');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Vota.com</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'><link rel="stylesheet" href="<?= $base; ?>/style.css">

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


<!-- partial:index.partial.html -->
<!-- Multi step form --> 
<section class="multi_step_form">  
  <form id="msform"> 
    <!-- Tittle -->
    <div class="tittle">
      <br>
      <h2>Proceso de Selección Municipal</h2>
      <p>Para que sus votos sean validados debe completar con este proceso de 3 pasos</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Alcaldes</li>  
      <li>Regidores</li> 
      <li>Directores de distritos municipales</li>
    </ul>
    <!-- fieldsets -->

    <!-- Parte 1 -->
    <fieldset>
    
      <div class="card-group">

                  <!-- Cards -->
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top w-50" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
                  <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
              <br>
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>



    <!-- Parte 2 -->

    <fieldset>
       <div class="card-group">

                  <!-- Cards -->
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
                  <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
              <br>
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>

    <!-- Parte 3 -->  
    <fieldset>
       <div class="card-group">

                  <!-- Cards -->
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-sm-4" style="padding: 6px">
                      <div class="card">
                          <img src="https://reddenoticias.online/wp-content/uploads/2019/10/Leonel-Fern%C3%A1ndez-e1569260131663.jpg"
                              class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title fuente_cuerpo">Leonel Fernandez (El líder)</h5>
                              <h5 class="card-title fuente_cuerpo">Partido de la Liberación Dominicana (PLD)</h5>
                              <a href="desarrollador_software.html" class="card-link">Cambiar esto por algo de votar</a>
                          </div>
                      </div>
                  </div>
                  <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
              <br>
      <button type="button" class="action-button previous previous_button">Back</button> 
      <a href="#" class="action-button">Finish</a> 
    </fieldset>  
</section> 

<!-- End Multi step form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script><script  src="<?= $base; ?>/script.js"></script>

</body>
</html>
<?php
    $base= base_url('asseut/base');
    if ($_POST) {
        $cedula = $_POST;
        $rs = Usuarios::revisar($cedula);
        if ($rs) {
            
            $this->session->set_flashdata("error","Error: al insertar Registro");
                redirect(base_url(''));
            
        }else{
        Usuarios::guardar($cedula);
        $rss = Usuarios::conocer($cedula);
    }
    }
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
      <h2>Proceso de Selección Presidencial</h2>
      <p>Para que sus votos sean validados debe completar con este proceso de 3 pasos</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Presidente</li>  
      <li>Senadores</li> 
      <li>Diputados</li>
    </ul>

    <!-- fieldsets -->
<?php
foreach ($rss as $ids) {
    $id = $ids->id_votante;
}
?>
    <!-- Parte 1 -->
    <fieldset>
    
      <div class="card-deck">
      <!-- Cards -->
      <?php 
       /*Ninguno*/
       echo <<<HOLA
       <div class="col-sm-4" style="padding: 6px">
       <div class="card">
       <a onclick = "funciona({$id}, 0, 1);" href = "#"> 
       <img src="https://images.squarespace-cdn.com/content/v1/5aaecb177c9327b031576455/1569620728768-4RZ5KETJAQDLXPZDWEAB/ke17ZwdGBToddI8pDm48kLXCf88_9uNTKXkq27cF4sB7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmzUsryC7riGV7bTeYhg5Sep4Y8p3OCJVqs3FfNTLch3O2M0DsfUdwheg190rC2-Re/user-icon-flat-style-isolated-on-white-background-vector-id1084418050.jpg"
               class="card-img-top" alt="..."> </a>
           <div class="card-body">
               <h5 class="card-title fuente_cuerpo">No votar por nadie</h5>
               <h5 class="card-title fuente_cuerpo">No deseo votar</h5>
           </div>
       </div>
   </div>
 HOLA;
            $rs = Usuarios::listados(1);
            foreach ($rs as $candidato) {
                
                $path_img=base_url('uploads/candidato/').$candidato->foto;
            echo <<<HOLA
            <div class="col-sm-4" style="padding: 6px">
            <div class="card">
            <a onclick = "funciona($id, $candidato->id_candidato, 1);" href = "#"> 
            <img src="{$path_img}"
                    class="card-img-top" alt="..."> </a>
                <div class="card-body">
                    <h5 class="card-title fuente_cuerpo">{$candidato->nombre} {$candidato->apellido}</h5>
                    <h5 class="card-title fuente_cuerpo">{$candidato->partido_nombre} {$candidato->siglas}</h5>
                </div>
            </div>
        </div>
    HOLA;
            }
            ?>
                  <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
              <br>
      <button type="button" class="next action-button" id = "siguiente1" hidden>Continue</button>  
    </fieldset>

    <!-- Parte 2 -->
    <?php
foreach ($rss as $ids) {
    $id = $ids->id_votante;
}
?>
    <fieldset>
       <div class="card-deck">

                  <!-- Cards -->
                  <?php 
                   /*Ninguno*/
                   echo <<<HOLA
                   <div class="col-sm-4" style="padding: 6px">
                   <div class="card">
                   <a onclick = "funciona($id, 0, 2);" href = "#"> 
                   <img src="https://images.squarespace-cdn.com/content/v1/5aaecb177c9327b031576455/1569620728768-4RZ5KETJAQDLXPZDWEAB/ke17ZwdGBToddI8pDm48kLXCf88_9uNTKXkq27cF4sB7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmzUsryC7riGV7bTeYhg5Sep4Y8p3OCJVqs3FfNTLch3O2M0DsfUdwheg190rC2-Re/user-icon-flat-style-isolated-on-white-background-vector-id1084418050.jpg"
                           class="card-img-top" alt="..."> </a>
                       <div class="card-body">
                           <h5 class="card-title fuente_cuerpo">No votar por nadie</h5>
                           <h5 class="card-title fuente_cuerpo">No deseo votar</h5>
                       </div>
                   </div>
               </div>
             HOLA;
            $rs = Usuarios::listados(3);
            foreach ($rs as $candidato) {
             
                
                $path_img=base_url('uploads/candidato/').$candidato->foto;
            echo <<<HOLA
            <div class="col-sm-4" style="padding: 6px">
            <div class="card h-100">
            <a onclick = "funciona($id, $candidato->id_candidato, 2);" href = "#"> 
            <img src="{$path_img}"
                    class="card-img-top w-50" alt="..."> </a>
                <div class="card-body">
                    <h5 class="card-title fuente_cuerpo">{$candidato->nombre} {$candidato->apellido}</h5>
                    <h5 class="card-title fuente_cuerpo">{$candidato->partido_nombre} {$candidato->siglas}</h5>
                </div>
            </div>
        </div>
    HOLA;
            }
            ?>
                    <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
              <br>
      <button type="button" class="next action-button" id="siguiente2" hidden>Continue</button>  
    </fieldset>

    <!-- Parte 3 --> 
    <?php
foreach ($rss as $ids) {
    $id = $ids->id_votante;
}
?> 
    <fieldset>
       <div class="card-deck">

                  <!-- Cards -->
                  <?php 
                    /*Ninguno*/
                    echo <<<HOLA
                    <div class="col-sm-4" style="padding: 6px">
                    <div class="card h-100">
                    <a onclick = "funciona($id, 0, 3);" href = "#"> 
                    <img src="https://images.squarespace-cdn.com/content/v1/5aaecb177c9327b031576455/1569620728768-4RZ5KETJAQDLXPZDWEAB/ke17ZwdGBToddI8pDm48kLXCf88_9uNTKXkq27cF4sB7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmzUsryC7riGV7bTeYhg5Sep4Y8p3OCJVqs3FfNTLch3O2M0DsfUdwheg190rC2-Re/user-icon-flat-style-isolated-on-white-background-vector-id1084418050.jpg"
                            class="card-img-top" alt="..."> </a>
                        <div class="card-body">
                            <h5 class="card-title fuente_cuerpo">No votar por nadie</h5>
                            <h5 class="card-title fuente_cuerpo">No deseo votar</h5>
                        </div>
                    </div>
                </div>
              HOLA;
                    //Candidato
            $rs = Usuarios::listados(2);
            foreach ($rs as $candidato) {
               
                
                $path_img=base_url('uploads/candidato/').$candidato->foto;
            echo <<<HOLA
            <div class="col-sm-4" style="padding: 6px">
            <div class="card h-100">
            <a onclick = "funciona($id, $candidato->id_candidato, 3);" href = "#"> 
            <img src="{$path_img}"
                    class="card-img-top" alt="..."> </a>
                <div class="card-body">
                    <h5 class="card-title fuente_cuerpo">{$candidato->nombre} {$candidato->apellido}</h5>
                    <h5 class="card-title fuente_cuerpo">{$candidato->partido_nombre} {$candidato->siglas}</h5>
                </div>
            </div>
        </div>
    HOLA;
            }
            ?>   
                      <!-- Fin Cards -->
      
              </div>
              <!-- Fin Card Group -->
              <br>
    <form action="" Method = "POST" id = "colegio">
    <input type="hidden" name = "id_colegio" id = "id_colegio">
    </form>
      <a href="#" class="action-button" id="final" hidden>Finish</a> 
    </fieldset>  
</section> 

<!-- End Multi step form -->
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script><script  src="<?= $base; ?>/script.js"></script>
<script>
var votante, candidato;
function funciona(votantes, candidatos, btn){
Swal.fire({
        title: 'Esta seguro de esta elección?',
        text: "No podra elegir otra si acepta!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "save",
        allowOutsideClick: false, 
        }).then((result) => {
        if (result.value) {
        
        votante = votantes;
        candidato = candidatos;
            Swal.fire(
            'Guardado!',
            'Su elección ha sido guardada con exito!',
            'success');
                if (btn == 1) {
                    document.getElementById("siguiente1").click();
                }else if (btn == 2){
                    document.getElementById("siguiente2").click();
                }else{
                    document.getElementById("final").click();
                    redireccionar();
                } 
        }
});
}


        function redireccionar (){
            Swal.fire({
                title: 'Redireccionando!',
                text: 'Espere unos segundos',
                timer: 1200,
                allowOutsideClick: false
            }).then(
                function () {
                    location.href = "<?=base_url()?>";
                });
            }

$(document).ready(function(){

        $('#siguiente1').click(function(){
                $.ajax({
                type:"POST",
                url:"<?=base_url()?>index.php/user/voto/",
                datatype:"html",
                data:{id_votante:votante,id_candidato:candidato,id_mesa:3},
                success: function(result){
                    console.log("si");
                },
                error:function(result){
                alert(result);
                console.log(Object.values(result));
                }
        }); 
    });

        $('#siguiente2').click(function(){
                $.ajax({
                type:"POST",
                url:"<?=base_url()?>index.php/user/voto",
                datatype:"html",
                data:{id_votante:votante,id_candidato:candidato,id_mesa:3},
                success: function(result){
                    console.log("si");
                },
                error:function(result){
                alert(result);
                console.log(Object.values(result));
                }
        }); 
    });

        $('#final').click(function(){
                $.ajax({
                type:"POST",
                url:"<?=base_url()?>index.php/user/voto/",
               datatype:"html",
               data:{id_votante:votante,id_candidato:candidato,id_mesa:3},               
                success: function(result){
                    console.log("si");
                },
                error:function(result){
                alert(result);
                console.log(Object.values(result));
            }
        });
        
        });
});

</script>
</body>
</html>
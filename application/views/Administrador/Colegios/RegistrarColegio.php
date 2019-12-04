<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Colegios Electorales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Colegio Electoral</li>
              <li class="breadcrumb-item active">Registrar Colegios</li> 
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-md-12">
          <div class="card mx-5">
            <div class="card-header">
              <h3 class="card-title">Registrar Colegio</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                    
            <form action="<?=base_url('index.php/administracion/registrarCandidato')?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="<?=$this->nocsrf->generate($this->session->userdata('_token'))?>" >
                        <div class="form-row align-items-center">
                        <div class="form-group col-md-2">
                                <label for="">Codigo del Colegio</label>
                                <input type="text" id="CodColegio"  name="CodColegio" class="form-control" >
                               
                                </div>
                               <div class="col-auto my-1">
                               <input type="button" class="mt-3 btn btn-primary" value="Verificar si existe" id="verificar">
                               </div>
                               </div>
<!--Div para invalidar input-->
<div id="target">
                        <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="">Nombre del colegio</label>
                                    <input type="text" name="nombre" class="form-control">
</div>
                    
<div class="form-group col-md-4">
                                    <label for="">Director:</label>
                                    <input type="text" name="nombre" class="form-control">
</div>
</div>


<div class="row">


<div class="form-group col-md-3">
                                    <label for="">Correo Institucional:</label>
                                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control">
</div>

</div>
<div class="form-group col-md-3">
                                    <label for="">Telefono:</label>
                                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" id="tel">
</div>
</div>
        
<div class="form-group col-md-5">
                                <label for="">Provincia/Municipio/Sector:</label>
                                <select class="form-control select2" name="sector" style="width: 100%;">
                                 <?php foreach ($Sectores as $sector):?>
                                    <option value="<?=$sector->id_sector?>"><?=$sector->provincia.' / '.$sector->municipio.' / '.$sector->sector?></option>
                                 <?php endforeach;?>
                                </select>
                              </div>
      <div class="form-group col-md-6">
        <label for="">Direccion</label>
            <textarea name="" class="form-control" id=""></textarea>        
      </div>                 
</div>
<!--/. Row-->
<h2 class="my-2">Ubicacion:</h2>
<hr>
<div class="row">
    
  <div class="col-md-8">
  <div id="mapid" style="height: 180px;">Ver mapa</div>
  </div>
  
  <div class="col-md-4">
  <div class="form-group">
   <label for="">Latitud</label>
   <input type="text" name="latitud" id="latitud" value="" class="form-control coordGeo">
   </div>

   <div class="form-group">
   <label for="">Longitud</label>
   <input type="text" name="longitud" id="longitud" value="" class="form-control coordGeo">
   </div>
   <input type="button" class="btn btn-primary" id="coordenadas" value="Ver nueva ubicacion">
   </div>
  </div>
              
<div class="row">
    <div class="form-group ">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-warning">Limpiar</button>
    </div>
</div>
</div><!--/. Invalidar input-->
                    </form>
                    <!--/.Form-->
                </div>
                <!-- /.card-body -->
               
          
        </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
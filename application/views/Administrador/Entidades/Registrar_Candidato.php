<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Candidatos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Entidad</li>
              <li class="breadcrumb-item active">Candidatos</li> 
              <li class="breadcrumb-item active">Registrar Candidato</li>
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
              <h3 class="card-title">Registrar Candidatos</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                    
            <form action="<?=base_url('index.php/administracion/registrarCandidato')?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="<?=$this->nocsrf->generate($this->session->userdata('_token'))?>" >
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="">Foto</label>
                                <input type="file" name="imageCand" class="form-control" accept="image/*">
                                </div>

                            <div class="form-group col-md-4">
                                    <label for="">Nombre</label>
                                    <input type="text" name="nombre" class="form-control">
                                    </div>
                                        
                                <div class="form-group col-md-4">
                                    <label for="">Apellido</label>
                                    <input type="text" name="apellido" class="form-control">
                                    </div>
                    
</div>
                        <div class="row">
                       

                            <div class="form-group col-md-3 mr-4">
                              <label for="">Partido:</label>
                              <select class="form-control select2" name="partido" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Partido Liberal Dominicano</option>
                                <option>Partido Reformista Social Cristiano</option>
                                <option>Partido Revolucionario Domincano</option>
                              </select>
                            </div>
                            
                            <div class="form-group col-md-3 mr-4">
                                <label for="">Puesto:</label>
                                <select class="form-control select2" id="puestos" name="puestos" style="width: 100%;">
                                 <?php foreach ($Puestos as $puesto):?>
                                    <option value="<?=$puesto->id_puesto?>"><?=$puesto->descripcion?></option>
                                 <?php endforeach;?>
                                </select>
                              </div>
                        </div> <!--/. Rows-->
                            <div class="row">
                                
                            <div class="form-group col-md-4">
                                    <label for="">Provincias</label>
                                    <select class="form-control select2" id="provincia" name='provincia' disabled="disabled" style="width: 100%;">
                                        <option>Santiago</option>
                                        <option>Santo Domingo</option>
                                        <option>Azua</option>
                                        <option>Samana</option>
                                      </select>    
                                </div>
                                        
                                <div class="form-group col-md-4">
                                    <label for="">Municipio</label>
                                    <select class="form-control select2" name='Municipio' disabled="disabled" style="width: 100%;">
                                        <option selected="selected">Santo Domingo Norte</option>
                                        <option>Santo Domingo Este</option>
                                        <option>Bani</option>
                                        <option></option>
                                      </select>    
                                </div>
</div>
                        <!--/.Rows-->
                        
<div class="row">
    <div class="form-group ">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-warning">Limpiar</button>
    </div>
</div>
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
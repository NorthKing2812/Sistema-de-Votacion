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
                    
            <form action="<?=base_url('index.php/candidato/add')?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="<?=$this->nocsrf->generate($this->session->userdata('_token'))?>" >
                        <div class="row">
                            <div class="form-group col-md-4">
                            <label for="">Foto:</label>
                            <div class="custom-file">
                                <input type="file" name="imageCand" class="custom-file-input" accept="image/*">
                                <label for="" class="custom-file-label">Seleccione una foto</label>
                                </div>
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
                       

                            <div class="form-group col-md-4 mr-4">
                              <label for="">Partido:</label>
                              <select class="form-control select2" name="partido" style="width: 100%;">
                              <?php foreach ($Partidos as $partido):?>
                                    <option value="<?=$partido->id_partido?>"><?=$partido->nombre.'('.$partido->siglas.')'?></option>
                                 <?php endforeach;?>
                              </select>
                            </div>
                            
                            <div class="form-group col-md-3 mr-4">
                                <label for="">Puesto:</label>
                                <select class="form-control select2" id="puestos" name="puesto" style="width: 100%;">
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
                                    <?php foreach ($Provincias as $provincia):?>
                                    <option value="<?=$provincia->id_provincia?>"><?=$provincia->nombre?></option>
                                 <?php endforeach;?>
                                
                                      </select>    
                                </div>
                                        
                                <div class="form-group col-md-4">
                                    <label for="">Municipio</label>
                                    <select class="form-control select2" id="municipio" name='municipio' disabled="disabled" style="width: 100%;">
                                    <?php foreach ($Municipios as $municipio):?>
                                    <option value="<?=$municipio->id_municipio?>"><?=$municipio->nombre?></option>
                                 <?php endforeach;?>
                                      </select>    
                                </div>
</div>
                        <!--/.Rows-->
                        
<div class="row">
    <div class="form-group pl-2">
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
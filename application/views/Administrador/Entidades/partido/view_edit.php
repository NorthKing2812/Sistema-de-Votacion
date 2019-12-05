  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-md-12">
          <div class="card mx-5">
            <div class="card-header">
              <h3 class="card-title">Registrar Partidos</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="<?=base_url('index.php/partido/update')?>" method="post" enctype="multipart/form-data" >
                        <div class="row">
                        <label for="">ID Partido: <?=$Partido->id_partido?></label>
                        <input type="hidden" value="<?=$Partido->id_partido?>" name="id_partido">
                        </div>
                        <div class="row">   
                            <div class="form-group col-md-4">
                                    <label for="">Nombre:</label>
                                    <input type="text" value="<?=$Partido->nombre?>" name="nombre" class="form-control">
                                    </div>
                                        
                                <div class="form-group col-md-2 mx-3">
                                    <label for="">Abreviatura:</label>
                                    <input type="text" value="<?=$Partido->siglas?>" name="sigla" class="form-control">
                                    </div>
                    
                                    <div class="form-group col-md-4">
                                    <label for="">Presidente:</label>
                                    <input type="text" value="<?=$Partido->Presidente?>" name="presidente" class="form-control">
                                </div>
                                      
</div>
                        <div class="row">
                       
                        <div class="form-group col-md-4">
                                <label for="">Logo del partido</label>
                                <input type="file" name="imagePartido" class="form-control">
                                </div>

                            <div class="form-group col-md-3 mr-4">
                              <label for="">Color 1:</label>
                              <div class="input-group my-colorpicker1">
                             
                              <input name="hexacolor1" value="<?=$Partido->HexaColor1?>" type="text" class="form-control my-colorpicker1"  id="">

                              <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-square"></i></span>
                    </div>
                    </div>
                            </div>
                            
                            <div class="form-group col-md-3 mr-4">
                              <label for="">Color 2:</label>
                              <div class="input-group my-colorpicker2">
                             <input type="text"  value="<?=$Partido->HexaColor1?>" name="hexacolor2" class="form-control my-colorpicker2" id="">

                              <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-square"></i></span>
                    </div>
                    </div>
                            </div>

                            
                        </div> <!--/. Rows-->
                        
<div class="row">
    <div class="form-group ">
        <button type="submit" class="btn btn-primary btn">Guardar</button>
        <button type="reset" class="btn btn-warning btn">Limpiar</button>
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
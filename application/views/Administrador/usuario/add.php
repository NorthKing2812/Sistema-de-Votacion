<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Partidos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Entidad</li>
              <li class="breadcrumb-item active">Partidos</li> 
              <li class="breadcrumb-item active">Registrar</li>
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
              <h3 class="card-title">Registrar Partidos</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="<?php echo base_url();?>mantenimiento/usuarios/store" method="POST">
                            <div class="row">
                            <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos">
                            </div>
                            </div><!--/.row-->
                            
                            
                            <div class="row">
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            

                            </div>

                            <div class="form-group col-md-4">
                                <label for="username">Usuario:</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo_user">Tipo Usuario:</label>
                                <input type="text" class="form-control" id="tipo_user" name="tipo_user">
                            </div>
                            

                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
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


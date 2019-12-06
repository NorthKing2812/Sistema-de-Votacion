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
            <form action="<?php echo base_url();?>index.php/usuarios/store" method="POST">
            <div class="row">
                    
                    <div class="form-group col-md-4">
                                <label for="username">Usuario:</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                                <input type="text" class="form-control" id="username" name="username" requerid>
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo_user">Tipo Usuario:</label>
                                <select name="tipoUser" class="form-control" id="" disabled>
                                <option value="1" selected>Administrador</option>
                                </select>
                            </div>
                    </div>

                    <div class="row">
                    
                    
                    <div class="form-group col-md-4">
                                <label for="username">Constraseña:</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                                <input type="password" class="form-control" id="passowrd" name="password" requerid>
                            </div>
                            </div>

                            
                    <div class="form-group col-md-4">
                                <label for="username">Confirmar Constraseña:</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                                <input type="password" class="form-control" id="configPassowrd" name="configPassword" requerid>
                            </div>
                            </div>
                    </div>


                            <div class="row">
                            <div class="form-group col-md-5">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" requerid>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" requerid>
                            </div>
                            </div><!--/.row-->
                            
                            
                            <div class="row">
                            <div class="form-group col-md-5">
                                <label for="telefono">Telefono:</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                                <input type="text" class="form-control" id="tel" name="telefono" requerid>
                            </div>
                            </div>
                            
                            <div class="form-group col-md-5">
                            <label for="email">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                                <input type="email" class="form-control" id="email" name="email" requerid>
                            </div>
                            </div>

                            </div>
                    
                            

                        <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
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

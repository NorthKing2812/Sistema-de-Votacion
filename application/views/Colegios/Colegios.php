<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Colegios Electorares</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Colegios Electorares</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabla de colegios</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Colegio Electoral</th>
                  <th>Nombre</th>
                  <th>Ubicacion</th>
                  <th>Provincias</th>
                  <th>Cantidad de mesas</th>
                  <th>Estado</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2251</td>
                  <td>Liceo Prof. Simon Orozco </td>
                  <td><a href="">Ver ubicacion</a></td>
                  <td>Santo Domingo Este</td>
                  <td>X</td>
                  <td><span class="badge badge-success">Terminado.</span></td>
                  <td>
                      <a href="<?=base_url('index.php/Welcome/colegioMesa')?>" class="btn btn-primary">Ver mesas</a>
                        <a href="" class="btn btn-success"><span class="fas fa-table"></span></a>
                        <a href="" class="btn btn-primary"><span class="fas fa-eye"></span></a>
                  </td>
                </tr>

                <tr>
                  <td>2252</td>
                  <td>Liceo Prof. Simon Orozco </td>
                  <td><a href="">Ver ubicacion</a></td>
                  <td>Santo Domingo Norte</td>
                  <td>X</td>
                  <td><span class="badge badge-warning">Incompleto.</span></td>
                  <td>
                  <a href="<?=base_url('index.php/Welcome/colegioMesa')?>" class="btn btn-primary">Ver mesas</a>
                        <a href="" class="btn btn-success"><span class="fas fa-table"></span></a>
                        <a href="" class="btn btn-primary"><span class="fas fa-eye"></span></a>
                  </td>
                </tr>

                <tr>
                  <td>2253</td>
                  <td>Liceo Prof. Simon Orozco </td>
                  <td><a href="">Ver ubicacion</a></td>
                  <td>Santo Domingo Este</td>
                  <td>X</td>
                  <td><span class="badge badge-danger">Inactivo.</span></td>
                  <td>
                  <a href="<?=base_url('index.php/Welcome/colegioMesa')?>" class="btn btn-primary">Ver mesas</a>
                        <a href="" class="btn btn-success"><span class="fas fa-table"></span></a>
                        <a href="" class="btn btn-primary"><span class="fas fa-eye"></span></a>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                <th>ID colegio</th>
                  <th>Nombre</th>
                  <th>Ubicacion</th>
                  <th>Provincias</th>
                  <th>Cantidad de mesas</th>
                  <th>Estado</th>
                  <th>Opciones</th>
                </tr>
                </tfoot>
              </table>
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
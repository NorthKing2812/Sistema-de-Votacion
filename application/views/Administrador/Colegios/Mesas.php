<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesas del colegio XXXX</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Colegios Electorares</li>
              <li class="breadcrumb-item active">Mesas</li>
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
                  <th>No</th>
                  <th>Encargado</th>
                  <th>Cantidad de votantes</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>22 51 B</td>
                  <td>Mario Hernandez</td>
                  <td><a href="">2500</a></td>
                  <td>
                        <a href="<?=base_url('index.php/Welcome/mesasVotantes')?>" class="btn btn-primary">Ver Votantes</a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>

                <tr>
                  <td>23 52 A</td>
                  <td>Juan Sanchez Hernandez</td>
                  <td><a href="">2220</a></td>
                  <td>
                        <a href="<?=base_url('index.php/Welcome/mesasVotantes')?>" class="btn btn-primary">Ver Votantes</a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Encargado</th>
                  <th>Cantidad de votantes</th>
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
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ciudadanos de la mesa xx xx B</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Colegio Electoral</li>
              <li class="breadcrumb-item">Mesas</li>
              
              <li class="breadcrumb-item active">Ciudadanos</li>
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
              <h3 class="card-title">Tabla de Ciudadanos</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>id_voto</th>
                <th>Cedula</th>
                <th>Candidato</th>
                <th>Clasificacion</th>
                <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($votos as $voto):?>
                <tr>
                <td><?=$voto->id_voto?></td>
               <td><?=$voto->cedula?></td>
               <td><?=$voto->cNombre.' '.$voto->cApellido?></td>
               <td><?=$voto->puesto?></td>
               <td></td>
                </tr>
                <?php endforeach;?>
                </tbody>
             
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
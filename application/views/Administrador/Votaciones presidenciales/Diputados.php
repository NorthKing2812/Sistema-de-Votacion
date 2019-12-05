<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Candidatos a Diputado</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item">Elecciones Congresuales</li>
              <li class="breadcrumb-item active">Candidatos a Diputados</li>
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
              <h3 class="card-title">Candidatos a Diputado</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>ID Candidato</th>
                 <th>Nombre y Apellido</th>
                 <th>Partido</th>
                 <th>Provincia</th>
                 <th>Cantidad de votos</th>
                 <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                
                <?php foreach($Diputados as $candidato):?>
                <td><?=$candidato->id_candidato?></td>
                  <td><?=$candidato->nombre.' '.$candidato->apellido?></td>
                  <td><a href=""><?=$candidato->partido?></a></td>
                  <td><?=$candidato->provincia?></td>
                  <td><?=$candidato->Cantidad_votos?></td>
                  <td>
                        <a href="" class="btn btn-success">Ver Votaciones</a>
                        <a href="" class="btn btn-primary"><span class="fas fa-eye"></span></a>
                        <a href="<?=base_url('index.php/Candidato/edit?id_candidato=').$candidato->id_candidato?>" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#modal-candidato"><span class="fas fa-pen"></span></a>
                        <a href="<?=base_url('index.php/Candidato/delete?id_candidato=').$candidato->id_candidato?>" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
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
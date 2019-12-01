<section class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Lista de Candidatos</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item">Entidades Politicas</li>
                  <li class="breadcrumb-item active">Lista de Candidatos</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
      <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Candidatos</h3>
            
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
                  <th>Nombre & Apellido</th>
                  <th>Partido</th>
                  <th>Puesto</th>
                  <th>Municipio</th>
                  <th>Provincia</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                 <?php if(isset($candidatos)):?>
                <?php foreach ($candidatos as $candidato):?>
                <tr>
               
                  <td><?=$candidato->id_candidato?></td>
                  <td><?=$candidato->nombre.' '.$candidato->apellido?></td>
                  <td><a href=""><?=$candidato->partido?></a></td>
                  <td><?=$candidato->puesto?></td>
                  <td><?=isset($candidato->municipio) ? $candidato->municipio : 'Na' ?></td>
                  <td><?=isset($candidato->provincia) ? $candidato->provincia : 'Na'?></td>
                  <td>
                        <a href="" class="btn btn-success">Ver Votaciones</a>
                        <a href="" class="btn btn-primary"><span class="fas fa-eye"></span></a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>  
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
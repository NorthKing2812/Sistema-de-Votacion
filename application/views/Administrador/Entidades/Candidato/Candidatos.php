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
                  <td><?=isset($candidato->id_municipio) ? $candidato->municipio : 'Na' ?></td>
                  <td><?=isset($candidato->id_provincia) ? $candidato->provincia : 'Na'?></td>
                  <td>
                        <a href="" class="btn btn-success">Ver Votaciones</a>
                        <a href="" class="btn btn-primary"><span class="fas fa-eye"></span></a>
                        <a href="<?=base_url('index.php/Candidato/edit?id_candidato=').$candidato->id_candidato?>" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#modal-Candidato"><span class="fas fa-pen"></span></a>
                        <a href="<?=base_url('index.php/Candidato/delete?id_candidato=').$candidato->id_candidato?>" class="btn btn-danger"><span class="fas fa-cut"></span></a>
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

<div class="modal fade" id="modal-Candidato">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Candidato</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
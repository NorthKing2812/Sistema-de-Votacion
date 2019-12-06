

<section class="content-wrapper">
  <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Lista de Partidos Politicos</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item">Entidades Politicas</li>
                <li class="breadcrumb-item active">Lista de Partidos Politicos</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Partidos Politicos</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
          
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Partido</th>
                  <th>Nombre</th>
                  <th>Abreviatura</th>
                  <th>Colores</th>
                  <th>Presidente</th>
                  <th>Cantidad de Participantes</th>
                  <th>Logo</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($partidos)):?>
                <?php foreach ($partidos as $partido):?>
                <tr>
                  
                <td><?=$partido->id_partido?></td>
                  <td><a href=""><?=$partido->nombre?></a></td>
                  <td><?=$partido->siglas?></td>
                  <td> <i class="fas fa-square" style="color:<?=$partido->HexaColor1?>;"></i>  <i class="fas fa-square" style="color:<?=$partido->HexaColor2?>;"></i></td>
                  <td><?=$partido->Presidente?></td>
                  <td>0</td>
                  <td>
                  <a href="<?=base_url('index.php/partido/view?id_partido=').$partido->id_partido?>" class="btn btn-primary btn-view" data-toggle="modal" data-target="#modal-sm"><span class="fas fa-eye"></span></a>   
                  </td>
                  <td>
                        <a href="<?=base_url('index.php/partido/edit?id_partido=').$partido->id_partido?>" class="btn btn-warning btn-edit"><span class="fas fa-pen" data-toggle="modal" data-target="#modal-default"></span></a>
                        <a href="<?=base_url('index.php/partido/delete?id_partido=').$partido->id_partido?>" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>
                <?php endforeach;?>
                <?php endif; ?>
               
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


<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Partido</h4>
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

      <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
             </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
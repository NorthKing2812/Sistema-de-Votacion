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
          <div class="col-12">
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
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>

              <?php foreach($Colegios as $colegio):?>
                <tr>
                  <td><?=$colegio->CODIGO_COLEGIO?></td>
                  <td><?=$colegio->nombre?></td>
                  <td><a href="" id="<?=$colegio->longitud?>,<?=$colegio->latitud?>" class="btn-view-mapacolegio" data-toggle="modal" data-target="#modal-colegio">Ver ubicacion</a></td>
                  <td><?=$colegio->Municipio?></td>
                  <td><?=$colegio->Cantidad_mesas?></td>
                     <td>
                  <input type="hidden" name="latitud" id="latitud[]" value="<?=$colegio->latitud?>">
                  <input type="hidden" name="longitud" id="longitud[]" value="<?=$colegio->longitud?>">
                      <a href="<?=base_url('index.php/querySelect/colegioMesa?colegio=').$colegio->CODIGO_COLEGIO?>" class="btn btn-primary">Ver mesas</a>
                     <button class="btn btn-default bg-orange btn-view-formcolegio" value="<?=$colegio->CODIGO_COLEGIO?>" style="color:#fff;" data-toggle="modal" data-target="#modal-colegio">
                  Agregar mesa
                </button>
                <a href="http://localhost/Sistema-de-Votacion/index.php/queryDelete/eliminarColegio?id_colegio=2225" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="http://localhost/Sistema-de-Votacion/index.php/queryDelete/eliminarColegio?id_colegio=2225" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                
                </tr>
              <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Colegio Electoral</th>
                  <th>Nombre</th>
                  <th>Ubicacion</th>
                  <th>Provincias</th>
                  <th>Cantidad de mesas</th>
                  <th>Opciones</th>
                </tr></tfoot>
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

<div class="modal fade" id="modal-colegio">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Registrar Mesa</h4>
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
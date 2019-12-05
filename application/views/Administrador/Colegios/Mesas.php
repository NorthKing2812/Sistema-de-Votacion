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
                  <th>Cantidad de votos</th>
                  <th>Computadas</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($Mesas as $mesa):?>
                <tr>
                  <td><?=$mesa->mesa?></td>
                  <td><?=$mesa->encargado?></td>
                  <td><a href=""><?=$mesa->Cantidad_votantes?></a></td>
                
                  <td>
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <?php if($mesa->Computada==1){
                   echo " <input type='checkbox' value='{$mesa->mesa}' class='custom-control-input checked-computado' id='customSwitch3' checked=true>";
                  }else{
                    echo "<input type='checkbox' value='{$mesa->mesa}' class='custom-control-input checked-computado' id='customSwitch3'>";
                  }
                  
                   ?>
                       <label class="custom-control-label" for="customSwitch3"></label>
                    </div>
                   </td>
                  <td>
                        <a href="<?=base_url('index.php/votos?mesa=').$mesa->mesa?>" class="btn btn-primary">Ver Votantes</a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
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
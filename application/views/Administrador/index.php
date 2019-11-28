<style>
#map { height: 365px; 
width:800px;
}

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sistema De votacion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Inicio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
       <div class="col-md-12">
            <!-- Bar chart -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="tab_Presidencial" data-toggle="pill" href="#bar-chart" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Presidenciales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Diputados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Senadores</a>
                  </li>
                </ul>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
       </div>
<!--Row-->
<div class="row">
<!-- Left col -->
<div class="col-md-7">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Colegios Electorales</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers">
                      <div id="map">Va un mapa</div>
                    </div>
                  </div>
                  <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                    <div class="description-block mb-4">
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Total de mesas</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">545</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Mesas computadas</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <h5 class="description-header">523,456</h5>
                      <span class="description-text">Total de votos</span>
                    </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

</div>
<!--Row-->
<div class="row">
<div class="col-md-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Mesa Recientemente Computada</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No Mesa</th>
                      <th style="width: 10px">Votos</th>
                      <th style="width: 55px">Ubicacion</th>
                      <th style="width: 40px">Colegio Electoral</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12 55 B.</td>
                      <td>15000</td>
                      <td>
                     Santo domingo Este    
                    </div>
                      </td>
                      <td>Liceo Mateo Lara</td>
                    </tr>
                    <tr>
                      <td>12 55 B.</td>
                      <td>15000</td>
                      <td>
                     Santo domingo Este    
                    </div>
                      </td>
                      <td>Liceo Mateo Lara</td>
                    </tr>
                    
                    <tr>
                      <td>12 55 B.</td>
                      <td>15000</td>
                      <td>
                     Santo domingo Este    
                    </div>
                      </td>
                      <td>Liceo Mateo Lara</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
</div>
<!--/.Row-->
           </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Votaciones Presidenciales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Votos</li>
              <li class="breadcrumb-item active">Elecciones Presidenciales y Congresuales</li> 
              <li class="breadcrumb-item active">Votaciones Presidenciales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-md-12">
              
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
                  
                </ul>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
          </div>
      </div>
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
                 <th>ID Candidato</th>
                 <th>Candidato</th>
                 <th>Partido</th>
                 <th>Cantidad de votos</th>
                 <th>Grafica</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>1</td>
                  <td>Leonel Fernandez Reina </td>
                  <td><a href="">PLD</a></td>
                  <td>250,000</td>
                  <td><div class="progress progress-sm active">
  <div class="progress-bar bg-success" role="progressbar"
       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
    <span class="sr-only">20% Complete</span>
  </div>
</div></td>
                </tr>
                
                <tr>
                  <td>2</td>
                  <td>Luis Abinader</td>
                  <td><a href="">PRM</a></td>
                  <td>275,000</td>
                  <td><div class="progress progress-sm active">
  <div class="progress-bar bg-success" role="progressbar"
       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 37%">
    <span class="sr-only">20% Complete</span>
  </div>
</div></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                <tr>
                 <th>ID Candidato</th>
                 <th>Candidato</th>
                 <th>Partido</th>
                 <th>Cantidad de votos</th>
                 <th>Grafica</th>
                </tr>
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
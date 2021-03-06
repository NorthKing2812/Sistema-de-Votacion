<div class="content-wrapper">
      <!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1>
  Reportes
  <small>Presidencial</small>
  </h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Reportes Presidencial</li>
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
              <h3 class="card-title">Reporte Presidencial</h3>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <ol class="breadcrumb">
                <div class="row">
                  <div class="form-group"> 
                    <select class="form-control" name="tiempo" id="tiempo">
                      <option selected>2019</option>
                      <option >2020</option>
                      <option>2024</option>
                      <option>2028</option>
                      <option>2032</option>
                      <option>2036</option>
                      <option>2040</option>
                      <option>2044</option>
                      <option>2048</option>
                      <option>2052</option>
                      <option>2056</option>
                      <option>2060</option>
                      <option>2064</option>
                      <option>2068</option>
                      <option>2072</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success" id="btn_buscar_presidente">Buscar Reporte</button>
                  </div>
                </div>
            </ol>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Partido</th>
                        <th>Candidato</th>
                        <th>Cant. Votos</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody id="report_presidencial"></tbody>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?=base_url('asseut/')?>js/js_reporte.js"></script>
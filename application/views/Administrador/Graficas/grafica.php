<?php   
	require_once('php/db.php');
    $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$query = "SELECT COUNT(vtv.id_voto) AS res, cdt.nombre,cdt.apellido FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = 1
                GROUP BY cdt.id_candidato
                ORDER BY res desc";
    $presidente = $con->query($query);
    
    
    
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>
        Graficas
        <small>Listado</small>
        </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Graficas</li>
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
              <h3 class="card-title">Tabla de Graficas</h3>
              <div class="card-tools">
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-group">
	            <nav class="nav nav-tabs">
  	            	<a data-toggle="tab" href="#container_presidencial" class="nav-item nav-link active">Presidenciales</a>
  	            	<a data-toggle="tab" href="#container_senador" class="nav-item nav-link">Senadores</a>
  	            	<a data-toggle="tab" href="#container_diputado" class="nav-item nav-link">Diputados</a>
  	            	<a data-toggle="tab" href="#container_alcalde" class="nav-item nav-link">Alcalde</a>
  	            	<a data-toggle="tab" href="#container_vicealcalde" class="nav-item nav-link">Vice Alcalde</a>
	            </nav>
	            <div class="tab-content tab-contents">
                
	            <div id="container_presidencial" class="tab-pane fade in active show" style="min-width: 360px;  height: 100%; margin: 0 auto"></div>

                <div id="container_senador" class="tab-pane fade" style="min-width: 360px; height: 100%; margin: 0 auto">
                <div class="form-group col-sm-4">
                    <label for="senador_provincia">Provincia</label>
                    <select class="form-control" name="senador_provincia" id="senador_provincia">
                    <?php
                      $query = "SELECT * FROM provincia";
                      $row_provincia = $con->query($query); 
                      if ($row_provincia->num_rows >= 1) {
                        while ($row = $row_provincia->fetch_object()) { ?>
                            <option value="<?php echo $row->id_provincia; ?>">
                                <?php echo $row->nombre; ?>
                            </option>
                    <?php }} ?>
                    </select>
                </div>
                <div  id="container_senador_chart"></div>
                </div>

                <div id="container_diputado" class="tab-pane fade" style="min-width: 360px; height: 100%;  margin: 0 auto">
                <div class="form-group col-sm-4">
                    <label for="diputado_provincia">Municipio</label>
                    <select class="form-control" name="diputado_provincia" id="diputado_provincia">
                    <?php
                      $query = "SELECT * FROM provincia";
                      $row_provincia = $con->query($query); 
                      if ($row_provincia->num_rows >= 1) {
                        while ($row = $row_provincia->fetch_object()) { ?>
                            <option value="<?php echo $row->id_provincia; ?>">
                                <?php echo $row->nombre; ?>
                            </option>
                    <?php }} ?>
                    </select>
                </div>
                <div  id="container_diputados_chart"></div>
                </div>

                <div id="container_alcalde" class="tab-pane fade" style="min-width: 360px; height: 100%;  margin: 0 auto">
                <div class="form-group col-sm-4">
                    <label for="alcalde_municipio">Municipio</label>
                    <select class="form-control" name="alcalde_municipio" id="alcalde_municipio">
                    <?php
                      $query = "SELECT * FROM municipio";
                      $row_municipio = $con->query($query); 
                      if ($row_municipio->num_rows >= 1) {
                        while ($row = $row_municipio->fetch_object()) { ?>
                            <option value="<?php echo $row->id_municipio; ?>">
                                <?php echo $row->nombre; ?>
                            </option>
                    <?php }} ?>
                    </select>
                </div>
                <div  id="container_alcalde_chart"></div>
                </div>

                <div id="container_vicealcalde" class="tab-pane fade" style="min-width: 360px; height: 100%;  margin: 0 auto">
                <div class="form-group col-sm-4">
                    <label for="vicealcalde_municipio">Municipio</label>
                    <select class="form-control" name="vicealcalde_municipio" id="vicealcalde_municipio">
                    <?php
                      $query = "SELECT * FROM municipio";
                      $row_municipio = $con->query($query); 
                      if ($row_municipio->num_rows >= 1) {
                        while ($row = $row_municipio->fetch_object()) { ?>
                            <option value="<?php echo $row->id_municipio; ?>">
                                <?php echo $row->nombre; ?>
                            </option>
                    <?php }} ?>
                    </select>
                </div>
                <div  id="container_vicealcalde_chart"></div>
                </div>

            </div>
            </div>
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


<script>

Highcharts.chart('container_presidencial', {
    chart: {
        type: 'column',
    },
    title: {
        text: 'Información Elecciones Presidenciales'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
    	min: 0,
        title: {
            text: 'Total'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} '
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b> {point.y:.2f}</b> en Total<br/>'
    },

    series: [
        {
            name: "Presidenciales",
            colorByPoint: true,
            data: [
				
   				<?php while ($row = $presidente->fetch_object()) { ?>
                {
                    name: '<?php echo $row->nombre.' '.$row->apellido; ?>',
                    y: <?php echo ($row->res)+0; ?>,
					y: <?php echo ($row->res)+0; ?>,
                    drilldown: "<?php echo $row->nombre.' '.$row->apellido; ?>"
                },
   				<?php } ?>
            	]
        }
    ]
});



function onload_senador(provincia)
{   
    var processed_json = new Array();
    $.ajax({
        type: "POST",
        url: "Graficas/read_senador/"+provincia,  
        contentType: "application/json; charset=utf-8",  
        dataType: "json",  
        success: function(resp)
        {
            for (i = 0; i < resp.length; i++)
            {
                processed_json.push([resp[i].name, parseInt(resp[i].y)]);
            }
            console.log(resp.length);
            if(resp.length){
                Highcharts.chart('container_senador_chart', {
                    chart: {
                        type: "column"
                    },
                    title: {
                        text: "Listado de Senadores"
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,
                        title: {
                            text: ""
                        }
                    },
                    yAxis: {
                        title: {
                            text: "Votos"
                        }
                    },
                    series: [{
	                    name: 'Votos',
                        data: processed_json
                    }]
                });
            }else
            {
                $("#container_senador_chart").html("");
                alert("aqui");
            }

        }
    });
}

function onload_diputado(provincia)
{   
    var processed_json = new Array();
    $.ajax({
        type: "POST",
        url: "Graficas/read_diputado/"+provincia,  
        contentType: "application/json; charset=utf-8",  
        dataType: "json",  
        success: function(resp)
        {
            for (i = 0; i < resp.length; i++)
            {
                processed_json.push([resp[i].name, parseInt(resp[i].y)]);
            }
            console.log(resp.length);
            if(resp.length){
                Highcharts.chart('container_diputados_chart', {
                    chart: {
                        type: "column"
                    },
                    title: {
                        text: "Listado de Diputados"
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,
                        title: {
                            text: ""
                        }
                    },
                    yAxis: {
                        title: {
                            text: "Votos"
                        }
                    },
                    series: [{
	                    name: 'Votos',
                        data: processed_json
                    }]
                });
            }else
            {
                $("#container_diputados_chart").html("");
                alert("aqui");
            }

        }
    });
}

function onload_alcalde_municipio(municipio)
{   
    var processed_json = new Array();
    $.ajax({
        type: "POST",
        url: "Graficas/read_alcalde/"+municipio,  
        contentType: "application/json; charset=utf-8",  
        dataType: "json",  
        success: function(resp)
        {
            for (i = 0; i < resp.length; i++)
            {
                processed_json.push([resp[i].name, parseInt(resp[i].y)]);
            }
            console.log(resp.length);
            if(resp.length){
                Highcharts.chart('container_alcalde_chart', {
                    chart: {
                        type: "column"
                    },
                    title: {
                        text: "Listado de Alcaldes"
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,
                        title: {
                            text: ""
                        }
                    },
                    yAxis: {
                        title: {
                            text: "Votos"
                        }
                    },
                    series: [{
	                    name: 'Votos',
                        data: processed_json
                    }]
                });
            }else
            {
                $("#container_alcalde_chart").html("");
                alert("aqui");
            }

        }
    });
}

function onload_vicealcalde_municipio(municipio)
{   
    var processed_json = new Array();
    $.ajax({
        type: "POST",
        url: "Graficas/read_vicealcalde/"+municipio,  
        contentType: "application/json; charset=utf-8",  
        dataType: "json",  
        success: function(resp)
        {
            for (i = 0; i < resp.length; i++)
            {
                processed_json.push([resp[i].name, parseInt(resp[i].y)]);
            }
            console.log(resp.length);
            if(resp.length){
                Highcharts.chart('container_vicealcalde_chart', {
                    chart: {
                        type: "column"
                    },
                    title: {
                        text: "Listado de Vice Alcaldes"
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,
                        title: {
                            text: ""
                        }
                    },
                    yAxis: {
                        title: {
                            text: "Votos"
                        }
                    },
                    series: [{
	                    name: 'Votos',
                        data: processed_json
                    }]
                });
            }else
            {
                $("#container_vicealcalde_chart").html("");
                alert("aqui");
            }

        }
    });
}

$(document).ready(function(){
    $("#senador_provincia").change(function(){ onload_senador($(this).val()) });
    $("#diputado_provincia").change(function(){ onload_diputado($(this).val()) });
    $("#alcalde_municipio").change(function(){ onload_alcalde_municipio($(this).val()) });
    $("#vicealcalde_municipio").change(function(){ onload_vicealcalde_municipio($(this).val()) })
})
</script>


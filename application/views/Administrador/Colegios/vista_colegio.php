<form action="<?=base_url('/index.php/Mesas/add')?>" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-md-4">
                                    <label for="">ID_Colegio:</label>
                                    <input type="text" name="Codcolegio" value="<?=$codigo_colegio?>" class="form-control">
                                    </div>
                                      
                    
                                    <div class="form-group col-md-4">
                                    <label for="">Encargado:</label>
                                    <input type="text" name="Encargado" class="form-control">
                                </div>
                                      
</div>
<div class="row ">
    <div class="form-group col-4">
        <button type="submit" class="btn btn-primary btn">Guardar</button>
        <button type="reset" class="btn btn-warning btn">Limpiar</button>
    </div>
</div>
                    </form>
                    <!--/.Form-->
                    <h4 class="my-2">Listado de tablas</h4>
                    <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Encargado</th>
                  <th>Cantidad de votantes</th>
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
                  <?php if($mesa->Computada==1){
                   echo "<small class='badge badge-success'>Si</small>";
                  }else{
                    echo "<small class='badge badge-danger'>No</small>";
                  }
                   ?>
                   </td>
                  <td>
                        <a href="<?=base_url('index.php/querySelect/mesasVotantes')?>" class="btn btn-primary">Ver Votantes</a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>
                <?php endforeach;?>

                </tbody>
               </table>
<form>
                        <div class="row">
                            
                            <div class="form-group col-md-4">
                                    <label for="">ID_Colegio:</label>
                                    <input type="text" class="form-control">
                                    </div>
                                        
                                <div class="form-group col-md-2 mx-3">
                                    <label for="">No Mesa:</label>
                                    <input type="text" class="form-control">
                                    </div>
                    
                                    <div class="form-group col-md-4">
                                    <label for="">Presidente:</label>
                                    <input type="text" class="form-control">
                                </div>
                                      
</div>
<div class="row">
    <div class="form-group ">
        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        <button type="reset" class="btn btn-warning btn-lg">Limpiar</button>
    </div>
</div>
                    </form>
                    <!--/.Form-->

                    <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Encargado</th>
                  <th>Cantidad de votantes</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>22 51 B</td>
                  <td>Mario Hernandez</td>
                  <td><a href="">2500</a></td>
                  <td>
                        <a href="<?=base_url('index.php/Welcome/mesasVotantes')?>" class="btn btn-primary">Ver Votantes</a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>

                <tr>
                  <td>23 52 A</td>
                  <td>Juan Sanchez Hernandez</td>
                  <td><a href="">2220</a></td>
                  <td>
                        <a href="<?=base_url('index.php/Welcome/mesasVotantes')?>" class="btn btn-primary">Ver Votantes</a>
                        <a href="" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                        <a href="" class="btn btn-danger"><span class="fas fa-cut"></span></a>
                  </td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Encargado</th>
                  <th>Cantidad de votantes</th>
                  <th>Opciones</th>
                </tr>
                </tfoot>
              </table>
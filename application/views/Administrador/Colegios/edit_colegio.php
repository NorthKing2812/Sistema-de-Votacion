
<form action="<?=base_url('index.php/Colegio/update')?>" method="post" >
                    <input type="hidden" name="_token" value="<?=$this->nocsrf->generate($this->session->userdata('_token'))?>" >
                        <div class="form-row align-items-center">
                        <div class="form-group col-md-2">
  
                                <label for="">Codigo del Colegio: <?=$Colegio->codigo_colegio?></label>
                                <input type="hidden" id="CodColegio" name="CodColegio" value="<?=$Colegio->codigo_colegio?>"   class="form-control" >
                               
                                </div>
                             
                               </div>
<!--Div para invalidar input-->
<div id="target">
                        <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="">Nombre del colegio</label>
                                    <input type="text" value="<?=$Colegio->nombre?>" name="nombre" class="form-control">
</div>
                    
<div class="form-group col-md-4">
                                    <label for="">Director:</label>
                                    <input type="text" value="<?=$Colegio->director?>" name="director" class="form-control">
</div>
</div>


<div class="row">


<div class="form-group col-md-3">
                                    <label for="">Correo Institucional:</label>
                                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="email" value="<?=$Colegio->email?>" name="email" class="form-control">
</div>

</div>
<div class="form-group col-md-3">
                                    <label for="">Telefono:</label>
                                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" value="<?=$Colegio->tel?>" class="form-control" name="tel" id="tel">
</div>
</div>
        
<div class="form-group col-md-5">
                                <label for="">Sector:</label>
                                <select class="form-control select2" name="sector" style="width: 100%;">
                                <option selected  value="<?=$Colegio->id_sector?>" ><?=$Colegio->sector?></option>
                                 <?php foreach ($Sectores as $sector):?>
                                    <option value="<?=$sector->id_sector?>"><?=$sector->sector?></option>
                                 <?php endforeach;?>
                                </select>
                              </div>
      <div class="form-group col-md-6">
        <label for="">Direccion</label>
            <textarea name="direccion" class="form-control" id=""><?=$Colegio->direccion?></textarea>        
      </div>                 
</div>
<!--/. Row-->
<h2 class="my-2">Ubicacion:</h2>
<hr>
<div class="row">
    
  <div class="col-md-8">
  <div id="mapid" style="height: 180px;">Ver mapa</div>
  </div>
  
  <div class="col-md-4">
  <div class="form-group">
   <label for="">Latitud</label>
   <input type="text" value="<?=$Colegio->latitud?>" name="latitud" id="latitud" value="" class="form-control coordGeo">
   </div>

   <div class="form-group">
   <label for="">Longitud</label>
   <input type="text" value="<?=$Colegio->longitud?>" name="longitud" id="longitud" value="" class="form-control coordGeo">
   </div>
   <input type="button" class="btn btn-primary" id="coordenadas" value="Ver nueva ubicacion">
   </div>
  </div>
              
<div class="row">
    <div class="form-group ">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-warning">Limpiar</button>
    </div>
</div>
</div><!--/. Invalidar input-->
                    </form>

                    <script>
                    
                    $(function(){
                      $('#tel').inputmask("(999) 999-9999");
                      //inputmask-coord
$('.coordGeo').inputmask({
  alias: 'decimal',   
  digits:5,
  rightAlign: true,
  digitsOptional: false,
  allowMinus: true,
  groupSeparator: ",",
  digits: 5,
  max:99
});
                    });
                    </script>
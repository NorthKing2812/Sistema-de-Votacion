<form action="<?=base_url('index.php/candidato/update')?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="<?=$this->nocsrf->generate($this->session->userdata('_token'))?>" >
        <div class="row">
        <div class="form-group col-md-4">
                            <label for="">ID Candidato:<?=$Candidato->id_candidato?> </label>
                            <input type="hidden" value="<?=$Candidato->id_candidato?>" name="id_candidato">
                                </div>
                    
        </div>
    <div class="row">

                            <div class="form-group col-md-4">
                                    <label for="">Nombre</label>
                                    <input type="text" value="<?=$Candidato->nombre?>" name="nombre" class="form-control">
                                    </div>
                                        
                                <div class="form-group col-md-4">
                                    <label for="">Apellido</label>
                                    <input type="text" value="<?=$Candidato->apellido?>" name="apellido" class="form-control">
                                    </div>
                    
</div>
                        <div class="row">
                       

                            <div class="form-group col-md-4 mr-4">
                              <label for="">Partido:</label>
                              <select class="form-control select2" name="partido" style="width: 100%;">
                             <option selected value="<?=$Candidato->id_partido?>"><?=$Candidato->partido?></option>
                              <?php foreach ($Partidos as $partido):?>
                                    <option value="<?=$partido->id_partido?>"><?=$partido->nombre.'('.$partido->siglas.')'?></option>
                                 <?php endforeach;?>
                              </select>
                            </div>
                            
                            <div class="form-group col-md-3 mr-4">
                                <label for="">Puesto:</label>
                                <select class="form-control select2" id="puestos" name="puesto" style="width: 100%;">
                                <option selected value="<?=$Candidato->id_puesto?>"><?=$Candidato->puesto?></option>
                             
                                 <?php foreach ($Puestos as $puesto):?>
                                    <option value="<?=$puesto->id_puesto?>"><?=$puesto->descripcion?></option>
                                 <?php endforeach;?>
                                </select>
                              </div>
                        </div> <!--/. Rows-->
                            <div class="row">
                                
                            <div class="form-group col-md-4">
                                    <label for="">Provincias</label>
                                    <select class="form-control select2" id="provincia" name='provincia' disabled="disabled" style="width: 100%;">
                                    <option selected value="<?=$Candidato->id_provincia?>"><?=$Candidato->provincia?></option>
                             
                                    <?php foreach ($Provincias as $provincia):?>
                                    <option value="<?=$provincia->id_provincia?>"><?=$provincia->nombre?></option>
                                 <?php endforeach;?>
                                
                                      </select>    
                                </div>
                                        
                                <div class="form-group col-md-4">
                                    <label for="">Municipio</label>
                                    <select class="form-control select2" id="municipio" name='municipio' disabled="disabled" style="width: 100%;">
                                    <option selected value="<?=$Candidato->id_municipio?>"><?=$Candidato->municipio?></option>
                             
                                    <?php foreach ($Municipios as $municipio):?>
                                    <option value="<?=$municipio->id_municipio?>"><?=$municipio->nombre?></option>
                                 <?php endforeach;?>
                                      </select>    
                                </div>
</div>
                        <!--/.Rows-->
                        
<div class="row">
    <div class="form-group pl-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-warning">Limpiar</button>
    </div>
</div>
                    </form>
            <script>
            $(function(){
                //Puestos cambios
$("#puestos").change(function(){

$("#puestos option:selected").each(function(){
  let puestos = $(this).val();
if(puestos ==2 || puestos==3){
$('#provincia').prop('disabled', false);
}else{
  $('#provincia').prop('disabled', true);
}
if(puestos==4||puestos==5){
  $('#municipio').prop('disabled', false);

}else{
  $('#municipio').prop('disabled', true);

}
});


});
            })
            </script>
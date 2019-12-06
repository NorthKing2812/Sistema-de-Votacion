<form action="<?php echo base_url();?>mantenimiento/usuarios/update" method="POST">
                            <input type="hidden" value="<?php echo $usuario->id;?>" name="id_usuario">
                            <div class="row">
                    
                    <div class="form-group col-md-4">
                                <label for="username">Usuario:</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                                <input type="text" class="form-control" value="<?php echo $usuario->username;?> id="username" name="username" disabled requerid>
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo_user">Tipo Usuario:</label>
                                <select name="tipoUser" class="form-control" id="" disabled>
                                <option value="1" selected>Administrador</option>
                                </select>
                            </div>
                    </div>



                            <div class="row">
                            <div class="form-group col-md-5">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" requerid>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" requerid>
                            </div>
                            </div><!--/.row-->
                            
                            
                            <div class="row">
                            <div class="form-group col-md-5">
                                <label for="telefono">Telefono:</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                                <input type="text" class="form-control" id="tel" name="telefono" requerid>
                            </div>
                            </div>
                            
                            <div class="form-group col-md-5">
                            <label for="email">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                                <input type="email" class="form-control" id="email" name="email" requerid>
                            </div>
                            </div>

                            </div>
                    
                            

                        <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </form>
            
                        </form>
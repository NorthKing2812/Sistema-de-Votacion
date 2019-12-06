<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>
        Usuarios
        <small>Listado</small>
        </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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
              <h3 class="card-title">Tabla de colegios</h3>
            
              <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span></a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->id;?></td>
                                            <td><?php echo $usuario->username;?></td>
                                            <td><?php echo $usuario->nombres;?></td>
                                            <td><?php echo $usuario->apellidos;?></td>
                                            <td><?php echo $usuario->telefono;?></td>
                                            <td><?php echo $usuario->email;?></td>
                                            <?php //$dataproducto = $producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->descripcion."*".$producto->precio."*".$producto->stock."*".$producto->categoria;?>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('index.php/usuarios/edit/')?><?php echo $usuario->id;?>" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#modal-default"><span class="fas fa-pen"></span></a>
                                                    <a href="<?php echo base_url('index.php/usuarios/delete/');?><?php echo $usuario->id;?>" class="btn btn-danger btn-remove"><i class="fas fa-user-minus"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usarios
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuario</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
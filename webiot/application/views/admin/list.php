<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-success collapsed-card">

        <div class="card-header">
          <h3 class="card-title">Crear un nuevo Usuario</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-plus"></i></button>
          </div>
        </div>

        <div class="card-body">

              <form role="form" action="<?php echo base_url();?>usuarios/store" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre y Apellidos</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellidos" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" id="correo" name="correo" autocomplete="off" placeholder="Usuario" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipo Usuario</label>
                    <select class="form-control" id="tipo" name="tipo" placeholder="user" required="">

                      <option selected value="user">user</option>
                      <option value="admin">admin</option>
                      <option value="guest">guest</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Proyecto</label>
                    <input type="text" class="form-control" id="proyecto" name="proyecto" placeholder="Proyecto" required="">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>

        </div>

      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card card-info collapsed-card">

        <div class="card-header">
          <h3 class="card-title">Listado de los Usuarios Registrados</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-plus"></i></button>
            </div>
        </div>

        <div class="card-body">
          <div class="table-responsive-md">
          <table id="table" class="table">
            <thead>
              <tr>
                <th style="width: 5%">-</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Creado</th>
                <th>Estado</th>
                <th>Proyecto</th>
                <th>Tipo</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              <?php if(!empty($usuarios)):?>
              <?php foreach($usuarios as $usuario):?>
              <tr>
                <td  align="center"><i class="fa  fa-user fa-fw text-primary text-md va-middle"></i></td>
                <td ><?php echo $usuario->user_nombre;?></td>
                <td ><?php echo $usuario->user_email;?></td>
                <td ><?php echo $usuario->users_date;?></td>
                <td >
                  <?php if ( $usuario->user_estado == 1):?>
                   <?php echo "<span class='label label-table label-success'>Activo</span>"?>
                   <?php else: ?>
                   <?php echo "<span class='label label-table label-success'>-</span>"?>
                   <?php endif; ?>
                </td>
                <td ><?php echo $usuario->user_proyecto;?></td>
                <td ><?php echo $usuario->user_tipo;?></td>
                <td data-title="Acciones"align="center">
                  <div class="btn-group">
                    <a href="<?php echo base_url()?>usuarios/edit/<?php echo $usuario->user_id;?>" class="btn btn-info"><i class="fa fa-edit"> </i></a>
                    <a href="<?php echo base_url()?>usuarios/delete/<?php echo $usuario->user_id;?>" class="btn btn-danger toastrDefaultError"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
              <?php endforeach;?>
              <?php endif;?>
            </tbody>
          </table>
        </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

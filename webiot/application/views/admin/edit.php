<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuario: <?php echo $usuario->user_nombre ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>usuarios">Usuarios</a></li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-success">

        <div class="card-header">
          <h3 class="card-title">Editar Usuario</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>



        <div class="card-body">

              <form role="form" action="<?php echo base_url();?>usuarios/update" method="POST">
                <div class="card-body">
                   <input hidden="" type="text" class="form-control" id="id" name="id" value="<?php echo $usuario->user_id ?>" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre y Apellidos</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario->user_nombre ?>" placeholder="Nombre y Apellidos" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $usuario->user_email ?>" placeholder="Nombre de usuario" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipo Usuario</label>
                    <select class="form-control" id="tipo" name="tipo" value="<?php echo $usuario->user_tipo ?>">
                      <option selected>

                        <?php echo $usuario->user_tipo ?>
                      </option>
                      <option value="admin">admin</option>
                      <option value="user">user</option>
                      <option value="guest">guest</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Proyecto</label>
                    <input  type="text" disabled="" class="form-control" id="proyecto" name="proyecto" value="<?php echo $usuario->user_proyecto ?>"
                    placeholder="Proyecto">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
              </form>

        </div>

      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

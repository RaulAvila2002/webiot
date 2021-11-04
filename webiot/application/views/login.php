<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Webiot | IOT Platform</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


   <link rel="manifest" href="<?php echo base_url();?>manifest.json" />

  <!-- Favicon icon icono que sale en la web-->
  <link rel="icon" href="<?php echo base_url();?>dist/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>dist/img/favicon.ico" />
    <link rel="apple-touch-startup-image" href="<?php echo base_url();?>dist/img/favicon.ico" />
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b> Demo IOT </b>Platform</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesión</p>
        <?php if($this->session->flashdata("error")): ?>
         <div class="alert alert-danger background-danger">
             <p><?php echo $this->session->flashdata("error")?></p>
         </div>
       <?php endif; ?>
      <form action="<?php echo base_url();?>auth/login" method="post">
        <div class="input-group mb-3">
          <input type="text" name="correo" class="form-control" placeholder="Usuario" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Login</button>

          </div>
         <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->

    <!-- Main content -->
     <!-- /.card-header -->
        <!-- /.card-body -->
  </div>
</div>
<!-- /.login-box -->



<!-- jQuery -->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

<!-- PWA App -->
<script src="<?php echo base_url(); ?>dist/js/pwa.js"></script>
</body>
</html>

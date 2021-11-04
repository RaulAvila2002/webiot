<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Inicio</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->

  </section>


  <!-- Main content -->
  <section class="content">
    <?php if(!empty($dispositivos)):?>
       <?php foreach($dispositivos as $dispositivo):?>

         <div class="row">
          <div class="col-12">
            <div class="card collapse-card" >
              <div class="card-header" >
                <h3 class="card-title" >
                  <b>Dispositivo: </b><?php echo $dispositivo->device_nombre;?>
                  <br>
                  <b>Serie: </b><?php echo $dispositivo->device_serie?>
                  <br>
                  <b>Estado: </b><span id="status_<?php echo $dispositivo->device_serie?>"></span>
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                </div>
              </div>
                <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                  <div class="col-xs-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-anglearc="250" data-angleoffset="-125" value="30" data-width="120" data-eight="120" data-fgcolor="#00c0ef">
                    <div class="knob-label"></div>
                  </div>

                </div>
                <br>
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box"><span class="info-box-icon bg-success"><i class="fa fa-tachometer-alt"></i></span>
                      <div class="info-box-content"><span class="info-box-text">Entrada</span>
                        <span id="utilityVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box"><span class="info-box-icon bg-success"><i class="fa fa-tachometer-alt"></i></span>
                      <div class="info-box-content"><span class="info-box-text">Salida</span>
                        <span id="outputVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box"><span class="info-box-icon bg-success"><i class="fas fa-calendar-check"></i></span>
                      <div class="info-box-content"><span class="info-box-text">Bateria</span>
                        <span id="batteryVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box"><span class="info-box-icon bg-success"><i class="fas fa-wifi"></i></span>
                      <div class="info-box-content"><span class="info-box-text">Señal WiFi</span>
                        <span id="wifi_<?php echo $dispositivo->device_serie?>" class="info-box-number">0 dBm</span>
                      </div>
                    </div>

                  </div>

                </div>

          </div>
        <!-- /.col -->
      <!-- /.row -->
   <?php endforeach;?>
  <?php endif;?>

  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

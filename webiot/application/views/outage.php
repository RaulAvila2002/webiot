<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Outage</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Inicio</a></li>
            <li class="breadcrumb-item active">Outage</li>
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
            <div class="card collapsed-card" >
              <div class="card-header" >
                <h3 class="card-title" >
                  <b>Dispositivo: </b><?php echo $dispositivo->device_nombre?>
                  <br>
                  <b>Serie: </b><?php echo $dispositivo->device_serie?>
                  <br>
                  <b>Estado: </b><span id="status_<?php echo $dispositivo->device_serie?>"></span>
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Line Utility Voltage</span>
                        <span id="utilityVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Outage Utility Voltage</span>
                        <span id="outputVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Battery Volltage</span>
                        <span id="batteryVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <sapn class="info-box-content">Señal WiFi <span id="wifi_<?php echo $dispositivo->device_serie?>" class="info-box-number">0 dBm</span>
                      </span>
                    </div>
                  </div>

                </div>
                <br>
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Run Time</span>
                        <span id="runTime_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">System Up Time</span>
                        <span id="SystemIUpTime_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Monitor Time</span>
                        <span id="MonitorTime_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <sapn class="info-box-content">CPU Temperature <span id="CpuTemp_<?php echo $dispositivo->device_serie?>" class="info-box-number">C</span>
                      </span>
                    </div>
                  </div>

                </div>
                <br>
                <!--
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Packets Per Second</span>
                        <span id="PacketPerSecond_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Packet Count</span>
                        <span id="PacketCount_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Average Transaction Time</span>
                        <span id="AvgTransTime_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <sapn class="info-box-content"><span id="CpuTemp_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </span>
                    </div>
                  </div>

                </div>
                -->
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

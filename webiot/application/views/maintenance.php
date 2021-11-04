<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Maintenance</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Inicio</a></li>
            <li class="breadcrumb-item active">Maintenance</li>
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

                <div class="row align-items-start">
                  <div class="col"><h5>Maintenance:</h5></div>
                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Model</span>
                        <span id="model_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Serial Number</span>
                        <span id="serialNumber_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Controller Detected</span>
                        <span id="controllerDetected_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Nominal RPM</span>
                        <span id="nomimalRPM_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Rated kW</span>
                        <span id="ratedkW_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Nominal Frequency</span>
                        <span id="nominalFrequency_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Fuel Type</span>
                        <span id="fuelType_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <sapn class="info-box-content"></span>
                    </div>
                  </div>

                </div>

                <div class="row align-items-start">
                  <div class="col"><h5>Controller Settings:</h5></div>
                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Calibrate Volts</span>
                        <span id="calibrateVolts_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Nominal Line Voltage</span>
                        <span id="nominalLineVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Rated Max Power</span>
                        <span id="ratedMaxPower_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text"></span>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row align-items-start">
                  <div class="col"><h5>Services:</h5></div>
                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Air Filter Services Due:</span>
                        <span id="airFilterServicesDue_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Oil and Oil Filter Services Due:</span>
                        <span id="oilServicesDue_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Spark Plug Services Due:</span>
                        <span id="sparkPlugServicesDue_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Battery Services Due:</span>
                        <span id="batteryServicesDue_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Total Run Hours:</span>
                        <span id="totalRunHours_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Hardware Version:</span>
                        <span id="hardwareVersion_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Firmware Version:</span>
                        <span id="firmwareVersion_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text"></span>

                      </div>
                    </div>
                  </div>

                </div>

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

<!--

      Maintenance
      /generator/Maintenance/Model
      /generator/Maintenance/Generator Serial Number
      /generator/Maintenance/Controller Detected
      /generator/Maintenance/Nominal RPM
      /generator/Maintenance/Rated kW
      /generator/Maintenance/Nominal Frequency
      /generator/Maintenance/Fuel Type

      Controller Settings:
      /generator/Maintenance/Controller Settings/Calibrate Volts
      /generator/Maintenance/Controller Settings/Nominal Line Voltage
      /generator/Maintenance/Controller Settings/Rated Max Power

      Exercise:
      /generator/Maintenance/Exercise/Exercise Time

      Service:
      /generator/Maintenance/Service/Air Filter Service Due
      /generator/Maintenance/Service/Battery Service Due
      /generator/Maintenance/Service/Firmware Version
      /generator/Maintenance/Service/Hardware Version
      /generator/Maintenance/Service/Oil and Oil Filter Service Due
      /generator/Maintenance/Service/Spark Plug Service Due
      /generator/Maintenance/Service/Total Run Hours
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

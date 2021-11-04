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
            <div class="card collapsed-card" >
              <div class="card-header" >
                <h3 class="card-title" >
                  <img src="<?php echo base_url(); ?>dist/img/generac64.png" >
                  <br>
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

                  <div class="col-6 col-md-3 text-center">
                    <div class="knob-label">Utility Voltage</div>
                    <input type="text" class="knobEntrada_<?php echo $dispositivo->device_serie?>"  data-thickness=".2" data-angleArc="250" data-angleOffset="-125" value="0" data-width="120" data-height="100" readonly="true" data-fgColor="#66CC66" data-max="500">

                  </div>

                  <div class="col-6 col-md-3 text-center">
                    <div class="knob-label">Output Voltage</div>
                    <input type="text" class="knobSalida_<?php echo $dispositivo->device_serie?>"  data-thickness=".2" data-angleArc="250" data-angleOffset="-125" value="0" data-width="120" data-height="100" readonly="true" data-fgColor="#66CC66" data-max="270" knob="true">

                  </div>

                  <div class="col-6 col-md-3 text-center">
                    <div class="knob-label">Battery Volltage</div>
                    <input type="text" class="knobBateria_<?php echo $dispositivo->device_serie?>"  data-thickness=".2" data-angleArc="250" data-angleOffset="-125" value="0" data-width="120" data-height="100" readonly="true" data-fgColor="#66CC66" data-max="16" data-step=".1">
                    <div class="knob-label"></div>
                  </div>

                  <div class="col-6 col-md-3 text-center">
                    <div class="knob-label">Frecuency</div>
                    <input type="text" class="knobFrecuencia_<?php echo $dispositivo->device_serie?>"  data-thickness=".2" data-angleArc="250" data-angleOffset="-125" value="0" data-width="120" data-height="100" readonly="true" data-fgColor="#66CC66"data-max="60" data-step=".1">
                  </div>

                </div>

                <br>

                <div class="row align-items-start">
                  <div class="col"><h5>Engine:</h5></div>
                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Switch State</span>
                        <span id="switchState_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Engine State</span>
                        <span id="engineState_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
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
                      <div class="info-box-content"><span class="info-box-text">RPM</span>
                        <span id="rpm_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Frequency</span>
                        <span id="frequency_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Output Voltage</span>
                        <span id="outputVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Active Rotor Poles (Calculated)</span>
                        <span id="activeRotorPoles_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
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
                  <div class="col"><h5>Line:</h5></div>
                </div>


                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Utility Voltage</span>
                        <span id="utilityVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Utility Max Voltage</span>
                          <span id="utilityMaxVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Utility Min Voltage</span>
                          <span id="utilityMinVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Utility Threshold Voltage</span>
                          <span id="utilityThresVoltage_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row align-items-start">
                  <div class="col"><h5>Monitor:</h5></div>
                </div>

                <div class="row">

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text"></span>
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
                      <div class="info-box-content"><span class="info-box-text">Wifi Signal</span>
                        <span id="wifi_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
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
                <!--

                /generator/Status/Engine/Active Rotor Poles (Calculated)
                /generator/Status/Engine/Battery Voltage
                /generator/Status/Engine/Engine State
                /generator/Status/Engine/Frequency
                /generator/Status/Engine/Output Voltage
                /generator/Status/Engine/RPM
                /generator/Status/Engine/Switch State



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

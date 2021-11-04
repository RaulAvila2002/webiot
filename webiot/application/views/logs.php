<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Logs</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Inicio</a></li>
            <li class="breadcrumb-item active">Logs</li>
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
                      <div class="info-box-content"><span class="info-box-text">Last Run Log</span>
                        <span id="lastLogEntriesRunLog_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Last Alarm Log</span>
                        <span id="lastLogEntriesAlarmLog_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">

                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Fuel Consumption</span>
                        <span id="fuelConsumption_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box text-center">
                      <div class="info-box-content"><span class="info-box-text">Outage Log</span>
                        <span id="outageLog_<?php echo $dispositivo->device_serie?>" class="info-box-number"></span>
                      </div>
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
                  Received form Mundogenerador/generator/Status/Last Log Entries/Logs/Service Log :
                  dashboard:682 Received form Mundogenerador/generator/Status/Last Log Entries/Logs/Run Log : 06/12/21 13:07:40 Switched Off
                  dashboard:682 Received form Mundogenerador/generator/Status/Last Log Entries/Logs/Alarm Log : 06/12/21 13:08:11 ESTOP Pressed : Alarm Code: 2800
                  dashboard:682 Received form Mundogenerador/generator/Maintenance/Total Power Log Fuel Consumption : 0.88 cubic meters
                  dashboard:682 Received form Mundogenerador/generator/Outage/Outage Log : 2021-06-12 17:02:19, Duration: 0:01:37, Estimated Fuel: 0.52 cubic meters, 2021-06-12 16:15:52, Duration: 0:00:59, Estimated Fuel: 0.63 L, 2021-06-12 16:07:59, Duration: 0:01:37, Estimated Fuel: 0.23 L, 2021-06-12 16:04:20, Duration: 0:01:39, Estimated Fuel: 0.10 L, 2021-06-12 03:19:45, Duration: 0:00:05, 2021-06-11 22:31:28, Duration: 0:08:43, 2021-05-21 15:26:00, Duration: 0:04:13, Estimated Fuel: 0.10 cubic meters, 2021-05-21 15:25:20, Duration: 0:00:29, Estimated Fuel: 0.00 cubic meters, 2021-05-21 13:57:30, Duration: 0:02:55, Estimated Fuel: 0.00 cubic meters
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

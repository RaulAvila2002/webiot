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
                  <div id="STATUS_<?php echo $dispositivo->device_serie?>"></div>
                    Datos del <b>Dispositivo: </b><?php echo $dispositivo->device_nombre;?> <b>Serie: </b><?php echo $dispositivo->device_serie?>
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">

                    <!-- Knobs - Perilla Temperatura -->
                    <div class="col-6 col-md-3 text-center">
                      <input type="text" class="knobTemprange_<?php echo $dispositivo->device_serie?>"  data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="0" data-width="120" data-height="120" readonly="true" data-fgColor="#C0392B">
                      <div class="knob-label">Temp °C</div>
                    </div>

                    <!-- Knobs - Perilla Rojo -->
                    <div class="col-6 col-md-3 text-center">
                      <input type="text" class="knobChannel_Arange_<?php echo $dispositivo->device_serie?>"  id="CH_R<?php echo $dispositivo->device_serie?>" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"  onmouseup="process_dimmer_R('<?php echo $dispositivo->device_serie?>');" value="0" data-width="120" data-height="120" data-fgColor="#FF0000" >
                      <div class="knob-label">Canal A</div>
                    </div>

                    <!-- Knobs - Perilla Verde-->
                    <div class="col-6 col-md-3 text-center">
                      <input type="text" class="knobChannel_Brange_<?php echo $dispositivo->device_serie?>" id="CH_G<?php echo $dispositivo->device_serie?>" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" onmouseout="process_dimmer_G('<?php echo $dispositivo->device_serie?>');"  value="0" data-width="120" data-height="120" data-fgColor="#00FF00">
                      <div class="knob-label">Canal B</div>
                    </div>

                    <!-- Knobs - Perilla Azul -->
                    <div class="col-6 col-md-3 text-center">
                      <input type="text" class="knobChannel_Crange_<?php echo $dispositivo->device_serie?>" id="CH_B<?php echo $dispositivo->device_serie?>" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" onmouseout="process_dimmer_B('<?php echo $dispositivo->device_serie?>');" value="0" data-width="120" data-height="120" data-fgColor="#0000FF" max="255">
                      <div class="knob-label">Canal C</div>
                    </div>

                  </div>

                <br>
                <!-- Barra Botones-->

                <!-- /.row Boton ON -->
                <div class="row">

                    <div class="col-6 col-md-3 text-center">
                        <a id="btn0_<?php echo $dispositivo->device_serie?>" class="btn btn-app bg-gradient-success" onclick="setRelay('0','2','<?php echo $dispositivo->device_serie?>');">
                        <i class="fas fa-power-off"></i><div id="btn0_txt_<?php echo $dispositivo->device_serie?>"></div></a>
                        <div class="knob-label">Salida 1</div>
                    </div>
                <!-- ./col Boton OFF -->
                    <div class="col-6 col-md-3 text-center">
                        <a id="btn1_<?php echo $dispositivo->device_serie?>" class="btn btn-app bg-gradient-danger" onclick="setRelay('1','2','<?php echo $dispositivo->device_serie?>');">
                        <i class="fas fa-power-off"></i><div id="btn1_txt_<?php echo $dispositivo->device_serie?>"></div></a>
                        <div class="knob-label">Salida 2</div>
                    </div>
                <!-- ./col Slider -->
                    <div class="col-6 col-md-3 text-center">
                        <a id="btnOFF_<?php echo $dispositivo->device_serie?>" class="btn btn-app bg-gradient-danger" onclick="setRelay('2','2','<?php echo $dispositivo->device_serie?>');">
                        <i class="fas fa-power-off"></i>OFF</a>
                        <div class="knob-label">RGB ON-OFF</div>
                    </div>
                    <!-- ./col Slider -->
                    <div class="col-6 col-md-3 text-center">
                        <input class="rang" id="range_<?php echo $dispositivo->device_serie?>" onchange="process_dimmer('<?php echo $dispositivo->device_serie?>');" type="text"  value="255">
                        <div class="knob-label">Dimmer LED BOARD</div>
                    </div>

                  </div>
                <!-- Barra Informacion-->
              <br>
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box"><span class="info-box-icon bg-info"><i class="fas fa-wifi"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Señal WiFi</span>
                          <span id="wifi_<?php echo $dispositivo->device_serie?>" class="info-box-number">0 dBm</span>
                          <span id="wifi2_<?php echo $dispositivo->device_serie?>" class="info-box-number">Calidad</span>
                        </div>
                    <!-- /.info-box-content -->
                      </div>
                  <!-- /.info-box -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box"><span class="info-box-icon bg-success"><i class="fas fa-history"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Ultima Conexión</span>
                          <span id="display_time<?php echo $dispositivo->device_serie?>" class="info-box-number">--/--/----</span>
                          <span id="display_time2<?php echo $dispositivo->device_serie?>" class="info-box-number">--:--:--</span>
                        </div>
                      <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box"><span class="info-box-icon bg-warning"><i class="far fa-bell"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Ultimo Evento</span>
                          <span id="display_time3<?php echo $dispositivo->device_serie?>" class="info-box-number">--/--/----</span>
                          <span id="display_time4<?php echo $dispositivo->device_serie?>" class="info-box-number">--:--:--</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box"><span class="info-box-icon bg-danger"><i class="fas fa-ethernet"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Dirección IP</span>
                          <span id="display_time5<?php echo $dispositivo->device_serie?>" class="info-box-number">Red_Local</span>
                          <span id="display_ip<?php echo $dispositivo->device_serie?>" class="info-box-number">---.---.---.---</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                  </div>

             </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

   <?php endforeach;?>
  <?php endif;?>

  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

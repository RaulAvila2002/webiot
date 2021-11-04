<footer class="main-footer">
		<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.2.0
		</div>
		<strong>Copyright &copy; <?php echo date("Y");?> <a href="<?php base_url();?>">webiot.com.ar</a>.</strong> All rights
		reserved.
</footer>

<!-- /.control-sidebar -->
</div>


<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url(); ?>plugins/toastr/toastr.min.js"></script>
<!-- jQuery Knob -->
<script src="<?php echo base_url(); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-knob/jquery.knob.js"></script>
<!-- Ion Slider -->
<script src="<?php echo base_url(); ?>plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap slider -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>plugins/select2/js/select2.full.min.js"></script>
<!--  libreria MQTT -->
<script src="<?php echo base_url(); ?>dist/js/mqtt.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url(); ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
  $(function () {
    //Date range picker inicio
    $('#reservationdate').datetimepicker({
    	format: 'YYYY-MM-DD HH:mm',
    	pickDate: false,
        pickSeconds: false,
        pick12HourFormat: false,
        use24hours: true,
    });

    //Date range picker fin
    $('#reservationdate2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        pickDate: false,
        pickSeconds: false,
        pick12HourFormat: false,
        use24hours: true,
    });

  })
</script>

<!--  libreria MQTT -->
<!-- <script src="https://unpkg.com/mqtt@4.2.0/dist/mqtt.min.js"></script> -->


<!-- Sección de Script -->
<script type="text/javascript">

		$(function() {
				const Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
				});

				//toast mostrarlo
				<?php if ($this->session->flashdata('success')) {?>
								toastr.success("<?php echo $this->session->flashdata('success'); ?>");
				<?php } else if ($this->session->flashdata('error')) {?>
								toastr.error("<?php echo $this->session->flashdata('error'); ?>");
				<?php } else if ($this->session->flashdata('warning')) {?>
								toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
				<?php } else if ($this->session->flashdata('info')) {?>
								toastr.info("<?php echo $this->session->flashdata('info'); ?>");
				<?php }?>

				//con esta funcion pasamos los paremtros a los text del modal.
				selDevice = function(idDevice, nombre, serie){
						//Aplicamos el valor de la variable al Titulo
						document.getElementById('titulo').innerHTML= 'Dispositivo: ' + nombre + ' Serie: ' + serie;
								//Aplicamos los valores a los imput del Modal
						$('#idupdate').val(idDevice);
						$('#nombreupdate').val(nombre);
						$('#serieupdate').val(serie);
				};

				//////////////////////////////////////////////////
				/* ION SLIDER poner todos los Ranges con los Ids de los dispositivos */
				const ids = [...document.querySelectorAll('.rang')].map(el => el.id);

 			//////////////////////////////////////////////////
				//con esta funcion enviamos el comando del boton ON/OFF.
				setRelay = function(relay,comando, id){

					//Comando de mqtt y el topic, para abrir y cerrar el Relay GPIO13 ESP32
					    if(comando == "1"){
	                      client.publish(id + "/relay/" +relay+ "/set", '1', (error) => {console.log(error || 'Abrir - Salida ' + 'Device: ' + id)})
	                    }
	            if(comando == "0"){
                        client.publish(id + "/relay/" +relay+ "/set", '0', (error) => {console.log(error || 'Cerrar - Salida ' + 'Device: ' + id)})
	                    }
							if(comando == "2"){
				                client.publish(id + "/relay/" +relay+ "/set", '2', (error) => {console.log(error || 'Cambiar - Salida ' + 'Device: ' + id)})
					            }
				};

});

//para configurar las tablas
$(function () {
    $("#table").DataTable({
		"responsive": true,
		"autoWidth": false,
		language: {
           "lengthMenu": "Mostrar _MENU_ registros por página",
           "zeroRecords": "No se encontraron resultados en su búsqueda",
           "searchPlaceholder": "Buscar",
           "info": "Registros de _START_ al _END_ de un total de  _TOTAL_ ",
           "infoEmpty": "No existen registros",
           "infoFiltered": "(filtrado de un total de _MAX_ registros)",
           "search": "Buscar:",
           "paginate": {
           "first": "Primero",
           "last": "Último",
           "next": "Siguiente",
           "previous": "Anterior"
            },
           "sProcessing":"Procesando...",
         }
    });
});


// Sección MQTT ///

const options = {
	 	clientId: 'Web_Page_Demo'+ Math.round(Math.random() * (0- 10000) * -1),
				connectTimeout: 4000,
  			username: 'web',
    		password: 'webpass',
    		keepalive: 60,
    		clean: true,
    }

	//		const WebSocket_URL = 'ws://webiot.com.ar:8093/mqtt'
const WebSocket_URL = 'wss://webiot.com.ar:8094/mqtt'

		//	const client = mqtt.connect(WebSocket_URL,options);
const client = mqtt.connect(WebSocket_URL,options);
   // Nos conectamos al Servidor MQTT
	 	client.on('connect', () => {

		console.log('Conectado al Servidor WSS, MQTT,  con Exito')

      	    // Nos suscribimos a los topicos de todos los dispositivos de la BD!!!
		<?php if(!empty($dispositivos)):?>

			<?php foreach($dispositivos as $dispositivo):?>

				// client.subscribe('<?php echo $dispositivo->device_serie?>/data', { qos: 0 }, (error) => {
				// 			if (!error) {
				// 					console.log('Suscripción exitosa! data')
				// 					// Sacamos por consola los Serial ID de los dispositivos.
				// 					console.log('<?php echo $dispositivo->device_serie?>')
				//
				// 		    }
				// 			else{
				// 	        console.log('Suscripción fallida! data')
				// 		    }
	      //   })

				client.subscribe('<?php echo $dispositivo->device_serie?>/#', { qos: 0 },(error) => {
           		if (!error) {
					       	console.log('Suscripción exitosa! status')
						        // Sacamos por consola los Serial ID de los dispositivos.
					       	console.log('<?php echo $dispositivo->device_serie?>')
						    }
							else{
					        console.log('Suscripción fallida! status')
						    }
          })

	//			client.subscribe('<?php echo $dispositivo->device_serie?>/generator/#', { qos: 0 }, (error) => {
	//						if (!error) {
////									console.log('Suscripción exitosa! ')
									// Sacamos por consola los Serial ID de los dispositivos.
//									console.log('<?php echo $dispositivo->device_serie?>')
//							}
//							else{
//									console.log('Suscripción fallida!')
//							}
//					})

      <?php endforeach;?>

  	<?php endif;?>

		    // Publicamos el primer Topico => publish(topic, payload, options/callback)
				client.publish('status', 'Servidor Web', (err) => {
			    console.log(err || 'Publish Success')
			  })

       })

		// Sacamos por consola los topicos que llegan!!!!
		// handle message event
		client.on('message', (topic, message) => {
				  console.log('Received form', topic, ':', message.toString())

					<?php if(!empty($dispositivos)):?>
			 			<?php foreach($dispositivos as $dispositivo):?>

					$('.knobEntrada_'+'<?php echo $dispositivo->device_serie?>').knob();
					$('.knobSalida_'+'<?php echo $dispositivo->device_serie?>').knob();
					$('.knobBateria_'+'<?php echo $dispositivo->device_serie?>').knob();
		   		$('.knobFrecuencia_'+'<?php echo $dispositivo->device_serie?>').knob();

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/client_status"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#status_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Platform Stats/WLAN Signal Level"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#wifi_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Generator Monitor Stats/Run time"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#runTime_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Platform Stats/System Time"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#SystemTime_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Platform Stats/System Uptime"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#SystemIUpTime_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Time/Monitor Time"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#MonitorTime_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}


						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Line/Utility Voltage"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#utilityVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									$('.knobEntrada_'+'<?php echo $dispositivo->device_serie?>')
									.val(datos)
									.trigger('change')
									.knob();
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Output Voltage"){
							var datos = message.toString();
							if(!(datos === undefined))
									{
									$('#outputVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									$('.knobSalida_'+'<?php echo $dispositivo->device_serie?>')
									.val(datos)
									.trigger('change')
									.knob();
									}
						}


						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Platform Stats/CPU Temperature"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('.knobTempCPU_'+'<?php echo $dispositivo->device_serie?>')
									.val(datos)
									.trigger('change')
									.knob();
									$('#CpuTemp_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Communication Stats/Packets Per Second"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#PacketPerSecond_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}
						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Communication Stats/Packet Count"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#PacketCount_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}
						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Communication Stats/Average Transaction Time"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#AvgTransTime_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Model"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#model_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Generator Serial Number"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#serialNumber_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Model"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#controllerDetected_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Nominal RPM"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#nomimalRPM_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Rated kW"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#ratedkW_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Nominal Frequency"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#nominalFrequency_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Fuel Type"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#fuelType_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Controller Settings/Calibrate Volts"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#calibrateVolts_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Controller Settings/Nominal Line Voltage"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#nominalLineVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Controller Settings/Rated Max Power"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#ratedMaxPower_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Air Filter Service Due"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#airFilterServicesDue_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Oil and Oil Filter Service Due"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#oilServicesDue_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Spark Plug Service Due"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#sparkPlugServicesDue_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Battery Service Due"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#batteryServicesDue_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Total Run Hours"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#totalRunHours_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Hardware Version"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#hardwareVersion_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Service/Firmware Version"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#firmwareVersion_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 //SATUS-ENGINE
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Switch State"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#switchState_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Engine State"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#engineState_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Battery Voltage"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#batteryVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 $('.knobBateria_'+'<?php echo $dispositivo->device_serie?>')
								 .val(datos)
								 .trigger('change')
								 .knob();
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/RPM"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#rpm_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Frequency"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#frequency_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 $('.knobFrecuencia_'+'<?php echo $dispositivo->device_serie?>')
								 .val(datos)
								 .trigger('change')
								 .knob({'fgColor':'#66CC66'});
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Output Voltag"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#outputVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Engine/Active Rotor Poles (Calculated)"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#activeRotorPoles_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Line/Utility Max Voltage"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#utilityMaxVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Line/Utility Min Voltage"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#utilityMinVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Line/Utility Threshold Voltage"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#utilityThresVoltage_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Last Log Entries/Logs/Run Log"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#lastLogEntriesRunLog_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Status/Last Log Entries/Logs/Alarm Log"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#lastLogEntriesAlarmLog_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Maintenance/Total Power Log Fuel Consumption"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#fuelConsumption_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }
					 if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Outage/Outage Log"){
						 var datos = message.toString();
							 if(!(datos === undefined))
								 {
								 $('#outageLoge_'+'<?php echo $dispositivo->device_serie?>').html(datos);
								 }
					 }

						/*

						/generator/Status/Last Log Entries/Logs/Run Log : 06/12/21 13:07:40 Switched Off
						/generator/Status/Last Log Entries/Logs/Alarm Log : 06/12/21 13:08:11 ESTOP Pressed : Alarm Code: 2800
					  /generator/Maintenance/Total Power Log Fuel Consumption : 0.88 cubic meters
						/generator/Outage/Outage Log
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

						STATUS
						/generator/Status/Engine/Switch State
						/generator/Status/Engine/Battery Voltage

						/generator/Status/Engine/Active Rotor Poles (Calculated)

						/generator/Status/Engine/Engine State
						/generator/Status/Engine/Frequency
						/generator/Status/Engine/Output Voltage
						/generator/Status/Engine/RPM

						/generator/Status/Line/Utility Max Voltage
						/generator/Status/Line/Utility Min Voltage
						/generator/Status/Line/Utility Threshold Voltage
						/generator/Status/Line/Utility Voltage


						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Communication Stats/Packets Per Second"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#PacketPerSecond_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}
						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Communication Stats/Packet Count"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#PacketCount_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}
						if(topic == '<?php echo $dispositivo->device_serie?>'+"/generator/Monitor/Communication Stats/Average Transaction Time"){
							var datos = message.toString();
								if(!(datos === undefined))
									{
									$('#AvgTransTime_'+'<?php echo $dispositivo->device_serie?>').html(datos);
									}
						}

						/generator/Monitor/Communication Stats/Packets Per Second
						/generator/Monitor/Communication Stats/Packet Count
						/generator/Monitor/Communication Stats/Average Transaction Time

/generator/Monitor/Platform Stats/WLAN Signal Level
/generator/Monitor/Platform Stats/CPU Temperature
/generator/Monitor/Platform Stats/CPU Utilization
/generator/Monitor/Platform Stats/System Time
/generator/Monitor/Platform Stats/System Uptime


/generator/Outage/Utility Voltage

/generator/client_status
/generator/Status/Engine/Battery Voltage
/generator/Status/Line/Utility Voltage

/generator/Status/Time/Generator Time
/generator/Status/Time/Monitor Time


						else{
							var datos = message.toString();

							if(topic == '<?php echo $dispositivo->device_serie?>'+"/data"){

								if(!(datos.temperature === undefined))
									{
									$('.knobTensionEntrada__'+'<?php echo $dispositivo->device_serie?>')
									.val(datos)
									.trigger('change');
								}

								if(!((datos.rgb) === undefined))
									{
									var cadena = datos.rgb.toString();

									var rgb = "0";
									rgb = cadena.split(",");
									rgb[0] = (rgb[0]*100/256);
									rgb[1] = (rgb[1]*100/256);
									rgb[2] = (rgb[2]*100/256);

									$('.knobChannel_Arange_'+'<?php echo $dispositivo->device_serie?>')
									.val(rgb[0])
									.trigger('change');

									$('.knobChannel_Brange_'+'<?php echo $dispositivo->device_serie?>')
									.val(rgb[1])
									.trigger('change');

									$('.knobChannel_Crange_'+'<?php echo $dispositivo->device_serie?>')
									.val(rgb[2])
									.trigger('change');
								}

								if(!( datos['relay/0'] === undefined))
								 {

									if(datos['relay/0'] == "1")
										$('#btn0_txt_'+'<?php echo $dispositivo->device_serie?>').html("ON");
									if(datos['relay/0'] == "0")
										$('#btn0_txt_'+'<?php echo $dispositivo->device_serie?>').html("OFF");
								 }

								if(!( datos['relay/1'] === undefined))
								 {
									if(datos['relay/1'] == "1")
									 $('#btn1_txt_'+'<?php echo $dispositivo->device_serie?>').html("ON");
								 	if(datos['relay/1'] == "0")
									 $('#btn1_txt_'+'<?php echo $dispositivo->device_serie?>').html("OFF");
								 }

								if(!( datos['relay/2'] === undefined))
								{
									console.log(datos['relay/2']);
								}

								if(!(datos.ip === undefined))
									$("#display_ip"+'<?php echo $dispositivo->device_serie?>').html(datos.ip);

								if(!(datos.rssi === undefined))
									$("#wifi_"+'<?php echo $dispositivo->device_serie?>').html(datos+" dBm");

								var d = new Date();
		  						$("#display_time3"+'<?php echo $dispositivo->device_serie?>').html(d.toLocaleDateString());
									$("#display_time4"+'<?php echo $dispositivo->device_serie?>').html(d.toLocaleTimeString());
		 						}

		 					if(topic == '<?php echo $dispositivo->device_serie?>'+"/status"){
								if (message.toString() == "1"){
									var d = new Date();
									$("#display_time"+'<?php echo $dispositivo->device_serie?>').html(d.toLocaleDateString());
									$("#display_time2"+'<?php echo $dispositivo->device_serie?>').html(d.toLocaleTimeString());
									$('#STATUS_'+'<?php echo $dispositivo->device_serie?>').html("<i class='fa fa-link'></i>");
								 }
								if (message.toString() == "0"){
									$('#STATUS_'+'<?php echo $dispositivo->device_serie?>').html("<i class='fa fa-unlink'></i>");
								 }
		  				}
						}
						*/
						<?php endforeach;?>
					<?php endif;?>

		})


		client.on('reconnect', (error) => {
		    console.log('Error al reconectar', error)
		})

		client.on('error', (error) => {
		    console.log('Error de conexión:', error)
		})

</script>


</body>
</html>

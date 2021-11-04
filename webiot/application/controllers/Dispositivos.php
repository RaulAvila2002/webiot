<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispositivos extends CI_Controller {
   public function __construct()
	{
		parent:: __construct();

        $this->load->model("Dispositivos_model");

		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}

	}


  public function index(){
    $aplicacion = $this->session->userdata('user_aplicacion');
    $proyecto = $this->session->userdata('user_proyecto');

    if ($this->session->userdata('user_tipo') == "user"):
      $data = array('dispositivos' => $this->Dispositivos_model->getDispositivosProyecto($proyecto),);
    endif;

    if ($this->session->userdata('user_tipo') == "admin"):
      $data = array('dispositivos' => $this->Dispositivos_model->getDispositivosProyecto($proyecto),);
    endif;

    if ($this->session->userdata('user_tipo') == "owner"):
      $data = array('dispositivos' => $this->Dispositivos_model->getDispositivos(),);
    endif;

//    if ($this->session->userdata('user_tipo') == "owner"):
//      $data = array('dispositivos' => $this->Dispositivos_model->getDispositivosAplicacion($aplicacion),);
//    else:

  	$this->load->view("layouts/header");
		$this->load->view('layouts/sidebar');
		$this->load->view("devices/list",$data);
		$this->load->view("layouts/footer");
	}

  	public function store(){

  		$user_id = $this->session->userdata("user_id");
	    $nombre = $this->input->post("nombre");
	    $serie = $this->input->post("serie");
      $proyecto = $this->session->userdata("user_proyecto");

		$data = array(

			'device_nombre' => $nombre,
			'device_serie' => $serie,
			'device_user_id' => $user_id,
      'device_proyecto' => $proyecto,
			'device_estado'=> 1

			);

   		if ($this->Dispositivos_model->save($data)) {
   		   $this->session->set_flashdata("info","Usted registro un nuevo Dispositivo! :)");
           redirect(base_url()."dispositivos");
		}
	}

    public function update(){

		$id= $this->input->post("idupdate");
		$nombre = $this->input->post("nombreupdate");

		if ($id == 1){

		   $this->session->set_flashdata("error","Usted no esta autorizado para editar este Dispositivo! :)");
		   redirect(base_url()."dispositivos");

		}else {

			$data = array(

		     'device_nombre' => $nombre,

	      	);

		}

    if ($this->Dispositivos_model->update($id,$data)) {

           $this->session->set_flashdata("success","Dispositivo actualizado correctamente! :)");
           redirect(base_url()."dispositivos");
		}

	}

	public function delete($id)
	{
		if ($id == 1){
		   $this->session->set_flashdata("error","Usted no esta autorizado para eliminar este Dispositivo! :)");
		   redirect(base_url()."dispositivos");

		}else{
		$data = array(

			'device_estado' => 0,
		);
	 }
		$this->Dispositivos_model->update($id,$data);
		$this->session->set_flashdata("warning","Dispositivo eliminado correctamente! :(");
		redirect(base_url()."dispositivos");
	}




}

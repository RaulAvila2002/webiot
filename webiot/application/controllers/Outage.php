<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outage extends CI_Controller {

  public function __construct()
	{
		parent:: __construct();
    $this->load->model("Dispositivos_model");
    if (!$this->session->userdata("login")) {
			redirect(base_url());
		}

	}


  public function index()
	{
    $proyecto = $this->session->userdata('user_proyecto');

    if ($proyecto == "WEBIOT"):
      $data = array(
          'dispositivos' => $this->Dispositivos_model->getDispositivos(),

      );
    else:
      $data = array(
          'dispositivos' => $this->Dispositivos_model->getDispositivosProyecto($proyecto),
      );
    endif;
  	$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('outage',$data);
		$this->load->view('layouts/footer',$data);
	}

}

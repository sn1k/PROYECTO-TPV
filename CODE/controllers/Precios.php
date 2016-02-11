<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Precios extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('precio_model');
		$this->load->model('articulo_model');
    $this->load->helper('url_helper');
  }

	public function index($idArticulo)
	{
		$this->load->helper('form');
    $this->load->library('form_validation');

		$this->form_validation->set_rules('precio', 'Precio', 'required');
    $this->form_validation->set_rules('fecha', 'Fecha', 'required');

		$data['precios'] = $this->precio_model->get_precios($idArticulo);

		if ($this->form_validation->run() === FALSE)
    {
			$data['idArticulo'] = $idArticulo;
			$data['nombreArticulo'] = 'NOMBRE'; //$this->articulo_model->get_precios();
			$this->load->view('precios/index', $data);
		}
		else
		{
			$data['precio'] = $this->precio_model->set_precio($idArticulo);
			$this->load->view('precios/success', $data);
		}
	}
}

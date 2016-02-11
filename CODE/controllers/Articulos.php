<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('articulo_model');
    $this->load->helper('url_helper');
  }

	public function index()
	{
		$data['articulos'] = $this->articulo_model->get_articulos();
		$this->load->view('articulos/index', $data);
	}

	public function view($id)
	{
		$data['articulo_item'] = $id;
		$this->load->view('articulos/view', $data);
	}

	public function create()
	{
		$this->load->helper('form');
    $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('descripcion', 'Descripción', 'required');
		$this->form_validation->set_rules('precio', 'Precio', 'required');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('articulos/create');
		}
		else
		{
			$data['articulo'] = $this->articulo_model->set_articulos();
			$this->load->view('articulos/success', $data);
		}


	}
}

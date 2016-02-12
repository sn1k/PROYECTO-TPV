<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carritos extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('carrito_model');
    $this->load->helper('url_helper');
  }

	public function index()
	{
		$data['carrito'] = $this->carrito_model->get_carrito();
		$this->load->view('carritos/index', $data);
	}

	public function create($idArticulo)
	{
			$this->carrito_model->set_linea($idArticulo);
			$data['carrito'] = $this->carrito_model->get_carrito();
			$this->load->view('carritos/index', $data);

	}

	public function delete($idCarrito)
	{
			$this->carrito_model->delete_linea($idCarrito);
			$data['carrito'] = $this->carrito_model->get_carrito();
			$this->load->view('carritos/index', $data);

	}
}

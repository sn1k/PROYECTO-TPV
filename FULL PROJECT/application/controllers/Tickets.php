<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
		$this->load->model('ticket_model');
    $this->load->helper('url_helper');
  }

	public function index()
	{
		$data['tickets'] = $this->ticket_model->get_tickets();
		$this->load->view('tickets/index', $data);
	}

	public function create()
	{
			$this->ticket_model->set_ticket();
			$this->index();

	}

	public function view($idTicket)
	{
			$data['ticket'] = $this->ticket_model->get_precio_ticket($idTicket);
			$data['lineasTicket'] = $this->ticket_model->get_ticket($idTicket);
			$this->load->view('tickets/view', $data);

	}

	public function devolver($idLinea)
	{
		$this->ticket_model->devolver_articulo($idLinea);
		$this->index();

	}
}

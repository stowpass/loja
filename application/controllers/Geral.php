<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/topo');
		$this->load->view('clientes/listagem');
		$this->load->view('layout/rodape');

	}

}




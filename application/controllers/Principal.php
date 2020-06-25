<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

 public function __construct(){

	parent::__construct();
	
	if (!$this->ion_auth->logged_in()) {
		redirect('admin/login', 'refresh');
	}


 }
	public function index()
	{

		if (!$this->ion_auth->logged_in()) {
			redirect('usuarios/login', 'refresh');
		}

		$this->load->view('lyout/topo');
		$this->load->view('lyout/meio');		
		//$this->load->view('welcome_message');
		$this->load->view('lyout/rodape');
//		redirect('auth/login', 'refresh');
	}
}

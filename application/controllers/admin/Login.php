<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}



	public function index()
	{

		$this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');


		
		if ($this->form_validation->run() == TRUE) {
				 
			$identity =	$this->input->post('email');
			$password = $this->input->post('senha');
			$remember = ( $this->input->post('manter') != NULL ? TRUE : FALSE);
				if ($this->ion_auth->login($identity, $password, $remember)) {
				
				redirect('principal','refresh');
			}else{
				redirect('admin/login','refresh');
			}

		} else {
			$this->load->view('usuarios/login');
		}
	}

public function sair(){
	$this->ion_auth->logout();
	redirect('admin/login', 'refresh');
}

}

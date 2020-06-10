<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuariocontroller extends CI_Controller
{

	public function index()
	{
		//$this->load->view('lyout/topo');		
		//$data['usuarios'] =$this->ion_auth->users()->result();;
		$this->load->view('usuarios/login');
		//$this->load->view('lyout/rodape');
	}

	public function novo()
	{
		$this->load->view('lyout/topo');
		$this->load->view('auth/create_user');

		//$this->load->view('welcome_message');
		
		//		redirect('auth/login', 'refresh');
	}
}

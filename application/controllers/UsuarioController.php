<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioController extends CI_Controller {


	public function index()
	{
		
		if ($this->session->has_userdata('id')  ) {
			$this->load->view('clientes');
		}else{
			$this->load->view('usuarios/login');
		}
		
	}

	
	public function novo()
	{
	
		$this->load->view('layout/topo');
		$this->load->view('usuarios/cad_usuarios');
		$this->load->view('layout/rodape');


	}

	public function verificar()
	{
		$this->load->model('usuariomodel');
		if($this->usuariomodel->verificar_login()){

			redirect('cliente');
			
		}else{
			redirect('usuarios');
		}

	}

	public function salvar()
	{

		$this->load->model('usuariomodel');
		$this->usuariomodel->salvar();
		redirect('cliente');

	}
}




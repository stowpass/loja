<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login', 'refresh');
		}
	
		$this->load->library('form_validation');
	}



	public function index()
	{
		$data['titulo'] = 'Lista de Usuários';
		$data['view'] = 'Lista de Usuários';
		$users = $this->ion_auth->users()->result();
		$data['usuarios'] = $users;

		$this->load->view('lyout/topo');
		$this->load->view('usuarios/listar', $data);
		$this->load->view('lyout/rodape');
	}

	public function modulo($id = NULL)
	{

		if ($id) {
			# code...
		} else {
			# code...
		}

		$data['titulo'] = 'Cadastro de Usuários';
		$data['view'] = 'Lista de Usuários';


		$this->load->view('lyout/topo');
		$this->load->view('usuarios/formulario', $data);
		$this->load->view('lyout/rodape');
	}




	public function core(){
		
		

		
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[8]');
		 

		
		echo '<pre>';
		 print_r($this->input->post());
		echo '</pre>';

	}
}

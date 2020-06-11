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
		$dados = NULL;

		if ($id) {
			$dados = $this->ion_auth->user($id)->row();


			if (!$dados) {
				echo "Usuario Nao eexite";
			}


			$data['titulo'] = 'Atualizar Usuário';
		} else {
			$data['titulo'] = 'Cadastro de Usuário';
		}

		$data['titulo'] = 'Cadastro de Usuários';
		$data['view'] = 'Lista de Usuários';
		$data['dados'] = $dados;


		$this->load->view('lyout/topo');
		$this->load->view('usuarios/formulario', $data);
		$this->load->view('lyout/rodape');
	}




	public function core()
	{

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		if (!$this->input->post('id_usuario')) { // a validação de senha pode vir limpa
			$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[8]');
		}

		if ($this->form_validation->run() == TRUE) {

			$username 	= $this->input->post('nome');
			$password 	= $this->input->post('senha');
			$email 		= $this->input->post('email');
			$additional_data = NULL;
			$group = array('1'); // Sets user to admin.


			if ($this->input->post('id_usuario')) {
				$id = $this->input->post('id_usuario');
				$data['username'] = $this->input->post('nome');
				$data['email'] = $this->input->post('email');
				$data['active'] = $this->input->post('status');
				if ($this->input->post('senha')) {
					$data['password'] = $this->input->post('senha');
				}


				if ($this->ion_auth->update($id, $data)) {
					redirect('admin/usuarios');
				}
			} else {

				if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {

					redirect('admin/usuarios');
				} else {

					$this->modulo();
				}
			}
		} else { //essa else se nao passar por validações

			$this->modulo();
		}
	}


	public function del($id_usuario = NULL)
	{

		echo "$id_usuario";
		echo "$_SESSION[user_id]";


		if ($id_usuario) {
			if ($id_usuario == 1) {
				//echo "Nao pode Apagar Usuario Master";
				redirect('admin/usuarios');
			}
	
			if ($id_usuario == $this->session->userdata('user_id') ) {
				redirect('admin/usuarios');
			}
			if ($this->ion_auth->delete_user($id_usuario)) {
				redirect('admin/usuarios');
			}


		} else {
			redirect('admin/usuarios');
		}

		
	


		/*
		if ($id_usuario == 1) {
			echo "Nao pode Apagar Usuario Master";
			//redirect('admin/usuarios');
		}
		if ($id_usuario == $this->session->userdata('user_id')) {
			echo "Nao pode Apagar você mesmo";
			//redirect('admin/usuarios');
		}

		if ($id_usuario && $this->session->userdata('user_id') != 1) {
			echo "ta aqui";

			//$this->ion_auth->delete_user($id);
			//$this->ion_auth->delete_user();
			//redirect('admin/usuarios');
		}
		*/
	}
}

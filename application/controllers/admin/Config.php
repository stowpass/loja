<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Config extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->model('ConfigModel', 'loja');
		
	}


	public function index()
	{
		$this->form_validation->set_rules('titulo', 'titulo', 'trim|required|min_length[6]');

		if ($this->form_validation->run() == TRUE) {

			
			 $this->loja->doUpdate();
			redirect('principal');
			
		} else {

			$data['titulo'] = 'Cadastro da Empresa';
			$data['view'] = 'Cadastro Empresa';
			$data['query'] = $this->loja->getConfig();

			$this->load->view('lyout/topo');
			$this->load->view('config/index', $data);
			$this->load->view('lyout/rodape');
		}
	}
}

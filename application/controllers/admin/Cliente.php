<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');		
	
		
    }

    public function index()
    {
        $data['titulo'] = 'Cadastro de Clientes';
        //$data['view'] = 'Cadastro Empresa';
      //  $data['query'] = $this->loja->getConfig();

        $this->load->view('lyout/topo');
        $this->load->view('clientes/formulario', $data);
        $this->load->view('lyout/rodape');
    }
    

}
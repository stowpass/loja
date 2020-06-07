<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/topo');
		$this->load->model('clientemodel');
		$lista['clientes'] = $this->clientemodel->listarClientes();
		$this->load->view('clientes/listagem',$lista);
		$this->load->view('layout/rodape');

	}



	public function novo()
	{
		$this->load->view('layout/topo');
		$this->load->model('clientemodel');
		$registro['ver'] = $this->clientemodel->vazio();
		$registro['acao'] = "salvar";
		$this->load->view('clientes/formulario',$registro);
		$this->load->view('layout/rodape');

	}

	public function salvar()
	{

		$this->load->model('clientemodel');
		$this->clientemodel->salvar();
		redirect('cliente');

	}
	public function listadados()
	{

		$this->load->view('layout/topo');
		$this->load->model('clientemodel');
		$lista['clientes'] = $this->clientemodel->listarClientes();
		$lista['acao'] = "novo";
		$this->load->view('clientes/listagem',$lista);
		$this->load->view('layout/rodape');

	}

	public function editar($id)
	{


		$this->load->model('clientemodel');
		$registro['ver'] = $this->clientemodel->listarclientes_com_id($id);
		$registro['acao'] = 'atualizar/' . $id;
		$this->load->view('layout/topo');
		$this->load->view('clientes/formulario',$registro);
		$this->load->view('layout/rodape');

	}
	
	public function atualizar($id)
	{
		$this->load->model('clientemodel');
		$this->clientemodel->atualizar($id);
		$lista['clientes'] = $this->clientemodel->listarClientes();
		redirect('cliente');

	}
	
	public function excluir($id)
	{

		$this->load->model('clientemodel');
		$this->clientemodel->excluir($id);
		redirect('cliente');

	}





}




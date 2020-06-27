<?php
defined('BASEPATH') or exit('No direct script access allowed');



class ClienteController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login', 'refresh');
		}
		$this->load->library('form_validation');

		$this->load->model('clientemodel');
	}

	public function index()
	{


		$data['clientes'] = $this->clientemodel->listarClientes();
		$data['titulo'] = 'Lista de Clientes';

		$this->load->view('lyout/topo');
		$this->load->view('clientes/listar', $data);
		$this->load->view('lyout/rodape');
	}


	public function novo()
	{
		$this->load->view('lyout/topo');
		$data['clientes'] = "";
		$data['acao'] = "salvar";
		$data['titulo'] = 'Cadastro de Cliente';
		$this->load->view('clientes/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function editar($id)
	{
		$data['clientes'] = $this->clientemodel->listar_clientes_com_id($id);
		$data['acao'] = 'atualizar/' . $id;
		$data['titulo'] = 'Editar Cliente';

		$this->load->view('lyout/topo');
		$this->load->view('clientes/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function atualizar($id)
	{
		$this->clientemodel->atualizar($id);
		setMsg('msgCadastro', 'Cliente Atualizado com sucesso', 'sucesso');

		redirect('cliente');
	}

	public function salvar()
	{

		$this->clientemodel->salvar();
		setMsg('msgCadastro', 'Cliente Adicionado com sucesso', 'sucesso');

		redirect('cliente');
	}


	public function listar()
	{

		$data['clientes'] = $this->clientemodel->getClientes();
		$data['titulo'] = 'Lista de Clientes';


		$this->load->view('lyout/topo');
		$this->load->view('clientes/listar', $data);
		$this->load->view('lyout/rodape');
	}






	public function excluir($id)
	{

		$this->clientemodel->excluir($id);
		setMsg('msgCadastro', 'Cliente Excluido com sucesso', 'erro');

		redirect('cliente');
		setMsg('msgCadastro', 'Cliente Excluido com sucesso', 'erro');
	}
}

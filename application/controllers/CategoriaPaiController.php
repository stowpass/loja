<?php
defined('BASEPATH') or exit('No direct script access allowed');



class CategoriaPaiController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login', 'refresh');
		}
		$this->load->library('form_validation');

		$this->load->model('categoriapaimodel');
	}

	public function index()
	{


		$data['categoriaspai'] = $this->categoriapaimodel->listarCategoriaspai();
		$data['titulo'] = 'Lista de categorias pai';

		$this->load->view('lyout/topo');
		$this->load->view('categoriaspai/listar', $data);
		$this->load->view('lyout/rodape');
	}


	public function novo()
	{
		$this->load->view('lyout/topo');
		$data['categoriaspai'] = "";
		$data['acao'] = "salvar";
		$data['titulo'] = 'Cadastro de categoria PAI';
		$this->load->view('categoriaspai/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function editar($id)
	{
		$data['categoriaspai'] = $this->categoriapaimodel->listar_categoriaspai_com_id($id);
		$data['acao'] = 'atualizar/' . $id;
		$data['titulo'] = 'Editar categoria';

		$this->load->view('lyout/topo');
		$this->load->view('categoriaspai/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function atualizar($id)
	{
		$this->categoriapaimodel->atualizar($id);
		//$lista['categoriaspai'] = $this->categoriapaimodel->listarcategoriaspai();
		setMsg('msgCadastro', 'Categoria Atualizada com sucesso', 'sucesso');

		redirect('categoriapai');

	}


	public function salvar()
	{

		$this->categoriapaimodel->salvar();
		setMsg('msgCadastro', 'Categoria Adicionada com sucesso', 'sucesso');

		redirect('categoriapai');
	}


	public function listar()
	{

		$data['categoriaspai'] = $this->categoriapaimodel->getcategoriaspai();
		$data['titulo'] = 'Lista de categoriaspai';


		$this->load->view('lyout/topo');
		$this->load->view('categoriaspai/listar', $data);
		$this->load->view('lyout/rodape');
	}

	
	public function excluir($id)
	{

		$this->categoriapaimodel->excluir($id);
		redirect('categoriapai');

	}





}


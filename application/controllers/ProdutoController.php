<?php
defined('BASEPATH') or exit('No direct script access allowed');



class ProdutoController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login', 'refresh');
		}
		$this->load->library('form_validation');

		$this->load->model('produtomodel');
	}

	public function index()
	{


		$data['produtos'] = $this->produtomodel->listarProdutos();
		$data['titulo'] = 'Lista de produtos';

		$this->load->view('lyout/topo');
		$this->load->view('produtos/listar', $data);
		$this->load->view('lyout/rodape');
	}


	public function novo()
	{
		$this->load->view('lyout/topo');
		$data['produtos'] = "";
		$data['acao'] = "salvar";
		$data['categorias'] = $this->produtomodel->listaCategorias();
		$data['marcas'] = $this->produtomodel->listaMarcas();
		$data['titulo'] = 'Cadastro de Produtos';
		$this->load->view('produtos/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function editar($id)
	{
		$data['produtos'] = $this->produtomodel->listar_produtos_com_id($id);
		$data['acao'] = 'atualizar/' . $id;
		$data['titulo'] = 'Editar produto';

		$this->load->view('lyout/topo');
		$this->load->view('produtos/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function atualizar($id)
	{
		$this->produtomodel->atualizar($id);
		setMsg('msgCadastro', 'produto Atualizado com sucesso', 'sucesso');

		redirect('produto');
	}

	public function salvar()
	{

		$this->produtomodel->salvar();
		setMsg('msgCadastro', 'produto Adicionado com sucesso', 'sucesso');

		redirect('produto');
	}


	public function listar()
	{

		$data['produtos'] = $this->produtomodel->getProdutos();
		$data['titulo'] = 'Lista de produtos';


		$this->load->view('lyout/topo');
		$this->load->view('produtos/listar', $data);
		$this->load->view('lyout/rodape');
	}






	public function excluir($id)
	{

		$this->produtomodel->excluir($id);
		setMsg('msgCadastro', 'produto Excluido com sucesso', 'erro');

		redirect('produto');
		setMsg('msgCadastro', 'Produto Excluido com sucesso', 'erro');
	}
}

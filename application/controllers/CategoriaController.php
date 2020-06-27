<?php
defined('BASEPATH') or exit('No direct script access allowed');



class CategoriaController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login', 'refresh');
		}
		$this->load->library('form_validation');

		$this->load->model('categoriamodel');
		$this->load->model('categoriapaimodel');
	}

	public function index()
	{


		$data['categorias'] = $this->categoriamodel->listarCategorias();
		$data['categoriaspais'] = $this->categoriapaimodel->listarCategoriaspailinha();
		$data['titulo'] = 'Lista de categorias';

		$this->load->view('lyout/topo');
		$this->load->view('categorias/listar', $data);
		$this->load->view('lyout/rodape');
	}


	public function novo()
	{
		$this->load->view('lyout/topo');
		$data['categorias'] = "";
		$data['categoriaspais'] = $this->categoriapaimodel->listarCategoriaspailinha();
		$data['acao'] = "salvar";
		$data['titulo'] = 'Cadastro de categoria';
		$this->load->view('categorias/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function editar($id)
	{
		$data['categorias'] = $this->categoriamodel->listar_categorias_com_id($id);
		$data['categoriaspais'] = $this->categoriapaimodel->listarCategoriaspailinha();

		$data['acao'] = 'atualizar/' . $id;
		$data['titulo'] = 'Editar categoria';

		$this->load->view('lyout/topo');
		$this->load->view('categorias/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function atualizar($id)
	{
		$this->categoriamodel->atualizar($id);
		//$lista['categorias'] = $this->categoriamodel->listarcategorias();
		setMsg('msgCadastro', 'Categoria Atualizada com sucesso', 'sucesso');

		redirect('categoria');

	}


	public function salvar()
	{

		$this->categoriamodel->salvar();
		setMsg('msgCadastro', 'Categoria Adicionada com sucesso', 'sucesso');

		redirect('categoria');
	}




	
	public function excluir($id)
	{

		$this->categoriamodel->excluir($id);
		redirect('categoria');

	}




	/*public function core()
	{

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('cpf', 'CPF', 'trim|required');
		$this->form_validation->set_rules('data_nascimento', 'Data Nascimento', 'trim|required');

		if (!$this->input->post('id')) { // a validação de senha pode vir limpa
			$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[8]');
		}

		if ($this->form_validation->run() == TRUE) {


			$this->categoriamodel->doInsert();

			redirect('admin/categoria');
		} else {
			$this->modulo();
		}
	}*/

	public function del($id = null)
	{
		if ($id) {
			$this->categoriamodel->doDelete($id);
			setMsg('msgCadastro', 'categoria deletado com sucesso', 'sucesso');
			redirect('admin/categoria', 'refresh');
		} else {
			setMsg('msgCadastro', 'Você precisa passar um categoria', 'erro');
			redirect('admin/categoria', 'refresh');
		}
	}
}


/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoriaController extends CI_Controller {


	public function index()
	{
		$this->load->view('lyout/topo');
		$this->load->model('categoriamodel');
		$lista['categorias'] = $this->categoriamodel->listarcategorias();
		$this->load->view('categorias/listagem',$lista);
		$this->load->view('lyout/rodape');

	}



	public function novo()
	{
		$this->load->view('lyout/topo');
		$this->load->model('categoriamodel');
		$data['ver'] = $this->categoriamodel->vazio();
		$data['acao'] = "salvar";
		$this->load->view('categorias/formulario',$data);
		$this->load->view('lyout/rodape');

	}

	public function salvar()
	{

		$this->load->model('categoriamodel');
		$this->categoriamodel->salvar();
		redirect('categoria');

	}
	public function listadados()
	{

		$this->load->view('lyout/topo');
		$this->load->model('categoriamodel');
		$lista['categorias'] = $this->categoriamodel->listarcategorias();
		$lista['acao'] = "novo";
		$this->load->view('categorias/listagem',$lista);
		$this->load->view('lyout/rodape');

	}

	public function editar($id)
	{


		$this->load->model('categoriamodel');
		$data['ver'] = $this->categoriamodel->listarcategorias_com_id($id);
		$data['acao'] = 'atualizar/' . $id;
		$this->load->view('lyout/topo');
		$this->load->view('categorias/formulario',$data);
		$this->load->view('lyout/rodape');

	}
	
	public function atualizar($id)
	{
		$this->load->model('categoriamodel');
		$this->categoriamodel->atualizar($id);
		$lista['categorias'] = $this->categoriamodel->listarcategorias();
		redirect('categoria');

	}
	
	public function excluir($id)
	{

		$this->load->model('categoriamodel');
		$this->categoriamodel->excluir($id);
		redirect('categoria');

	}





}



*/

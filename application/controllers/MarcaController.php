<?php
defined('BASEPATH') or exit('No direct script access allowed');



class MarcaController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login', 'refresh');
		}
		$this->load->library('form_validation');

		$this->load->model('marcamodel');
	}

	public function index()
	{


		$data['marcas'] = $this->marcamodel->listarMarcas();
		//precisei criar esse metodo para trazer apena uma linha do banco
		$data['titulo'] = 'Lista de marcas';

		$this->load->view('lyout/topo');
		$this->load->view('marcas/listar', $data);
		$this->load->view('lyout/rodape');
	}


	public function novo()
	{
		$this->load->view('lyout/topo');
		$data['marcas'] = "";

		$data['acao'] = "salvar";
		$data['titulo'] = 'Cadastro de marca';
		$this->load->view('marcas/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function editar($id)
	{
		$data['marcas'] = $this->marcamodel->listar_marcas_com_id($id);

		$data['acao'] = 'atualizar/' . $id;
		$data['titulo'] = 'Editar marca';

		$this->load->view('lyout/topo');
		$this->load->view('marcas/formulario', $data);
		$this->load->view('lyout/rodape');
	}

	public function atualizar($id)
	{
		$this->marcamodel->atualizar($id);
		//$lista['marcas'] = $this->marcamodel->listarmarcas();
		setMsg('msgCadastro', 'marca Atualizada com sucesso', 'sucesso');

		redirect('marca');

	}


	public function salvar()
	{

		$this->marcamodel->salvar();
		setMsg('msgCadastro', 'marca Adicionada com sucesso', 'sucesso');

		redirect('marca');
	}




	
	public function excluir($id)
	{

		$this->marcamodel->excluir($id);
		redirect('marca');

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


			$this->marcamodel->doInsert();

			redirect('admin/marca');
		} else {
			$this->modulo();
		}
	}*/

	public function del($id = null)
	{
		if ($id) {
			$this->marcamodel->doDelete($id);
			setMsg('msgCadastro', 'marca deletado com sucesso', 'sucesso');
			redirect('admin/marca', 'refresh');
		} else {
			setMsg('msgCadastro', 'Você precisa passar um marca', 'erro');
			redirect('admin/marca', 'refresh');
		}
	}
}


/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class marcaController extends CI_Controller {


	public function index()
	{
		$this->load->view('lyout/topo');
		$this->load->model('marcamodel');
		$lista['marcas'] = $this->marcamodel->listarmarcas();
		$this->load->view('marcas/listagem',$lista);
		$this->load->view('lyout/rodape');

	}



	public function novo()
	{
		$this->load->view('lyout/topo');
		$this->load->model('marcamodel');
		$data['ver'] = $this->marcamodel->vazio();
		$data['acao'] = "salvar";
		$this->load->view('marcas/formulario',$data);
		$this->load->view('lyout/rodape');

	}

	public function salvar()
	{

		$this->load->model('marcamodel');
		$this->marcamodel->salvar();
		redirect('marca');

	}
	public function listadados()
	{

		$this->load->view('lyout/topo');
		$this->load->model('marcamodel');
		$lista['marcas'] = $this->marcamodel->listarmarcas();
		$lista['acao'] = "novo";
		$this->load->view('marcas/listagem',$lista);
		$this->load->view('lyout/rodape');

	}

	public function editar($id)
	{


		$this->load->model('marcamodel');
		$data['ver'] = $this->marcamodel->listarmarcas_com_id($id);
		$data['acao'] = 'atualizar/' . $id;
		$this->load->view('lyout/topo');
		$this->load->view('marcas/formulario',$data);
		$this->load->view('lyout/rodape');

	}
	
	public function atualizar($id)
	{
		$this->load->model('marcamodel');
		$this->marcamodel->atualizar($id);
		$lista['marcas'] = $this->marcamodel->listarmarcas();
		redirect('marca');

	}
	
	public function excluir($id)
	{

		$this->load->model('marcamodel');
		$this->marcamodel->excluir($id);
		redirect('marca');

	}





}



*/

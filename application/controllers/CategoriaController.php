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
		$this->load->view('clientes/formulario',$data);
		$this->load->view('lyout/rodape');

  }

  public function editar($id)
	{
		$data['clientes'] = $this->clientemodel->listar_clientes_com_id($id);
    $data['acao'] = 'atualizar/' . $id;
    $data['titulo'] = 'Editar Cliente';

		$this->load->view('lyout/topo');
		$this->load->view('clientes/formulario',$data);
		$this->load->view('lyout/rodape');

	}

	public function atualizar($id)
	{
		$this->clientemodel->atualizar($id);
		//$lista['clientes'] = $this->clientemodel->listarClientes();
		redirect('cliente');

	}
  
  public function salvar()
	{

		$this->clientemodel->salvar();
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


  

	public function modulo($id = NULL)
	{
		$dados = NULL;

		if ($id) {
            $data['titulo'] = 'Atualizar Cliente';
            $dados = $this->clientemodel->getClientesId($id);
		} else {
			$data['titulo'] = 'Cadastro de Cliente';
		}

		
    $data['dados'] = $dados;
    $clienteslista = $this->clientemodel->getClientes();
    $data['clientes'] = $clienteslista;




		$this->load->view('lyout/topo');
		$this->load->view('clientes/formulario', $data);
		$this->load->view('lyout/rodape');
  }
  

  public function core()
	{

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
    $this->form_validation->set_rules('cpf', 'CPF', 'trim|required');
    $this->form_validation->set_rules('data_nascimento', 'Data Nascimento', 'trim|required');
    
	if (!$this->input->post('id')) { // a validação de senha pode vir limpa
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[8]');
  }
  
		if ($this->form_validation->run() == TRUE) {

          
              $this->clientemodel->doInsert();

       redirect('admin/cliente');
        

          }else{
           $this->modulo();
      }

		}
  
  public function del($id = null)
  {
    if ($id) {
      $this->clientemodel->doDelete($id);
      setMsg('msgCadastro', 'Cliente deletado com sucesso','sucesso');
      redirect('admin/cliente','refresh');

    } else {
      setMsg('msgCadastro', 'Você precisa passar um cliente','erro');
      redirect('admin/cliente','refresh');
      
    }
    
  }
}


/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller {


	public function index()
	{
		$this->load->view('lyout/topo');
		$this->load->model('clientemodel');
		$lista['clientes'] = $this->clientemodel->listarClientes();
		$this->load->view('clientes/listagem',$lista);
		$this->load->view('lyout/rodape');

	}



	public function novo()
	{
		$this->load->view('lyout/topo');
		$this->load->model('clientemodel');
		$data['ver'] = $this->clientemodel->vazio();
		$data['acao'] = "salvar";
		$this->load->view('clientes/formulario',$data);
		$this->load->view('lyout/rodape');

	}

	public function salvar()
	{

		$this->load->model('clientemodel');
		$this->clientemodel->salvar();
		redirect('cliente');

	}
	public function listadados()
	{

		$this->load->view('lyout/topo');
		$this->load->model('clientemodel');
		$lista['clientes'] = $this->clientemodel->listarClientes();
		$lista['acao'] = "novo";
		$this->load->view('clientes/listagem',$lista);
		$this->load->view('lyout/rodape');

	}

	public function editar($id)
	{


		$this->load->model('clientemodel');
		$data['ver'] = $this->clientemodel->listarclientes_com_id($id);
		$data['acao'] = 'atualizar/' . $id;
		$this->load->view('lyout/topo');
		$this->load->view('clientes/formulario',$data);
		$this->load->view('lyout/rodape');

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



*/



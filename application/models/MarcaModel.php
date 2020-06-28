
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class MarcaModel extends CI_Model
{

    public function listar_marcas_com_id($id)
    {
        //retorna os dados do cliente

        $this->db->where('id', $id);

        $this->db->limit(1);
        $query =  $this->db->get('marcas');
        return $query->row();

        // return $this->db->from('marcas')->where('id', $id)->get()->result_array();
    }

    public function listarMarcas()
    {
        $this->db->from('marcas');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('marcas')->order_by('id', 'desc')->result_array();
        ///
    }





    public function salvar()
    {

        foreach(array_keys($_POST) as $chave){
            eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
        }
        
        return $this->db->insert('marcas', $this);
    }




    public function excluir($id)
    {
        $this->db->delete('marcas', "id = $id");
        setMsg('msgCadastro', 'marcas deletada com sucesso', 'erro');
    }


    public function atualizar($id)
    {

        foreach(array_keys($_POST) as $chave){
            eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
        }

        return $this->db->update('marcas', $this, "id = $id");
       
        setMsg('msgCadastro', 'marcas Atualizada com sucesso', 'sucesso');
    }
}




/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteModel extends CI_Model {
     function __construct(){
        parent::__construct();
    }
    
     public function salvar()
    {
 
            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            
            return $this->db->insert('marcas', $this);

    }
    public function atualizar($id)
    {
           
          foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

            return $this->db->update('marcas', $this, "id = $id");
         

    }
    public function excluir($id)
    {
         $this->db->delete('marcas', "id = $id");
        
    }
   
    public function listarmarcas()
    {
        $this->db->from('marcas');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('marcas')->order_by('id', 'desc')->result_array();
	    ///
    }
    public function listarmarcas_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('marcas')->where('id', $id)->get()->result_array();
    }       


    public function campos(){

        $this->db->select("SELECT COLUMN_NAME as indice
                     FROM INFORMATION_SCHEMA.COLUMNS 
                     WHERE TABLE_NAME = 'marcas'",false);
        $campos = $this->db->get('marcas');
        return $campos;
        
    }

    public function vazio()


    {

        //essa linha vai no banco e traz os nomes dos campos - indices
        $query = $this->db->query("SELECT COLUMN_NAME as nome_campo
        FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_NAME = 'marcas'");
        //Nesse momento eu pego esses nomes e coloco em um array
        $campos = $query->result_array();
        //agora nessse momento eu crio a estrutura para ser 
        //apresentado na minha tela no formato de array de array
        $vazio = array(0 => array());
        //faço o laço de repetição
        foreach($campos as $campo){
            $vazio[0][$campo['nome_campo']] = "";
        }
        return $vazio;

    }

/* ANTIGO METODO VAZIO
    public function vazio()


    {
        return array (0=>array(
                        "tipo_pessoa"=>"",
                        "nome"=>"",
                        "endereco"=>"",
                        "endereco_numero"=>"",
                        "complemento"=>"",
                        "bairro"=>"",
                        "cidade"=>"",
                        "cep"=>"",
                        "telefone_celular1"=>"",
                        "telefone_fixo"=>"",
                        "telefone_celular2"=>"",
                        "cnpj"=>"",
                        "rg"=>"",
                        "cpf"=>"",
                        "ie"=>"",
                        "email"=>"",
                        "servico_contratado"=>"",
                        "contato_empresa"=>"",
                        "observacoes"=>"",
        

        ));

    }

   
    
}

?>

*/
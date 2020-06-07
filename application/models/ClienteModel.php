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
            
            return $this->db->insert('clientes', $this);

    }
    public function atualizar($id)
    {
           
          foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

            return $this->db->update('clientes', $this, "id = $id");
         

    }
    public function excluir($id)
    {
         $this->db->delete('clientes', "id = $id");
        
    }
   
    public function listarClientes()
    {
        $this->db->from('clientes');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('clientes')->order_by('id', 'desc')->result_array();
	    ///
    }
    public function listarclientes_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('clientes')->where('id', $id)->get()->result_array();
    }       


    public function campos(){

        $this->db->select("SELECT COLUMN_NAME as indice
                     FROM INFORMATION_SCHEMA.COLUMNS 
                     WHERE TABLE_NAME = 'clientes'",false);
        $campos = $this->db->get('clientes');
        return $campos;
        
    }

    public function vazio()


    {

        //essa linha vai no banco e traz os nomes dos campos - indices
        $query = $this->db->query("SELECT COLUMN_NAME as nome_campo
        FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_NAME = 'clientes'");
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

   */
    
}

?>
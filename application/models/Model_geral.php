<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_geral extends CI_Model {
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
 
            //$this->db->update('clientes', $chave);
           //,where('id'=> $id));//->update('clientes');
           

    }
    
   
    public function listarClientes()
    {
        return $this->db->get('clientes')->result_array();
	  
    }
    public function listarclientes_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('clientes')->where('id', $id)->get()->result_array();
    }       

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

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class ProdutoModel extends CI_Model
{

    public function listar_produtos_com_id($id){
        //retorna os dados do produto

        $this->db->where('id', $id);

        $this->db->limit(1);
        $query =  $this->db->get('produtos');
        return $query->row();

       // return $this->db->from('produtos')->where('id', $id)->get()->result_array();
    } 

public function lista()
{

    $teste = $this->db->get('p.*, c.nome, m.nome 
    FROM produtos AS p 
    JOIN marcas AS m ON p.id_marca = m.is
    JOIN categorias AS c ON p.id_categoria = c.id');
    return $teste->result_array();
    
}

    public function listarProdutos()
    {

        $this->db->select('produtos.*, marcas.nome AS nome_marca, categorias.nome AS nome_categoria');
        $this->db->from('produtos');
        $this->db->join('marcas', 'marcas.id = produtos.id_marca');
        $this->db->join('categorias', 'categorias.id = produtos.id_categoria');
        $query = $this->db->get();
        return $query->result();

       
    }


    public function getprodutosId($id)
    {

        $this->db->where('id', $id);

        $this->db->limit(1);
        $query =  $this->db->get('produtos');
        return $query->row();
    }
    public function excluir($id)
    {
         $this->db->delete('produtos', "id = $id");
        
    }

    public function salvar()
    {
 /*
        $dados["nome"]                = $_POST["nome"];
        $dados["data_nascimento"]    = formataDataDB($_POST["data_nascimento"]);
        $dados["cpf"]                = $_POST["cpf"];
        $dados["endereco"]           = $_POST["endereco"];
        $dados["endereco_numero"]    = $_POST["endereco_numero"];
        $dados["complemento"]        = $_POST["complemento"];
        $dados["bairro"]             = $_POST["bairro"];
        $dados["cidade"]             = $_POST["cidade"];
        $dados["cep"]                = $_POST["cep"];
        $dados["estado"]             = $_POST["estado"];
        $dados["telefone"]           = $_POST["telefone"];
        $dados["telefone_zap"]       = $_POST["telefone_zap"];
        $dados["email"]              = $_POST["email"];
        $dados["senha"]              = $_POST["senha"];
        $dados["observacoes"]        = $_POST["observacoes"];
            
            return $this->db->insert('produtos', $dados);*/

            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            
            return $this->db->insert('produtos', $this);

    }


    public function atualizar($id)
    {
        /*$dados["nome"]                = $_POST["nome"];
        $dados["data_nascimento"]    = formataDataDB($_POST["data_nascimento"]);
        $dados["cpf"]                = $_POST["cpf"];
        $dados["endereco"]           = $_POST["endereco"];
        $dados["endereco_numero"]    = $_POST["endereco_numero"];
        $dados["complemento"]        = $_POST["complemento"];
        $dados["bairro"]             = $_POST["bairro"];
        $dados["cidade"]             = $_POST["cidade"];
        $dados["cep"]                = $_POST["cep"];
        $dados["estado"]             = $_POST["estado"];
        $dados["telefone"]           = $_POST["telefone"];
        $dados["telefone_zap"]       = $_POST["telefone_zap"];
        $dados["email"]              = $_POST["email"];
        $dados["senha"]              = $_POST["senha"];
        $dados["observacoes"]        = $_POST["observacoes"];

        
            return $this->db->update('produtos', $dados, "id = $id");

            */
            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

            return $this->db->update('produtos', $this, "id = $id");
         

    }

}




/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produtoModel extends CI_Model {
     function __construct(){
        parent::__construct();
    }
    
     public function salvar()
    {
 
            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            
            return $this->db->insert('produtos', $this);

    }
    public function atualizar($id)
    {
           
          foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

            return $this->db->update('produtos', $this, "id = $id");
         

    }
    public function excluir($id)
    {
         $this->db->delete('produtos', "id = $id");
        
    }
   
    public function listarprodutos()
    {
        $this->db->from('produtos');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('produtos')->order_by('id', 'desc')->result_array();
	    ///
    }
    public function listarprodutos_com_id($id){
        //retorna os dados do produto
        return $this->db->from('produtos')->where('id', $id)->get()->result_array();
    }       


    public function campos(){

        $this->db->select("SELECT COLUMN_NAME as indice
                     FROM INFORMATION_SCHEMA.COLUMNS 
                     WHERE TABLE_NAME = 'produtos'",false);
        $campos = $this->db->get('produtos');
        return $campos;
        
    }

    public function vazio()


    {

        //essa linha vai no banco e traz os nomes dos campos - indices
        $query = $this->db->query("SELECT COLUMN_NAME as nome_campo
        FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_NAME = 'produtos'");
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
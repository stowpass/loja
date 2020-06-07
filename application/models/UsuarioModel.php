<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {
     
    function __construct(){
        parent::__construct();
    }

    public function salvar()
    {
 
        $this->nome      = $_POST['nome']; 
        $this->email     = $_POST['email'];
        $this->senha     = md5($_POST['senha']);
       /// $this->senha     = password_hash($password, PASSWORD_BCRYPT);
            
            return $this->db->insert('usuarios', $this);

    }


        
    public function verificar_login()
    {
        $parametros = [
            
            $this->input->post('usuario'),
            md5($this->input->post('senha'))
        ];
        $resultado = $this->db->query('SELECT * FROM usuarios WHERE email = ? AND senha = ?', $parametros);

        if ($resultado->num_rows()==0) {
            return false;
        } else {   
            
            //Nessa parte eu fiz as SESSION
            $dados = $resultado->row();
            $this->session->set_userdata('id', $dados->id);
            $this->session->set_userdata('nome', $dados->id);
            $this->session->set_userdata('email', $dados->id);
            return true;
            
        }
        
    }
    
}

?>
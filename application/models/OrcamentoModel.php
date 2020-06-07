<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrcamentoModel extends CI_Model {
     function __construct(){
        parent::__construct();
    }
    
     public function salvar()
    {
      //AQOI converti o valor que estava vindo 
      $parcial = str_replace('.', '', $_POST['total_parcial']);
      $parcial = str_replace(',', '.', $parcial);

     $this->db->trans_start();

        $data1 = array(
            'id_cliente' => $_POST['id_cliente'],
            'motivo' => $_POST['motivo'],            
            'total_parcial' => $parcial,
            
    ); 
   
    $this->db->insert('pedidos', $data1);
    $idpedido = $this->db->insert_id();

    $this->db->trans_complete();

   

     
            //Nessa linha pego um dos dados que vem do POST para ver a quantidade
            $data_quant = $this->input->post('quantidade[]');
            //aqui digo que data recebera um array
            $data =array();
            //testo se o array é maior que 0
            if ($data >0) {
                for($i=0; $i<count($data_quant); $i++) {
                    $data[$i] = array(
                               'id_pedido' =>$idpedido,
                               'quantidade' => str_replace(',','.',$_POST['quantidade'])[$i], 
                               'descricao' => $_POST['descricao'][$i],
                               'valor_unitario' => str_replace(',','.',$_POST['valor_unitario'])[$i],
                               'valor_total' => $_POST['valor_total'][$i],
                    
                               );
                    }
                  //  print("<pre>".print_r($data,true)."</pre>");
                    $this->db->insert_batch('sub_pedidos', $data);
        
            } else{
                print("Deu erro em alguma coisa");
              die;  //return error_log;
            }
   

    }

    public function listar()
    {      
      



    }
}
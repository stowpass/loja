<?php
defined('BASEPATH') or exit('No direct script access allowed');

function setMsg($id, $msg, $tipo)
{
    $CI =& get_instance();
    switch ($tipo) {

        case 'error':
            $CI->session->set_flashdata($id, '<dic class="alert alert-danger" role="alert">' . $msg . '</div>');

            break;
        case 'sucesso':
            $CI->session->set_flashdata($id, '<dic class="alert alert-success" role="alert">' . $msg . '</div>');

            break;
    }
    return FALSE;
}
function getMsg($id)
{
    $CI =& get_instance();
    if ($CI->session->flashdata($id)) {

        echo $CI->session->flashdata($id);
    }
}
function errosValidacao()
{
    if (validation_errors()) {
        echo '<div class="alert aler-danger" role="alert">' . validation_errors() . '</div>';
    }
}

function formataDataDB($data=NULL){
if ($data) {
   $data = explode("/", $data);
  // $dia = $data[0];
   //$mes= $data[1];
  // $ano= $data[2];
   return $data[2].'-'.$data[1].'-'.$data[0];

}
}

function formataDataBR($data=NULL){
    if ($data) {
       $data = explode("-", $data);
      // $dia = $data[0];
       //$mes= $data[1];
      // $ano= $data[2];
       return $data[2].'.'.$data[1].'.'.$data[0];
    
    }
}



<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ConfigModel extends CI_Model
{

    public function getConfig()
    {
    
    $this->db->where('id', 1);
    $this->db->limit(1);
    $query = $this->db->get('config');
    return $query->row();
    

    }


public function doUpdate()
    {

        foreach(array_keys($_POST) as $chave){

            eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
        }
        return $this->db->update('config',$this);
//        redirect('principal');
       // return $this->db->update('config', $this);


    }
}

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
        
        return $this->db->update('config', $this, "id = $id");



}
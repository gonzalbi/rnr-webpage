<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login_model (Login Model)
 * Login model class to get to authenticate user credentials 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home_model extends CI_Model
{

    function getDestacados(){
        $this->db->select('id, nombre, videoId, thumbnail');
        $this->db->from('destacados');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
        
}

?>
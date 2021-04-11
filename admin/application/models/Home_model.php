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

    function setDestacados($data){
        
        $this->db->set('videoId', $data["videoId"]);
        $this->db->set('thumbnail', $data["thumbnail"]);
        
        $this->db->where('id', $data["id"]);
        $this->db->update('destacados');

        $db_error = $this->db->error();
            if (empty($db_error)) {
                echo var_dump($db_error);
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                return false;
            }
            return TRUE;
    }

    function getAutorPics(){
        return array_diff(scandir('../assets/img/rnrteam'), array('..', '.'));;
    }
        
}

?>
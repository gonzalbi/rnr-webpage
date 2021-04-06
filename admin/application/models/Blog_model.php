<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model{

    function getBlogList(){
        $this->db->select('id, titulo, html_text');
        $this->db->from('blogs');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $query->result_array();
    }

    function getBlog($id){
        $this->db->select('id, titulo, html_text');
        $this->db->where('id',$id);
        $this->db->from('blogs');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $query->result_array();
    }
}
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model{

    function getBlogList(){
        $this->db->select('id, titulo, html_text, published');
        $this->db->from('blogs');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $query->result_array();
    }

    function getBlog($id){
        $this->db->select('id, titulo, html_text, published');
        $this->db->where('id',$id);
        $this->db->from('blogs');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $query->result_array();
    }

    function saveBlog($data){
        if($data["id"]){
            $this->db->set('titulo', $data["titulo"]);
            $this->db->set('html_text', $data["html_text"]);
            $this->db->where('id', $data["id"]);
            $this->db->update('blogs');

            $db_error = $this->db->error();
            if (!empty($db_error)) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                return false;
            }
            return TRUE;
        }

        $this->db->insert('blogs', $data);
        return true;
    }

    function publish($data){
        $bit = $data["status"] == 'false' ? 1 : 0;

        $this->db->set('published', $bit);
        $this->db->where('id', $data["id"]);
        $this->db->update('blogs');
    }
}
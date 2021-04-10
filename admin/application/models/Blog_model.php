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
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from('blogs');
        $query = $this->db->get();
        
        return $query->result_array();
    }

    function saveBlog($data){

        $filename = '';
        if ( isset($_FILES['miniature']) ) {
            $filename = basename($_FILES['miniature']['name']);
            $dir_subida = '../assets/img/blogminiatures/'.$filename;
            move_uploaded_file($_FILES['miniature']['tmp_name'], $dir_subida);
        }else{
            $filename = $data["miniature"] ;
        }

        $bannerfilename = '';
        if ( isset($_FILES['miniature']) ) {
            $bannerfilename = basename($_FILES['banner']['name']);
            $dir_subida = '../assets/img/blogbanner/'.$bannerfilename;
            move_uploaded_file($_FILES['banner']['tmp_name'], $dir_subida);
        }else{
            $bannerfilename = $data["banner"] ;
        }
        

        if($data["id"] != "null"){
            
            $this->db->set('titulo', $data["titulo"]);

            $this->db->set('autor', $data["autor"]);
            $this->db->set('autor_img', $data["autor_img"]);
            $this->db->set('resumen', $data["resumen"]);
            $this->db->set('date', $data["date"]);
            $this->db->set('miniature', $filename);
            $this->db->set('banner', $bannerfilename);
            $this->db->set('html_text', $data["html_text"]);
            $this->db->where('id', $data["id"]);
            $this->db->update('blogs');

            $db_error = $this->db->error();
            if (empty($db_error)) {
                echo var_dump($db_error);
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                return false;
            }
            return TRUE;
        }

        $this->db->insert('blogs', $data);
        $db_error = $this->db->error();
        if (empty($db_error)) {
            echo var_dump($db_error);
            throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            return false;
        }

        $lastId = $this->db->order_by('id','desc')
		->limit(1)
		->get('blogs')
		->row();

        return $lastId;
    }

    function publish($data){
        $bit = $data["status"] == 'false' ? 1 : 0;

        $this->db->set('published', $bit);
        $this->db->where('id', $data["id"]);
        $this->db->update('blogs');
    }
}
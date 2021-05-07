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
            $filename = isset($data["miniature"]) ? $data["miniature"] : '' ;
        }
        $data["miniature"] = $filename;

        $bannerfilename = '';
        if ( isset($_FILES['banner']) ) {
            $bannerfilename = basename($_FILES['banner']['name']);
            $dir_subida = '../assets/img/blogbanner/'.$bannerfilename;
            move_uploaded_file($_FILES['banner']['tmp_name'], $dir_subida);
        }else{
            $bannerfilename = isset($data["banner"]) ? $data["banner"] : '' ;
        }
        $data["banner"] = $bannerfilename;
        
        $authorpicname = '';
        if ( isset($_FILES['autor_pic']) ) {
            $authorpicname = basename($_FILES['autor_pic']['name']);
            $dir_subida = '../assets/img/author-img/'.$authorpicname;
            move_uploaded_file($_FILES['autor_pic']['tmp_name'], $dir_subida);
            $data["autor_img"] = $authorpicname;
        }else{
            $authorpicname = isset($data["autor_pic"]) ? $data["autor_pic"] : '' ;
        }
        $data["autor_img"] = $authorpicname;

        if($data["id"] != "null"){
            
            $this->db->set('titulo', $data["titulo"]);
            $this->db->set('autor', $data["autor"]);
            $this->db->set('resumen', $data["resumen"]);
            $this->db->set('date', $data["date"]);
            $this->db->set('miniature', $filename);
            $this->db->set('banner', $bannerfilename);
            $this->db->set('html_text', $data["html_text"]);
            $this->db->set('autor_img',$authorpicname);
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

    function delete($id){
        $this->db->where('id', $id["id"]);
        $this->db->delete('blogs');
    }

    function publish($data){
        $bit = $data["status"] == 'false' ? 1 : 0;

        $this->db->set('published', $bit);
        $this->db->where('id', $data["id"]);
        $this->db->update('blogs');
    }
}
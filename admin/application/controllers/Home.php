<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->library('form_validation');
        $this->isLoggedIn();   
    }

    public function editDestacados(){

        $this->loadThis();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname','IdVideo','required|max_length[128]');
        $message = "";
        //$this->form_validation->set_rules('pic_file','Thumbnail','required');
        if($this->form_validation->run() == FALSE)
        {
            $message = "missing videoId";
        } else if($_FILES['pic_file']['name'] == ""){
            $message = "missing picture";
        }
        else
        {
            $id = $this->input->post('id');
            $videoId = $this->input->post('fname');
            $filename = basename($_FILES['pic_file']['name']);
            $dir_subida = '../assets/img/'.$filename;
            move_uploaded_file($_FILES['pic_file']['tmp_name'], $dir_subida);
            
            $data = array(
                'id' => $id,
                'videoId' => $videoId,
                'thumbnail' => $filename,
            );

            
            $message = $this->home_model->setDestacados($data) ? "success" : "fail"; 
            
        }
        redirect(base_url().'landing?message='.$message);
    }
    

}

?>
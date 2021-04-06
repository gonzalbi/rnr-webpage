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

        $salaId = $this->input->post('salaId');

        $this->form_validation->set_rules('fname','IdVideo','required|max_length[128]');
        $this->form_validation->set_rules('pic_file','Thumbnail','required');
        if($this->form_validation->run() == FALSE)
        {
            $this->editDestacados();
        }
        else
        {
            $videoId = $this->input->post('fname');
            $thumb = $_FILES;

            var_dump($thumb); die();


            $salaInfo = array('locacion'=>$locacion, 'cupos'=>$cupos, 'hora'=> $hora, "fecha"=> $dia );


            $result = $this->sala_model->editSala($salaInfo, $salaId);

            if($result == true)
            {
                $this->session->set_flashdata('success', 'Sala updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Sala updation failed');
            }

            redirect('salaListing');
            
        }
    }
    

}

?>
<?php
require APPPATH . 'libraries/REST_Controller.php';

class BlogAPI extends REST_Controller {

    public function __construct() {

        parent::__construct();
 
        $this->load->database();
 
     }

     public function index_get()

	{
        //Get blog list
        $data = ["hola"];
        $this->response($data, REST_Controller::HTTP_OK);

	}
}
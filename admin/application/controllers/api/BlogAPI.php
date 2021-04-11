<?php
require APPPATH . 'libraries/REST_Controller.php';

class BlogAPI extends REST_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('blog_model');
     }

     public function index_get()

	{
        //Get blog list
        $data = ["hola"];
        $this->response($data, REST_Controller::HTTP_OK);

	}

    public function index_post(){
        $input = $this->input->post();

        $ret = $this->blog_model->saveBlog($input);
        $this->response($ret, REST_Controller::HTTP_OK);
    }

    public function index_put(){
        $input = $this->put();

        $this->blog_model->publish($input);
        $this->response($input, REST_Controller::HTTP_OK);
    }

    public function index_delete(){
        $input = $this->delete();

        $this->blog_model->delete($input);
        $this->response($input, REST_Controller::HTTP_OK);
    }
}
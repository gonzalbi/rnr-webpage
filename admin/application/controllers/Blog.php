<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Blog extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('blog_model');
        $this->load->library('form_validation');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
            $data["posts"] = $this->blog_model->getBlogList();
            $this->global['pageTitle'] = 'RockNRolla Blog';
            $this->loadViews("blogListing", $this->global, $data, NULL);
    }
 
    function modifyBlog()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $id = $this->input->get('id');
            $data['post'] = $this->blog_model->getBlog($id);
            $data["autorPics"] = $this->home_model->getAutorPics();
            $this->global['pageTitle'] = 'CodeInsect : Modify Blog';

            $this->loadViews("modifyBlog", $this->global, $data, NULL);
        }
    }
}

?>
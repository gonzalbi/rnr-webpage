<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');


    }


    public function index()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $data["blogEntries"] = $this->home_model->getBlogList();
        $this->load->view('index', $data , NULL);

    }

    public function brandingYolo()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingInnerYolo', $data , NULL);
    }

    public function brandingBantrab()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingBantrab', $data , NULL);
    }

    public function brandingCafeBarista()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingCafeBarista', $data , NULL);
    }

    public function brandingAMP()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingAMP', $data , NULL);
    }

    public function brandingAdrenaline()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingAdrenaline', $data , NULL);
    }

    public function brandingMagiaBlanca()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingMagiaBlanca', $data , NULL);
    }

    public function brandingPolloGranjero()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingPolloGranjero', $data , NULL);
    }

    public function brandingNissan()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/brandingNissan', $data , NULL);
    }

     public function ideasIorra()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasIorra', $data , NULL);
    }

    public function ideasBaristaEnCasa()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasBaristaEnCasa', $data , NULL);
    }

    public function ideasBaristaBeneficio()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasBaristaBeneficio', $data , NULL);
    }

    public function ideasMountain()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasMountain', $data , NULL);
    }

    public function ideasAdrenaline()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasAdrenaline', $data , NULL);
    }

    public function ideasConversation()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasConversation', $data , NULL);
    }

    public function ideasCovidflix()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasCovidflix', $data , NULL);
    }

    public function ideasTapTap()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/ideasTapTap', $data , NULL);
    }

     public function entreEscape()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreEscape', $data , NULL);
    }

    public function entreArturo()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreArturo', $data , NULL);
    }

    public function entreManos()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreManos', $data , NULL);
    }

    public function entreNicky()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreNicky', $data , NULL);
    }

    public function entreTacTac()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreTacTac', $data , NULL);
    }

    public function entreStickers()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreStickers', $data , NULL);
    }

    public function entreDespedida()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreDespedida', $data , NULL);
    }

    public function entreChiripa()
    {

        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('proyectos/entreChiripa', $data , NULL);
    }

    public function blogEntry(){
        $id = $this->input->get('id');
        $data["destacados"] = $this->home_model->getDestacados();
        $data["blog"] = $this->home_model->getBlog($id);
        $this->load->view('blogEntry/index', $data , NULL);
    }

    public function branding(){
        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('branding', $data , NULL);
    }

    public function ideas(){
        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('ideas', $data , NULL);
    }

    public function blog(){
        $data["destacados"] = $this->home_model->getDestacados();
        $data["blogEntries"] = $this->home_model->getBlogList();
        $this->load->view('blog', $data , NULL);
    }

    public function guatemala(){
        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('guatemala', $data , NULL);
    }

    public function entretenimiento(){
        $data["destacados"] = $this->home_model->getDestacados();
        $this->load->view('entretenimiento', $data , NULL);
    }

}

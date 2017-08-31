<?php 
class Error extends CI_Controller{
    function __construct(){
    	parent::__construct();
        $this->load->helper('url');
   	}
    function index(){
        
        $this->load->view('design/header');
		$this->load->view('errors/error-404');
        $this->load->view('design/footer');
	}
}
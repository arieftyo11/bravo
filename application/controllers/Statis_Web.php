<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statis_Web extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form','text');
		$this->load->model('model_post');
        $this->load->library('form_validation');
    }  
    
    public function index()
    {
		$this->view_statis();	
    }
	
	public function view_statis($offset=0) {
			$data=array(
				'data_statis'=>$this->model_post->getDataStatis(),
				'data_profil'=>$this->model_post->getDataStatisProfil(),
				'data_visi'=>$this->model_post->getDataStatisVisi(),
				'data_misi'=>$this->model_post->getDataStatisMisi(),
			);
			
			$this->load->view('website/header');
			$this->load->view('website/product/about_us',$data);
			$this->load->view('website/footer');
			/*memanggil view pagination*/
}	
}

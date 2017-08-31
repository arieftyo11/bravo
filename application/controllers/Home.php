<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('model_post');
        $this->load->library('form_validation');
    }  
    
    public function index()
    {
		$this->view_home();
		
    }
	
	public function view_home($offset=0)	{
			$data=array(
				'data_promo'=>$this->model_post->getAllData('promo'),
			);
			
			$jml = $this->db->get('promo');
			
			$config['base_url'] = base_url().'Home/view_home';
			
			$config['total_rows'] = $jml->num_rows();
			$config['per_page'] = 8; /*Jumlah data yang dipanggil perhalaman*/	
			$config['uri_segment'] = 3;	/*data selanjutnya di parse diurisegmen 3*/
			
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			/*membuat variable halaman untuk dipanggil di view nantinya*/
			$data['offset'] = $offset;
			$data['data_promo'] = $this->model_post->view('promo',$config['per_page'], $offset);
			
			
			$this->load->view('website/header');
			$this->load->view('website/product/index',$data);
			$this->load->view('website/footer');
	
}
	

}
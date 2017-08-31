<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery_Web extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('model_post');
        $this->load->library('form_validation');
    }  
    
    public function index()
    {
		$this->view_gallery();
    }
	
	public function view_gallery($offset=0) {
			$data=array(
				'data_gallery'=>$this->model_post->getAllData('gallery'),
			);
			
			$jml = $this->db->get('gallery');
			
			$config['base_url'] = base_url().'Galery_Web/view_gallery';
			
			$config['total_rows'] = $jml->num_rows();
			$config['per_page'] = 8; /*Jumlah data yang dipanggil perhalaman*/	
			$config['uri_segment'] = 3;	/*data selanjutnya di parse diurisegmen 3*/
			
			/*Class bootstrap pagination yang digunakan*/
			$config['full_tag_open'] = "<ul class='pagination' style='position:relative; top:-25px;'>";
    		$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";
		
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			/*membuat variable halaman untuk dipanggil di view nantinya*/
			$data['offset'] = $offset;
			$data['data_gallery'] = $this->model_post->view('gallery',$config['per_page'], $offset);
			
			$this->load->view('website/product/gallery',$data);
			/*memanggil view pagination*/
}
}

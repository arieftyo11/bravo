<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Web extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('model_post');
        $this->load->library('form_validation');
    }  
    
    public function index()
    {
		//$data['product_home'] = $this->model->data_produk_home()->result();
		$this->load->view('website/header');
        $this->load->view('website/product/contact');
		$this->load->view('website/footer');
    }
	
	function simpan_contact_us(){
        if($this->input->post('submit')){
            $this->tambah_contact_us();
            redirect('Contact_Web');
        }
         redirect('Contact_Web');
    }
	
	function tambah_contact_us() {

		$no = 'no';
        $data = array (
            'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'subjek'=>$this->input->post('subjek'),
			'isi'=>$this->input->post('isi'),
			'status'=>$no
        );  
        $this->db->insert('contact_us',$data);
    }
}

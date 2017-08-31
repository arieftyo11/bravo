<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo_Web extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form','text');
		$this->load->model('model_post');
        $this->load->library('form_validation');
		$this->load->model('User');
    }  
    
    public function index()
    {
		$this->view_promo();	
    }
	
	public function view_promo($offset=0) {
			$data=array(
				'data_promo'=>$this->model_post->getAllData('promo'),
			);
			
			$jml = $this->db->get('promo');
			
			$config['base_url'] = base_url().'Promo_Web/view_promo';
			
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
			$data['data_promo'] = $this->model_post->view('promo',$config['per_page'], $offset);
			
			$this->load->view('website/header');
			$this->load->view('website/product/deals',$data);
			$this->load->view('website/footer');
			/*memanggil view pagination*/
}

	function detail_promo() {
		$id=$this->uri->segment(3);
		$data=array(
		
				'data_promo_detail'=>$this->model_post->per_id_promo($id),
				'data_payment'=>$this->model_post->getDataStatisPayment(),
				'data_additional'=>$this->model_post->getDataStatisAdditional(),
			);	
		
		$this->load->view('website/header');
        $this->load->view('website/product/deals-detail',$data);
		$this->load->view('website/footer');
    }
	
	function search_keyword() {	
		$id=$this->uri->segment(3);
		$keyword = $this->input->post('keyword');
		$data=array(
			'data_promo_result'=>$this->model_post->search_promo($keyword,'promo'),
		);
        $this->load->view('website/header');
        $this->load->view('website/product/deals',$data);
		$this->load->view('website/footer');
    }
	public function search_deals() {
	$keyword = $this->input->post('keyword');
	$date1 = $this->input->post('date_from');
	$date2 = $this->input->post('date_to');
	$data1 = array(
	'date1' => $date1,
	'date2' => $date2,
	'keyword'=> $keyword
	);
	$data['data_promo_result'] = $this->model_post->search_promo($data1);
	$this->load->view('website/header');
	$this->load->view('website/product/deals',$data);
	$this->load->view('website/footer');
}

		

}

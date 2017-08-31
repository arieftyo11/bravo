<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_Web extends CI_Controller {
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
		$this->view_article();	
    }
	
	public function view_article($offset=0) {
			$data=array(
				'data_article'=>$this->model_post->getAllData('berita'),
				'data_article_popular'=>$this->model_post->data_article_popular(),
				'data_article_recent'=>$this->model_post->data_article_recent(),
			);
			
			$jml = $this->db->get('berita');
			
			$config['base_url'] = base_url().'Article_Web/view_article';
			
			$config['total_rows'] = $jml->num_rows();
			$config['per_page'] = 10; /*Jumlah data yang dipanggil perhalaman*/	
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
			$data['data_article'] = $this->model_post->view('berita',$config['per_page'], $offset);
			
			$this->load->view('website/header');
			$this->load->view('website/product/blog-sidebar',$data);
			$this->load->view('website/footer');
			/*memanggil view pagination*/
}

	function detail_article() {
		$id=$this->uri->segment(3);
		$data['data_article_detail']=$this->model_post->per_id($id);
		$data['data_article_popular']=$this->model_post->data_article_popular();
		$data['data_article_recent']=$this->model_post->data_article_recent();
		$data['data_total']=$this->model_post->total_record_comentar($id);
		$data['data_user']=$this->model_post->data_comentar_user($id);
		$this->load->view('website/header');
        $this->load->view('website/product/single',$data);
		$this->load->view('website/footer');
	
    }
	
	function search_keyword() {	
		$id=$this->uri->segment(3);
		$keyword = $this->input->post('keyword');
		$data=array(
		'data_article_popular'=>$this->model_post->data_article_popular(),
		'data_article_recent'=>$this->model_post->data_article_recent(),
		'data_article_detail'=>$this->model_post->per_id($id),
        'data_article_result'=>$this->model_post->search($keyword, 'berita'),
		);
        $this->load->view('website/header');
        $this->load->view('website/product/blog-sidebar',$data);
		$this->load->view('website/footer');
    }
	function add_coment($idb) {
		$idb=$this->uri->segment(3);
		$id=$this->session->userdata('id');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        $this->createComent($id, $idb);
		$data=array(
		
				'data_promo_detail'=>$this->model_post->per_id_promo($idb),
				'data_payment'=>$this->model_post->getDataStatisPayment(),
				'data_additional'=>$this->model_post->getDataStatisAdditional(),
			);	
        redirect('Article_Web/detail_article/'.$idb.'');

		
		
        $this->load->view('website/header',$data);
		$this->load->view('website/product/deals-detail');
        $this->load->view('website/footer');
    }
	
	function createComent($id, $idb) {
            $data = array(
                'isi' => $this->input->post('isi'),
                'user_id' => $id,
                'status' => "No",
                'created' => date('Y-m-d H:i:s'),
                'id_berita' => $idb
            );
			
		if ($data['user_id']==Null)
		  {redirect('Register/login/');}

          $this->db->insert('comentar',$data);
		  
        
		  
    }
	
}

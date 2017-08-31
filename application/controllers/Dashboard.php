<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
    }    
	
	public function index()
    {
		$this->view_dashboard();	
    }
    
    public function view_dashboard($offset=0) {
			$config['per_page'] = 8; /*Jumlah data yang dipanggil perhalaman*/	
			$config['uri_segment'] = 3;	/*data selanjutnya di parse diurisegmen 3*/
			
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			/*membuat variable halaman untuk dipanggil di view nantinya*/
			$data['offset'] = $offset;
			$data['data_promo'] = $this->model_post->view('promo',$config['per_page'], $offset);
			$data['data_berita'] = $this->model_post->data_article_recent();
	
        $this->load->view('design/header');
        $this->load->view('dashboard/admin',$data);
        $this->load->view('design/footer');
    }
}

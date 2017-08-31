<?php 
class Comment extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
   	}
    function index(){
        $this->view();
	}
    function view($offset=0){
        $data['data'] = $this->model_post->viewComment();
	    
	    $this->load->view('design/header',$data);
		$this->load->view('posts/comentar/comentar',$data);
        $this->load->view('design/footer');
    }
}

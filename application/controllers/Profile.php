<?php 
class Profile extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
		$this->load->library('form_validation');
   	}
    function index(){
        $this->view();
	}
    function view(){
	    $this->load->view('design/header');
		$this->load->view('users/profile');
        $this->load->view('design/footer');
    }
	
	public function save_password()
 { 
  $this->form_validation->set_rules('new','New','required|alpha_numeric');
  $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
    if($this->form_validation->run() == FALSE)
  {
   $this->load->view('design/header');
   $this->load->view('posts/users/edit-users-form');
   $this->load->view('design/footer');
  }
  else{
   $cek_old = $this->model_post->cek_old();
   if ($cek_old == False){
    $this->session->set_flashdata('error','Old password not match!' );
    $this->load->view('design/header');
    $this->load->view('posts/users/edit-users-form');
    $this->load->view('design/footer');
   }
   else{
    $this->model_post->change_password();
    $this->session->sess_destroy();
    $this->session->set_flashdata('error','Your password success to change, please relogin !' );
    redirect('access');
   }//end if valid_user
  }
 }
	
}

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
    
    public function index() {        
        $this->load->view('design/header');
        $this->load->view('dashboard/admin');
        $this->load->view('design/footer');
    }
}

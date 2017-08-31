<?php
class Login extends CI_Controller{
	
    function __construct(){
        parent::__construct();
		//konstruktif pertama kali meload model model_app
        $this->load->model('model_app');  
    }
    function index(){
        $data=array(
        	'title'=>'Login Page'
        );
		//meload view v_login pada folder pages sebagai halaman index
        $this->load->view('access/login',$data);
   	}
    function validate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //input data melalui form post username dan password login di cek apakah ada pada database pada modul model_app function login 
        $result = $this->model_app->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
            	//create the session
                $sess_data['nama_lengkap']  = $row->nama_lengkap;
                $sess_data['username']      = $row->username;
                $sess_data['password']      = $row->password;
                $sess_data['level']         = $row->level;
                $sess_data['avatar']        = $row->avatar;
                $sess_data['login_status']  = 'true';
                $this->session->set_userdata($sess_data);
            }
            //jika ada maka menuju ke controller dashboard dengan nilai TRUE
            redirect('dashboard','refresh');
            return TRUE;
        } else {
           	//jika tidak ada maka menuju ke controller dashboard dengan nilai FALSE
           	redirect('access');
            return FALSE;
        }
    }
    function logout() {
        $this->session->unset_userdata('nama_lengkap');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('avatar');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','Terimakasih Telah Menggunakan Aplikasi Ini');
        redirect('login');
   	 }
}

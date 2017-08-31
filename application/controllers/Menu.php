<?php 
class Menu extends CI_Controller{
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
    function view($offset = 0){
        $data['menu'] = $this->model_post->getAllData('tb_menu');
	 
        $data['record']     = $this->db->get_where('tb_menu', array('kat_menu' =>0))->result();
        
        
	    $this->load->view('design/header',$data);
		$this->load->view('menu/menu',$data);
        $this->load->view('design/footer');
    }
    
    function add_menu(){
        $data = array(
            'title'         => 'Tambah Menu',
            'active_menu'   => 'active',
        );
        $data['record'] = $this->db->get_where('tb_menu', array('kat_menu' =>0))->result();
        $this->load->view('design/header',$data);
        $this->load->view('menu/add-menu-form');
        $this->load->view('design/footer',$data);
    }
    function edit_menu(){
        $id  = $this->uri->segment(3);
        $data['record']=  $this->db->get_where('tb_menu',array('id_menu'=> $id))->row_array();
        $data['katmenu']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result();
        $this->load->view('design/header',$data);
        $this->load->view('menu/edit-menu-form');
        $this->load->view('design/footer');
    }
    function add(){
        $data['res']    = $this->model_post->insertData('tb_menu',array(
            'nama_menu' => $this->input->post('nama_menu'),
            'icon'      => $this->input->post('icon'),
            'link'      => $this->input->post('link'),
            'kat_menu'  => $this->input->post('kat_menu'),
        ));
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
            redirect('menu');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('menu');
        }
    }
    function edit(){
        $id['id_menu']  = $this->input->post('id_menu');
        $data['res']    = $this->model_post->updateData('tb_menu',array(
            'nama_menu' => $this->input->post('nama_menu'),
            'icon'      => $this->input->post('icon'),
            'link'      => $this->input->post('link'),
            'kat_menu'  => $this->input->post('kat_menu'),
        ),$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully edited.
                                            </div>');
            redirect('menu');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('menu');
        }
    }
    function delete(){
        $id['id_menu']  = $this->uri->segment(3);
        $data['res']    =$this->model_post->deleteData('tb_menu',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('menu');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('menu');
        }
    }
}

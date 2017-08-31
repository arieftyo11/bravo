<?php 
class Users extends CI_Controller{
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
        
	 
        $data['data'] = $this->model_post->getAllData('users');
	    
	    $this->load->view('design/header');
		$this->load->view('users/index',$data);
        $this->load->view('design/footer');
    }
	
	function hashpassword($password) {
        return md5($password);
    }
	
    function add(){
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = realpath(APPPATH . '../uploads/img_users/'); //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
		
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'username' => $this->input->post('username'),
					'password'  => $this->hashpassword($this->input->post('password')),
					'nama_lengkap'  => $this->input->post('nama_lengkap'),
					'email'  => $this->input->post('email'),
					'no_telp'  => $this->input->post('no_telp'),
					'level'  => $this->input->post('level'),
					'blokir'  => $this->input->post('blokir'),
					'avatar'  => $gbr['file_name'],
                );
                
                $this->model_post->insertData('users',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('users');
            }

			
			
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('users');
            }
    }
    function add_users(){
        $data=array(
            'title'                 => 'Tambah Users',
            'active_category'       => 'active',
        );
        $this->load->view('design/header',$data);
        $this->load->view('posts/users/add-users-form');
        $this->load->view('design/footer',$data);
    }
    function edit_users($id){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = realpath(APPPATH . '../uploads/img_users/'); //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
		$id['id_users'] = $this->input->post('id');
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'username' => $this->input->post('username'),
					'password'  => $this->input->post(md5('password')),
					'nama_lengkap'  => $this->input->post('nama_lengkap'),
					'email'  => $this->input->post('email'),
					'no_telp'  => $this->input->post('no_telp'),
					'level'  => $this->input->post('level'),
					'blokir'  => $this->input->post('blokir'),
					'avatar'  => $gbr['file_name'],
                );
                
                $this->model_post->UpdateData('promo',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully Edited.
                                            </div>');
                redirect('users');
            }
			
			else if (!$this->upload->do_upload('userfile')){
                $data=array(
                    'username' => $this->input->post('username'),
					'password'  => $this->input->post(md5('password')),
					'nama_lengkap'  => $this->input->post('nama_lengkap'),
					'email'  => $this->input->post('email'),
					'no_telp'  => $this->input->post('no_telp'),
					'level'  => $this->input->post('level'),
					'blokir'  => $this->input->post('blokir'),
                );
                
                $this->model_post->UpdateData('users',$data, $id);
				
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully Edited without Photo.
                                            </div>');
                redirect('promo');
            }
		
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('promo');
            }
        
    }
	
	function pages_edit_users($id){
		$id= $this->uri->segment(3);
		$data=array(
            'data_edit_users'=>$this->model_post->getDataUsers($id),
        );
        $this->load->view('design/header',$data);
		$this->load->view('posts/users/edit-users-form');
        $this->load->view('design/footer');
    }
	
	function delete_users(){
        $id['id_users'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('users',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('users');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('users');
        }
    }
}

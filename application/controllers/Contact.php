<?php 
class Contact extends CI_Controller{
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
        
	 
        $data['data'] = $this->model_post->getAllData('contact_us');
	    
	    $this->load->view('design/header',$data);
		$this->load->view('posts/contact/contact',$data);
        $this->load->view('design/footer');
    }
  
    function edit_contact_us(){
	$id['id'] = $this->uri->segment(3);
	$data = array(
		'status' => 'Yes'
	);
 
	$where = array(
		'id_contact' => $id['id']
	);
 
	$this->model_post->updateStatus1($where,$data,'contact_us');
	if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully Updated.
                                            </div>');
            redirect('Contact');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('Contact');
        }
}

	function hapus_contact_us(){
        $id['id_contact'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('contact_us',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('Contact');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('Contact');
        }
    }

    function seo_title($s) {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
}
}

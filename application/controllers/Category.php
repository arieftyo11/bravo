<?php 
class Category extends CI_Controller{
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
        
	 
        $data['data'] = $this->model_post->getAllData('kategori');
	    
	    $this->load->view('design/header',$data);
		$this->load->view('posts/category/category',$data);
        $this->load->view('design/footer');
    }
    function add(){
        $data['res']=$this->model_post->insertData('kategori',array(
            'nama_kategori' => $this->input->post('nama_kategori'),
            'kategori_seo'  => $this->seo_title($this->input->post('nama_kategori')),
        ));
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
            redirect('category');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('category');
        }
    }
    function add_category(){
        $data=array(
            'title'                 => 'Tambah Kategori',
            'active_category'       => 'active',
        );
        $this->load->view('design/header',$data);
        $this->load->view('posts/category/add-category-form');
        $this->load->view('design/footer',$data);
    }
    function edit_category(){
        $id  = $this->uri->segment(3);
        $data['record']=  $this->db->get_where('kategori',array('id_kategori'=> $id))->row_array();
        $data['res']=$this->db->get_where('kategori', array('aktif' => 0))->result();
        $this->load->view('design/header',$data);
        $this->load->view('posts/category/edit-category-form');
        $this->load->view('design/footer',$data);
    }
    function edit(){
        $id['id_kategori'] = $this->input->post('id_kategori');
        $data['res']=$this->model_post->updateData('kategori',array(
            'nama_kategori' => $this->input->post('nama_kategori'),
            'kategori_seo'  => $this->seo_title($this->input->post('nama_kategori')),
            'aktif'         => $this->input->post('aktif'),
        ),$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully edited.
                                            </div>');
            redirect('category');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('category');
        }
    }
    function delete(){
        $id['id_kategori'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('kategori',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('category');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('category');
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

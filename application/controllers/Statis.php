<?php 
class Statis extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
         //library ckeditor diload
		$this->gallery_path = realpath(APPPATH . '../uploads/img_statis/');
        $this->gallery_path_url = base_url() . 'uploads/img_statis';
        $this->load->helper(array('url','form'));
   	}
    function index(){
        $this->view();
	}
    function add_statis(){
        $width = '100%';
        $height = '500px';
        $this->editor($width,$height); //plugin ckeditor di defenisikan pada halaman
        $data['record'] = $this->db->get('halamanstatis')->result();
        $this->load->view('design/header');
		$this->load->view('posts/statis/add-statis-form',$data);
        $this->load->view('design/footer');
    }
    function editor($width,$height) {
		$this->load->library(array('ckeditor','ckfinder'));
        //configure base path of ckeditor folder
        $this->ckeditor->basePath = base_url().'assets/plugins/ckeditor/';
        $this->ckeditor-> config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor-> config['width'] = $width;
        $this->ckeditor-> config['height'] = $height;
        
        //configure ckfinder with ckeditor config
        $path = './plugins/ckfinder'; //path folder ckfinder
        $this->ckfinder->SetupCKEditor($this->ckeditor,$path);

    }

    function view($offset=0){
        $data['data'] = $this->model_post->getAllData('halamanstatis');

	    $this->load->view('design/header',$data);
		$this->load->view('posts/statis/statis',$data);
        $this->load->view('design/footer');
    }
    function add(){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = $this->gallery_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        //$config['max_width']  = '1288'; //lebar maksimum 1288 px
        //$config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $this->input->post('userfile');
		
		$tanggal=date("Y-m-d"); 
		
		$this->upload->initialize($config);
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'isi_halaman' => $this->input->post('isi_halaman'),
					'tgl_posting' => $tanggal,
                    'gambar' => $gbr['file_name'],
                    
                );
                
                $this->model_post->insertData('halamanstatis',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('statis');
            }
			
			else if (!$this->upload->do_upload('userfile')){
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'isi_halaman' => $this->input->post('isi_halaman'),
					'tgl_posting' => $tanggal,
                );
                
                $this->model_post->InsertData('halamanstatis',$data);
				
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added without Photo.
                                            </div>');
                redirect('statis');
            }
		
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('statis');
            }
        
    }
	
	function edit_statis($id){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = $this->gallery_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        //$config['max_width']  = '1288'; //lebar maksimum 1288 px
        //$config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $this->input->post('userfile');
		$tanggal=date("Y-m-d"); 
		
		$this->upload->initialize($config);
		$id['id_halaman'] = $this->input->post('id');
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'isi_halaman' => $this->input->post('isi_halaman'),
					'tgl_posting' => $tanggal,
                    'gambar' => $gbr['file_name'],
                );
                
                $this->model_post->UpdateData('halamanstatis',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('statis');
            }
			
			else if (!$this->upload->do_upload('userfile')){
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'isi_halaman' => $this->input->post('isi_halaman'),
					'tgl_posting' => $tanggal,
                );
                
                $this->model_post->UpdateData('halamanstatis',$data, $id);
				
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added without Photo.
                                            </div>');
                redirect('statis');
            }
		
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('statis');
            }
        
    }
	
	function pages_edit_statis($id){
		$id= $this->uri->segment(3);
		$data=array(
            'data_edit_statis'=>$this->model_post->getDataStatis($id),
        );
        $this->load->view('design/header',$data);
		$this->load->view('posts/statis/edit-statis-form');
        $this->load->view('design/footer');
    }
	
	function delete_statis(){
        $id['id_halaman'] = $this->uri->segment(3);
        $this->model_post->deleteData('halamanstatis',$id);
        redirect("statis");
    }
	
    function dates(){
        // konversi menjadi nama hari bahasa indonesia
        $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari     = date("w");
        $hari_ini = $seminggu[$hari]; // konversi menjadi hari bahasa indonesia

        $tgl_sekarang = date("Ymd");
        $thn_sekarang = date("Y");
        $jam_sekarang = date("H:i:s");

        // format penanggalan di database MySQL
        $tanggal=date("Y-m-d"); 
    }
    function seo_title($s) {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }
	
	
    

}
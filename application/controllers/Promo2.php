<?php 
class Promo extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
        $this->load->library(array('ckeditor','ckfinder')); //library ckeditor diload
		$this->gallery_path = realpath(APPPATH . '../uploads/img_promo/');
        $this->gallery_path_url = base_url() . 'uploads/img_promo';
        $this->load->helper(array('url','form'));
   	}
    function index(){
        $this->view();
	}
    function add_promo(){
        $width = '100%';
        $height = '500px';
        $this->editor($width,$height); //plugin ckeditor di defenisikan pada halaman
        $data['record'] = $this->db->get('kategori')->result();
        $this->load->view('design/header');
		$this->load->view('posts/promo/add-promo-form',$data);
        $this->load->view('design/footer');
    }
    function editor($width,$height) {
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
        $data['data'] = $this->model_post->getAllData('promo');
	 
        
	    
	    $this->load->view('design/header',$data);
		$this->load->view('posts/promo/promo',$data);
        $this->load->view('design/footer');
    }
    function add(){

		
		$config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('userfile'))
                );

                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $file = $this->upload->file_name;
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'harga' => $this->input->post('harga'),
                    'keberangkatan' => $this->input->post('keberangkatan'),
                    'durasi'  => $this->input->post('durasi'),
                    'kategori' => $this->input->post('kategori'),
                    'minimal' => $this->input->post('minimal'),
                    'deskripsi' => $this->input->post('isi'),
                    'gambar' => $file,
                );
                
                $this->model_post->insertData('promo',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('promo');
            
        
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
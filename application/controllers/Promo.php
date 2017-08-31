<?php 
class Promo extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
         //library ckeditor diload
		$this->gallery_path = realpath(APPPATH . '../uploads/img_promo/');
        $this->gallery_path_url = base_url() . 'uploads/img_promo';
        $this->load->helper(array('url','form'));
   	}
    function index(){
        $this->view();
	}
    function add_promo(){

        $data['record'] = $this->db->get('kategori')->result();
        $this->load->view('design/header');
		$this->load->view('posts/promo/add-promo-form',$data);
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
		$data=array(
		
				'data'=>$this->model_post->getAllData('promo'),
			);		

	    $this->load->view('design/header',$data);
		$this->load->view('posts/promo/promo',$data);
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
	
		$this->upload->initialize($config);
		$tgl_sekarang = date("Ymd");
        $thn_sekarang = date("Y");
        $jam_sekarang = date("H:i:s");
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'kota' => $this->input->post('kota'),
                    'negara' => $this->input->post('negara'),
                    'harga' => $this->input->post('harga'),
                    'keberangkatan' => $this->input->post('keberangkatan'),
                    'kepulangan' => $this->input->post('kepulangan'),
                    'durasi'  => $this->input->post('durasi'),
                    'kategori' => $this->input->post('kategori'),
                    'minimal' => $this->input->post('minimal'),
                    'deskripsi' => $this->input->post('isi'),
                    'harisatu' => $this->input->post('harisatu'),
                    'haridua' => $this->input->post('haridua'),
                    'haritiga' => $this->input->post('haritiga'),
                    'hariempat' => $this->input->post('hariempat'),
                    'harilima' => $this->input->post('harilima'),
					'tanggal' => $tgl_sekarang,
                    'jam' => $jam_sekarang,
                    'gambar' => $gbr['file_name'],
                );
                
                $this->model_post->insertData('promo',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('promo');
            }
			
			else if (!$this->upload->do_upload('userfile')){
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'kota' => $this->input->post('kota'),
                    'negara' => $this->input->post('negara'),
                    'harga' => $this->input->post('harga'),
                    'keberangkatan' => $this->input->post('keberangkatan'),
                    'kepulangan' => $this->input->post('kepulangan'),
                    'durasi'  => $this->input->post('durasi'),
                    'kategori' => $this->input->post('kategori'),
                    'minimal' => $this->input->post('minimal'),
                    'deskripsi' => $this->input->post('isi'),
					'harisatu' => $this->input->post('harisatu'),
                    'haridua' => $this->input->post('haridua'),
                    'haritiga' => $this->input->post('haritiga'),
                    'hariempat' => $this->input->post('hariempat'),
                    'harilima' => $this->input->post('harilima'),
					'tanggal' => $tgl_sekarang,
                    'jam' => $jam_sekarang,
                );
                
                $this->model_post->InsertData('promo',$data);
				
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added without Photo.
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
	
	function edit_promo($id){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = $this->gallery_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        //$config['max_width']  = '1288'; //lebar maksimum 1288 px
        //$config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $this->input->post('userfile');
		$tgl_sekarang = date("Ymd");
        $thn_sekarang = date("Y");
        $jam_sekarang = date("H:i:s");
		
		$this->upload->initialize($config);
		$id['id_promo'] = $this->input->post('id');
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'harga' => $this->input->post('harga'),
                    'kota' => $this->input->post('kota'),
                    'negara' => $this->input->post('negara'),
                    'keberangkatan' => $this->input->post('keberangkatan'),
                    'kepulangan' => $this->input->post('kepulangan'),
                    'durasi'  => $this->input->post('durasi'),
                    'kategori' => $this->input->post('kategori'),
                    'minimal' => $this->input->post('minimal'),
                    'deskripsi' => $this->input->post('isi'),
					'harisatu' => $this->input->post('harisatu'),
                    'haridua' => $this->input->post('haridua'),
                    'haritiga' => $this->input->post('haritiga'),
                    'hariempat' => $this->input->post('hariempat'),
                    'harilima' => $this->input->post('harilima'),
					'tanggal' => $tgl_sekarang,
                    'jam' => $jam_sekarang,
                    'gambar' => $gbr['file_name'],
                );
                
                $this->model_post->UpdateData('promo',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('promo');
            }
			
			else if (!$this->upload->do_upload('userfile')){
                $data=array(
                    'judul' => $this->input->post('judul'),
                    'kota' => $this->input->post('kota'),
                    'negara' => $this->input->post('negara'),
                    'harga' => $this->input->post('harga'),
                    'keberangkatan' => $this->input->post('keberangkatan'),
                    'kepulangan' => $this->input->post('kepulangan'),
                    'durasi'  => $this->input->post('durasi'),
                    'kategori' => $this->input->post('kategori'),
                    'minimal' => $this->input->post('minimal'),
                    'deskripsi' => $this->input->post('isi'),
					'harisatu' => $this->input->post('harisatu'),
                    'haridua' => $this->input->post('haridua'),
                    'haritiga' => $this->input->post('haritiga'),
                    'hariempat' => $this->input->post('hariempat'),
                    'harilima' => $this->input->post('harilima'),
					'tanggal' => $tgl_sekarang,
                    'jam' => $jam_sekarang,
                );
                
                $this->model_post->UpdateData('promo',$data, $id);
				
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added without Photo.
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
	
	function pages_edit_promo($id){
		$id= $this->uri->segment(3);
		$data=array(
            'data_edit_promo'=>$this->model_post->getDataPromo($id),
        );
        $this->load->view('design/header',$data);
		$this->load->view('posts/promo/edit-promo-form');
        $this->load->view('design/footer');
    }
	
	function delete_promo(){
        $id['id_promo'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('promo',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('promo');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('promo');
        }
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
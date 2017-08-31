<?php 
class Article extends CI_Controller{
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
    function add_article(){

        $data['record'] = $this->db->get('kategori')->result();
        //$data['tag'] = $this->db->get('tag')->result();
        $this->load->view('design/header');
		$this->load->view('posts/article/add-article-form',$data);
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
        $data['data'] = $this->model_post->getAllData('berita');
	    
	    $this->load->view('design/header',$data);
		$this->load->view('posts/article/article',$data);
        $this->load->view('design/footer');
    }

    function add(){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = realpath(APPPATH . '../uploads/foto_berita/'); //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        $this->upload->initialize($config);
        $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari     = date("w");
        $hari_ini = $seminggu[$hari]; // konversi menjadi hari bahasa indonesia

        $tgl_sekarang = date("Ymd");
        $thn_sekarang = date("Y");
        $jam_sekarang = date("H:i:s");
		$tanggal=date("Y-m-d"); 
        
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'id_kategori' => $this->input->post('id_kategori'),
                    'username' => $this->session->userdata('username'),
                    'judul' => $this->input->post('judul'),
                    'judul_seo'  => $this->seo_title($this->input->post('judul')),
                    'isi_berita' => $this->input->post('isi'),
                    'hari' => $hari_ini,
                    'tanggal' => $tanggal,
                    'jam' => $jam_sekarang,
                    'gambar' => $gbr['file_name'],
                );
                
                $this->model_post->insertData('berita',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('article');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('article');
            }
        
    }
	
	function edit_article($id){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = realpath(APPPATH . '../uploads/foto_berita/'); //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        $this->upload->initialize($config);
		$id['id_berita'] = $this->input->post('id');
		
        $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari     = date("w");
        $hari_ini = $seminggu[$hari]; // konversi menjadi hari bahasa indonesia

        $tgl_sekarang = date("Ymd");
        $thn_sekarang = date("Y");
        $jam_sekarang = date("H:i:s");
		$tanggal=date("Y-m-d"); 
		
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'id_kategori' => $this->input->post('id_kategori'),
                    'username' => $this->session->userdata('username'),
                    'judul' => $this->input->post('judul'),
                    'judul_seo'  => $this->seo_title($this->input->post('judul')),
                    'isi_berita' => $this->input->post('isi'),
                    'hari' => $hari_ini,
                    'tanggal' => $tanggal,
                    'jam' => $jam_sekarang,
                    'gambar' => $gbr['file_name'],
                );
                
                $this->model_post->UpdateData('berita',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('article');
            }

			if (!$this->upload->do_upload('filefoto'))
            {
                $data=array(
                    'id_kategori' => $this->input->post('id_kategori'),
                    'username' => $this->session->userdata('username'),
                    'judul' => $this->input->post('judul'),
                    'judul_seo'  => $this->seo_title($this->input->post('judul')),
                    'isi_berita' => $this->input->post('isi'),
                    'hari' => $hari_ini,
                    'tanggal' => $tanggal,
                    'jam' => $jam_sekarang,
                );
                
                $this->model_post->UpdateData('berita',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added Without Picture.
                                            </div>');
                redirect('article');
            }
			
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('article');
            }
        
    }
	
	function pages_edit_article($id){
		$id= $this->uri->segment(3);
		$data=array(
            'data_edit_article'=>$this->model_post->getDataArticle($id),
			'record' => $this->db->get('kategori')->result(),
        );
        $this->load->view('design/header',$data);
		$this->load->view('posts/article/edit-article-form');
        $this->load->view('design/footer');
    }
	
	function delete_article(){
        $id['id_berita'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('berita',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('article');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('article');
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
    
    function tes(){
        $this->load->view('design/header');
		$this->load->view('posts/article/tes');
        $this->load->view('design/footer');
    }
}
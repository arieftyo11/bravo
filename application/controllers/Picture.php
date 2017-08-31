<?php 
class Picture extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
         //library ckeditor diload
		$this->gallery_path = realpath(APPPATH . '../uploads/img_galeri/');
        $this->gallery_path_url = base_url() . 'uploads/img_galeri';
        $this->load->helper(array('url','form'));
   	}
    function index(){
        $this->view();
	}
    function view($offset=0){
        $data['data'] = $this->model_post->viewGallery();
	    
	    $this->load->view('design/header',$data);
		$this->load->view('media/picture/gallery',$data);
        $this->load->view('design/footer');
    }
	
	function add_gallery(){
        $width = '100%';
        $height = '500px';
        $data['record'] = $this->db->get('album')->result();
        $this->load->view('design/header');
		$this->load->view('media/picture/add-gallery-form',$data);
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
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'id_album' => $this->input->post('id_album'),
                    'jdl_gallery' => $this->input->post('jdl_gallery'),
                    'gallery_seo' => $this->seo_title($this->input->post('jdl_gallery')),
                    'keterangan' => $this->input->post('keterangan'),
                    'gbr_gallery' => $gbr['file_name'],
                );
                
                $this->model_post->insertData('gallery',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('picture');
            }
			
		
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('picture');
            }
        
    }
	
	function edit_gallery($id){
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
		$id['id_gallery'] = $this->input->post('id');
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'id_album' => $this->input->post('id_album'),
                    'jdl_gallery' => $this->input->post('jdl_gallery'),
					'gallery_seo' => $this->seo_title($this->input->post('jdl_gallery')),
                    'keterangan' => $this->input->post('keterangan'),
                    'gbr_gallery' => $gbr['file_name'],
                );
                
                $this->model_post->UpdateData('gallery',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('picture');
            }
			
			if (!$this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'id_album' => $this->input->post('id_album'),
                    'jdl_gallery' => $this->input->post('jdl_gallery'),
					'gallery_seo' => $this->seo_title($this->input->post('jdl_gallery')),
                    'keterangan' => $this->input->post('keterangan'),
                );
                
                $this->model_post->UpdateData('gallery',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('picture');
            }

			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('picture');
            }
        
    }
	
	function pages_edit_gallery($id){
		$id= $this->uri->segment(3);
		$data=array(
            'data_edit_gallery'=>$this->model_post->getDataGallery($id),
			'record' => $this->db->get('album')->result(),
        );
        $this->load->view('design/header',$data);
		$this->load->view('media/picture/edit-gallery-form');
        $this->load->view('design/footer');
    }
	
	function delete_gallery(){
        $id['id_gallery'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('gallery',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('picture');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('picture');
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

<?php 
class Album extends CI_Controller{
    function __construct(){
    	parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah. Silahkan coba lagi !');
            redirect('');
        };
        $this->load->model('model_post');
         //library ckeditor diload
		$this->gallery_path = realpath(APPPATH . '../uploads/img_album/');
        $this->gallery_path_url = base_url() . 'uploads/img_album';
        $this->load->helper(array('url','form'));
   	}
    function index(){
        $this->view();
	}
    function view($offset=0){
        $data['data'] = $this->model_post->getAllData('album');
	    
	    $this->load->view('design/header',$data);
		$this->load->view('media/album/album',$data);
        $this->load->view('design/footer');
    }
	
	function add_album(){
        $width = '100%';
        $height = '500px';
        $this->load->view('design/header');
		$this->load->view('media/album/add-album-form');
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
                    'jdl_album' => $this->input->post('jdl_album'),
                    'album_seo' => $this->seo_title($this->input->post('jdl_album')),
                    'gbr_album' => $gbr['file_name'],
                );
                
                $this->model_post->insertData('album',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('album');
            }
			
		
			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('album');
            }
        
    }
	
	function edit_album($id){
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
		$id['id_album'] = $this->input->post('id');
		
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'jdl_album' => $this->input->post('jdl_album'),
                    'album_seo' => $this->seo_title($this->input->post('jdl_album')),
                    'gbr_album' => $gbr['file_name'],
                );
                
                $this->model_post->UpdateData('album',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('album');
            }
			
			if (!$this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data=array(
                    'jdl_album' => $this->input->post('jdl_album'),
                    'album_seo' => $this->seo_title($this->input->post('jdl_album')),
                );
                
                $this->model_post->UpdateData('album',$data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully added.
                                            </div>');
                redirect('album');
            }

			else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
                redirect('album');
            }
        
    }
	
	function pages_edit_album($id){
		$id= $this->uri->segment(3);
		$data=array(
            'data_edit_album'=>$this->model_post->getDataAlbum($id),
        );
        $this->load->view('design/header',$data);
		$this->load->view('media/album/edit-album-form');
        $this->load->view('design/footer');
    }
	
	function delete_album(){
        $id['id_album'] = $this->uri->segment(3);
        $data['res']=$this->model_post->deleteData('album',$id);
        if($data >= 1) {
         echo $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Successfully deleted.
                                            </div>');
            redirect('album');
        } else {
            echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">×</button>
                                            <strong>Info!</strong> Failed.
                                            </div>');
            redirect('album');
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

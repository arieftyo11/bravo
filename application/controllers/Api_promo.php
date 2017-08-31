<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Api_promo extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
    }
 
    // show data berita
    public function index() {
        $judul = $this->input->get('judul');
        if ($judul == '') {
            $promo = $this->db->get('promo')->result();
        } else {
            $this->db->like('judul', $judul);
            $promo = $this->db->get('promo')->result();
        }
        echo json_encode(array("results"=>$promo));
    }
}
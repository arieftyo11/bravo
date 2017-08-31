<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Api_berita extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
    }
 
    // show data berita
    public function index() {
        $judul = $this->input->get('judul');
        if ($judul == '') {
            $berita = $this->db->get('berita')->result();
        } else {
            $this->db->like('judul', $judul);
            $berita = $this->db->get('berita')->result();
        }
        echo json_encode(array("results"=>$berita));
    }
}
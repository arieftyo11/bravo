<?php
class Model_post extends CI_Model{
    function __construct(){
    	parent::__construct();
    }
    public function getAllData($table){
    	return $this->db->get($table)->result();
    }
    function updateData($table,$data,$field_key){
        $this->db->update($table,$data,$field_key);
    }
	
	function updateStatus1($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
    function deleteData($table,$data) {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data) {
        $this->db->insert($table,$data);
    }
    function manualQuery($q) {
        return $this->db->query($q);
    }
    public function getSelectedData($table,$where) {
        return $this->db->get_where($table, $where);
    }
    
    function delete_album($data) {
        $file_name = $this->db->get_where('album', array('id_album' => $data))->row()->name;
        $this->db->where('id_album', $data);
        $this->db->delete('album');

        unlink("uploads/img_album/" . $file_name);
    }
    
    function viewCategory($num, $offset)  {
	  $query = $this->db->get("kategori",$num, $offset);
	  return $query->result();
    }
    function viewArticle($num, $offset)  {
	  $query = $this->db->get("berita",$num, $offset);
	  return $query->result();
    }
    function viewAlbum($num, $offset)  {
	  $query = $this->db->get("album",$num, $offset);
	  return $query->result();
    }
    function viewMenu($num, $offset)  {
	  $query = $this->db->get("tb_menu",$num, $offset);
	  return $query->result();
    }
	
	function data_article_popular() {
		return $this->db->query("select * from berita order by dibaca DESC limit 0,6")->result();
    }
	
	function data_article_recent() {
		return $this->db->query("select * from berita order by id_berita DESC limit 0,6")->result();
		
    }
	
    function viewComment()  {
      $this->db->select('komentar.id_komentar, komentar.nama_komentar,
            komentar.isi_komentar, komentar.tgl, komentar.jam_komentar,
            komentar.status, komentar.id_berita, berita.judul');
      $this->db->from('komentar');
      $this->db->join('berita','komentar.id_berita=berita.id_berita');
      $this->db->order_by('id_komentar','DESC');
      $query = $this->db->get();
	  return $query->result();
    }
    
    function viewGallery()  {
      $this->db->select('gallery.id_gallery, gallery.jdl_gallery, gallery.keterangan,
            gallery.gbr_gallery, gallery.id_album, album.id_album, album.jdl_album');
      $this->db->from('gallery');
      $this->db->join('album','gallery.id_album=album.id_album');
      $this->db->order_by('id_gallery','DESC');
      $query = $this->db->get();
	  return $query->result();
    }
    function total_record_gallery(){
        return $this->db->count_all('gallery','album');
    }
    
    function del($id){
        $this->db->where('id_album',$id);
        $query = $this->db->get('album');
        $row = $query->row();
        unlink(base_url('img_album/'.$row->gbr_album));
        $this->db->delete('album', array('id_album'=>$id));
        return true;     
    }

	function per_id($id)
	{
		$this->db->where('id_berita',$id);
		$query=$this->db->get('berita');
		return $query->result();
	}

	function per_id_promo($id)
	{
		$this->db->where('id_promo',$id);
		$query=$this->db->get('promo');
		return $query->result();
	}		
    
	function view($table,$num,$offset){
		$query = $this->db->get($table, $num, $offset);
		return $query->result();
	}
	
	function getDataPromo($id){
        return $this->db->query("SELECT * from promo where id_promo = '$id'")->result();
    }
	
	function getDataArticle($id){
        return $this->db->query("SELECT * from berita where id_berita = '$id'")->result();
    }
	
	function getDataStatisPer($id){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '$id'")->result();
    }
        function getDataStatis(){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '5'")->result();
    }
	function getDataStatisPayment(){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '7'")->result();
    }
	function getDataStatisAdditional(){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '8'")->result();
    }
	function getDataStatisProfil(){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '1'")->result();
    }
	function getDataStatisVisi(){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '2'")->result();
    }
	function getDataStatisMisi(){
        return $this->db->query("SELECT * from halamanstatis where id_halaman = '3'")->result();
    }
	function data_comentar_spec($id){
        return $this->db->query("SELECT * from comentar where id_berita = '$id'")->result();
    }
	
	function data_comentar_user($id){
      $this->db->select('comentar.id, comentar.isi,
            comentar.user_id, comentar.created, comentar.id_berita,
            customer.id, customer.full_name');
      $this->db->from('comentar');
      $this->db->join('customer','comentar.user_id=customer.id');
      $this->db->where('comentar.id_berita='.$id.' AND comentar.status = "Yes"');
      $this->db->order_by('comentar.id','DESC');
      $query = $this->db->get();
	  return $query->result();
    }
	
	function total_record_comentar($id){
        return $this->db->query("SELECT count(id_berita) as total from comentar where id_berita = '$id' AND status='Yes'")->result();
    }
	
	function getAllDataComentar(){
      $this->db->select('comentar.isi,
            comentar.user_id, comentar.created, comentar.id_berita, comentar.status, 
            customer.id, customer.full_name, berita.id_berita, berita.judul, comentar.id');
      $this->db->from('comentar');
      $this->db->join('customer','comentar.user_id=customer.id');
      $this->db->join('berita','comentar.id_berita=berita.id_berita');
      $this->db->order_by('comentar.id','DESC');
      $query = $this->db->get();
	  return $query->result();
    }
	
	function getDataGallery($id){
        return $this->db->query("SELECT * from gallery where id_gallery = '$id'")->result();
    }
	
	function getDataAlbum($id){
        return $this->db->query("SELECT * from album where id_album = '$id'")->result();
    }	
	function getDataUsers($id){
        return $this->db->query("SELECT * from album where id_users = '$id'")->result();
    }
	
	public function search($keyword,$table) { 
	$this->db->like('judul',$keyword); 
	$this->db->or_like('isi_berita',$keyword);
	$query = $this->db->get($table); 
		if ($query->num_rows() > 0) {
		return $query->result();
		} else {
		}
	} 
	
	public function search_promo($data) {
	if(isset($data['date1']) AND ($data['date2']) AND ($data['keyword'])){
		$condition = "keberangkatan BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "' 
		AND kepulangan BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "'
		AND kota LIKE " . "'" . $data['keyword'] . "'
		OR negara LIKE " . "'" . $data['keyword'] . "'
		";	
		}	
	else if(isset($data['date1']) AND ($data['date2'])){
		$condition = "keberangkatan BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "' 
		AND kepulangan BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "'
		";	
		}
	else if(isset($data['keyword'])){
		$condition = "kota LIKE " . "'" . $data['keyword'] . "'
		OR negara LIKE " . "'" . $data['keyword'] . "'
		";	
		}

		$this->db->select('*');
		$this->db->from('promo');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->result();
		} else {
		}
	}
	
	public function change_password()
	{
	  $pass = md5($this->input->post('new'));
	  $data = array (
	   'password' => $pass
	   );
	  $this->db->where('username', $this->session->userdata('username'));
	  $this->db->update('users', $data);
	}

	public function cek_old()
	{
	   $old = md5($this->input->post('old'));    
	   $this->db->where('password',$old);
	   $query = $this->db->get('users');
		return $query->result();;
	}	
}
?>
	
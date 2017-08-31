<?php
class Model_app extends CI_Model{
    function __construct(){
    	parent::__construct();
    }
   	function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
        	foreach ($query->result() as $row){
                $sess_data['nama_lengkap']  = $row->nama_lengkap;
                $sess_data['username']      = $row->username;
                $sess_data['password']      = $row->password;
                $sess_data['level']         = $row->level;
                $sess_data['avatar']        = $row->avatar;
                $sess_data['login_status']  = 'true';
                $this->session->set_userdata($sess_data);
            } //if data is true
            redirect('dashboard');
        } else {
        	return false; //if data is wrong
        }
    }
	public function getAllData($table){
    	return $this->db->get($table)->result();
    }
    function getBerita(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('tanggal desc', 'jam desc');
        $this->db->limit(3, 1);
        $query = $this->db->get();
        return $query->result();
    }
    function getKomen(){
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->order_by('tgl desc', 'jam_komentar desc');
        $this->db->limit(3, 1);
        $query = $this->db->get();
        return $query->result();
    }
    function getKodeBarang(){
        $q = $this->db->query("select MAX(RIGHT(kd_barang,7)) as kd_max from barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0000001";
        }
        return "B-".$kd;
    }
    public function getKodeDistributor(){
        $q = $this->db->query("select MAX(RIGHT(kd_distributor,7)) as kd_max from distributor");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0000001";
        }
        return "D-".$kd;
    }
    public function getKodePegawai(){
        $q = $this->db->query("select MAX(RIGHT(kd_pegawai,7)) as kd_max from pegawai");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0000001";
        }
        return "P-".$kd;
    }
    public function getKodeKategori(){
        $q = $this->db->query("select MAX(RIGHT(kd_kategori,7)) as kd_max from kategori");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0000001";
        }
        return "C-".$kd;
    }
    public function getKodeRak(){
        $q = $this->db->query("select MAX(RIGHT(kd_rak,7)) as kd_max from rak");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0000001";
        }
        return "R-".$kd;
    }
    public function getKodeSupplier(){
        $q = $this->db->query("select MAX(RIGHT(kd_supplier,7)) as kd_max from supplier");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0000001";
        }
        return "S-".$kd;
    }
    public function getSelectedData($table,$data) {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key){
        $this->db->update($table,$data,$field_key);
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
    
    //fungsi ini dipanggil dari controller barang_keluar.php	
    function getAllDataBarangKeluar(){ 
        return $this->db->query("SELECT 
            a.kd_barang_keluar, 
            a.tgl_barang_keluar,
			(select count(kd_barang_keluar) as jum from barang_keluar_detail where kd_barang_keluar=a.kd_barang_keluar)
			as jumlah 
            from barang_keluar_header a 
            ORDER BY a.kd_barang_keluar DESC
		")->result();
    }
    
    public function getKodeBarangKeluar()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_barang_keluar,7)) as kd_max from barang_keluar_header");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }
        else
        {
            $kd = "0000001";
        }
        return "K-".$kd;
    }
    
    function getBarangKeluar(){
        return $this->db->query ("SELECT * from barang where stok > 0")->result();
    }

    function getDataKeluaran($id){
        return $this->db->query("SELECT * from barang_keluar_header a
                left join distributor b on a.kd_distributor=b.kd_distributor
                left join pegawai c on a.kd_pegawai=c.kd_pegawai
                where a.kd_barang_keluar = '$id'")->result();
    }
    
    function getBarangKeluaran($id){
        return $this->db->query("
                select a.kd_barang,a.qty,b.nm_barang
                from barang_keluar_detail a
                left join barang b on a.kd_barang=b.kd_barang
                where a.kd_barang_keluar = '$id'")->result();
    }
    
    public function getTambahStok($kd_barang,$tambah)
    {
        $q = $this->db->query("select stok from barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok + $tambah;
        }
        return $stok;
    }

    public function getKurangStok($kd_barang,$kurangi)
    {
        $q = $this->db->query("select stok from barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok - $kurangi;
        }
        return $stok;
    }
    
    public function getKembalikanStok($kd_barang)
    {
        $q = $this->db->query("select stok from barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok;
        }
        return $stok;
    }

    //fungsi ini dipanggil dari controller barang_masuk.php	
    function getAllDataBarangMasuk(){ 
        return $this->db->query("SELECT 
            a.kd_barang_masuk, 
            a.tgl_barang_masuk,
			(select count(kd_barang_masuk) as jum from barang_masuk_detail where kd_barang_masuk=a.kd_barang_masuk)
			as jumlah 
            from barang_masuk_header a 
            ORDER BY a.kd_barang_masuk DESC
		")->result();
    }
    
    public function getKodeBarangMasuk()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_barang_masuk,7)) as kd_max from barang_masuk_header");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }
        else
        {
            $kd = "0000001";
        }
        return "M-".$kd;
    }
    
    function getBarangMasuk(){
        return $this->db->query ("SELECT * from barang where stok <= 5")->result();
    }

    function getDataMasukan($id){
        return $this->db->query("SELECT * from barang_masuk_header a
                left join supplier b on a.kd_supplier=b.kd_supplier
                left join pegawai c on a.kd_pegawai=c.kd_pegawai
                where a.kd_barang_masuk = '$id'")->result();
    }
    
    
    function getBarangMasukan($id){
        return $this->db->query("
                select a.kd_barang,a.qty,b.nm_barang,c.nm_rak,c.deskripsi
                from barang_masuk_detail a
                left join barang b on a.kd_barang=b.kd_barang
                left join rak c on b.kd_rak=c.kd_rak
                where a.kd_barang_masuk = '$id'")->result();
    }

    function getLapMasuk($tgl_awal,$tgl_akhir){
        return $this->db->query("SELECT *,sum(d.qty) as jumlah from barang_masuk_header a
            left join supplier b on a.kd_supplier=b.kd_supplier
            left join pegawai c on a.kd_pegawai=c.kd_pegawai
            left join barang_masuk_detail d on a.kd_barang_masuk=d.kd_barang_masuk
            where a.tgl_barang_masuk between '$tgl_awal' and '$tgl_akhir'"
        )->result();
    }
    
    function getLapKeluar($tgl_awal,$tgl_akhir){
        return $this->db->query("SELECT *,sum(d.qty) as jumlah from barang_keluar_header a
            left join distributor b on a.kd_distributor=b.kd_distributor
            left join pegawai c on a.kd_pegawai=c.kd_pegawai
            left join barang_keluar_detail d on a.kd_barang_keluar=d.kd_barang_keluar
            where a.tgl_barang_keluar between '$tgl_awal' and '$tgl_akhir'"
        )->result();
    }
    
    function getDataDetailMasuk($id){
        return $this->db->query("SELECT b.kd_barang,a.nm_barang,b.qty,b.kd_barang_masuk from barang a
                inner join barang_masuk_detail b on a.kd_barang=b.kd_barang where kd_barang_masuk = '$id'")->result();
    }
    
    function getDataDetailKeluar($id){
        return $this->db->query("SELECT b.kd_barang,a.nm_barang,b.qty,b.kd_barang_keluar from barang a
                inner join barang_keluar_detail b on a.kd_barang=b.kd_barang where kd_barang_keluar = '$id'")->result();
    }
    
    function deleteDataKeluar($data,$id) {
        return $this->db->query("Delete from barang_keluar_detail where kd_barang_keluar='$data' and kd_barang = '$id'")->result();
    }
    
    function getDataMasuk($kdbarangmasuk) {
        return $this->db->query("Select * from barang_masuk_detail where kd_barang_masuk='$kdbarangmasuk'")->result();
    }
    
    function deleteDataMasuk($data,$data2) {
        return $this->db->query("Delete from barang_masuk_detail where kd_barang_masuk='$data' and kd_barang = '$data2'")->result();
    }

    public function GetPie(){
		$query=$this->db->query("select * from barang;");
		return $query;
	}
}

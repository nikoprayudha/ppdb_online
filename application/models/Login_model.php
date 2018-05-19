<?php 
class Login_model extends CI_Model{
 
	public function __construct(){
		parent::__construct();	
	}
 
	public function check_user($nisn, $password) {
		$query = $this->db->query("select * from user where nisn='$nisn' AND password='$password' limit 1");
		return $query;
	}

	public function check_user_sekolah($id_sekolah, $password) {
		$query = $this->db->query("select * from sekolah where id_sekolah='$id_sekolah' AND password='$password' limit 1");
		return $query;
	}

	public function cek_status($id_sekolah)
	{
		$query = $this->db->query("select status from sekolah where id_sekolah='$id_sekolah' AND status = 'belum_terverifikasi' limit 1");
		return $query->result();
	}

	

		
}
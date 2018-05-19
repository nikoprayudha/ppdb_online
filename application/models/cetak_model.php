<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class cetak_model extends CI_Model{

	

	public function view_row()
	{
		// $this->db->select("Id,Nama,Lokasi,Luas,Tentang");
		// $query = $this->db->get('wisata');
		// return $query->result();
			$query = $this->db->query('select * from sekolah where status="terverifikasi"');
			return $query->result();
			
	}
}
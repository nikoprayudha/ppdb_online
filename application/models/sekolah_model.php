<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class sekolah_model extends CI_Model {
	
		public function insertSekolah()
		{
			$object = array('id_sekolah' => $this->input->post('id_sekolah'), 
				'password' => md5($this->input->post('password')),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'jenis_sekolah' => $this->input->post('pilihan1'),
				'alamat_sekolah' => $this->input->post('alamat_sekolah'),
				'provinsi' => $this->input->post('provinsi'),
				'kuota' => $this->input->post('kuota'),
				'no_tlp' => $this->input->post('no_tlp'),
				'penanggung_jawab' => $this->input->post('penanggung_jawab'),
				'foto' => $this->upload->data('file_name'),
				'level' => 'sekolah',
				'status' => 'belum_terverifikasi'
				);
			$this->db->insert('sekolah', $object);
		}

		public function cekInsertt ($nama_sekolah)
		{
			$this->db->select('id_sekolah,nama_sekolah');
			$this->db->from('sekolah');
			$this->db->where('nama_sekolah', $nama_sekolah);
			$query = $this->db->get();
			if ($query->num_rows()>=1) {
				return $query->result();
			}else{
				return false;
			}	
		}

		public function getnumber()
		{
			$sql = $this->db->query("select max(mid(id_sekolah,5,6)) as id from sekolah");
			$kodenya = "";
			foreach ($sql->result() as $row) {
				$kodenya = $row->id+1;
			}
			//menghitung jumlah nol di depan
			$jml = strlen($kodenya);
			$nol = "";
			for ($i=1; $i<=6-$jml ; $i++) { 
				$nol = $nol."0";
			}
			return $nol.$kodenya;
		}

		public function buku()
	{
		# code...

		$this->db->order_by('nama_pilihan','ASC');
		$provinces= $this->db->get('pilihan');
		return $provinces->result_array();
	}

		public function getDataSiswa($id_sekolah)
		{
			$this->db->select("siswa.id_siswa as id, siswa.no_ujian, siswa.nama_lengkap, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.jenis_kelamin, siswa.agama, siswa.alamat_rumah, siswa.kabupaten_kota, siswa.provinsi, siswa.no_handphone, siswa.foto, siswa.nama_sekolah, siswa.alamat_sekolah, siswa.telepon_sekolah, siswa.nama_ayah, siswa.nama_ibu, siswa.handphone_ortu, siswa.penghasilan, siswa.alamat_rumah_ortu, siswa.nama_wali, siswa.handphone_wali, siswa.penghasilan_wali, siswa.alamat_rumah_wali, siswa.pilihan1, siswa.indonesia, siswa.inggris, siswa.matematika, siswa.ipa, siswa.prestasia, siswa.prestasib, siswa.prestasic, siswa.prestasid, siswa.recomendasi");
			
			$this->db->join('siswa', 'sekolah.id_sekolah = siswa.pilihan1');
			$this->db->where('siswa.pilihan1', $id_sekolah);
			$query = $this->db->get('sekolah');
			return $query->result();
		}

		public function getDataRangkingSiswa($id_sekolah)
		{
			$this->db->select("siswa.id_siswa as id, siswa.no_ujian, siswa.nama_lengkap, siswa.foto, siswa.nama_sekolah, siswa.alamat_sekolah, siswa.telepon_sekolah, siswa.indonesia, siswa.inggris, siswa.matematika, siswa.ipa, siswa.rata, siswa.prestasia, siswa.prestasib, siswa.prestasic, siswa.prestasid, siswa.recomendasi, sekolah.kuota");
			
			$this->db->join('siswa', 'sekolah.id_sekolah = siswa.pilihan1');
			$this->db->where('siswa.pilihan1', $id_sekolah);
			$this->db->order_by('rata', 'desc');
			$query = $this->db->get('sekolah');
			return $query->result();
		}

		public function getsekolah()
		{
			$sql = $this->db->query("SELECT id_sekolah,nama_sekolah FROM sekolah");
			return $sql->result_array();
		}

		public function rangking()
		{
			
		}
	}
?>
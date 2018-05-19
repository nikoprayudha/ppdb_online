<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class admin_model extends CI_Model {
	public function insertSiswa()
		{
			$object = array
			('no_ujian' => $this->input->post('no_ujian'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'tempat_lahir' => $this->input->post('tempat_lahir'), 
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
				'agama' => $this->input->post('agama'),
				'alamat_rumah' => $this->input->post('alamat_rumah'),
				'kabupaten_kota' => $this->input->post('kabupaten_kota'), 
				'provinsi' => $this->input->post('provinsi'),
				'no_handphone' => $this->input->post('no_handphone'),
				'foto' => $this->upload->data('file_name')

				//Data Asal Sekolah
				/*'nama_sekolah' => $this->input->post('nama_sekolah'), 
				'alamat_sekolah' => $this->input->post('alamat_sekolah'),
				'telepon_sekolah' => $this->input->post('telepon_sekolah'),

				//Data Orang tua
				'nama_ayah' => $this->input->post('nama_ayah'), 
				'nama_ibu' => $this->input->post('nama_ibu'),
				'handphone_ortu' => $this->input->post('handphone_ortu'), 
				'penghasilan' => $this->input->post('penghasilan'),
				'alamat_rumah_ortu' => $this->input->post('alamat_rumah_ortu'),

				//Data Wali
				'nama_wali' => $this->input->post('nama_wali'),
				'handphone_wali' => $this->input->post('handphone_wali'), 
				'penghasilan_wali' => $this->input->post('penghasilan_wali'),
				'alamat_rumah_wali' => $this->input->post('alamat_rumah_wali'),

				//Data Jurusan Yang Dipilih
				'pilihan1' => $this->input->post('pilihan1'),
				'pilihan2' => $this->input->post('pilihan2'),

				//Data Nilai
				'indonesia' => $this->input->post('indonesia'),
				'inggris' => $this->input->post('inggris'), 
				'matematika' => $this->input->post('matematika'),
				'ipa' => $this->input->post('ipa'),

				//Data Prestasi
				'prestasia' => $this->input->post('prestasia'),
				'prestasib' => $this->input->post('prestasib'),
				/*'prestasic' => $this->input->post('prestasic'),
				'prestasid' => $this->input->post('prestasid')

				//Data Upload
				/*'recomendasi' => $this->upload->data('file_name')*/
				



				);
			$this->db->insert('siswa', $object);


		}

		public function getSiswa($id)
		{
			$this->db->where('id_siswa',$id);
			$query = $this->db->get("siswa");
			return $query->result();
		}


		public function getDataSiswa()
		{
			$this->db->select("siswa.id_siswa as id, siswa.no_ujian, siswa.nama_lengkap, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.jenis_kelamin, siswa.agama, siswa.alamat_rumah, siswa.kabupaten_kota, siswa.provinsi, siswa.no_handphone, siswa.foto, siswa.nama_sekolah, siswa.alamat_sekolah, siswa.telepon_sekolah, siswa.nama_ayah, siswa.nama_ibu, siswa.handphone_ortu, siswa.penghasilan, siswa.alamat_rumah_ortu, siswa.nama_wali, siswa.handphone_wali, siswa.penghasilan_wali, siswa.alamat_rumah_wali, siswa.pilihan1, siswa.indonesia, siswa.inggris, siswa.matematika, siswa.ipa, siswa.prestasia, siswa.prestasib, siswa.prestasic, siswa.prestasid, siswa.recomendasi");
			
			$this->db->join('siswa', 'sekolah.id_sekolah = siswa.pilihan1');
			$query = $this->db->get('sekolah');
			return $query->result();
		}


		public function deleteById($id)
		{
			$this->db->where('id_siswa', $id);
			$query = $this->db->get('siswa');
			$row = $query->row();

			unlink("assets/upload/$row->foto");
			$result = $this->db->delete('siswa', array('id_siswa' => $id));
		}

		public function getDataKartu($no)
		{
			$query = $this->db->query("select siswa.*, sekolah.nama_sekolah from siswa join sekolah on siswa.pilihan1 = sekolah.id_sekolah WHERE siswa.no_ujian='$no'");
			return $query->result();
		}

		public function UpdateById($id)
		{
		
			$data = array
			(
				'no_ujian' => $this->input->post('no_ujian'), 
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'alamat_rumah' => $this->input->post('alamat_rumah'),
				'kabupaten_kota' => $this->input->post('kabupaten_kota'),
				'provinsi' => $this->input->post('provinsi'),
				'no_handphone' => $this->input->post('no_handphone'),
				'foto' => $this->upload->data('file_name'),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'alamat_rumah' => $this->input->post('alamat_rumah'),
				'telepon_sekolah' => $this->input->post('telepon_sekolah'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'handphone_ortu' => $this->input->post('handphone_ortu'),
				'penghasilan' => $this->input->post('penghasilan'),
				'alamat_rumah_ortu' => $this->input->post('alamat_rumah_ortu'),
				'nama_wali' => $this->input->post('nama_wali'),
				'handphone_wali' => $this->input->post('handphone_wali'),
				'penghasilan_wali' => $this->input->post('penghasilan_wali'),
				'alamat_rumah_wali' => $this->input->post('alamat_rumah_wali'),
				'pilihan1' => $this->input->post('pilihan1'),
				'pilihan2' => $this->input->post('pilihan2'),
				'indonesia' => $this->input->post('indonesia'),
				'inggris' => $this->input->post('inggris'),
				'matematika' => $this->input->post('matematika'),
				'ipa' => $this->input->post('ipa'),
				'prestasia' => $this->input->post('prestasia'),
				'prestasib' => $this->input->post('prestasib'),
				'prestasic' => $this->input->post('prestasic'),
				'prestasid' => $this->input->post('prestasid')
				
				);
			$this->db->where('id_siswa',$id);
			$this->db->update('siswa',$data);
		}	


		public function cekdeleteById($id)
		{
			$query = $this->db->query("select * from siswa where id_siswa = '$id'");
			return $query->result();
		}
		
		public function cekInsert ($no_ujian)
		{
			$this->db->select('id_siswa,no_ujian');
			$this->db->from('siswa');
			$this->db->where('no_ujian', $no_ujian);
			$query = $this->db->get();
			if ($query->num_rows()>=1) {
				return $query->result();
			}else{
				return false;
			}	
		}

		public function deleteByIdn($id)
		{
       		
			$this->db->where('id',$id);
		    $query = $this->db->get('user');
		    $row = $query->row();

    		unlink("assets/uploads/$row->foto");
			$result=$this->db->delete('user', array('id' => $id));

		}

		public function getDataLogin() 
	{
        
            $this->db->select("id,nisn,username,foto");
            $this->db->where('nisn !=', 'admin');
			$query = $this->db->get('user');
			return $query->result();
    }

    	public function getDataSekolah() 
	{
        
            $this->db->select("id_sekolah,nama_sekolah,jenis_sekolah,alamat_sekolah,provinsi,kuota,no_tlp,penanggung_jawab,foto, status");
            $this->db->where('id_sekolah !=', 'admin');
			$query = $this->db->get('sekolah');
			return $query->result();
    }

    public function getMember($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('user');
			return $query->result();
			// echo $id;
			}

			 public function getSekolah($id_sekolah)
		{
			$this->db->where('id_sekolah',$id_sekolah);
			$query = $this->db->get('sekolah');
			return $query->result();
			// echo $id;
			}

public function UpdateByIdn($id)
		{
		
			$data = array('nisn' => $this->input->post('nisn'), 'username' => $this->input->post('username'),'password' => md5($this->input->post('nisn')),'foto' => $this->upload->data('file_name')
				);
			$this->db->where('id',$id);
			$this->db->update('user',$data);
		}	


public function getDataJurusan() 
	{
        
            $this->db->select("id_pilihan,nama_pilihan");
			$query = $this->db->get('pilihan');
			return $query->result();
    }

    public function cekKategori ($nama)
		{
			$this->db->select('id_pilihan,nama_pilihan');
			$this->db->from('pilihan');
			$this->db->where('nama_pilihan', $nama);
			$query = $this->db->get();
			if ($query->num_rows()>=1)
			 {
				return $query->result();
			}else{
				return false;
			}	
		}


			public function getJurusan($id_pilihan)
	{

			$this->db->where('id_pilihan', $id_pilihan);	
			$query = $this->db->get('pilihan',1);
			return $query->result();

	}
	public function updateJurusan($id_pilihan)
	{
		$data = array('nama_pilihan' => $this->input->post('nama_pilihan'), 
							
						);

			$this->db->where('id_pilihan', $id_pilihan);
			$this->db->update('pilihan', $data);
	}

	public function updateSekolah($id_sekolah)
	{
		$data = array('nama_sekolah' => $this->input->post('nama_sekolah'), 
						'jenis_sekolah' => $this->input->post('pilihan1'),
						'alamat_sekolah' => $this->input->post('alamat_sekolah'),
						'provinsi' => $this->input->post('provinsi'),
						'kuota' => $this->input->post('kuota'),
						'no_tlp' => $this->input->post('no_tlp'),
						'penanggung_jawab' => $this->input->post('penanggung_jawab'),
						'foto' => $this->upload->data('file_name')
							
						);

			$this->db->where('id_sekolah', $id_sekolah);
			$this->db->update('sekolah', $data);
	}


		public function insertJurusan()
	{
		$object = array('id_pilihan' => $this->input->post('id_pilihan'),
						'nama_pilihan' => $this ->input->post('nama_pilihan'), 
						);//name dri form view
			$this->db->insert('pilihan', $object);
	}

	public function deleteJurusan($id_pilihan)
	{
		# code...
		$this->db->where('id_pilihan', $id_pilihan);
    	$this->db->delete('pilihan');
	}

	public function cekdeleteJurusan($id_pilihan)
		{
			$query = $this->db->query("select * from siswa where id_pilihan = '$id_pilihan'");
			return $query->result();
		}

	public function verifikasi($id_sekolah)
	{
		$query = $this->db->query("UPDATE sekolah SET status='terverifikasi' WHERE id_sekolah='$id_sekolah'");
		return $query;
	}

	public function unverifikasi($id_sekolah)
	{
		$query = $this->db->query("UPDATE sekolah SET status='belum_terverifikasi' WHERE id_sekolah='$id_sekolah'");
		return $query;
	}


	

public function delete($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');
	}

	public function buku()
	{
		# code...

		$this->db->order_by('nama_pilihan','ASC');
		$provinces= $this->db->get('pilihan');
		return $provinces->result_array();
	}


	
	}
	
	/* End of file Member_Model.php */
	/* Location: ./application/models/Member_Model.php */
?>
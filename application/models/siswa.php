<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class siswa extends CI_Model {
	
		public function insertSiswa($rata)
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
				'foto' => $this->upload->data('file_name'),

				//Data Asal Sekolah
				'nama_sekolah' => $this->input->post('nama_sekolah'), 
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
				//'pilihan2' => $this->input->post('pilihan2'),

				//Data Nilai
				'indonesia' => $this->input->post('indonesia'),
				'inggris' => $this->input->post('inggris'), 
				'matematika' => $this->input->post('matematika'),
				'ipa' => $this->input->post('ipa'),

				'rata' => $rata,

				//Data Prestasi
				'prestasia' => $this->input->post('prestasia'),
				'prestasib' => $this->input->post('prestasib'),
				// 'prestasic' => $this->input->post('prestasic'),
				// 'prestasid' => $this->input->post('prestasid')

				//Data Upload
				// 'recomendasi' => $this->upload->data('files')
				



				);

			$this->db->insert('siswa', $object);


		}

				public function insertSiswaLuar()
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
				'foto' => $this->upload->data('file_name'),

				//Data Asal Sekolah
				'nama_sekolah' => $this->input->post('nama_sekolah'), 
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
				//'pilihan2' => $this->input->post('pilihan2'),

				//Data Nilai
				'indonesia' => $this->input->post('indonesia'),
				'inggris' => $this->input->post('inggris'), 
				'matematika' => $this->input->post('matematika'),
				'ipa' => $this->input->post('ipa'),

				//Data Prestasi
				'prestasia' => $this->input->post('prestasia'),
				'prestasib' => $this->input->post('prestasib'),
				// 'prestasic' => $this->input->post('prestasic'),
				// 'prestasid' => $this->input->post('prestasid')

				//Data Upload
				//'recomendasi' => $this->input->post('files')
				



				);
			
			$this->db->insert('siswa', $object);


		}

		public function buku()
	{
		# code...

		$this->db->order_by('nama_sekolah','ASC');
		$provinces= $this->db->get('sekolah');
		return $provinces->result_array();
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

		public function uploadById($no)
		{
			# code...

			$data = array(
				'recomendasi' => $this->upload->data('file_name') 
				);
			$this->db->where('no_ujian', $no);
			$this->db->update('siswa', $data);
		}
}
?>
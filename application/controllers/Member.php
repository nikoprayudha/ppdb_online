	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('nisn')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'member'){
			redirect('user');
		}
	}
	
		// public function index()
		// {
		// // $this->load->model('pegawai_model');
		// // $data["pegawai_list"] = $this->pegawai_model->getDataPegawai();
		// $this->load->view('tambah_member_view');	
		// }

		public function index()
		{
			$data = array(
						'error' => '',
						'username' => $this->session->userdata('username'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);

			$this->load->model('admin_model');
			$data["member"] = $this->admin_model->getDataSiswa();
			$this->load->view('tampilan_admin',$data);	
		}


		public function create()
		{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_ujian', 'no_ujian', 'trim|required|callback_cekDbInsert');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
		//$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('alamat_rumah', 'alamat_rumah', 'trim|required');
		$this->form_validation->set_rules('kabupaten_kota', 'kabupaten_kota', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
		$this->form_validation->set_rules('no_handphone', 'no_handphone', 'trim|required');

		//Data Asal Sekolah
		$this->form_validation->set_rules('nama_sekolah', 'nama_sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat_sekolah', 'alamat_sekolah', 'trim|required');
		$this->form_validation->set_rules('telepon_sekolah', 'telepon_sekolah', 'trim|required');

		//Data Orang Tua 
		$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
		$this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
		$this->form_validation->set_rules('handphone_ortu', 'handphone_ortu', 'trim|required');
		$this->form_validation->set_rules('penghasilan', 'penghasilan', 'trim|required');
		$this->form_validation->set_rules('alamat_rumah_ortu', 'alamat_rumah_ortu', 'trim|required');

		//Data Wali
		$this->form_validation->set_rules('nama_wali', 'nama_wali', 'trim|required');
		$this->form_validation->set_rules('handphone_wali', 'handphone_wali', 'trim|required');
		$this->form_validation->set_rules('penghasilan_wali', 'penghasilan_wali', 'trim|required');
		$this->form_validation->set_rules('alamat_rumah_wali', 'alamat_rumah_wali', 'trim|required');

		//Data Jurusan Yang Dipilih
		$this->form_validation->set_rules('pilihan1', 'pilihan1', 'trim|required');
		$this->form_validation->set_rules('pilihan2', 'pilihan2', 'trim|required');

		//Data Nilai
		$this->form_validation->set_rules('indonesia', 'indonesia', 'trim|required');
		$this->form_validation->set_rules('inggris', 'inggris', 'trim|required');
		$this->form_validation->set_rules('matematika', 'matematika', 'trim|required');
		$this->form_validation->set_rules('ipa', 'ipa', 'trim|required');

		//Data Prestasi
		$this->form_validation->set_rules('prestasia', 'prestasia', 'trim|required');
		$this->form_validation->set_rules('prestasib', 'prestasib', 'trim|required');
		/*$this->form_validation->set_rules('prestasic', 'prestasic', 'trim|required');
		$this->form_validation->set_rules('prestasid', 'prestasid', 'trim|required');
		
		//Upload Recomendasi */


		
		$this->load->model('admin_model');	
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_siswa_view',$data);
		}
		
		else{
				$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->load->view('member',$error, $data);
                }
                else
                {
						$this->admin_model->insertSiswa();
						echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
				redirect('member', 'refresh');
                }
			} 
		}

		public function cekDbInsert()
		{
			$this->load->model('admin_model');
			$no_ujian = $this->input->post('no_ujian');
			$result = $this->admin_model->cekInsert($no_ujian);
			if($result){
				$this->form_validation->set_message('cekDbInsert',"NO Ujian Telah Terdaftar");
				return false;
			}
			else{
				return true;
			}
		}
		public function update($id)
		{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_ujian'/*mengambil value input text*/, 'no_ujian'/*Nama di tampilan*/, 'trim|required|alpha_numeric');
		
		
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username'),
					'nisn' => $this->session->userdata('nisn'),
					'foto' => $this->session->userdata('foto')
				);

		$this->load->model('admin_model');
		$data['member']=$this->admin_model->getSiswa($id);
		$data2=$this->admin_model->getSiswa($id);
		$username=$data2[0]->foto;

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_siswa_view',$data);
		}
		else
		{
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_siswa_view',$error,$data);
				redirect('member/update/'.$id,'refresh');
			}
		

			else
		{
			$image_data = $this->upload->data();
			unlink('assets/uploads/'.$username);
			$this->admin_model->UpdateById($id);
			$this->load->view('tambah_sukses',$data);
		}

	}
}

// public function delete($id)
// 	{
// 		$this->load->model('member_model');
// 		$data["member"] = $this->member_model->deleteById($id);
// 		$data2 = $this->member_model->deleteById($id);
// 		$nama=$data2[0]->foto;

// 		redirect('member',$data,'refresh');
// 	}

	public function delete($id)
	{
		$this->load->model('admin_model');
		
			$data["member"] = $this->admin_model->deleteById($id);
			redirect('member',$data,'refresh');		
	}

	

	public function logout() {
		$this->session->unset_userdata('nisn');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

	}
	
	/* End of file Member.php */
	/* Location: ./application/controllers/Member.php */

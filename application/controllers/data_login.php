<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();

		$this->load->helper(array('url','form'));

		$this->load->model('admin_model');


		if ($this->session->userdata('nisn')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'member'){
			redirect('user');
		}
	}


	public function index()
	{
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);

		//$data["coba_list"] = $this->buku_model->bukupenerbit();
		//$data["buku_list"] = $this->buku_model->buku();
		$this->load->view('',$data);
		// $this->load->view('edit_buku_view',$data);


	}
	public function tampil_login()
	{
		
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		$data["login_list"] = $this->admin_model->getDataLogin();
		$this->load->view('login_view',$data);
	}

	public function tampil_sekolah()
	{
		
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		$data["sekolah_list"] = $this->admin_model->getDataSekolah();
		$this->load->view('sekolah_view',$data);
	}

	public function update($id)
		{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nisn'/*mengambil value input text*/, 'NISN'/*Nama di tampilan*/, 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('username'/*mengambil value input text*/, 'Username'/*Nama di tampilan*/, 'trim|required');
		
		$data = array(
					'error' => '',
					'nama' => $this->session->userdata('nama'),
					'nim' => $this->session->userdata('nim'),
					'foto' => $this->session->userdata('foto')
				);

		$this->load->model('admin_model');
		$data['member']=$this->admin_model->getMember($id);
		$data2=$this->admin_model->getMember($id);
		$nama=$data2[0]->foto;

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_member_view',$data);
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
				$this->load->view('tambah_member_view',$error,$data);
				redirect('data_login/update/'.$id,'refresh');
			}
		

			else
		{
			$image_data = $this->upload->data();
			unlink('assets/uploads/'.$nama);
			$this->admin_model->UpdateByIdn($id);
			
	echo '<script type="text/javascript">alert("Data Berhasil di Update!!")</script>';
				redirect('data_login/tampil_login', 'refresh');
		}

	}
}

public function update_sekolah($id_sekolah)
		{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_sekolah'/*mengambil value input text*/, 'nama_sekolah'/*Nama di tampilan*/, 'trim|required');
		
		$data = array(
					'error' => '',
					'nama_sekolah' => $this->session->userdata('nama_sekolah'),
					'id_sekolah' => $this->session->userdata('id_sekolah'),
					'foto' => $this->session->userdata('foto')
				);

		$this->load->model('admin_model');
		$data['member']=$this->admin_model->getSekolah($id_sekolah);
		$data2=$this->admin_model->getSekolah($id_sekolah);
		$nama_sekolah=$data2[0]->foto;

		$data["jurusan_list"] = $this->admin_model->buku();

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_sekolah_view',$data);
			//echo '<script type="text/javascript">alert("143")</script>';
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
				$this->load->view('tambah_member_view',$error,$data);
				redirect('data_login/update_sekolah/'.$id_sekolah,'refresh');
							//echo '<script type="text/javascript">alert("159")</script>';
			}
		

			else
		{
			$image_data = $this->upload->data();
			unlink('assets/uploads/'.$username);
			$this->admin_model->UpdateSekolah($id_sekolah);
			
	echo '<script type="text/javascript">alert("Data Berhasil di Update!!")</script>';
				redirect('data_login/tampil_login', 'refresh');
		}

	}
}




	public function delete($id)
	{
		$this->load->model('admin_model');
		
			$data["member"] = $this->admin_model->deleteByIdn($id);
			redirect('data_login/tampil_login',$data,'refresh');		
	}

	public function verifikasi($id_sekolah)
	{
		$this->load->model('admin_model');
		$query = $this->admin_model->verifikasi($id_sekolah);
		if ($query) {
			echo '<script type="text/javascript">alert("Data Berhasil di Verifikasi!!")</script>';
			redirect('data_login/tampil_sekolah', 'refresh');
		} else {
			echo '<script type="text/javascript">alert("Verifikasi Gagal!!")</script>';
			redirect('data_login/tampil_sekolah', 'refresh');
			
		}
	}

	public function unverifikasi($id_sekolah)
	{
		$this->load->model('admin_model');
		$query = $this->admin_model->unverifikasi($id_sekolah);
		if ($query) {
			echo '<script type="text/javascript">alert("Data Berhasil di UnVerifikasi!!")</script>';
			redirect('data_login/tampil_sekolah', 'refresh');
		} else {
			echo '<script type="text/javascript">alert("UnVerifikasi Gagal!!")</script>';
			redirect('data_login/tampil_sekolah', 'refresh');
			
		}
	}
	
	

	public function logout() {
		$this->session->unset_userdata('nisn');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */
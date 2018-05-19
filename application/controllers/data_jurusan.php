<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_jurusan extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
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
		$this->load->model('admin_model');
		$data["jurusan_list"] = $this->admin_model->getDataJurusan();
		$this->load->view('jurusan',$data);	
	}
	public function create()
	{
		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_pilihan', 'Nama Pilihan', 'trim|required|callback_cekKategori');
		$this->load->model('admin_model');	
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_Jurusan_view',$data);
		}
		else
		{
			$this->admin_model->insertJurusan();
			//$this->load->view('tambah_jenis_sukses');
			echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
				redirect('data_jurusan', 'refresh');
		}

	}

public function cekKategori()
{
	$this->load->model('admin_model');
			$nama = $this->input->post('nama_pilihan');
			$result = $this->admin_model->cekKategori($nama);
			if($result){
				$this->form_validation->set_message('cekKategori',"Nama Jurusan Telah Ada!");
				return false;
			}
			else{
				return true;
			}
}

	public function update($id_pilihan)
	{
		# code...
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_pilihan', 'Nama Pilihan', 'trim|required');
		$this->load->model('admin_model');
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		$data['jenis']=$this->admin_model->getJurusan($id_pilihan);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_jurusan_view',$data);
		}
		else
		{

			$this->admin_model->updateJurusan($id_pilihan);
			//$this->load->view('tambah_jenis_sukses');
			echo '<script type="text/javascript">alert("Data Berhasil di Update!!")</script>';
				redirect('data_jurusan', 'refresh');
		}
	}
	
	public function delete($id_pilihan)
	{
			$id_pilihan = $this->uri->segment(3);
			$this->load->model('admin_model');
			
			
			if ($data == NULL) 
			{
				$id_pilihan = $this->uri->segment(3);
				$this->load->model('admin_model');
				$this->admin_model->deleteJurusan($id_pilihan);
			
			
				echo '<script type="text/javascript">alert("Hapus Berhasil!!")</script>';
				redirect('data_jurusan', 'refresh');
			}

			else
			{

				echo'<script type="text/javascript">alert("Kategori Tidak Bisa Dihapus!")</script>';
				redirect('jurusan', 'refresh');
			}
			
	}

	public function logout() {
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */
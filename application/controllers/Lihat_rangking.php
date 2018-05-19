<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihat_rangking extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('sekolah_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
		if ($this->session->userdata('nisn')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'admin'){
			redirect('member');
		}
	}

	public function index()
	{
		$data = array(
						'error' => '',
						'username' => $this->session->userdata('username'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		
		$data['sekolah_pilihan'] = $this->sekolah_model->getsekolah();
		$data["jurusan_list"] = $this->sekolah_model->getsekolah();
		$this->load->view('lihat_rangking',$data,$data);
	}

	function carisekolah()
	{
		$data = array(
						'error' => '',
						'username' => $this->session->userdata('username'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
		$id_sekolah = $this->input->post('sekolah');
		$data["rangking_siswa"] = $this->sekolah_model->getDataRangkingSiswa($id_sekolah);
		$this->load->view('rangking_siswa', $data);
	}

}

/* End of file Lihat_rangking.php */
/* Location: ./application/controllers/Lihat_rangking.php */
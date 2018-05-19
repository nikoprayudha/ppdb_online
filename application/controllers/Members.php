<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Members extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('nim')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'admin'){
			redirect('admin');
		}
	}

	public function index() {
		$data = array(
					'error' => '',
					'nama' => $this->session->userdata('nama'),
					'nim' => $this->session->userdata('nim'),
					'foto' => $this->session->userdata('foto')
				);
		$this->load->view('tambah_member_view', $data);
	}
 
	public function logout() {
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}
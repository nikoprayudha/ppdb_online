<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Tambah_Data extends CI_Controller {

		public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));

		$this->load->model('admin_model');


		if ($this->session->userdata('nisn')=="")
		 {
			if($this->session->userdata('level') == 'admin')
			{
				redirect('member');
			}
		elseif($this->session->userdata('level') == 'member')
		{
			redirect('user');
		}
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
			$nisn = $this->session->userdata('nisn');
			//var_dump($nim);

			// $this->load->model('member_model');
			// $data["member"] = $this->member_model->getDataMember();
			// $this->load->view('Member_View',$data,$data);


			//$this->load->model('user_model');
			//$data["peminjaman_list"] = $this->user_model->getDataUser($nim);
			//$data["pilihan_list"] = $this->formulir_model->pilihan();
			$this->load->view('tambah_siswa_view',$data,$data);
		}
		
		public function register()
	{
		$data = array('error' => '');
		$this->load->view('tambah_siswa_view', $data);
	}



 
	public function logout() {
		$this->session->unset_userdata('nisn');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}


	
	
	}
	
	/* End of file user.php */
	/* Location: ./application/controllers/user.php */
?>
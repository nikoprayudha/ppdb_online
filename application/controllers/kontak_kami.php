<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class kontak_kami extends CI_Controller {

		public function __construct() {
		parent::__construct();
		if ($this->session->userdata('nisn')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'admin'){
			redirect('admin');
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
			$nim = $this->session->userdata('nisn');
			//var_dump($nim);

			// $this->load->model('member_model');
			// $data["member"] = $this->member_model->getDataMember();
			// $this->load->view('Member_View',$data,$data);


			//$this->load->model('user_model');
			//$data["peminjaman_list"] = $this->user_model->getDataUser($nim);
			$this->load->view('kontak_kami',$data,$data);
		}
		
public function create()
		{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nisn'/*mengambil value input text*/, 'NISN'/*Nama di tampilan*/, 'trim|required|alpha_numeric|callback_cekDbInsert');
		$this->form_validation->set_rules('username'/*mengambil value input text*/, 'username'/*Nama di tampilan*/, 'trim|required');
		
		$this->load->model('member_model');	

		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username'),
					'nisn' => $this->session->userdata('nisn'),
					'foto' => $this->session->userdata('foto')
				);
		// $this->load->view('tambah_member_view', $data);

		if($this->form_validation->run()==FALSE){

			$this->load->view('tambah_member_view', $data);

		}else{
				$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->load->view('tambah_member_view',$error, $data);
                }
                else
                {
						$this->member_model->insertMember();
						$this->load->view('tambah_member_sukses');
                }
			} 
		}

		public function cekDbInsert()
		{
			$this->load->model('Member_Model');
			$nisn = $this->input->post('nisn');
			$result = $this->Member_Model->cekInsert($nisn);
			if($result){
				$this->form_validation->set_message('cekDbInsert',"NISN Telah Terdaftar");
				return false;
			}
			else{
				return true;
			}
		}



//	public function cari_buku_user()
//	{
//		$data = array(
//						'error' => '',
//						'nama' => $this->session->userdata('nama'),
//						'nim' => $this->session->userdata('nim'),
//						'foto' => $this->session->userdata('foto')
//					);
//		$this->load->model('buku_model');
//		$data["buku_list"] = $this->buku_model->getDataBukuSemua();
//		$this->load->view('user_buku_view',$data);
//	}
 
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
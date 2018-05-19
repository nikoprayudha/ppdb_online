<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		//load Login_model.php	
		$this->load->model('login_model');
		//check the username is already set up or not
		if ($this->session->userdata('nisn','username','foto')) {
			//if username is already set up, then check the level of username is admin or member
			if($this->session->userdata('level') == 'admin'){
				redirect('member'); // ketika sukses login sebagai admin maka menuju ke controller apa?
			}elseif($this->session->userdata('level') == 'member'){
				redirect('user');  // ketika sukses member sebagai admin maka menuju ke controller apa?
			}
		}
	}

	public function index()
	{
		

		$data = array('error' => ''
					);
		$this->load->view('login', $data);
	}

	public function Berita()
	{
		

		$data = array('error' => ''
					);
		$this->load->view('Berita', $data);
	}

	public function login_process(){
		$nisn = $this->input->post('nisn');
		$password = md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$result = $this->login_model->check_user($nisn, $password); 
 
		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				$id = $row->id;
				$nisn = $row->nisn;
				$username = $username;
				$foto = $row->foto;
				$level = $row->level;
				
			}
 
			$newdata = array(
					'id' => $id,
					'nisn' => $nisn,
			        'username'  => $username,
			        'foto' => $foto,
			        'level' => $level,
			        'logged_in' => TRUE
			);
			
			//set up session data
			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='admin') {
				redirect('member');
			}elseif ($this->session->userdata('level')=='member') {
				redirect('user');
			}
		}else{
			
			$this->load->view('login_salah');
		}
	}

	public function login_process_sekolah(){
		$id_sekolah = $this->input->post('id_sekolah');
		$password = md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$result = $this->login_model->check_user_sekolah($id_sekolah, $password); 
 
		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				
				$id_sekolah = $row->id_sekolah;
				$password = $password;
				$foto = $row->foto;
				$kuota = $row->kuota;
				$level = $row->level;
				
			}
 
			$newdata = array(
					'id_sekolah' => $id_sekolah,
					'password' => $password,
			        // 'username'  => $username,
			        'kuota' => $kuota,
			        'foto' => $foto,
			        'level' => $level,
			        'logged_in' => TRUE
			);
			
			//set up session data
			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='sekolah') {
				redirect('sekolah/cek_idsek/'.$id_sekolah);
			}elseif ($this->session->userdata('level')=='') {
				echo '<script type="text/javascript">alert("Login Gagal")</script>';
			}
		}else{
			
			// $this->load->view('login_salah');
			echo '<script type="text/javascript">alert("Login Gagal")</script>';
		}
	}

	public function create()
		{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nisn'/*mengambil value input text*/, 'NISN'/*Nama di tampilan*/, 'trim|required|alpha_numeric|callback_cekDbInsert');
		$this->form_validation->set_rules('username'/*mengambil value input text*/, 'Username'/*Nama di tampilan*/, 'trim|required');
		
		//$this->form_validation->set_rules('userfile'/*mengambil value input text*/, 'Foto'/*Nama di tampilan*/, 'trim|required');
		$this->load->model('member_model');	

		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username'),
					'nisn' => $this->session->userdata('nisn'),
					'foto' => $this->session->userdata('foto')
				);
		// $this->load->view('tambah_member_view', $data);

		if($this->form_validation->run()==FALSE){

			$this->load->view('buat_siswa', $data);

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
						$this->load->view('buat_siswa',$error, $data);
                }
                else
                {
						$this->member_model->insertMember();
						echo '<script type="text/javascript">alert("Berhasil")</script>';
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



	public function register()
	{
		$data = array('error' => '');
		$this->load->view('login', $data);
	}


	public function create_sekolah()
		{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_sekolah', 'id_sekolah', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('nama_sekolah', 'nama_sekolah', 'trim|required|callback_cekDbInsertt');
		// $this->form_validation->set_rules('jenis_sekolah', 'jenis_sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat_sekolah', 'alamat_sekolah', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
		$this->form_validation->set_rules('kuota', 'kuota', 'trim|required');
		$this->form_validation->set_rules('no_tlp', 'no_tlp', 'trim|required');
		$this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'trim|required');
		//$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		

		
		$data = array(
					'error' => '',
					'nama_sekolah' => $this->session->userdata('nama_sekolah'),
					'id_sekolah' => $this->session->userdata('id_sekolah'),
					'foto' => $this->session->userdata('foto')
				);
		// $this->load->view('tambah_member_view', $data);
		$this->load->model('sekolah_model');
		$data["kode"] = $this->sekolah_model->getnumber();

		//$this->load->model('sekolah');
			$data["jurusan_list"] = $this->sekolah_model->buku();	

		if($this->form_validation->run()==FALSE){

			$this->load->view('buat_sekolah', $data);

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
						$this->load->view('buat_sekolah',$error, $data);
                }
                else
                {
						$this->sekolah_model->insertSekolah();
						echo '<script type="text/javascript">alert("Berhasil")</script>';
                }
			} 
		}

		public function cekDbInsertt()
		{
			$this->load->model('sekolah_model');
			$nama_sekolah = $this->input->post('nama_sekolah');
			$result = $this->sekolah_model->cekInsertt($nama_sekolah);
			if($result){
				$this->form_validation->set_message('cekDbInsertt',"Sekolah Telah Terdaftar");
				return false;
			}
			else{
				return true;
			}
		}

		public function logout_sekolah() {
	        $this->session->unset_userdata('password');
	        $this->session->unset_userdata('level');
	        session_destroy();
	        redirect('login');
    	}

}
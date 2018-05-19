<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Cetak_kartu extends CI_Controller {

		public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
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
			$nim = $this->session->userdata('nisn');
			//var_dump($nim);

			// $this->load->model('member_model');
			// $data["member"] = $this->member_model->getDataMember();
			// $this->load->view('Member_View',$data,$data);


			//$this->load->model('user_model');
			//$data["peminjaman_list"] = $this->user_model->getDataUser($nim);
			$this->load->view('data_cetak',$data,$nim);
		}

		public function createkartu()
		{
			
			$this->load->helper('url','form');	
			$this->load->library('form_validation');
			$this->form_validation->set_rules('no_ujian', 'Nomor Ujian', 'trim|required');
			$this->load->model('admin_model');	
			$data = array(
						'error' => '',
						'username' => $this->session->userdata('username'),
						'nisn' => $this->session->userdata('nisn'),
						'foto' => $this->session->userdata('foto')
					);
			if($this->form_validation->run()==FALSE)
			{
				echo '<script type="text/javascript">alert("Form Validation Error!!!")</script>';
					redirect('Cetak_kartu', 'refresh');
			}
			else
			{
				$no = $this->input->post('no_ujian');
				$data['kartu'] = $this->admin_model->getDataKartu($no);
				//$this->load->view('tambah_jenis_sukses');
				// echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
				// 	redirect('kategori', 'refresh');
				$this->load->view('cetak2', $data);
			}

		}

		public function cetakPdf($no_ujian)
	{	
		$no = $no_ujian;
		//echo $no;
		$data['kartu'] = $this->admin_model->getDataKartu($no);
		$this->load->view('print', $data);
		
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();


		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf");
		unset($html);
		unset($dompdf);
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
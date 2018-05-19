<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class sekolah extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('login_model');
		}

		public function index(){
		$data = array(
					'error' => '',
					'nama_sekolah' => $this->session->userdata('nama_sekolah'),
					'kuota'=> $this->session->userdata('kuota'),
					'id_sekolah' => $this->session->userdata('id_sekolah'),
					'foto' => $this->session->userdata('foto')
				);

			$this->load->model('sekolah_model');
			$data["jurusan_list"] = $this->sekolah_model->buku();
			$id = $this->session->userdata('id_sekolah');
			//$this->load->view('formulir_pendaftaran',$data);
			$this->load->view('tampilan_sekolah', $data);

		}

		public function cek_idsek($id_sekolah)
		{
			$a = $this->login_model->cek_status($id_sekolah);
			$b = 0;
			if ($a != NULL) {
				echo '<script type="text/javascript">alert("Data Anda Belum Terverifikasi");</script>';
				redirect('login/logout_sekolah','refresh');
			}else{
				//echo '<script type="text/javascript">alert("Sudah Terverifikasi")</script>';
				redirect('sekolah');
			}
		}

		public function data_siswa($id_sekolah){
			$data = array(
					'error' => '',
					'nama_sekolah' => $this->session->userdata('nama_sekolah'),
					'id_sekolah' => $this->session->userdata('id_sekolah'),
					'foto' => $this->session->userdata('foto')
				);
			$this->load->model('sekolah_model');
			$data["member"] = $this->sekolah_model->getDataSiswa($id_sekolah);
			//$this->load->view('tampilan_admin',$data);

			//$this->load->model('sekolah_model');
			$data["jurusan_list"] = $this->sekolah_model->buku();
			//$this->load->view('formulir_pendaftaran',$data);
			$this->load->view('tampilan_sekolah_data_siswa', $data);
		}

		public function rangking_siswa($id_sekolah){
			$data = array(
					'error' => '',
					'nama_sekolah' => $this->session->userdata('nama_sekolah'),
					'id_sekolah' => $this->session->userdata('id_sekolah'),
					'kuota' => $this->session->userdata('kuota'),
					'foto' => $this->session->userdata('foto')
				);
			$this->load->model('sekolah_model');
			$data["member"] = $this->sekolah_model->getDataRangkingSiswa($id_sekolah);
			//$this->load->view('tampilan_admin',$data);

			//$this->load->model('sekolah_model');
			$data["jurusan_list"] = $this->sekolah_model->buku();
			//$this->load->view('formulir_pendaftaran',$data);
			$this->load->view('tampilan_sekolah_rangking_siswa', $data);
		}

		public function edit_data_sekolah($id_sekolah){
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
				$this->load->view('tampilan_sekolah_edit_data',$data);
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
				unlink('assets/uploads/'.$nama_sekolah);
				$this->admin_model->UpdateSekolah($id_sekolah);
				
				echo '<script type="text/javascript">alert("Data Berhasil di Update!!")</script>';
				redirect('sekolah', 'refresh');
			}

		}


				// $this->load->model('sekolah_model');
				// $data["jurusan_list"] = $this->sekolah_model->buku();
				// //$this->load->view('formulir_pendaftaran',$data);
				// $this->load->view('tampilan_sekolah_edit_data', $data);
		}
	}

  ?>
<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Cetaks extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cetak_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		$data['user']=$this->cetak_model->view_row();
		$this->load->view('previews', $data);

	}

	public function cetakPdf()
	{
		$data['user']=$this->cetak_model->view_row();
		$this->load->view('prints', $data);
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
}

?>
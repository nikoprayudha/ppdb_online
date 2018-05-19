<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function add_multiples()
	{

		$this->form_validation->set_rules('banyak_data', 'fieldlabel', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('add_multiple_peminjaman');
		} else {
			// $nim =  $this->input->post('nim');
			$banyak =  $this->input->post('banyak_data');
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->load->view('detail_buku');
		}
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */ ?>
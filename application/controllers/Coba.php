<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller
 {

	public function index()
	{
		
	}
	public function  add_multiple()
	{
		 if($_POST==NULL) 
		 {
            $this->load->view('add_multiple');
        }
        else 
        {
            redirect('Buku/add_multiple_post/'.$_POST['banyak_data']);
        }
	}

}

/* End of file Coba.php */
/* Location: ./application/controllers/Coba.php */
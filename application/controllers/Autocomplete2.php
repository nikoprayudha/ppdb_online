<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete2 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		

		$this->load->model('peminjaman_model');


		
	}

	public function index(){
        $this->load->view('coba');
    }
	public function lookup(){
        // process posted form data (the requested items like province)
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response
        $query = $this->peminjaman_model->lookup($keyword); //Search DB
        if( ! empty($query) )
        {
            $data['response'] = 'true'; //Set response
            $data['message'] = array(); //Create array
            foreach( $query as $row )
            {
                $data['message'][] = array( 
                                        'kode_buku'=>$row->kode_buku
                                        
                                     );  //Add a row to array
            }
        }
        if('IS_AJAX')
        {
            echo json_encode($data); //echo json string if ajax request
             
        }
        else
        {
            $this->load->view('coba',$data); //Load html view of search results
        }
    }

}
?>
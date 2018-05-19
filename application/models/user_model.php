<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User_Model extends CI_Model {
		

public function insertMember()
		{
			$object = array('nisn' => $this->input->post('nisn'), 'username' => $this->input->post('username'),'password' => md5($this->input->post('nisn')),'level' => 'member','foto' => $this->upload->data('file_name')
				);
			$this->db->insert('user', $object);
		}


		public function getMember($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('user');
			return $query->result();
			// echo $id;
			}

			public function cekInsert ($nisn)
		{
			$this->db->select('id,nisn');
			$this->db->from('user');
			$this->db->where('nisn', $nisn);
			$query = $this->db->get();
			if ($query->num_rows()>=1) {
				return $query->result();
			}else{
				return false;
			}	
		}
	
	}
	
	/* End of file Member_Model.php */
	/* Location: ./application/models/Member_Model.php */
?>
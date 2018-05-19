<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_Model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataBuku()
	{
			$this->db->distinct('buku.kode_buku, buku.ket, buku.id_buku');
			$this->db->select("buku.id_buku as id_buku,buku.kode_buku as kodeBuku ,buku.judul_buku as judulBuku,buku.fk_penerbit as fkPenerbit, buku.tahun_terbit as tahunTerbit, count(buku.kode_buku) as stok, sum(case when buku.ket IN ('tersedia') then 1 else 0 end) as jumlahstoktersedia,sum(case when buku.ket IN ('dipinjam') then 1 else 0 end) as jumlahstokdipinjam, buku.fk_kategori as fkKategori, kategori.id_kategori as idKategori, kategori.nama_kategori as namaKategori, penerbit.id_penerbit as idPenerbit, penerbit.nama_penerbit as namaPenerbit");
			$this->db->order_by('buku.kode_buku');
			$this->db->group_by('buku.kode_buku');
			$this->db->join('kategori', 'buku.fk_kategori = kategori.id_kategori');	
			 $this->db->join('penerbit', 'buku.fk_penerbit = penerbit.id_penerbit');
			$query = $this->db->get('buku');
			return $query->result();
		// SELECT buku.id_buku, buku.judul_buku, buku.tahun_terbit, buku.fk_kategori, buku.fk_penerbit, kategori.id_kategori, kategori.nama_kategori,penerbit.id_penerbit, penerbit.nama_penerbit FROM buku join kategori on kategori.id_kategori = buku.fk_kategori join  penerbit on penerbit.id_penerbit= buku.fk_penerbit
			
	}

	public function getPinjam($getid)
	{
			$this->db->select("count(buku.ket) as keterangan");
			$this->db->where('buku.ket', 'dipinjam');
			$this->db->where('buku.kode_buku', 'B01');
			$query = $this->db->get('buku');
			return $query->result();
		// SELECT buku.id_buku, buku.judul_buku, buku.tahun_terbit, buku.fk_kategori, buku.fk_penerbit, kategori.id_kategori, kategori.nama_kategori,penerbit.id_penerbit, penerbit.nama_penerbit FROM buku join kategori on kategori.id_kategori = buku.fk_kategori join  penerbit on penerbit.id_penerbit= buku.fk_penerbit
			
	}

	public function getDataPengarang($kodeBuku)
	{

			$query = $this->db->query("select id_pengarang as idPengarang, nama_pengarang as namaPengarang from pengarang where fk_buku in(select kode_buku from buku where kode_buku='$kodeBuku')");
			return $query->result();

	}
	public function getDataBukuSemua()
	{
			$this->db->distinct('buku.kode_buku, buku.ket, buku.id_buku,pengarang.nama_pengarang,pengarang.fk_buku,pengarang.id_pengarang,penerbit.id_penerbit,kategori.id_kategori');
			$this->db->select("buku.kode_buku as idBuku, buku.judul_buku as judulBuku,buku.fk_penerbit as fkPenerbit, DATE_FORMAT(buku.tahun_terbit,'%d-%m-%Y') as tahunTerbit,buku.fk_kategori as fkKategori,kategori.id_kategori as idKategori, kategori.nama_kategori as namaKategori, penerbit.id_penerbit as idPenerbit, penerbit.nama_penerbit as namaPenerbit, pengarang.id_pengarang as idPengarang, group_concat(distinct pengarang.nama_pengarang) as namaPengarang,count(buku.kode_buku) as stok, sum(case when buku.ket IN ('tersedia') then 1 else 0 end) as jumlahstoktersedia,sum(case when buku.ket IN ('dipinjam') then 1 else 0 end) as jumlahstokdipinjam");
			
			$this->db->join('kategori', 'buku.fk_kategori = kategori.id_kategori','left');	
			 $this->db->join('penerbit', 'buku.fk_penerbit = penerbit.id_penerbit','left');
			 $this->db->join('pengarang', 'pengarang.fk_buku = buku.kode_buku','left');
			$query = $this->db->get('buku');
			return $query->result();

	// 		SELECT buku.id_buku, buku.judul_buku, buku.tahun_terbit, buku.fk_kategori, buku.fk_penerbit, kategori.id_kategori, kategori.nama_kategori,penerbit.id_penerbit, penerbit.nama_penerbit, pengarang.id_pengarang, pengarang.nama_pengarang FROM buku join kategori on kategori.id_kategori = buku.fk_kategori join  penerbit on penerbit.id_penerbit= buku.fk_penerbit join pengarang.fk_buku = buku.id_buku	
	//
	 }

		public function buku()
	{
		# code...

		$this->db->order_by('nama_kategori','ASC');
		$provinces= $this->db->get('kategori');
		return $provinces->result_array();
	}
	public function bukupenerbit()
	{
		# code...

		$this->db->order_by('nama_penerbit','ASC');
		$provinces= $this->db->get('penerbit');
		return $provinces->result_array();
	}
		
		public function bukupengarang()
				{
					$this->db->order_by('judul_buku','ASC');
					$provinces= $this->db->get('buku');
					return $provinces->result_array();;

				}		
	public function insertBuku()
		{
			# code...
			// idPegawai = 1
			$object = array(
				'judul_buku' => $this->input->post('judul_buku'),
				 
				'tahun_terbit' => $this->input->post('tahun_terbit'),
				'fk_kategori' => $this->input->post('id_kategori'),
				'fk_penerbit' => $this->input->post('id_penerbit'),
				'stok' => $this->input->post('stok')

				
				);
			$this->db->insert('buku', $object);
		}
		public function getBuku($kode_buku) //update
		{
			# code...
			$this->db->where('kode_buku', $kode_buku);	
			$query = $this->db->get('buku');
			$query2 = $this->db->get('kategori');
			
			return $query->result();
			return $query2->result();

		}
		
		public function updateBuku($kode_buku)
		{
			# code...

			$data = array(
				'judul_buku' => $this->input->post('judul_buku'), 
				'fk_penerbit' => $this->input->post('id_penerbit'), 
				'tahun_terbit' => $this->input->post('tahun_terbit'),
				'fk_kategori' => $this->input->post('id_kategori'),
				
				);
			$this->db->where('kode_buku', $kode_buku);
			$this->db->update('buku', $data);
		}
		public function getDataKategori() 
	{
        
            $this->db->select("id_kategori,nama_kategori");
			$query = $this->db->get('kategori');
			return $query->result();
    }
    public function getDataPenerbit()
    {
    	# code...
    	 $this->db->select("id_penerbit,nama_penerbit");
			$query = $this->db->get('penerbit');
			return $query->result();
    }
		public function getKategori($id_kategori)
	{

			$this->db->where('id_kategori', $id_kategori);	
			$query = $this->db->get('kategori',1);
			return $query->result();

	}
	public function getPenerbit($id_penerbit)
	{
			$this->db->where('id_penerbit', $id_penerbit);	
			$query = $this->db->get('penerbit',1);
			return $query->result();
	}
	public function insertKategori()
	{
		$object = array('id_kategori' => $this->input->post('id_kategori'),
						'nama_kategori' => $this ->input->post('nama_kategori'), 
						);//name dri form view
			$this->db->insert('kategori', $object);
	}
	public function insertPenerbit()
	{
		# code...
		$object = array('id_penerbit' => $this->input->post('id_penerbit'),
						'nama_penerbit' => $this ->input->post('nama_penerbit'), 
						);//name dri form view
			$this->db->insert('penerbit', $object);
	}

	public function updateKategori($id_kategori)
	{
		$data = array('nama_kategori' => $this->input->post('nama_kategori'), 
							
						);

			$this->db->where('id_kategori', $id_kategori);
			$this->db->update('kategori', $data);
	}
	public function updatePenerbit($id_penerbit)
	{
		$data = array('nama_penerbit' => $this->input->post('nama_penerbit'), 
							
						);

			$this->db->where('id_penerbit', $id_penerbit);
			$this->db->update('penerbit', $data);
	}
	
	public function deleteKategori($id_kategori)
	{
		# code...
		$this->db->where('id_kategori', $id_kategori);
    	$this->db->delete('kategori');
	}

	public function deletePenerbit($id_penerbit)
	{
		# code...
		$this->db->where('id_penerbit', $id_penerbit);
    	$this->db->delete('penerbit');
	}
	public function deletePengarang($id_pengarang)
	{
		# code...
		$this->db->where('id_pengarang', $id_pengarang);
    	$this->db->delete('pengarang');
	}

	
	
	public function insertPengarang($kodeBuku)
		{
			// idPegawai = 1
			$object = array(
				'nama_pengarang' => $this->input->post('nama_pengarang'), 
				'fk_buku'=> $kodeBuku
				);
			$this->db->insert('pengarang', $object);
		}

		
	public function getPengarang($id_pengarang)
	{
		# code...
		$this->db->where('id_pengarang', $id_pengarang);	
			$query = $this->db->get('pengarang');
			
			return $query->result();
	}
	public function updatePengarang($id_pengarang)
	{
		# code...
		$data = array(
				'nama_pengarang' => $this->input->post('nama_pengarang'), 
	
				
				);
			$this->db->where('id_pengarang', $id_pengarang);
			$this->db->update('pengarang', $data);

	
	}
	public function delete($kode_buku)
	{
		// $this->db->where('id_buku', $id_buku);
		// $this->db->delete('buku');

			$this->db->where('fk_buku', $kode_buku);
			$this->db->delete('pengarang');
			

			$this->db->where('kode_buku',$kode_buku);
		    $query = $this->db->get('buku');
		    $row = $query->row();

    		
			$this->db->delete('buku', array('kode_buku' => $kode_buku));

	}

	

    public function insertkan($i)
		{
			$object = array(
				'kode_buku' => $this->input->post('kode_buku'),
				'judul_buku' => $this->input->post('judul_buku'),
				 
				'tahun_terbit' => $this->input->post('tahun_terbit'),
				'fk_kategori' => $this->input->post('id_kategori'),
				'fk_penerbit' => $this->input->post('id_penerbit'),
				'status' => 'copy '.$i,
				'ket' => 'tersedia'
			);
			$this->db->insert('buku', $object);
		}

		public function cekDaftar($kode_buku)
     {
     	$this->db->select('id_buku,kode_buku,judul_buku,tahun_terbit,fk_kategori,fk_penerbit');
		$this->db->from('buku');
		$this->db->where('kode_buku', $kode_buku);
		$query = $this->db->get();
		if($query->num_rows()>=1){
			return $query->result();
		}else{
			return false;
		}			
     }	

     public function cekKategori ($nama)
		{
			$this->db->select('id_kategori,nama_kategori');
			$this->db->from('kategori');
			$this->db->where('nama_kategori', $nama);
			$query = $this->db->get();
			if ($query->num_rows()>=1)
			 {
				return $query->result();
			}else{
				return false;
			}	
		}

		public function cekPenerbit ($nama)
		{
			$this->db->select('id_penerbit,nama_penerbit');
			$this->db->from('penerbit');
			$this->db->where('nama_penerbit', $nama);
			$query = $this->db->get();
			if ($query->num_rows()>=1) {
				return $query->result();
			}else{
				return false;
			}	
		}

		public function cekdeleteBuku($kode_buku)
		{
			$query = $this->db->query("select buku.id_buku, buku.kode_buku, peminjaman.id_peminjaman, peminjaman.id_buku from buku join peminjaman on buku.id_buku= peminjaman.id_buku where kode_buku= '$kode_buku'");
			return $query->result();
		}

		public function cekdeleteKategori($id_kategori)
		{
			$query = $this->db->query("select * from buku where fk_kategori = '$id_kategori'");
			return $query->result();
		}
		public function cekdeletePenerbit($id_penerbit)
		{
			$query = $this->db->query("select * from buku where fk_penerbit = '$id_penerbit'");
			return $query->result();
		}

		
}

/* End of file Buku_Model.php */
/* Location: ./application/models/Buku_Model.php */
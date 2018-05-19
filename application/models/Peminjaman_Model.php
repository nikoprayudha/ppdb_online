<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_Model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataPeminjaman()
	{
		 
			$this->db->distinct('buku.kode_buku');
			$this->db->select('buku.id_buku as idBuku, buku.kode_buku as kodeBuku, buku.judul_buku as judulBuku, buku.status as status, buku.ket as ket, anggota.id as Id, anggota.nim as nim, anggota.nama as nama, peminjaman.id_peminjaman as idPeminjaman, peminjaman.id_user as idUser, peminjaman.id_buku as idBuku, DATE_FORMAT(peminjaman.tanggal_pinjam,"%d-%m-%Y") as tanggalPinjam, DATE_FORMAT(peminjaman.tanggal_kembali,"%d-%m-%Y") as tanggalKembali, DATE_FORMAT(peminjaman.tanggal_real,"%d-%m-%Y") as tanggalReal, peminjaman.denda');
			
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');	
			 $this->db->join('anggota', 'anggota.id = peminjaman.id_user');
			 $this->db->where('peminjaman.tanggal_real', '0000-00-00');
			 $this->db->where('buku.ket', 'dipinjam');
			$query = $this->db->get('peminjaman');
			return $query->result();

			
	}
	public function getDataHistory()
	{
		$this->db->select('buku.id_buku as idBuku, buku.kode_buku as kodeBuku, buku.judul_buku as judulBuku, buku.status as status, if(buku.ket="dipinjam", "Dipinjam", "Kembali") as ket, anggota.id as Id, anggota.nim as nim, anggota.nama as nama, peminjaman.id_peminjaman as idPeminjaman, peminjaman.id_user as idUser, peminjaman.id_buku as idBuku, DATE_FORMAT(peminjaman.tanggal_pinjam,"%d-%m-%Y") as tanggalPinjam, DATE_FORMAT(peminjaman.tanggal_kembali,"%d-%m-%Y") as tanggalKembali, if(peminjaman.tanggal_real="0000-00-00","-", DATE_FORMAT(peminjaman.tanggal_real,"%d-%m-%Y")) as tanggalReal, peminjaman.denda, if(datediff(tanggal_real, tanggal_kembali)-3 < 0,0,datediff(tanggal_real, tanggal_kembali)-3) as selisih');
			$this->db->order_by('buku.ket', 'DESC');
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');	
			 $this->db->join('anggota', 'anggota.id = peminjaman.id_user');
			 
			$query = $this->db->get('peminjaman');
			return $query->result();
	}

	public function getAlert($idPeminjaman)
	{
		$this->db->select('buku.id_buku as idBuku, buku.kode_buku as kodeBuku, buku.judul_buku as judulBuku, buku.status as status, if(buku.ket="dipinjam", "Dipinjam", "Kembali") as ket, anggota.id as Id, anggota.nim as nim, anggota.nama as nama, peminjaman.id_peminjaman as idPeminjaman, peminjaman.id_user as idUser, peminjaman.id_buku as idBuku, DATE_FORMAT(peminjaman.tanggal_pinjam,"%d-%m-%Y") as tanggalPinjam, DATE_FORMAT(peminjaman.tanggal_kembali,"%d-%m-%Y") as tanggalKembali, if(peminjaman.tanggal_real="0000-00-00","-", DATE_FORMAT(peminjaman.tanggal_real,"%d-%m-%Y")) as tanggalReal, peminjaman.denda, if(datediff(tanggal_real, tanggal_kembali)-3 < 0,0,datediff(tanggal_real, tanggal_kembali)-3) as selisih');
			$this->db->order_by('buku.ket', 'DESC');
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');	
			 $this->db->join('anggota', 'anggota.id = peminjaman.id_user');
			 		$this->db->where('peminjaman.id_peminjaman',$idPeminjaman);
			$query = $this->db->get('peminjaman');
			return $query->result();
	}

    public function insertpem($id_buku,$getid)
	{
		
        $date = date('Ymd');
		$stop_date = date('Ymd');
		$stop_date = date('Ymd', strtotime($stop_date . ' +14 day'));
		
		$object = array(
			'id_user' => $this->input->post('anggota'), 
			'id_buku' => $getid[0]->idbuku,
			'tanggal_pinjam' => $date, 
			'tanggal_kembali' => $stop_date, //batas kembali
			);
		$this->db->insert('peminjaman',$object);
    }

    public function updatebuku($idbuku)
    {
    	$data = array('ket' => 'tersedia'
				);
			$this->db->where('id_buku',$idbuku);
			$this->db->update('buku',$data);

        
    }

    public function ubahStatusBuku($getid)
    {
    	$data = array('ket' => 'dipinjam'
				);
			$this->db->where('id_buku',$getid[0]->idbuku);
			$this->db->update('buku',$data);

        
    }

    public function getid($id_buku)
    {
 

		$query = $this->db->query("select buku.id_buku as idbuku, buku.kode_buku as kodebuku, buku.ket from buku where buku.kode_buku = '$id_buku' and buku.ket = 'tersedia' limit 0,1 ");
		
		return $query->result();
    }

    public function cekbuku ($id_buku)
		{
			$this->db->select('id_buku,kode_buku as kode,ket');
			$this->db->from('buku');
			$this->db->where('kode_buku', '$id_buku');
			$this->db->where('ket', 'tersedia');
			$query = $this->db->get();
			if ($query->num_rows()<= 0) {
				return $query->result();
			}else{
				return false;
			}	
		}

		public function cekbanyakdata($nim,$jumlah)
		{
			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->join('anggota', 'anggota.id = peminjaman.id_user');
			$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
			$this->db->where('anggota.nim', $nim);
			$this->db->where('buku.ket', 'dipinjam');
			$query = $this->db->get();
			if ($query->num_rows() +$jumlah > 5) {
				return $query->result();
			}else{
				return false;
			}	
		}

		 public function ceknim($nim)
		{
			$query = $this->db->query("select * from anggota where nim = '$nim'");
			return $query->result();
			
		}
		public function hitungjumlahpinjam($nim)
		{
			$this->db->select("5-count(anggota.id) as jumlah");
			$this->db->join('anggota', 'anggota.id = peminjaman.id_user');
			$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
			$this->db->where('anggota.nim', $nim);
			$this->db->where('buku.ket', 'dipinjam');
			$query = $this->db->get('peminjaman');
			return $query->result();
		}

		public function getPeminjaman($idPeminjaman)
		{
			$this->db->where('id_peminjaman', $idPeminjaman);	
			$query = $this->db->get('peminjaman',1);
			return $query->result();
		}

		public function updatePeminjaman($idPeminjaman, $hasilselisih)
		{
			$jumlah = $hasilselisih;
			$jumlah2 = ($jumlah-3)*500;
			$data = array(
				'id_user' => $this->input->post('id_user'), 
				'id_buku' => $this->input->post('id_buku'), 
				'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
				'tanggal_kembali' => $this->input->post('tanggal_kembali'),
				'tanggal_real' => $this->input->post('tanggal_real'),
				'denda' => $jumlah2
				);
			$this->db->where('id_peminjaman', $idPeminjaman);
			$this->db->update('peminjaman', $data);
		}

		public function selisih($idPeminjaman)
		{
			$tanggal_real = $this->input->post('tanggal_real');
			$this->db->select("datediff('$tanggal_real', tanggal_kembali) as selisih");
			$this->db->where('id_peminjaman', $idPeminjaman);
			$query = $this->db->get('peminjaman');
			return $query->result();
		}
		public function updatePeminjaman1($idPeminjaman)
		{
			
			$data = array(
				'id_user' => $this->input->post('id_user'), 
				'id_buku' => $this->input->post('id_buku'), 
				'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
				'tanggal_kembali' => $this->input->post('tanggal_kembali'),
				'tanggal_real' => $this->input->post('tanggal_real'),
				'denda' => 0
				);
			$this->db->where('id_peminjaman', $idPeminjaman);
			$this->db->update('peminjaman', $data);
		}

		public function getkode_buku($kode_buku)
		{
	    	$this->db->select('kode_buku');
	    	$this->db->like('kode_buku', $kode_buku);
	    	$query = $this->db->get('buku');
	    if($query->num_rows() > 0)
	    {
		      foreach ($query->result_array() as $row){
		        $row_set[] = htmlentities(stripslashes($row['kode_buku'])); //build an array
      	}
      			echo json_encode($row_set); //format the array into json data
    	}
  		}
  		public function cariNim($nim)////salah
  		{
  			$sql=$this->db->query("select * from buku where kode_buku LIKE '%$nim%'");
			return $sql;
  		}
		public function search($kode_buku)
			{
				
				$this->db->like('kode_buku',$kode_buku, 'both');
				return $this->db->get('buku')->result();	

			
			}


		public function lookup($keyword)
		{
        $this->db->select('*')->from('buku');
        $this->db->like('kode_buku',$keyword,'after');
        $query = $this->db->get();    
         
        return $query->result();
    }
		




}
/* End of file Peminjaman_Model.php */
/* Location: ./application/models/Peminjaman_Model.php */
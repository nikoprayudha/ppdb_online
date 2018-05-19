<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
		table{
			border-collapse: collapse;
			width: 70%;
			margin: 0 auto;
		}
		table th{
			border:1px solid #000;
			padding: 3px;
			font-weight: bold;
			text-align: center;
		}
		table td{
			border:1px solid #000;
			padding: 3px;
			vertical-align: top;
		}

	</style>
</head>
<body>

<table>
	<tr>
	<td align="center" style="border: 0px">
		<img src="<?php echo base_url('') ?>assets/img/logo.png" width="120" height="120">
	</td>
	<td style="text-align : center; border: 0px" colspan="5">
	 <br>
	PERPUSTAKAAN INFORMATIKA
	<br><b> TEKNOLOGI INFORMASI </b>
	<br> POLITEKNIK NEGERI MALANG
	</td>

	<td align="center" style="border: 0px">
		<img src="<?php echo base_url('') ?>assets/img/logo.png" width="120" height="120">
	</td>
	
	
	</tr> 
	<tr>
	<td colspan="7" style="border:0px">
	
	<hr width="100%" align="center"  size="5px" color="black">
	<p style="text-align: center">History Peminjaman Semua Anggota</p>
	</td>
	</tr>
	<tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kd.Buku</th>
        <th>Judul</th>
        <th>Tgl.Pinjam</th>
        <th>Tgl.Kembali</th>
        <th>Denda</th>
    </tr>
	<?php $no=0; foreach($user as $key){ $no++;?>

	<tr>

                                        <td><?php echo $key->nim ?></td>
                                        <td><?php echo $key->nama ?></td>
                                         <td><?php echo $key->kodeBuku ?></td>
                                        <td><?php echo $key->judulBuku?></td>
                                        <td><?php echo $key->tanggalPinjam ?></td>
                                         <td><?php echo $key->tanggalReal ?></td>
                                          <td><?php echo $key->selisih ?> Hari</td>

                                        
                                     
                                    </tr>
	<?php
	} ?>

</table>
<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakpdf">Cetak PDF</a></p>
</body>
</html>
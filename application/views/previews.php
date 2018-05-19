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
		<img src="<?php echo base_url('') ?>assets/img/logo2.png" width="120" height="120">
	</td>
	<td style="text-align : center; border: 0px" colspan="4">
	 <br>
	Data PPDB
	<br><b> TAHUN 2017/2018 </b>
	<br> SMAN 4 MOJOKERTO
	</td>

	<td align="center" style="border: 0px">
		<img src="<?php echo base_url('') ?>assets/img/logo2.png" width="120" height="120">
	</td>
	
	
	</tr> 
	<tr>
	<td colspan="7" style="border:0px">
	
	<hr width="100%" align="center"  size="5px" color="black">
	<p style="text-align: center">DATA PENDAFTARAN</p>
	</td>
	</tr>
	<tr>
        <th>Nama Sekolah</th>
        <th>Alamat</th>
        <th>Provinsi</th>
        <th>Kuota</th>
        <th>Penanggung Jawab</th>
        <th>Foto</th>
    </tr>
	<?php $no=0; foreach($user as $key){ $no++;?>

	<tr>
                                        <td><?php echo $key->nama_sekolah ?></td>
                                         <td><?php echo $key->alamat_sekolah ?></td>
                                        <td><?php echo $key->provinsi?></td>
                                        <td><?php echo $key->kuota ?></td>
                                         <td><?php echo $key->penanggung_jawab ?></td>
                                          <td><img src="<?php echo base_url('') ?>assets/uploads/<?php echo $key->foto ?>" width="" height="120"></td>
                                          

                                        
                                     
                                    </tr>
	<?php
	} ?>

</table>
<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetakS/cetakpdf">Cetak PDF</a></p>
</body>
</html>
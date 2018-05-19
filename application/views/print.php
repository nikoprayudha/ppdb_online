<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			margin: 0 auto;
		}
		table th{
			border:1px solid #000;
			padding: 3px;
			font-weight: bold;
			text-align: center;
		}
		table td{
			border: 1px solid #000;
			padding: 3px;
			vertical-align: top;
		}
	</style>

</head>
<body>

<table>
	
	<tr>
	<td align="center" style="border: 0px">
		<img src="assets/img/logo2.png" width="120" height="120">
	</td>
	<td style="text-align : center; border: 0px" colspan="2">
	 <br>
	DATA PPDB
	<br><b> TAHUN 2017/2018 </b>
	
	</td>

	<td align="right" style="border: 0px">
		<img src="assets/img/logo2.png" width="120" height="120">
	</td>
	
	
	</tr> 
	<tr>
	<td colspan="4" style="border:0px">
	
	<hr width="100%" align="center"  size="5px" color="black">
	<p style="text-align: center">DATA SISWA TERDAFTAR</p>
	</td>
	</tr>

<br></br>
	
	<tr>
         <th>NO Ujian</th>
        <th>Nama Lengkap</th>
        <th>Sekolah Pilihan</th>
        <th>Foto</th>

    </tr>
	<?php $no=0; foreach($kartu as $key){ $no++;?>

	<tr>

                                        <td><?php echo $key->no_ujian ?></td>
                                        <td><?php echo $key->nama_lengkap ?></td>
                                        <td><?php echo $key->nama_sekolah ?></td>
                                        <td align="center"><img src="assets/uploads/<?php echo $key->foto;?>" height=100></td>
                                         

                                        
                                     
                                    </tr>
	<?php
	} ?>


</table>
</body>
</html>
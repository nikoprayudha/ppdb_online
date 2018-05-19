<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/images/ico/1.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/images/ico/1.png">
	<title>PPDB SMAN 4 MOJOKERTO</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('') ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('') ?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('') ?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('') ?>assets/css/themify-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
               <center><img src="<?php echo base_url()?>assets/img/logoo.png" height=70 ></center>
                <a href="" class="simple-text">
                    <font><b>ADMIN</b></font>
                </a>
            </div>

            <ul class="nav">
                <li  class="active">
                    <a href="<?php echo site_url('member')?>">
                        <i class="ti-user"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>

                 <li >
                    <a href="<?php echo site_url('data_login/tampil_sekolah')?>">
                        <i class="ti-user"></i>
                        <p>Data Sekolah</p>
                    </a>
                </li>
                <li  >
                    <a href="<?php echo site_url('data_login/tampil_login')?>">
                        <i class="ti-user"></i>
                        <p>Data Login</p>
                    </a>
                </li>

                <li  >
                    <a href="<?php echo site_url('data_jurusan')?>">
                        <i class="ti-user"></i>
                        <p>Data Jurusan</p>
                    </a>
                </li>
                
                <li >
                    <a href="<?php echo site_url('Cetaks')?>">
                        <i class="ti-user"></i>
                        <p>Cetak Data Sekolah</p>
                    </a>
                </li>
                
            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Data Member</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                            <img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $foto; ?>" height=25>
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><center><font>Hai, <?php echo $nisn; ?></font></center></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('member/logout'); ?>">   
                              <center><font><i class="ti-power-off"></i><b>
                              Keluar</b></font></center>
                              </a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- ISI -->


    <br><br><br><br>
   <?php $attributes = array("nama" => "member");
    echo form_open_multipart('member/update/'.$this->uri->segment(3)); ?>

    <table width=1000 border='0' height=250 align="center"> 
               <tr>
                        <td align="right" widht="20%"><b>Data Pribadi</b></td>
                    </tr>

                <tr>
                 <td align="right" width="10%"> No Ujian*</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="no_ujian" name="no_ujian" placeholder="Masukkan No Ujian" aria-describedby="basic-addon3" value="<?php echo $member[0]->no_ujian ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('no_ujian'); ?></font></span>

<td align="right" width="10%"> Agama*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" aria-describedby="basic-addon3" value="<?php echo $member[0]->agama ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('agama'); ?></font></span>


                    </td>
                    </td>

                    </tr>



                     <tr>
                 <td align="right" width="10%"> Nama Lengkap*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" aria-describedby="basic-addon3" value="<?php echo $member[0]->nama_lengkap ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_lengkap'); ?></font></span>
                    
                    
<td align="right" width="10%"> Alamat Rumah*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" placeholder="Alamat Rumah" aria-describedby="basic-addon3" value="<?php echo $member[0]->alamat_rumah ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_rumah'); ?></font></span>
                    </td>
                    </td>

                    </tr>


                     <tr>
                 <td align="right" width="10%"> Tempat Lahir*</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan TTL" aria-describedby="basic-addon3" value="<?php echo $member[0]->tempat_lahir ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('tempat_lahir'); ?></font></span>
                    


<td align="right" width="10%"> Kabupaten/Kota*</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" placeholder="Kabupaten/Kota" aria-describedby="basic-addon3" value="<?php echo $member[0]->kabupaten_kota ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('kabupaten_kota'); ?></font></span>
                    </td>
                    </td>

                    </tr>

                     <tr>
                 <td align="right" width="10%"> Tanggal Lahir*</td>
                    <td width="2%"></td>
                    <td width="35%">
                      <input type="date" format="dd/mm/yyyy" placeholder="Masukkan Tanggal Lahir" class="form-control" id="tanggal_lahir" name="tanggallahir" aria-describedby="basic-addon3" value="<?php echo $member[0]->tanggal_lahir ?>">
                        <span class="text-danger"><font color='red'><?php echo form_error('tanggal_lahir'); ?></font></span>



                 
                    </tr>


                     <tr>
                 <td align="right" width="10%"> Jenis Kelamin*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <?php
                        if ($member[0]->jenis_kelamin === 'laki-laki') {
                            echo '<input checked="" type="radio" id="tempat_lahir" name="jenis_kelamin" value="laki-laki">laki-laki';
                            echo '<input type="radio" value="perempuan" id="tempat_lahir" name="jenis_kelamin" >perempuan';
                        } else {
                           echo '<input type="radio" id="tempat_lahir" name="jenis_kelamin" placeholder="Masukkan TTL" aria-describedby="basic-addon3" value="laki-laki">laki-laki';
                            echo '<input checked="" type="radio" value="perempuan" id="tempat_lahir" name="jenis_kelamin" placeholder="Masukkan TTL" aria-describedby="basic-addon3">perempuan';
                        }
                        
                    ?>
                    
                 
                     

<td align="right" width="10%"> Provinsi</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" aria-describedby="basic-addon3">
                  <span class="text-danger" value="<?php echo $member[0]->provinsi ?>"><font color='red'><?php echo form_error('provinsi'); ?></font></span>

                     </td>
                    </td>

                    </tr>



                     <tr>
                 <td align="right" width="10%"> No Handphone</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder="No Handphone" aria-describedby="basic-addon3" value="<?php echo $member[0]->no_handphone ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('no_handphone'); ?></font></span>


                  <td align="right" width="10%"> Foto</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="file" class="span5" id="userfile" name="userfile" size="20" aria-describedby="basic-addon3">
                     <?php echo $member[0]->foto ?> ||
                    </td>
                    </td>

                    </tr>

   

<tr>
    <td align="right" width="10%"><b>Data Sekolah</b></td>
</tr>                  <tr>
                 <td align="right" width="10%"> Nama Sekolah*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah" aria-describedby="basic-addon3" value="<?php echo $member[0]->nama_sekolah ?>" >
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_sekolah'); ?></font></span>
                    </td>
                    </td>

                    </tr>

                    <tr>
                    
                   <td align="right" width="10%"> Alamat Sekolah*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah" aria-describedby="basic-addon3" value="<?php echo $member[0]->alamat_sekolah?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_sekolah'); ?></font></span>
                </td>
                    </td>
                </tr>


                 <tr>
                <td align="right" width="10%"> Telepon Sekolah</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="telepon_sekolah" name="telepon_sekolah" placeholder="No Sekolah" aria-describedby="basic-addon3" value="<?php echo $member[0]->telepon_sekolah ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('telepon_sekolah'); ?></font></span>
                    </td>
                
                    
                </tr>
          <tr>
    <td align="right" width="10%"><b>Data Orang Tua/Wali</b></td><br>
   
</tr>        
<tr> <td align="right" width="10%">Data Orang Tua</td></tr>
                 <tr>
                <td align="right" width="10%"> Nama Ayah</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" aria-describedby="basic-addon3" value="<?php echo $member[0]->nama_ayah ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_ayah'); ?></font></span>
                  
                    </td>
                
                    
                </tr>

                    
                     <tr>
                <td align="right" width="10%"> Nama Ibu</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" value="<?php echo $member[0]->nama_ibu ?>" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_ibu'); ?></font></span>
                  
                    </td>
                
                    
                </tr>


                 <tr>
                <td align="right" width="10%"> No Handphone</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" id="handphone_ortu" name="handphone_ortu" placeholder="No Handphone" aria-describedby="basic-addon3" value="<?php echo $member[0]->handphone_ortu ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('handphone_ortu'); ?></font></span>
                  
                    </td>
                
                    
                </tr>

                 <tr>
                <td align="right" width="10%"> Penghasilan Per Bulan</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="Penghasilan" aria-describedby="basic-addon3" value="<?php echo $member[0]->penghasilan ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('penghasilan'); ?></font></span>
                  
                    </td>
                
                    
                </tr>

                 <tr>
                <td align="right" width="10%"> Alamat Rumah</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="alamat_rumah_ortu" name="alamat_rumah_ortu" placeholder="Alamat Rumah" aria-describedby="basic-addon3" value="<?php echo $member[0]->alamat_rumah_ortu ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_rumah_ortu'); ?></font></span>
                    </td>
                
                    
                </tr>
 </tr>        
<tr> <td align="right" width="10%">Data Wali</td></tr>               
                <tr>
                <td align="right" width="10%"> Nama Wali</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?php echo $member[0]->nama_wali ?>" placeholder="Nama Wali" aria-describedby="basic-addon3">
                </tr>
 <tr>
                <td align="right" width="10%"> No Handphone Wali</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="handphone_wali" name="handphone_wali" placeholder="No Handphone" aria-describedby="basic-addon3" value="<?php echo $member[0]->handphone_wali ?>" >
                </tr>

                <tr>
                <td align="right" width="10%"> Penghasilan Wali</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Penghasilan" aria-describedby="basic-addon3" value="<?php echo $member[0]->penghasilan_wali ?>">
                
                    
                </tr>

<tr>
                <td align="right" width="10%"> Alamat Rumah</td>
                    <td width="2%"></td>
                    <td width="35%">
                 <input type="text" class="form-control" id="alamat_rumah_wali" name="alamat_rumah_wali" placeholder="Alamat Rumah" aria-describedby="basic-addon3" value="<?php echo $member[0]->alamat_rumah_wali ?>">
                
                    
                </tr>

                <tr> <td align="right" width="10%"><b>Data Pilihan Jurusan</b></td></tr>               
                
                    <tr>
                <td align="right" width="10%"> Pilihan 1</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="pilihan1" name="pilihan1" placeholder="Masukkan PILIHAN 1" aria-describedby="basic-addon3" value="<?php echo $member[0]->pilihan1 ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('pilihan1'); ?></font></span>
                    
                </tr>

                <tr>
                <td align="right" width="10%"> Pilihan 2</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <span>
                   <input type="text" class="form-control" id="pilihan2" name="pilihan2" placeholder="Masukkan PILIHAN 2" aria-describedby="basic-addon3" value="<?php echo $member[0]->pilihan2 ?>"></span>
                  <span class="text-danger"><font color='red'><?php echo form_error('pilihan2'); ?></font></span>
                </tr>

                <tr> <td align="right" width="10%"><b>Data Nilai</b></td></tr>
                <tr>
                <td align="right" width="10%"> Indonesia</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" id="indonesia" name="indonesia" placeholder="contoh : 7,80" aria-describedby="basic-addon3" value="<?php echo $member[0]->indonesia ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('indonesia'); ?></font></span>


                  <td align="right" width="10%"> Inggris</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" value="<?php echo $member[0]->inggris ?>" id="inggris" name="inggris" placeholder="contoh : 8,90" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('inggris'); ?></font></span>
                

                </tr>

                <tr>
                <td align="right" width="10%">Matematika</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" id="matematika" name="matematika" value="<?php echo $member[0]->matematika ?>" placeholder="contoh : 7,89" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('matematika'); ?></font></span>


                  <td align="right" width="10%"> IPA</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" class="form-control" id="ipa" name="ipa" placeholder="contoh : 9,00" aria-describedby="basic-addon3" value="<?php echo $member[0]->ipa ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('ipa'); ?></font></span>
                

                </tr>

                 <tr> <td align="right" width="10%"><b>Data Prestasi</b></td></tr>
                <tr>
                <td align="right" width="10%"> Prestasi 1</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text"  value="<?php echo $member[0]->prestasia ?>" class="form-control" id="prestasia" name="prestasia" placeholder="" aria-describedby="basic-addon3">


                  <td align="right" width="10%"> Prestasi 2</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" value="<?php echo $member[0]->prestasib ?>" id="prestasib" name="prestasib" placeholder="" aria-describedby="basic-addon3">
                

                </tr>

                <tr>
                <td align="right" width="10%">Prestasi 3</td>
                    <td width="2%"></td>
                    <td width="35%">
                   <input type="text" class="form-control" id="prestasic" name="prestasic" placeholder="" aria-describedby="basic-addon3" value="<?php echo $member[0]->prestasic ?>">


                  <td align="right" width="10%"> Prestasi 4</td>
                    <td width="2%"></td>
                    <td width="35%">
                  <input type="text" value="<?php echo $member[0]->prestasid ?>" class="form-control" id="prestasid" name="prestasid" placeholder="" aria-describedby="basic-addon3">
                

                </tr>
 

                <tr>
                    <td></td>
                    <td></td>
                    <td><br>
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>       
    </table>
    <?php echo form_close(); ?>     
</div><!-- /.container -->

<!-- ISI TTP -->

        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">A.A.D | Polinema</a>
                </div>
            </div>
        </footer>

    </div>
</div>

 <!--   Core JS Files   -->
    <script src="<?php echo base_url('') ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('') ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('') ?>assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('') ?>assets/js/demo.js"></script>

    <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>

</body>

   

</html>

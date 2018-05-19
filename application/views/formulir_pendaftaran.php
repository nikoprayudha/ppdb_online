<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/logo2.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo2.png">
  <title>Home || PPDB SE-Indonesia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style> 
input[type=text], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><font>Akun Siswa</font></b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
         
            <span class="sr-only"><font>Hai, <?php echo $nisn; ?></font></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             <li class="dropdown messages-menu">
                <a href="<?php echo site_url('user')?>" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="label label-success">HOME</span>
                </a>
                </li>
            </ul>

          </div>


          </div>

        </nav>


        </header>





          <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
           <div class="pull-left image">
             <center>  <img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $foto; ?>" height=50> </center>
            </div>
            </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="active treeview">

              <a href="<?php echo site_url('user')?>">
                <i class="fa fa-dashboard"></i> <span>Beranda</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            
            <li class="active treeview">
              <a href="<?php echo site_url('informasi_pendaftaran')?>">
                <i class="fa fa-laptop"></i> <span>Informasi Pendaftaran</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Isi Formulir Pendaftaran</span>
                <span class="label label-primary pull-right">5</span>
              </a>
              <ul class="treeview-menu">
                 <li><a href="<?php echo site_url('pendaftaran')?>"<i class="fa fa-edit"></i>  Formulir Pendaftaran</a></li>
                
              </ul>
            </li>

            <li class="active treeview">
              <a href="<?php echo site_url('Cetak_Kartu')?>"
                <i class="fa fa-book"></i> <span>Cetak Kartu Pendaftaran</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
          
          <li class="active treeview">
              <a href="<?php echo site_url('Lihat_rangking')?>"
                <i class="fa fa-calendar"></i> <span>Lihat Rangking</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
               
              </ul>
            </li>

           <!--  <li class="active treeview">
              <a href="<?php echo site_url('Cetak_kartu')?>"
                <i class="fa fa-book"></i> <span>Cetak Kartu Pendaftaran</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
          
          <li class="active treeview">
              <a href="<?php echo site_url('kontak_kami')?>"
                <i class="fa fa-calendar"></i> <span>Kontak Kami</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li> -->
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<div class ="content-wrapper">

 <?php echo form_open_multipart('pendaftaran/create'); ?>
<?php validation_errors() ?>
<table width=1000 border='0' height=250 align="left" > 
    <section class="content">
          <!-- Info boxes -->
          <div class="row" >
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                
                <div class="info-box-content">
                  <span class="info-box-text"><b><big><h1>Formulir Pendaftaran</h1></big></b></span>
                 
                <span class="info-box-text"><b><big><h2>Data Pribadi</h2></big></b></span>
                <div class="info-box" >
                 <div class="info-box-content">
                 
                  <span class="info-box-text">No_Ujian </span>
                   <input type="text" class="form-control" id="no_ujian" name="no_ujian" placeholder="Masukkan No Ujian" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('no_ujian'); ?></font></span>


                <span class="info-box-text">NAMA LENGKAP </span>
                   <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_lengkap'); ?></font></span>
                    
                  <span class="info-box-text">TEMPAT LAHIR </span>
                   <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan TTL" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('tempat_lahir'); ?></font></span>

                  <span class="info-box-text">TANGGAL LAHIR </span>
                   <input type="date" format="dd/mm/yyyy" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('tanggal_lahir'); ?></font></span>

                  <span class="info-box-text">JENIS KELAMIN </span>
                   <input type="radio" class="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan" placeholder="Jenis Kelamin" aria-describedby="basic-addon3">perempuan
                   <input type="radio" class="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki" placeholder="Jenis Kelamin" aria-describedby="basic-addon3">laki-laki

                  <span class="text-danger"><font color='red'><?php echo form_error('jenis_kelamin'); ?></font></span>

                  <span class="info-box-text">AGAMA</span>
                  <div class="col-75">
                   <select class="form-control" name="agama">
                      <option value="islam" selected>Islam</option>
                      <option value="kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="budha">budha</option>
                  </select>
                  </div>
<br><br><br><br>
                  <span class="info-box-text">ALAMAT RUMAH </span>
                   <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" placeholder="Alamat Rumah" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_rumah'); ?></font></span>

                  <span class="info-box-text">KABUPATEN/KOTA </span>
                   <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" placeholder="Kabupaten/Kota" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('kabupaten_kota'); ?></font></span>

                  <span class="info-box-text">PROVINSI </span>
                   <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('provinsi'); ?></font></span>

                  <span class="info-box-text">NO HANDPHONE </span>
                   <input type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder="No Handphone" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('no_handphone'); ?></font></span>
                  
                  <SPAN class="info-box-text">Foto</SPAN>
                  <input type="file" class="span5" id="userfile" name="userfile" size="20" aria-describedby="basic-addon3">
                  <br>
                  <span class="info-box-text">Centang Jika Luar Provinsi</span>
                  <input type="checkbox" name="file" value="luar">Luar Provinsi

                 
                  
          
                        

                        <div class="col-md-3 col-sm-6 col-xs-12">
                 
                <span class="info-box-text"><b><big><h2>Data Asal Sekolah</h2></big></b></span>
            
                <span class="info-box-text">NAMA SEKOLAH </span>
                   <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_sekolah'); ?></font></span>
                    
                  <span class="info-box-text">ALAMAT SEKOLAH </span>
                   <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_sekolah'); ?></font></span>

                  <span class="info-box-text">NO TELEPON SEKOLAH </span>
                   <input type="text" class="form-control" id="telepon_sekolah" name="telepon_sekolah" placeholder="No Sekolah" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('telepon_sekolah'); ?></font></span>
</div>


                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <span class="info-box-text"><b><big><h2>Data Orang Tua/Wali</h2></big></b></span>
                        <span class="info-box-text"><b><big><h3>Data Orang Tua</h3></big></b></span>
                <span class="info-box-text">NAMA AYAH </span>
                   <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_ayah'); ?></font></span>
                    
                  <span class="info-box-text">NAMA IBU </span>
                   <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_ibu'); ?></font></span>

                  <span class="info-box-text">NO HANDPHONE </span>
                   <input type="text" class="form-control" id="handphone_ortu" name="handphone_ortu" placeholder="No Handphone" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('handphone_ortu'); ?></font></span>

                  <span class="info-box-text">PENGHASILAN RATA-RATA PER BULAN(RP.)</span>
                   <input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="Penghasilan" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('penghasilan'); ?></font></span>
                    
                    <span class="info-box-text">ALAMAT RUMAH </span>
                   <input type="text" class="form-control" id="alamat_rumah_ortu" name="alamat_rumah_ortu" placeholder="Alamat Rumah" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_rumah_ortu'); ?></font></span>

                   <span class="info-box-text"><b><big><h3>Data Wali</h3></big></b></span>
                   <span class="info-box-text">NAMA WALI </span>
                   <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Nama Wali" aria-describedby="basic-addon3">

                  <span class="info-box-text">NO HANDPHONE </span>
                   <input type="text" class="form-control" id="handphone_wali" name="handphone_wali" placeholder="No Handphone" aria-describedby="basic-addon3">
                  
                  <span class="info-box-text">PENGHASILAN RATA-RATA PER BULAN(RP.)</span>
                   <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Penghasilan" aria-describedby="basic-addon3">
                 
                    <span class="info-box-text">ALAMAT RUMAH </span>
                   <input type="text" class="form-control" id="alamat_rumah_wali" name="alamat_rumah_wali" placeholder="Alamat Rumah" aria-describedby="basic-addon3">
                  
</div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                         <span class="info-box-text"><b><big><h2>Data Sekolah Yang Dipilih</h2></big></b></span>
                         <span class="info-box-text">PILIHAN </span>
                   <select class='form-control' id='pilihan1' name='pilihan1'>
                                <option value='0'>--pilih--</option>
                                <?php 
                                foreach ($jurusan_list as $prov) {
                                echo "<option value='$prov[id_sekolah]'>$prov[nama_sekolah]</option>";
                                }
                                ?>
                   </select>             
                  <span class="text-danger"><font color='red'><?php echo form_error('pilihan1'); ?></font></span>
                    
                 
</div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                         <span class="info-box-text"><b><big><h2>Data Nilai</h2></big></b></span>
                         <span class="info-box-text">BAHASA INDONESIA</span>
                   <input type="text" class="form-control" id="indonesia" name="indonesia" placeholder="contoh : 7,80" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('indonesia'); ?></font></span>
                    
                  <span class="info-box-text">BAHASA INGGRIS </span>
                   <input type="text" class="form-control" id="inggris" name="inggris" placeholder="contoh : 8,90" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('inggris'); ?></font></span>

                  <span class="info-box-text">MATEMATIKA</span>
                   <input type="text" class="form-control" id="matematika" name="matematika" placeholder="contoh : 7,89" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('matematika'); ?></font></span>

                  <span class="info-box-text">IPA </span>
                   <input type="text" class="form-control" id="ipa" name="ipa" placeholder="contoh : 9,00" aria-describedby="basic-addon3">
                  <span class="text-danger"><font color='red'><?php echo form_error('ipa'); ?></font></span>

</div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                         <span class="info-box-text"><b><big><h2>Data Nilai</h2></big></b></span>
                         <span class="info-box-text">PRESTASI 1</span>
                   <input type="text" class="form-control" id="prestasia" name="prestasia" placeholder="" aria-describedby="basic-addon3">
                  
                    
                  <span class="info-box-text">PRESTASI 2 </span>
                   <input type="text" class="form-control" id="prestasib" name="prestasib" placeholder="" aria-describedby="basic-addon3">
                
                 <!-- <span class="info-box-text">PRESTASI 3</span>
                   <input type="text" class="form-control" id="prestasic" name="prestasic" placeholder="" aria-describedby="basic-addon3">
                
                  <span class="info-box-text">PRESTASI 4 </span>
                   <input type="text" class="form-control" id="prestasid" name="prestasid" placeholder="" aria-describedby="basic-addon3">-->
               
</div>
</div>
</div>
                        
                  
                  <div class="col-md-3 col-sm-6 col-xs-12">
                  <span>
                  <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
                        </span>
                        </div>

                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
           
          
          </div><!-- /.row -->

</section>
</table>
    <?php echo form_close(); ?>    
      </div>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('') ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('') ?>assets/css/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('') ?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('') ?>assets/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('') ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('') ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url('') ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url('') ?>assets/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('') ?>assets/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('') ?>assets/dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>

  </body>
</html>

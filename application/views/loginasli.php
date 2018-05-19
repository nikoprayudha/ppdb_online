<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/logo2.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo2.png">



    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home| Pendaftaran Sekolah</title>
    <!-- core CSS -->
    <link href="<?php echo base_url('') ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
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

</head><!--/head-->


<body id="home" class="homepage" style="background-image: linear-gradient(to bottom, #051937, #053e61, #00678a, #0f92ae, #39c0cd);">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner" style="background-color:#011430">
            <div class="container" style="background: rgba(212,228,239,1);">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand"> <img src="<?php echo base_url()?>assets/images/logosekolah.png" alt="logo"> </a>
                 
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class=""><a href="#Informasi">Informasi</a></li>
                        <li class="scroll"><a href="#jadwal">Jadwal</a></li>
                        <!-- <li class="scroll"> <a href="<?php echo site_url('login/create')?>">Daftar</a></li>
                       <li class="scroll"> <a href="<?php echo site_url('login/create_sekolah')?>">Daftar Sekolah</a></button></li>
                        <li class="scroll"><a href="#login">Login</a></li> -->
                        
                                               
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo site_url('login/create_sekolah')?>">Sekolah</a></li>
                                                <li><a href="<?php echo site_url('login/create')?>">Siswa</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->


<br>
<br>
<div class="container"  style="background: rgba(210,238,218,1); ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url()?>assets/images/slider/9.jpg" alt="Los Angeles" style="width:150%;">
        <div class="carousel-caption">
          <h3>SMAN TERBAIK</h3>
          <p>Bersama Menuju Masa Depan!</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>assets/images/slider/10.jpg" alt="Chicago" style="width:150%;">
        <div class="carousel-caption">
          <h3>SMKN TERBAIK</h3>
          <p>Bersama Menuju Masa Depan!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url()?>assets/images/slider/11.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>SMAN DAN SMKN</h3>
          <p>Se INDONESIA!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<section id="Informasi" class="wow fadeIn">
        <div class="container" style=" background: rgba(255,255,255,0.9);">
            <div class="row">
                
                    <h2 class="section-title text-center wow fadeInDown">Informasi PPDB Se-INDONESIA Tahun Ajaran 2018/2019</h2>
                    <p class="text-center wow fadeInDown"><!-- Dalam rangka memberikan kesempatan yang seluas-luasnya kepada warga negara Indonesia khususnya Jawa Timur usia sekolah untuk memperoleh layanan pendidikan yang bermutu, Dinas Pendidikan Provinsi Jawa Timur menyelenggarakan penerimaan peserta didik baru secara obyektif, transparan, akuntabel, dan tidak diskriminatif. Untuk mewujudkan  kegiatan  tersebut, maka Dinas Pendidikan Provinsi Jawa Timur melaksanakan amanah Undang-Undang Nomor 23 Tahun 2014 tentang manajemen pengelolaan SMA dan SMK dengan melaksanakan Penerimaan Peserta Didik Baru (PPDB) Online SMA/SMK/SLB Negeri tahun pelajaran 2017/2018 yang telah menjadi kewenangan Pemerintah Provinsi.

Pola PPDB Online ini telah menjadi kebutuhan Pemerintah Provinsi karena untuk memberikan layanan pendidikan yang mudah dalam penyelenggaraan PPDB bagi Sekolah Menengah Atas (SMA), Sekolah Menengah Kejuruan (SMK), dan Sekolah Luar Biasa Negeri di wilayah Provinsi Jawa Timur.

Penerimaan Peserta Didik Baru di wilayah Provinsi Jawa Timur menggunakan 3 (tiga) sistem, yaitu sistem online, sistem semi online, dan sistem offline. Sistem semi online dan sistem offline disediakan khusus untuk seleksi penerimaan peserta didik baru (PPDB) jalur prestasi, jalur mitra warga, jalur bidik misi, dan jalur inklusi. Mudah-mudahan pelaksanaan Penerimaan Peserta Didik Baru (PPDB) di Provinsi Jawa Timur berjalan dengan lancar dan sukses.  -->
SIAP PPDB Real TIme Online, adalah sebuah sistem yang dirancang untuk melakukan otomasi seleksi penerimaan siswa baru (PPDB), mulai dari proses pendaftaran,proses seleksi hingga pengumuman hasil seleksi, yang dilakukan secara online dan berbasis waktu nyata (realtime).
                    
                    
                    </p>
                    <!-- <p>
                        <p>Tujuan</p>
Secara umum tujuan penerapan SIAP PPDB Online, antara lain:
Meningkatkan mutu layanan pendidikan.
Menciptakan sistem penerimaan siswa baru yang terintegrasi, akurat dan transparan
Melaksanakan penerimaan siswa baru dengan lebih praktis dan efisien.
Menyediakan basis data sekolah yang akurat.
Memberi fasilitas akses informasi bagi masyarakat dengan cepat, mudah dan akurat.
                    </p> -->

                   
                
            </div>
        </div>
    </section><!--/#cta-->
    <br>
    <br>

<section id="jadwa" class ="section-title text-center wow fadeInDown">
        <div class="container" style=" background: rgba(255,255,255,0.9); border-radius:10px;">
            <div class="row">
                <div class="col-sm-6">
                <h2>TUJUAN</h2>
                <h3>Secara umum tujuan penerapan SIAP PPDB Online, antara lain:</h3>

                
                <div class="media service-box wow fadeInLeft">
                        <div class="pull-left">
                            <i class="fa "></i>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Melaksanakan penerimaan siswa baru dengan lebih praktis dan efisien</h5>
                        </div>
                    </div>

                 <div class="media service-box wow fadeInLeft">
                        <div class="pull-left">
                            <i class="fa "></i>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Meningkatkan mutu layananan pendidikan agar lebih berkembang lagi</h5>
                        </div>
                    </div>

                <div class="media service-box wow fadeInLeft">
                        <div class="pull-left">
                            <i class="fa "></i>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Menciptakan sistem penerimaan siswa baru yang terintegrasi dan akurat</h5>
                        </div>
                    </div>

                <div class="media service-box wow fadeInLeft">
                        <div class="pull-left">
                            <i class="fa "></i>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Memberi fasilitas akses informasi bagi masyarakat dengan cepat</h5>
                        </div>
                    </div>


                </div>
                 <div class="col-sm-6">
                    <h2>MANFAAT DAN KEUNTUNGAN</h2>
                    <H3>Bagi Dinas Pendidikan dan Sekolah:</H3><br>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">

                            <h5 class="media-heading">Efisiensi pembiayaan</h5>
                            
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Meningkatkan reputasi sekolah</h5>
                            
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Mengurangi resiko terjadinya KKN </h5>
                            
                        </div>
                    </div>

                    
                </div>
            </div>

        </div>
        

        </section>


<br>
<br>

    <section id="jadwal" class ="section-title text-center wow fadeInDown">
        <div class="container" style=" background: rgba(255,255,255,0.9);  border-radius:10px;">
            <!--<div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Awesome Features</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>-->

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h2>Daftar Sementara Sekolah </h2>
                    <p>Para Peserta Didik Baru yang sudah mengisi form yang sudah tersedia dapat melihat data sudah masuk atau tidak di dalam data PPDB</p>
                    <a class="btn btn-lg" href="<?php echo site_url('Cetaks')?>">Download</a>

                    <!-- <img class="img-responsive" src="<?php echo base_url()?>assets/images/main-feature.png" alt="">-->
                </div>
                
                 <br>
                 <br>
                <div class="col-sm-6">
                    
                    <div class="media service-box wow fadeInRight">
                        
                        <div class="media-body">

                            <a class="btn btn-lg">Jadwal</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading">Pendaftaran Sekolah</h4>
                            <p>14 juni 2018 - 17 september 2018</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pendaftaran Siswa</h4>
                            <p>17 november 2018 - 21 november 2018</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pengumuman </h4>
                            <p>17 Desember 2018</p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>







<!-- <section id="biaya">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Biaya</h2>
                <p class="text-center wow fadeInDown">Biaya tersebut sudah termasuk untuk: OSIS, Praktikum, Study Tour Ekstrakurikuler, dan Tes Semester.</p>
            </div>

<table border=0 width=450 height=450 align="left" cellspacing="0" cellpadding="0" class="section-title text-center wow fadeInDown">
        <tr>
            <td bgcolor="#EEEEEE" height=200>
            <br><br>
            <center><h2 class="section-title text-center wow fadeInDown">Biaya Pendaftaran</h2></center>
                <center>
                <font class="simple-text" size=4><b>Biaya sebesar:</b></font><br><br><br>

                <font class="simple-text" color="#999999"><b><big>Rp 100.000,00 (Seratus Ribu Rupiah)<br>Biaya Pendaftaran</big></b></font><br><br><br>
                
                <font class="simple-text" color="#999999"><b><big>Dibayarkan Ke Nomor Rekening : <br>9.3509.928.0000.11100</big></b></font><br><br><br>
                
                <font class="simple-text" color="#999999"><b><big>BANK BTN a.n <br>TS-SMK TELKOM MALANG</big></b></font><br><br><br>
                
                <font class="simple-text" color="#999999"><b><big>Rp 150.000,00 (Seratus Lima Puluh Ribu Rupiah)<br>Biaya Tes Kesehatan</big></b></font><br><br><br>
                
                <font class="simple-text" color="#999999"><b><big>Rp 450.000,00 (Empat Ratus Ribu Rupiah)<br>Biaya Pendidikan per Bulan</big></b></font><br><br><br>

                 <font class="simple-text" color="#999999"><b><big>Dibayarkan paling lambat <br>tanggal 10 setiap bulan</big></b></font><br><br><br>
                </center>
            </td>
        </tr>
        
                </table>
    


<table border=0 width=450 height=450 align="right" cellspacing="0" cellpadding="0" class="section-title text-center wow fadeInDown">
        <tr>
            <td bgcolor="#EEEEEE" height=200>
            <br><br>
            <center><h2 class="section-title text-center wow fadeInDown">Rincian Biaya Masuk</h2></center>
                <center>
                <font class="simple-text" size=4><b> Uang Gedung Kuliah(Dapat Diangsur 3x)</b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>Rp 12.000.000,00 <br>MOS</big></b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>Rp 200.000,00<br>Pakaian Seragam (7 Pcs)</big></b></font><br><br><br>
               
                <font class="simple-text" color="#999999"><b><big>Rp 100.000,00<br>Asuransi</big></b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>Rp 450.000,00<br>SPP Bulan Juli 2017</big></b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>Total<br>Rp 14.000.000,00</big></b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big><br></big></b></font><br><br><br>
                </center>
            </td>
        </tr>
        
                </table>
        </div>
    </section><!/#pricing-->

<br>
<br>

<!-- <section id="login">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Login Siswa</h2>
                <p class="text-center wow fadeInDown">Lakukan daftar terlebih dahulu jika anda belum mempunyai Akun untuk login</p>
            </div>
        <?php echo form_open_multipart('login/login_process'); ?>
    <table border=0 width=350 height=420 align="center" cellspacing="0" cellpadding="0" class="section-title text-center wow fadeInDown">
        <tr>
            <td bgcolor="#EEEEEE" height=150>
            <br><br>
                <center><img src="<?php echo base_url()?>assets/img/logo2.png" height=100><br>
                <font class="simple-text" size=4><b>Login</b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>SILAHKAN LOGIN</big></b></font>
                </center>
            </td>
        </tr>
        <tr>
           <td bgcolor="#EEEEEE" height=180>
                <table width=90% align="center" border="0">
                    <tr>
                        <td>
                            <input type="text" class="form-control" width="50%"
                            id="nisn"  name="nisn" value="<?php echo set_value('nisn');?>" placeholder="Masukkan NISN" aria-describedby="basic-addon3"> <?php echo form_error('username');?>
                        </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                     <tr>
                         <td>
                         <input type="password" class="form-control" width="50%" id="password" name="password" placeholder="Masukkan Password" value="">
                         </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                </table>
           </td>
        </tr>
        <tr>
            <td bgcolor="#EEEEEE" height="50" align="center">
                <button id="submit-button" type="submit" class="btn " name="action" value="login">Login</button>
                
            </td>
        </tr>
    </table>
    </div>
    <?php echo form_close(); ?>   

       </section>
 -->
<!-- <section id="login">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Login Sekolah</h2>
                
            </div>
        <?php echo form_open_multipart('login/login_process_sekolah'); ?>
    <table border=0 width=350 height=420 align="center" cellspacing="0" cellpadding="0" class="section-title text-center wow fadeInDown">
        <tr>
            <td bgcolor="#EEEEEE" height=150>
            <br><br>
                <center><img src="<?php echo base_url()?>assets/img/logo2.png" height=100><br>
                <font class="simple-text" size=4><b>Login</b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>SILAHKAN LOGIN</big></b></font>
                </center>
            </td>
        </tr>
        <tr>
           <td bgcolor="#EEEEEE" height=180>
                <table width=90% align="center" border="0">
                    <tr>
                        <td>
                            <input type="text" class="form-control" width="50%"
                            id="id_sekolah"  name="id_sekolah" placeholder="Masukkan Id Sekolah" aria-describedby="basic-addon3"> <?php echo form_error('password');?>
                        </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                     <tr>
                         <td>
                         <input type="password" class="form-control" width="50%" id="password" name="password" placeholder="Masukkan Password" value="">
                         </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                </table>
           </td>
        </tr>
        <tr>
            <td bgcolor="#EEEEEE" height="50" align="center">
                <button id="submit-button" type="submit" class="btn " name="action" value="login">Login</button>
                
            </td>
        </tr>
    </table>
    </div>
    <?php echo form_close(); ?>   

       </section>




 -->

<br>
<br>
<br>
<br>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 Your Company. Designed by <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Muhammad Faizin</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    




</body>
<script src="<?php echo base_url('') ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?php echo base_url('') ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/mousescroll.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/smoothscroll.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/main.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/demo.js"></script>
</html>
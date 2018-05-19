<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/logo2.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo2.png">
  <title>Home || PPDB SE-Indonesia</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('') ?>assets/eNno/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('') ?>assets/eNno/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url('') ?>assets/eNno/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('') ?>assets/eNno/css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/eNno/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/eNno/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/eNno/css/set1.css" />
  <link href="<?php echo base_url('') ?>assets/eNno/css/overwrite.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/eNno/css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: eNno
    Theme URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.html"><span>PPDB</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#Home">Home</a></li>
            <li role="presentation"><a href="#Informasi">Informasi</a></li>
           <li role="presentation"><a href="#Jadwal">Jadwal</a></li>
            <li role="presentation"><a href="#Galleries">Galeri</a></li>
             <li role="presentation"><a href="<?php echo site_url('login/Berita')?>">Blog</a></li>
            <ul class="nav navbar-tabs navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" role ="presentation" data-toggle="dropdown"><font color="white">KATEGORI</font> <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo site_url('login/create_sekolah')?>">Sekolah</a></li>
                                                <li><a href="<?php echo site_url('login/create')?>">Siswa</a></li>
                                                <li><a href="<?php echo site_url('Cetaks')?>">Cetak Daftar Sekolah</a></li>
                                            </ul>
                                        </li>
                                    </ul>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <div id="Home" class="container">
    <div class="row">
      <div class="slider">
        <div class="img-responsive">
          <ul class="bxslider">
            <li><img src="<?php echo base_url('') ?>assets/eNno/img/bg1.jpg" alt="" /></li>
            <li><img src="<?php echo base_url('') ?>assets/eNno/img/bg2.jpg" alt="" /></li>
            <li><img src="<?php echo base_url('') ?>assets/eNno/img/bg3.jpg" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="Informasi" class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2>PPDB Online</h2>
          <p>SIAP PPDB Real TIme Online<br> adalah sebuah sistem yang dirancang untuk melakukan otomasi seleksi penerimaan siswa baru (PPDB)<br> mulai dari proses pendaftaran,proses seleksi hingga pengumuman hasil seleksi, yang dilakukan secara online dan berbasis waktu nyata (realtime)</p>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <div id="Jadwal" class="container">
    <div class="row">
      <div class="box">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Pendaftaran Sekolah</h4>
            <div class="icon">
              <i class="fa fa-heart-o fa-3x"></i>
            </div>
            <p>14 juni 2018 - 17 september 2018</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Pendaftaran Siswa</h4>
            <div class="icon">
              <i class="fa fa-desktop fa-3x"></i>
            </div>
            <p>17 november 2018 - 21 november 2018</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
            <h4>Pengumuman</h4>
            <div class="icon">
              <i class="fa fa-location-arrow fa-3x"></i>
            </div>
            <p>17 Desember 2018</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div id="Galleries" class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2>Galeri</h2>
          <p>Setiap Tampilan Siswa dan User<br> Memiliki tampilan yang berbeda beda <br>
          </p>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="grid">
      <figure class="effect-zoe">
        <img src="<?php echo base_url('') ?>assets/eNno/img/03.jpg" alt="img25" />
        <figcaption>
          <h2>Home <span>Sekolah</span></h2>
          <p class="icon-links">
            <a href="#"><span class="icon-heart"></span></a>
            <a href="#"><span class="icon-eye"></span></a>
            <a href="#"><span class="icon-paper-clip"></span></a>
          </p>
         <!--  <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
        </figcaption>
      </figure>
      <figure class="effect-zoe">
        <img src="<?php echo base_url('') ?>assets/eNno/img/04.jpg" alt="img26" />
        <figcaption>
          <h2>Home <span>Siswa</span></h2>
          <p class="icon-links">
            <a href="#"><span class="icon-heart"></span></a>
            <a href="#"><span class="icon-eye"></span></a>
            <a href="#"><span class="icon-paper-clip"></span></a>
          </p>
          <!-- <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
        </figcaption>
      </figure>
    </div>
  </div>

  <div class="content">
    <div class="grid">
      <figure class="effect-zoe">
        <img src="<?php echo base_url('') ?>assets/eNno/img/05.jpg" alt="img27" />
        <figcaption>
          <h2>Tampilan <span>Sekolah</span></h2>
          <p class="icon-links">
            <a href="#"><span class="icon-heart"></span></a>
            <a href="#"><span class="icon-eye"></span></a>
            <a href="#"><span class="icon-paper-clip"></span></a>
          </p>
          <!-- <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
        </figcaption>
      </figure>
      <figure class="effect-zoe">
        <img src="<?php echo base_url('') ?>assets/eNno/img/06.jpg" alt="img30" />
        <figcaption>
          <h2>Tampilan <span>Siswa</span></h2>
          <p class="icon-links">
            <a href="#"><span class="icon-heart"></span></a>
            <a href="#"><span class="icon-eye"></span></a>
            <a href="#"><span class="icon-paper-clip"></span></a>
          </p>
         <!--  <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
        </figcaption>
      </figure>
    </div>
  </div>

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.html"><h1>SELAMAT DATANG di situs SIAP Penerimaan Peserta Didik Baru (PPDB) Online periode 2017/2018</h1></a>
            <p>Situs ini dipersiapkan sebagai pusat informasi dan pengolahan seleksi data siswa peserta PPDB periode 2017/2018 secara online real time process. Informasi lengkap seputar pelaksanaan PPDB akan di update di situs ini. Bagi masyarakat dan calon siswa dapat memanfaatkan fasilitas Pesan Anda di situs ini untuk bantuan informasi lebih lanjut. Bagi anda calon peserta, harap membaca Aturan dan Prosedur pendaftaran dengan seksama sebelum melakukan proses pendaftaran.
            </p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Tujuan website PPDB</h3>
            <ul>
              <li><a href="#">Melaksanakan penerimaan siswa baru dengan lebih praktis dan efisien</a></li>
              <li><a href="#">Meningkatkan mutu layananan pendidikan agar lebih berkembang lagi</a></li>
              <li><a href="#">Menciptakan sistem penerimaan siswa baru yang terintegrasi dan akurat</a></li>
              <li><a href="#">Memberi fasilitas akses informasi bagi masyarakat dengan cepat</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Kontak Kami</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i> PPDB@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
            <p><i class="fa fa-home"></i> PPDB | PO Box 23456 Little Stund City St, Malang <br> Indonesia</p>
          </div>
        </div>
      </div>
    </div>


    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; eNno Theme. All Rights Reserved
            <div class="credits">
              <!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eNno
              -->
              <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>

      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url('') ?>assets/eNno/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('') ?>assets/eNno/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/eNno/js/wow.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/eNno/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url('') ?>assets/eNno/js/jquery.isotope.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/eNno/js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('') ?>assets/eNno/js/fliplightbox.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/eNno/js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>

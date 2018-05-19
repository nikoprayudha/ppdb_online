<!DOCTYPE html>
<html lang="en">

  <head>

     <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/logo2.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo2.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISWA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('') ?>assets/tampilanSekolah/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('') ?>assets/tampilanSekolah/css/shop-item.css" rel="stylesheet">

  </head>

  <body>
 <!-- -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Siswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"  href="<?=base_url()?>index.php/login/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Hai</h1>
          <div class="list-group">
            <a href="#home" class="list-group-item active">Home</a>
            <a href="#daftar" class="list-group-item">Daftar</a>
            <a href="#login" class="list-group-item">Login</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <!-- <section id="home">
 -->        <div id="home" class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="<?php echo base_url()?>assets/img/bgsiswa.jpg" alt="">
           <!--  <div class="card-body">
              <h3 class="card-title">Product Name</h3>
              <h4>$24.99</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div> -->
          </div>
          <!-- </section> -->
          <!-- /.card -->
            
          <div id="daftar" class="card card-outline-secondary my-4">
             <?php $attributes = array("username" => "member","nisn" => "member");
    echo form_open_multipart('login/create'); ?>
     <div class="card-header">
              Registrasi Siswa
            </div>
    <table border=0 width=350 height=200 align="center" cellspacing="0" cellpadding="0">
        <tr>
            <td bgcolor="#EEEEEE" height=200>
            <br><br>
                <center><img src="<?php echo base_url()?>assets/img/logo2.png" height=100><br>
                <font class="simple-text" size=4><b>Daftar</b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>Silahkan Daftar</big></b></font>
                </center>
            </td>
        </tr>

     
        <tr>
           <td bgcolor="#EEEEEE" height=180>
                <table width=90% align="center" border="0">
                    <tr>
                    <td align="center" > NISN
                     <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" aria-describedby="basic-addon3">
                     <span class="text-danger"><font color='red'><?php echo form_error('nisn'); ?></font></span>
                    </td>
                    
                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> username
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan username" name="username"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('username'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Foto
                        <input type="file" class="span5" id="userfile" name="userfile" size="20" aria-describedby="basic-addon3">
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
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="daftar">Daftar</button>
                <a href="<?=base_url()?>index.php/login/"><button type="submit" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button></a>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>   

              <!-- <a class="btn btn-success">Daftar</a> -->
            
          </div>
          <!-- /.card -->
         <div id="login" class="card card-outline-secondary my-4">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              
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

            </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->
        
      </div>



    </div>


      </body>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('') ?>assets/tampilanSekolah/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/tampilanSekolah/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</html>

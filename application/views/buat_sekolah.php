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

    <title>SEKOLAH</title>

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
        <a class="navbar-brand" href="#">Start Sekolah</a>
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
            <img class="card-img-top img-fluid" src="<?php echo base_url()?>assets/img/bgsekolah.jpg" alt="">
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
            <?php $attributes = array("nama_sekolah" => "sekolah","id_sekolah" => "sekolah");
    echo form_open_multipart('login/create_sekolah'); ?>
            <div class="card-header">
              Mendaftarkan Sekolah
            </div>
            <div class="card-body">
              
				
				
    
    <table border=0 width=350 height=620 align="center" cellspacing="0" cellpadding="0">
       

     
        <tr>
           <td bgcolor="#EEEEEE" height=180>
                <table width=90% align="center" border="0">
                    <tr>
                    <td align="center" > Id Sekolah
                     <input type="text" class="form-control" id="id_sekolah" name="id_sekolah" placeholder="id" aria-describedby="basic-addon3" readonly="" value="<?php echo 'SEK_'.$kode ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('id_sekolah'); ?></font></span>
                    </td>
                    
                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Password
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Password" name="password"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('password'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Nama Sekolah
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nama Sekolah" name="nama_sekolah"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('nama_sekolah'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Jenis Sekolah
                    <!-- <input class="form-control" id="new-pass-control" placeholder="Masukkan Jenis Sekolah" name="jenis_sekolah"  type="text" value="" > -->
                    <select class='form-control' id='pilihan1' name='pilihan1'>
                                <option value='0'>--pilih--</option>
                                <?php 
                                foreach ($jurusan_list as $prov) {
                                echo "<option value='$prov[id_pilihan]'>$prov[nama_pilihan]</option>";
                                }
                                ?>
                   </select>   

                    <span class="text-danger"><font color='red'><?php echo form_error('jenis_sekolah'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Alamat Sekolah
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Alamat Sekolah" name="alamat_sekolah"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('alamat_sekolah'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Provinsi Sekolah
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Provinsi Sekolah" name="provinsi"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('provinsi'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Kuota
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Kuota Sekolah" name="kuota"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kuota'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> No Tlp Sekolah
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan No Tlp Sekolah" name="no_tlp"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('no_tlp'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Penanggung Jawab
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Penanggung Jawab Sekolah" name="penanggung_jawab"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('penanggung_jawab'); ?></font></span>
                    </td>

                    <tr>
                        <td height=10></td>
                    </tr>

                    <td align="center" width="13%"> Foto Sekolah
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
                <button id="submit-button" type="submit" class="btn btn-success" name="action" value="daftar">Daftar</button>
                
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?> 

              <!-- <a class="btn btn-success">Daftar</a> -->
            </div>
          </div>
          <!-- /.card -->
         <div id="login" class="card card-outline-secondary my-4">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              
              <?php echo form_open_multipart('login/login_process_sekolah'); ?>
    <table border=0 width=350 height=420 align="center" cellspacing="0" cellpadding="0" class="section-title text-center wow fadeInDown">
        
        <tr>
           <td bgcolor="#EEEEEE" height=100>
                <table width=90% align="center" border="0">
                    <tr>
                        <td
                        align="center" width="13%"> Id Sekolah
                            <input type="text" class="form-control" width="50%"
                            id="id_sekolah"  name="id_sekolah" placeholder="Masukkan Id Sekolah" aria-describedby="basic-addon3"> <?php echo form_error('password');?>
                        </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                     <tr>
                         <td
                          align="center" width="13%"> Password
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
                <button id="submit-button" type="submit" class="btn btn-success" name="action" value="login">Login</button>
                
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

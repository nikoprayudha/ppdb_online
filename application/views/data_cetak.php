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
                <a href="<?php echo site_url('user/logout'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="label label-success">LOGOUT</span>
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
            <li class="">

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
                 <li><a href="<?php echo site_url('formulir_pendaftaran')?>"<i class="fa fa-edit"></i>  Formulir Pendaftaran</a></li>
                
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
        </section>
        <!-- /.sidebar -->
      </aside>

<div class ="content-wrapper">
<?php echo form_open_multipart('cetak_kartu/createkartu'); ?>
<?php validation_errors() ?>
    <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                
                <div class="info-box-content">
                <center>
                  <span class="info-box-text"><H4><b><big>Cetak kartu</big></b></H4></span>
                  <span class="info-box-text"><b><big>SEBELUM MENCETAK KARTU </big></b></span>
                  <span class="info-box-text"><b><big>LAKUKAN PENDAFTARAN TERLEBIH DAHULU</big></b></span>
                  
                  </center>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            

    

          </div><!-- /.row -->



       <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                
                <div class="info-box-content">
                <center>
                  
                  <span class="info-box-text"><b>Masukkan No Ujian</b></span>
                   <input type="text" class="form-control" id="no_ujian" name="no_ujian" placeholder="Masukkan No Ujian" aria-describedby="basic-addon3"><br><br>
                  <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="Lanjut">Cetak</button>
                  </center>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            

    

          </div><!-- /.row -->



</section>
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

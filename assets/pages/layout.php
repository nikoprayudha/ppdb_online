<?php session_start(); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPENAN | Dashboard</title>
	 <!-- Memanggil file pendukung website -->
	<?php include "pendukung.php" ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
	<!-- Memanggil file header -->
	<?php include "header.php" ?>
    <!-- Memanggil file menu sebelah kiri -->
	<?php include "menu-left.php" ?>
    <!-- Memanggil file content -->
	 <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
    <?php 
	$page=$_GET['pg'];
	if ($page=='home'){
	include ("halaman1.php"); }  
	?> 
	</section>
	</div>
	<!-- Memanggil file footer -->
    <?php include "footer.php" ?>   
      <!-- Control Sidebar -->
    <?php include "sidebar.php" ?> 
    <!-- Memanggil file pendukung lain jQuery 2.1.4 -->
    <?php include "pendukung-lain.php" ?>
	</div><!-- ./wrapper -->
  </body>
</html>

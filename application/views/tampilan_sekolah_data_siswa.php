<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
        <link href="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <title>Admin- Sekolah</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('') ?>assets/bootstrap_sekolah/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
</head>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Sekolah</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="http://localhost/PPDB/index.php/login/logout_sekolah"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('sekolah')?>"><i class="fa fa-dashboard fa-fw"></i> Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('sekolah')?>">Beranda</a>
                                </li>
                                <li>
                                    <a href="morris.html">Informasi</a>
                                </li>
                                 <li>
                                    <a href="morris.html">Kontak Kami</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            /.nav-second-level
                        </li> -->
                       <li>
                            <a href="<?php echo site_url('sekolah/data_siswa/'.$this->session->userdata('id_sekolah'))?>"><i class="fa fa-table fa-fw"></i> Data Siswa</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('sekolah/edit_data_sekolah/'.$this->session->userdata('id_sekolah'))?>"><i class="fa fa-edit fa-fw"></i> Edit Data Sekolah</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('sekolah/rangking_siswa/'.$this->session->userdata('id_sekolah'))?>"><i class="fa fa-files-o fa-fw"></i> Rangking Siswa<!-- <span class="fa arrow"></span> --></a>
                            
                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
       <div id="page-wrapper" class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sekolah</h1>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <div >
                    <div id="morris-bar-chart"><marquee bgcolor="d3cccc">SELAMAT DATA DI WEB PPDB</marquee></div> 
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>


        

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Data Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                                <table class="table table-responsive" id="example">
                                <thead>
                                    <tr>

                                       
                                        <th>NO UJIAN</th>
                                        <th>NAMA LENGKAP</th>
                                        <th>TEMPAT LAHIR</th>
                                        <th>TANGGAL LAHIR</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>AGAMA</th>
                                        <th>ALAMAT RUMAH</th>
                                        <th>KABUPATEN/KOTA</th>
                                        <th>PROVINSI</th>
                                        <th>NO HANDPHONE</th>
                                        <th>FOTO</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($member as $key) { ?>
                                    <tr>
                                    

                                        <td><?php echo $key->no_ujian ?></td>
                                        <td><?php echo $key->nama_lengkap ?></td>
                                        <td><?php echo $key->tempat_lahir ?></td>
                                        <td><?php echo $key->tanggal_lahir ?></td>
                                        <td><?php echo $key->jenis_kelamin ?></td>
                                        <td><?php echo $key->agama?></td>
                                        <td><?php echo $key->alamat_rumah ?></td>
                                        <td><?php echo $key->kabupaten_kota ?></td>
                                        <td><?php echo $key->provinsi ?></td>
                                        <td><?php echo $key->no_handphone ?></td>
                                        
                                        <td align="center"><img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $key->foto;?>" height=100></td>
                                        
                                     
                                       

                                       
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->

                </div>
                <!-- /.col-lg-4 -->

                <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Data Siswa (Asal Sekolah)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                                <table class="table table-responsive" id="example">
                                <thead>
                                    <tr>

                                       
                                        <th>NO UJIAN</th>
                                        <th>NAMA SEKOLAH</th>
                                        <th>ALAMAT SEKOLAH</th>
                                        <th>TELEPON SEKOLAH</th>
                                       
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($member as $key) { ?>
                                    <tr>
                                    

                                        <td><?php echo $key->no_ujian ?></td>
                                        
                                        <td><?php echo $key->nama_sekolah ?></td>
                                        <td><?php echo $key->alamat_sekolah ?></td>
                                        <td><?php echo $key->telepon_sekolah ?></td>
                                       

                                       
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->



            </div>
            <!-- /.row -->

            <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Data Siswa (Data Orang Tua)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                                <table class="table table-responsive" id="example">
                                <thead>
                                    <tr>

                                       
                                        <th>NO UJIAN</th>
                                       <th>NAMA AYAH</th>
                                        <th>NAMA IBU</th>
                                        <th>NO HANDPHONE ORTU</th>
                                        <th>PENGHASILAN</th>
                                        <th>ALAMAT ORANG TUA</th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($member as $key) { ?>
                                    <tr>
                                    

                                        <td><?php echo $key->no_ujian ?></td>
                                        
                                       <td><?php echo $key->nama_ayah ?></td>
                                        <td><?php echo $key->nama_ibu ?></td>
                                        <td><?php echo $key->handphone_ortu ?></td>
                                        <td><?php echo $key->penghasilan ?></td>
                                        <td><?php echo $key->alamat_rumah_ortu ?></td>
 
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->


        </div>
        <!-- /#page-wrapper -->
         <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Data Siswa (Data Orang Wali)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                                <table class="table table-responsive" id="example">
                                <thead>
                                    <tr>

                                       
                                        <th>NO UJIAN</th>
                                        <th>NAMA WALI</th>
                                        <th>NO HANDPHONE WALI</th>
                                        <th>PENGHASILAN WALI</th>
                                        <th>ALAMAT RUMAH WALI</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($member as $key) { ?>
                                    <tr>
                                    

                                        <td><?php echo $key->no_ujian ?></td>
                                        
                                      <td><?php echo $key->nama_wali ?></td>
                                        <td><?php echo $key->handphone_wali ?></td>
                                        <td><?php echo $key->penghasilan_wali ?></td>
                                        <td><?php echo $key->alamat_rumah_wali ?></td>
                                        

                                       
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    </div>

                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Data Siswa (Data Nilai)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                                <table class="table table-responsive" id="example">
                                <thead>
                                    <tr>

                                       
                                        <th>NO UJIAN</th>
                                       
                                        <th>NILAI INDONESIA</th>
                                        <th>NILAI INGGRIS</th>
                                        <th>NILAI MATEMATIKA</th>
                                        <th>NILAI IPA</th>
                                        <th>PRESTASI 1</th>
                                        <th>PRESTASI 2</th>
                                        <th>PRESTASI 3</th>
                                        <th>PRESTASI 4</th>
                                        <th>RECOMENDASI</th>
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($member as $key) { ?>
                                    <tr>
                                    

                                        <td><?php echo $key->no_ujian ?></td>
                                        
                                      
                                        <td><?php echo $key->indonesia ?></td>
                                        <td><?php echo $key->inggris ?></td>
                                        <td><?php echo $key->matematika ?></td>
                                        <td><?php echo $key->ipa ?></td>

                                        <td><?php echo $key->prestasia?></td>
                                        <td><?php echo $key->prestasib ?></td>
                                        <td><?php echo $key->prestasic ?></td>
                                        <td><?php echo $key->prestasid ?></td>

                                        <td>
                                        <a href="<?php echo base_url()?>assets/uploads/<?php echo $key->recomendasi; ?>"><?php echo $key->recomendasi ?></a>

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->


    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('') ?>assets/bootstrap_sekolah/dist/js/sb-admin-2.js"></script>
         <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>


</body>

</html>

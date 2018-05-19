<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Sekolah</title>

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
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sekolah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div >
                                    <div id="morris-bar-chart"><marquee bgcolor="d3cccc">SELAMAT DATA DI WEB PPDB</marquee></div> 
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Data Sementara Rangking Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            

                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <table class="table table-hover" id="example">
                                <thead>
                                    <tr>

                                      
                                        <th>No Ujian</th>
                                        <th>Nama Lengkap</th>
                                        <th>Foto</th>
                                        <th>Asal Sekolah</th>
                                        <th>Alamat Sekolah</th>
                                        
                                        
                                        <th>Indonesia</th>
                                        <th>Inggris</th>
                                        <th>Matematika</th>
                                        <th>Ipa</th>
                                        <th>Rata-Rata</th>
                                        <th>Prestasi 1</th>
                                        <th>Prestasi 2</th>
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $nomor=0; foreach ($member as $key) { $nomor++; ?>
                                <?php if($nomor <= $this->session->userdata('kuota')) { ?>
                                    <tr>
                                    

                                        <td><?php echo $key->no_ujian ?></td>
                                        <td><?php echo $key->nama_lengkap ?></td>
                                        
                                        <td align="center"><img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $key->foto;?>" height=100></td>
                                        

                                        <td><?php echo $key->nama_sekolah ?></td>
                                        <td><?php echo $key->alamat_sekolah ?></td>
                                        

                                        <td><?php echo $key->indonesia ?></td>
                                        <td><?php echo $key->inggris ?></td>
                                        <td><?php echo $key->matematika ?></td>
                                        <td><?php echo $key->ipa ?></td>
                                        <td><?php echo $key->rata ?></td>

                                        <td><?php echo $key->prestasia?></td>
                                        <td><?php echo $key->prestasib ?></td>
                                    </tr>
 
                                <?php } else { ?>

                                     <tr bgcolor="red">
                                    
                                        <td><?php echo $key->no_ujian ?></td>
                                        <td><?php echo $key->nama_lengkap ?></td>
                                        
                                        <td align="center"><img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $key->foto;?>" height=100></td>
                                        

                                        <td><?php echo $key->nama_sekolah ?></td>
                                        <td><?php echo $key->alamat_sekolah ?></td>
                                        

                                        <td><?php echo $key->indonesia ?></td>
                                        <td><?php echo $key->inggris ?></td>
                                        <td><?php echo $key->matematika ?></td>
                                        <td><?php echo $key->ipa ?></td>
                                        <td><?php echo $key->rata ?></td>

                                        <td><?php echo $key->prestasia?></td>
                                        <td><?php echo $key->prestasib ?></td>
                                    </tr>

                                <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
</div><!-- /.container -->

<!-- ISI TTP -->

        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    Polinema</a>
                </div>
            </div>
        </footer>

    </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div> -->
                        <!-- /.panel-body -->
                    </div>
               
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
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

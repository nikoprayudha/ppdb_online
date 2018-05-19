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
        
            <!-- /.row -->
          <div id="page-wrapper">
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
                            <i class="fa fa-clock-o fa-fw"></i> Edit
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            
                            <?php 
                    echo form_open_multipart('sekolah/edit_data_sekolah/'.$this->uri->segment(3)); ?>

        <table width=1000 border='0' height=250 align="center"> 
               <tr>
                        <td align="right" widht="20%"><b>Data Sekolah</b></td>
                    </tr>

                <tr>
               
                    <td align="right" width="10%"> Nama Sekolah*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="nama sekolah" aria-describedby="basic-addon3" value="<?php echo $member[0]->nama_sekolah ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('nama_sekolah'); ?></font></span>


                    </td>
                    </td>

                    </tr>


                     <tr>
                 <td align="right" width="10%"> Jenis Sekolah*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <select class='form-control' id='pilihan1' name='pilihan1'>
                                <option value='0'>--pilih--</option>
                                <?php 
                                foreach ($jurusan_list as $prov) {
                                echo "<option value='$prov[id_pilihan]'>$prov[nama_pilihan]</option>";
                                }
                                ?>
                   </select>   

                    <span class="text-danger"><font color='red'><?php echo form_error('jenis_sekolah'); ?></font></span>


                    
                    

                    </tr>

                    <tr>
                        
<td align="right" width="10%"> Alamat Sekolah*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah" aria-describedby="basic-addon3" value="<?php echo $member[0]->alamat_sekolah ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('alamat_sekolah'); ?></font></span>
                    </td>
                    </td>
                    </tr>


                     <tr>
                 <td align="right" width="10%"> Provinsi*</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukkan Provinsi" aria-describedby="basic-addon3" value="<?php echo $member[0]->provinsi ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('provinsi'); ?></font></span>
                    




                    </tr>

                     <tr>
                 <td align="right" width="10%"> No Tlp*</td>
                    <td width="2%"></td>
                    <td width="35%">
                      <input type="text" placeholder="Masukkan No Tlp" class="form-control" id="no_tlp" name="no_tlp" aria-describedby="basic-addon3" value="<?php echo $member[0]->no_tlp ?>">
                        <span class="text-danger"><font color='red'><?php echo form_error('no_tlp'); ?></font></span>

                 
                    </tr>


                     <tr>
                 <td align="right" width="10%"> Penanggung Jawab*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input type="text" placeholder="Masukkan Penanggung Jawab" class="form-control" id="penanggung_jawab" name="penanggung_jawab" aria-describedby="basic-addon3" value="<?php echo $member[0]->penanggung_jawab ?>">
                        <span class="text-danger"><font color='red'><?php echo form_error('penanggung_jawab'); ?></font></span>

                 

                    </tr>

                    <tr>
                        <td align="right" width="10%"> Kuota*</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="kuota" name="kuota" placeholder="kuota" aria-describedby="basic-addon3" value="<?php echo $member[0]->kuota ?>">
                  <span class="text-danger"><font color='red'><?php echo form_error('kuota'); ?></font></span>
                    </td>
                    </td>
                    </tr>
                    <tr>
                         <td align="right" width="10%"> Foto</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="file" class="span5" id="userfile" name="userfile" size="20" aria-describedby="basic-addon3">
                     <?php echo $member[0]->foto ?> ||
                    </td>
                    </td>
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
</div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
             
                        <!-- /.panel-body -->
                       
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

</body>

</html>

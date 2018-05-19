<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logoo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/images/ico/logoo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/images/ico/logoo.png">

  <title>PPDB Se-Indonesia</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
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

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
    Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
    Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
  -->

      <div class="sidebar-wrapper">
            <div class="logo">
               <center><img src="<?php echo base_url()?>assets/img/logoo.png" height=70 ></center>
                <a href="" class="simple-text">
                    <font><b>ADMIN</b></font>
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="<?php echo site_url('member')?>">
                        <i class="ti-user"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo site_url('data_login/tampil_sekolah')?>">
                        <i class="ti-user"></i>
                        <p>Data Sekolah</p>
                    </a>
                </li>
                
                <li  >
                    <a href="<?php echo site_url('data_login/tampil_login')?>">
                        <i class="ti-user"></i>
                        <p>Data Login</p>
                    </a>
                </li>

                <li >
                    <a href="<?php echo site_url('data_jurusan')?>">
                        <i class="ti-user"></i>
                        <p>Data jurusan</p>
                    </a>
                </li>
                
                <li >
                    <a href="<?php echo site_url('Cetaks')?>">
                        <i class="ti-user"></i>
                          <p>Cetak Data Sekolah</p>
                    </a>
                </li>
                
            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Data Login</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url()?>/data_login/tambah_sekolah">
                                <i class="ti-plus"></i>
                <p><font color='black'></font></p>
                            </a>
                        </li>
            <li>
                            <a href="<?php echo site_url()?>/data_login/tampil_sekolah">
                <i class="ti-layers-alt"></i>
                <p><font color='black'></font></p>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                            <img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $foto; ?>" height=25>
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><center><font>Hai, <?php echo $nisn; ?></font></center></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('member/logout'); ?>">   
                              <center><font><i class="ti-power-off"></i><b>
                              Keluar</b></font></center>
                              </a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- ISI -->

<div class="container">

            <br><br> 
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table class="table table-hover" id="example">
                                <thead>
                                    <tr>

                                        <th>ID </th>
                                        <th>NAMA </th>
                                        <th>JENIS </th>
                                        <th>ALAMAT </th>
                                        <th>PROVINSI </th>
                                        <th>KUOTA </th>
                                        <th>NO TLP </th>
                                        <th>PENANGGUNG JAWAB</th>
                                        <th>FOTO SEKOLAH</th>
                                        <th>STATUS </th>



                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($sekolah_list as $key) { ?>
                                    <tr>
                                     

                                        <td><?php echo $key->id_sekolah ?></td>
                                        <td><?php echo $key->nama_sekolah ?></td>
                                        <td><?php echo $key->jenis_sekolah ?></td>
                                        <td><?php echo $key->alamat_sekolah ?></td>
                                        <td><?php echo $key->provinsi ?></td>
                                        <td><?php echo $key->kuota ?></td>
                                        <td><?php echo $key->no_tlp ?></td>
                                        <td><?php echo $key->penanggung_jawab ?></td>


                                        
                                        <td align="center"><img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $key->foto;?>" height=100></td>
                                        <td><?php echo $key->status ?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url('data_login/update_sekolah/').$key->id_sekolah ?>" type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                            <a type="button" class="btn btn-danger " href="<?php echo site_url('data_login/delete_sekolah/').$key->id_sekolah ?>" onClick="return confirm('Apakah Anda Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </button>
                                        </td>
                                        <td>
                                        <a type="button" id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM" href="<?php echo site_url('data_login/verifikasi/').$key->id_sekolah ?>">Verifikasi</button></td>
                                        <td>
                                         <a type="button" id="submit-button" type="submit" class="btn btn-danger" name="action" value="CONFIRM" href="<?php echo site_url('data_login/unverifikasi/').$key->id_sekolah ?>">Unverifikasi</button></td>

                                        
                                        

                                       
                                    </tr>
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

 <!--   Core JS Files   -->
    <script src="<?php echo base_url('') ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('') ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('') ?>assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('') ?>assets/js/demo.js"></script>

<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>


</body>

   

</html>

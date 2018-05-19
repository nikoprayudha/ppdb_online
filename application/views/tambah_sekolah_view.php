<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/logo2.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/logo2.png">



    <title>PPDB SE-Indonesia</title>

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

    <!-- <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css"> -->

</head>
<body background="<?php echo base_url('') ?>assets/img/back.jpg">
    

    <br>
    <?php $attributes = array("nama_sekolah" => "sekolah","id_sekolah" => "sekolah");
    echo form_open_multipart('login/create_sekolah'); ?>
    <table border=0 width=350 height=620 align="center" cellspacing="0" cellpadding="0">
        <tr>
            <td bgcolor="#EEEEEE" height=200>
            <br><br>
                <center><img src="<?php echo base_url()?>assets/img/logo2.png" height=100><br>
                <font class="simple-text" size=4><b>Daftar</b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>Silahkan Mendaftarkan Sekolah</big></b></font>
                </center>
            </td>
        </tr>

     
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
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="daftar">Daftar</button>
                <a href="<?=base_url()?>index.php/login/"><button type="submit" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button></a>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>   

</body>

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

    <!-- <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script> -->
   

</html>

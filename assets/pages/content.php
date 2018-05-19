 <div class="content-wrapper">
<section class="content">
<?php 
$page=$_GET['pg'];
$tambah=$_GET['input'];
if ($page=='home'){ include "halaman1.php"; }
//Menu User atau pengguna
$eduser=$_GET['iduser'];
if ($page=='pengguna'){ include "pengguna.php"; }
if ($tambah=="tambahuser"){ include "tambah-user.php";}
if ($eduser!=""){ include "tambah-user.php"; }
//Menu Satuan Medis Fungsional
$edhal=$_GET['idsmf'];
if ($page=='smf'){ include "data-smf.php"; }
if ($tambah=="tambahsmf"){ include "smf.php";}
if ($edhal!=""){ include "smf.php"; }
//Menu Tempat Coas
$edtc=$_GET['idtc'];
if ($page=='tc'){ include "tempat-coas.php";}
if ($tambah=="tambahtempatcoas"){ include "tambah-tempat-coas.php";}
if ($edtc!=""){ include "tambah-tempat-coas.php"; }
//Menu Tangal Coas
$edtgl=$_GET['idtgl'];
if ($page=='tco'){ include "tanggal-coas.php"; }
if ($tambah=="tambahtanggalcoas"){ include "tambah-tanggal-coas.php";}
if ($edtgl!=""){include "tambah-tanggal-coas.php";}
//Menu Bobot dan Skor
$edbs=$_GET['idbs'];
if ($page=='bs'){ include "bobot-skor.php"; }
if ($tambah=="tambahbobotdanskor"){ include "tambah-bobot-skor.php";}
if ($edbs!=""){include "tambah-bobot-skor.php";}
//Menu Kriteria
$edkriteria=$_GET['idkriteria'];
if ($page=='kriteria'){ include "kriteria.php"; }
if ($tambah=="tambahkriteria"){ include "tambah-kriteria.php";}
if ($edkriteria!=""){include "tambah-kriteria.php";}
//Menu Soal
$edsoal=$_GET['idsoal'];
if ($page=='soal'){ include "soal.php"; }
if ($tambah=="tambahsoal"){ include "tambah-soal.php";}
if ($edsoal!=""){include "tambah-soal.php";}
//Menu Jawaban
if ($page=='jawaban'){ include "jawaban.php"; }
//Menu Konselor
$edkonselor=$_GET['idkonselor'];
if ($page=='konselor'){ include "konselor.php"; }
if ($tambah=='tambahkonselor'){ include "tambah-konseler.php"; }
if ($edkonselor!=""){include "tambah-konseler.php";}
//Menu Mahasiswa
$edmahasiswa=$_GET['idmhs'];
if ($page=='updatemahasiswa'){ include "update-mahasiswa.php"; }
if ($page=='tesawal'){ include "pra-test.php"; }
if ($page=='nm'){ include "nilai-mahasiswa.php"; }
if ($page=='datamahasiswa'){ include "data-mahasiswa.php"; }
if ($page=='pilsmf'){ include "data-coas.php"; }
if ($page=='pilt4coas'){ include "pil-tempat-coas.php"; }
if ($edmahasiswa!=""){include "mahasiswa.php";}
if ($page=='nilaimahasiswa'){ include "nilai.php"; }
//Menu Pasien
$edpasien=$_GET['idpasien'];
if ($page=='datapasien'){ include "data-pasien.php"; }
if ($page=='diagnosa'){ include "data-diagnosa.php"; }
if ($page=='pasienpulang'){ include "pasien-pulang.php"; }
if ($tambah=='tambahpasien'){ include "tambah-pasien.php"; }
if ($edpasien!=""){include "tambah-pasien.php";}
//Menu Laporan
if ($page=='tidaklulustes'){ include "lap-tidak-lulus-test.php"; }
if ($page=='aktifcoas'){ include "lap-aktif-coas.php"; }
if ($page=='luluscoas'){ include "lap-lulus-coas.php"; }
if ($page=='dsb'){ include "lap-detail-data-siklus-berjalan.php"; }
?> 
</section>
</div>
    <!--    <section class="content-header">
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
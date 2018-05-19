-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2016 at 07:17 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpenan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `id_jurusan` int(2) NOT NULL AUTO_INCREMENT,
  `kode_jurusan` varchar(6) NOT NULL,
  `nama_jurusan` varchar(35) NOT NULL,
  `nama_fakultas` varchar(45) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`, `nama_fakultas`) VALUES
(1, 'KD001', 'Sistem Komputer', 'STMIK Bina Bangsa Kendari'),
(2, 'KD002', 'Sistem Informasi', 'STMIK Bina Bangsa Kendari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_registrasi` varchar(11) NOT NULL,
  `nama_mahasiswa` varchar(75) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `suku` varchar(45) NOT NULL,
  `kebangsaan` varchar(25) NOT NULL,
  `status_mahasiswa` varchar(35) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pilihan_jurusan1` varchar(45) NOT NULL,
  `pilihan_kelas` varchar(45) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `nama_pangkat` varchar(75) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `alamat_instansi` varchar(100) NOT NULL,
  `asal_sekolah` varchar(75) NOT NULL,
  `jurusan_sekolah` varchar(75) NOT NULL,
  `tahun_masuk` varchar(5) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL,
  `pengalaman_organisasi` varchar(75) NOT NULL,
  `pengalaman_kursus` varchar(75) NOT NULL,
  `nama_keterampilan` varchar(75) NOT NULL,
  `nama_ayah` varchar(45) NOT NULL,
  `nama_ibu` varchar(45) NOT NULL,
  `pekerjaan_ayah` varchar(75) NOT NULL,
  `pekerjaan_ibu` varchar(75) NOT NULL,
  `penghasilan_ayah` decimal(10,0) NOT NULL,
  `penghasilan_ibu` decimal(10,0) NOT NULL,
  `nama_wali` varchar(75) NOT NULL,
  `keterangan_wali` varchar(35) NOT NULL,
  `alamat_wali` varchar(75) NOT NULL,
  `kontak_wali` varchar(12) NOT NULL,
  `status_tinggal` varchar(35) NOT NULL,
  `sumber_informasi` varchar(75) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `status` varchar(2) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`),
  UNIQUE KEY `no_reg` (`nama_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nomor_registrasi`, `nama_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `suku`, `kebangsaan`, `status_mahasiswa`, `nomor_hp`, `email`, `pilihan_jurusan1`, `pilihan_kelas`, `nama_pekerjaan`, `nama_instansi`, `nama_pangkat`, `nama_jabatan`, `alamat_instansi`, `asal_sekolah`, `jurusan_sekolah`, `tahun_masuk`, `tahun_lulus`, `pengalaman_organisasi`, `pengalaman_kursus`, `nama_keterampilan`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `nama_wali`, `keterangan_wali`, `alamat_wali`, `kontak_wali`, `status_tinggal`, `sumber_informasi`, `photo`, `status`) VALUES
(1, 'REG001', 'Aris Susanto', 'Codong', '1992-07-30', 'Perempuan', 'Islam', 'Bugis', 'WNI', 'Belum Kawin', '082345148092', 'harisintelcomkdi@gmail.com', 'Sistem Informasi', 'Reguler', 'Operator', 'CV.Sumber Info Media', 'GOl.III Aasdasda', 'Penata Muda', 'Jln.UHO', 'SMK N 7 Konawe Selatan', 'Adminsitrasi Perkantoran', '2007', '2010', 'INTELCOM', 'Aplikasi Perkantoran', 'Web Developer', 'Nawir', 'Samarwati', 'Petani', 'Petani', '400000', '350000', 'Nawir', 'Masih Hidup', 'Kec.Benua Kab.Konsel Lrg.BOSOWA', '082345148092', 'Kontrak', 'Media Sosial', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` int(5) NOT NULL AUTO_INCREMENT COMMENT 'PK',
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Level` int(3) NOT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_user`, `Username`, `Password`, `Level`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, '9909913396', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(3, '9909913397', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(4, '201051082', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(5, '201051001', '28b662d883b6d76fd96e4ddc5e9ba780', 2),
(14, 'faisal', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(15, 'musrin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(16, 'luxrin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(17, 'iqbal', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(18, 'alfin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(19, 'rahmat inggi', '827ccb0eea8a706c4c34a16891f84e7b', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

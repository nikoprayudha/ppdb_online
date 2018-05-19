-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 04:46 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE IF NOT EXISTS `pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `nama_pilihan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id_pilihan`, `nama_pilihan`) VALUES
(1, 'SMA'),
(2, 'MAN'),
(3, 'SMK');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `jenis_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `password`, `nama_sekolah`, `jenis_sekolah`, `alamat_sekolah`, `provinsi`, `kuota`, `no_tlp`, `penanggung_jawab`, `foto`, `level`, `status`) VALUES
('SEK_000003', '202cb962ac59075b964b07152d234b70', 'SMAN 1 MALANG', '1', 'Jl. Tugu Utara No.1, Klojen, Kota Malang, Jawa Timur 65111', 'Jawa Timur', 3, '085745872872', 'Bapak Siswanto Setia Budi', 'sman1malang.jpg', 'sekolah', 'terverifikasi'),
('SEK_000005', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'MAN 1 KOTA BATU', '2', 'Jl. Pattimura No.25, Temas, Kec. Batu, Kota Batu, Jawa Timur 65315', 'Jawa Timur', 2, '085745872872', 'Bapak Iwan Setiawan', 'man1batu1.jpg', 'sekolah', 'terverifikasi'),
('SEK_000006', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMKN 1 BANDUNG', '3', 'Jalan Wastukencana No.3, Babakan Ciamis, Sumur Bandung, Babakan Ciamis, Sumur Bandung, Kota Bandung, Jawa Barat 40117', 'Jawa Barat', 4, '085745872872', 'Bapak Budi Setia Novanto', 'smk1bandung.jpg', 'sekolah', 'terverifikasi'),
('SEK_000007', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMAN 6 SKOUW JAYAPURA', '1', 'JL. RAYA PERBATASAN RI-PNG, Skow Mabo, Kec. Muara Tami', 'Jayapura', 2, '085745872872', 'Ibu Sri Mulyani', 'smajayapura.jpg', 'sekolah', 'terverifikasi'),
('SEK_000008', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMA NEGERI 7 SURABAYA', '1', 'SURABAYA, Kapasari, Kec. Genteng', 'Jawa Timur', 2, '085745872872', 'Ibu Ani Yudhoyono', 'sman7sby.jpg', 'sekolah', 'terverifikasi'),
('SEK_000009', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMA Negeri 04 Semarang', '1', 'Jl. Karangrejo Raya No. 12 A', 'Jawa Tengah', 2, '085745872872', 'Ibu Yuni Shara', 'smasemarang.jpg', 'sekolah', 'terverifikasi'),
('SEK_000010', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'MA BAITUSSALAM SEMARANG', '2', 'JL. KRAJAN UTARA NO. 13 WONOLOPO RT. 01 RW. V MIJEN SEMARANG, WONOLOPO,', 'Jawa Tengah', 2, '085745872872', 'Bapak Joko Widodo', 'man1smarang.jpg', 'sekolah', 'terverifikasi'),
('SEK_000011', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMAS TAMAN SISWA MOJOKERTO', '1', 'JL. TAMAN SISWA NO. 30, PURWOTENGAH, Kec. Magersari Kota Mojokerto', 'Jawa Timur', 2, '085745872872', 'Ibu Marion Jola', 'smkmjk.jpg', 'sekolah', 'terverifikasi'),
('SEK_000012', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMK NEGERI 1 PADANG', '3', 'Jl. M. Yunus, Lubuk Lintah, Kuranji, Kota Padang 25153', 'Sumatera Barat', 2, '085745872872', 'Bapak Anmar Abdillah', 'smkpdg.jpg', 'sekolah', 'terverifikasi'),
('SEK_000013', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMK SMTI PADANG', '3', 'Jl. Ir. H. Juanda No. 2, Rimbo Kaluang, Padang Barat, Kota Padang 25115', 'Sumatera Barat', 2, '085745872872', 'Ibu Indah Rahmania', 'smkpd.jpg', 'sekolah', 'terverifikasi'),
('SEK_000014', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMA Katholik Rajawali Makassar', '1', 'Jl Lamadukelleng 7 Losari Makassar', 'Sulawesi Utara', 2, '085745872872', 'Bapak Hari Tanu Sudebiyo', 'smamakasa.jpg', 'sekolah', 'belum_terverifikasi'),
('SEK_000015', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'SMK Profesi Makassar', '3', 'Perum Mangasa Permai Bl Y/9, Mangasa, Tamalate', 'Sulawesi Utara', 2, '085745872872', 'Ibu Fanti Faiz', 'smamka.jpg', 'sekolah', 'terverifikasi'),
('SEK_000016', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'MAN Pangkalan Bun', '2', 'Jl.Ahmad Yani Km.4,5, Pangkalan Bun, Telp.0532-28635 Kotawaringin Barat', 'Kalimantan Selatan', 2, '085745872872', 'Bapak Cordova Lamahan', 'kliman.jpg', 'sekolah', 'belum_terverifikasi'),
('SEK_000017', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'MAN Sampit Kalimantan Selatan', '2', 'Jl.H.M Arsyad No.68, Sampit, Kotawaringin Timur', 'Kalimantan Selatan', 2, '085745872872', 'Bapak But One', 'mankl.jpg', 'sekolah', 'terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_ujian` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `kabupaten_kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `no_handphone` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `telepon_sekolah` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `handphone_ortu` varchar(255) NOT NULL,
  `penghasilan` varchar(255) NOT NULL,
  `alamat_rumah_ortu` varchar(255) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `handphone_wali` varchar(255) NOT NULL,
  `penghasilan_wali` varchar(255) NOT NULL,
  `alamat_rumah_wali` varchar(255) NOT NULL,
  `pilihan1` varchar(255) NOT NULL,
  `pilihan2` int(11) NOT NULL,
  `indonesia` varchar(255) NOT NULL,
  `inggris` varchar(255) NOT NULL,
  `matematika` varchar(255) NOT NULL,
  `ipa` varchar(255) NOT NULL,
  `rata` varchar(10) NOT NULL,
  `prestasia` varchar(255) NOT NULL,
  `prestasib` varchar(255) NOT NULL,
  `prestasic` varchar(255) NOT NULL,
  `prestasid` varchar(255) NOT NULL,
  `recomendasi` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `no_ujian`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_rumah`, `kabupaten_kota`, `provinsi`, `no_handphone`, `foto`, `nama_sekolah`, `alamat_sekolah`, `telepon_sekolah`, `nama_ayah`, `nama_ibu`, `handphone_ortu`, `penghasilan`, `alamat_rumah_ortu`, `nama_wali`, `handphone_wali`, `penghasilan_wali`, `alamat_rumah_wali`, `pilihan1`, `pilihan2`, `indonesia`, `inggris`, `matematika`, `ipa`, `rata`, `prestasia`, `prestasib`, `prestasic`, `prestasid`, `recomendasi`) VALUES
(1, '1541180001', 'Akmad Fisabilillah', 'Batu Malang', '2018-01-18', 'laki-laki', 'islam', 'JL. Sonokembang / Janti, Bandungrejosari, Sukun, Kota Malang 65148', 'Malang', 'Jawa Timur', '0897778787', 'a.jpg', 'SMPN 1 Malang', 'Jl. Lawu 12 Malang', 'Telp. 0341-325206', 'Ayah Bili', 'Ibu Bili', '085745872872', 'Rp.10.000.000.000', 'JL. Sonokembang / Janti, Bandungrejosari, Sukun, Kota Malang 65148', '', '', '', '', 'SEK_000003', 0, '7.80', '7', '7', '7', '7.2', 'Juara 1 Lomba Matematika Tingkat Kabupaten Malang', '', '', '', ''),
(2, '1541180002', 'Ardy Prasetyo', 'Malang', '2018-01-10', 'laki-laki', 'islam', 'JL. Sonokembang / Janti, Bandungrejosari, Sukun, Kota Malang 65148', 'Malang', 'Jawa Timur', '0897778787', 'a1.jpg', 'SMPN 2 Malang', 'Jl. Prof. Muhammad Yamin 60 Malang', 'Telp. 0341-325206', 'Ayah Igor', 'Ibu Igor', '085745872872', 'Rp.10.000.000.000', 'Jl. Veteran 17 Ketawanggede, Lowokwaru, Kota Malang 65145', '', '', '', '', 'SEK_000003', 0, '8.8', '8', '8', '8.70', '8.375', 'Juara 1 Lomba Matematika Tingkat Kabupaten Malang', '', '', '', ''),
(3, '1541180003', 'Budi Purwantoro', 'Pasuruan', '2018-01-18', 'laki-laki', 'Katolik', 'Jl. Surabaya No. 1 Gading Kasri, Lowokwaru, Kota Malang 65115', 'Pasuruan', 'Jawa Timur', '0897778787', 'c.jpg', 'SMPN 2 Malang', 'Jl. Prof. Muhammad Yamin 60 Malang', 'Telp. 0341-325206', 'Ayah Budi', 'Ibu Budi', '085745872872', 'Rp.30.000.000.000', 'Jl. Surabaya No. 1 Gading Kasri, Lowokwaru, Kota Malang 65115', '', '', '', '', 'SEK_000003', 0, '5', '8', '5', '8.70', '6.675', 'Juara 1 Lomba Matematika Tingkat Kabupaten Malang', 'Juara Harapan 1 Futsal Se Kampung', '', '', ''),
(4, '1541180004', 'Niko Ary Prayudha', 'Batu Malang', '2018-01-10', 'laki-laki', 'kristen', 'Jl. Surabaya No. 1 Gading Kasri, Lowokwaru, Kota Malang 65115', 'Pasuruan', 'Jawa Timur', '0897778787', 'd.jpg', 'SMPN 3 Malang', 'Jl. Prof. Muhammad Budi 60 Malang', 'Telp. 0341-362612', 'Ayah Niko', 'Ibu Niko', '085745872872', 'Rp.70.000.000.000', 'Jl. Tanimbar 22 Kasin, Klojen, Kota Malang 65117', '', '', '', '', 'SEK_000003', 0, '5', '7', '5', '9', '6.5', 'Juara 1 Lomba BahasaTingkat Kabupaten Malang', '', '', '', ''),
(5, '1541180005', 'Indah Rachmania', 'Kediri', '2018-01-30', 'perempuan', 'islam', 'Jl. Kediri No. 1 Gading Kasri, Lowokwaru, Kota Kediri 65115', 'Kediri', 'Jawa Timur', '0897778787', 'e.jpg', 'SMPN 1 Kediri', 'Jl. Prof. Muhammad Budi 60 Kediri', 'Telp. 0341-362618', 'Ayah Indah', 'Ibu Indah', '085745872872', 'Rp.70.000.000.000', 'Jl. Tanimaju 22 Kasin, Klojen, Kota Kediri 65117', '', '', '', '', 'SEK_000003', 0, '9', '7', '9.5', '9', '8.625', 'Juara 1 Lomba Kecantikan Se Kabupaten Kediri', '', '', '', 'Surat_Rekomendasi.pdf'),
(6, '1541180006', 'Moni Fantika Rahin', 'Mojokerto', '2018-01-01', 'perempuan', 'islam', 'Jl. Ikan Piranha Atas, Lowokwaru, Kota Malang 65142', 'Mojokerto', 'Jawa Timu', '0897778787', 'k.jpg', 'SMPN 4 Malang', 'Jl. Veteran 37 Malang', 'Telp. 0341-551289', 'Ayah Fanti', 'Ibu Fanti', '085745872872', 'Rp.100.000.000.000', 'Jl. Ikan Piranha Atas, Lowokwaru, Kota Malang 65142', '', '', '', '', 'SEK_000008', 0, '9', '9', '9', '9', '9', 'Juara 3 Ratu Kecantikan Se Kabupaten Mojokerto', '', '', '', ''),
(7, '1541180007', 'Muhammad Rifatulloh Faizin', 'Mojokerto', '2018-01-02', 'laki-laki', 'islam', 'Jl. Ikan Piranha Atas, Lowokwaru, Kota Malang 65142', 'Mojokerto', 'Jawa Timu', '0897778787', 'b.jpg', 'SMPN 4 Malang', 'Jl. Veteran 37 Malang', 'Telp. 0341-551289', 'Ayah Faiz', 'Ibu Faiz', '085745872872', 'Rp.100.000.000.000', 'Jl. Ikan Piranha Atas, Lowokwaru, Kota Malang 65142', '', '', '', '', 'SEK_000008', 0, '9', '9', '9', '8.70', '8.925', 'Juara 3 Ratu Kecantikan Se Kabupaten Mojokerto', '', '', '', ''),
(8, '1541180008', 'Mochammad Burhan Abdillah', 'Bandung', '2017-12-01', 'laki-laki', 'islam', 'Jl. Ikan Piranha Atas, Lowokwaru, Kota Malang 65142', 'Mojokerto', 'Jawa Timu', '0897778787', 'h.jpg', 'SMPN 33 Bandung', 'Jl. In Aja Dulu 8 Bandung', 'Telp. 0341-551289', 'Ayah Burhan', 'Ibu Burhan', '085745872872', 'Rp.50.000.000.000', 'Jl. Ikan Piranha Atas, Lowokwaru, Kota Bandung 65142', '', '', '', '', 'SEK_000008', 0, '7.5', '8.6', '9', '8.70', '8.45', 'Juara 1 Futsal Antar Kampung Bandung', '', '', '', 'Surat_Rekomendasi1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `level` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nisn`, `username`, `password`, `level`, `foto`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', ''),
(7, '1921180068', 'rina nose', '1e3b7b848d6767469c3368bb957f9df9', 'member', 'foto1.jpg'),
(8, '1541180001', 'Abigail Chavali', '13ac988b6af78f085636af4dd0b7ffc4', 'member', '14.jpg'),
(9, '1541180002', 'Abshari Nuria Rahmatiani', '86fdf383937235a96e85567f84661c0b', 'member', '24.jpg'),
(10, '1541180003', 'Abshari Nuria Rahmatiani', '2ea02498469ee5d9a2e0941eae0c045f', 'member', '33.jpg'),
(11, '1541180004', 'Acelin Angela', '8f12ef87825a2a1d46aa12665fd749e7', 'member', '41.jpg'),
(12, '1541180005', 'Adamma Brunella', 'ff73f910ca2c459469fa843c7413cdfd', 'member', '51.jpg'),
(13, '1541180006', 'Adara Fredella Ulani', '08ebd343bdb2bc97bde9a6091334c3a5', 'member', '6.jpg'),
(14, '1541180007', 'Adara Fredella Ulani', '9792f5419442fc1b6c42ee3453536873', 'member', '7.jpg'),
(15, '1541180008', 'Adeeva Afsheen Myesha', '1f12b277d92d0bfa980857ab569a73d6', 'member', '8.jpg'),
(16, '1541180009', 'Adela Aloysius', '98eaf1b8f644c8aba4b9034f8d4f8d01', 'member', '9.jpg'),
(17, '15411800010', 'Adele Adriana Agatha', 'e10689ea3072235ba39bc602f2d6bf61', 'member', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_pilihan`),
  ADD KEY `id_pilihan` (`id_pilihan`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `pilihan1` (`pilihan1`),
  ADD KEY `pilihan2` (`pilihan2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

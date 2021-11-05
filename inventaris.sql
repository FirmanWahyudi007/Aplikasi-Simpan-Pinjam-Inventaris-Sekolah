-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 10:47 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpinjam`
--

CREATE TABLE `detailpinjam` (
  `id_detailpinjam` int(11) NOT NULL,
  `id_inventaris` int(10) NOT NULL,
  `id_peminjaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpinjam`
--

INSERT INTO `detailpinjam` (`id_detailpinjam`, `id_inventaris`, `id_peminjaman`) VALUES
(9, 12, 'INV/201901'),
(10, 18, 'INV/201901'),
(13, 16, 'INV/201902'),
(14, 18, 'INV/201902'),
(15, 16, 'INV/201902'),
(16, 18, 'INV/201902'),
(17, 12, 'INV/201904'),
(18, 15, 'INV/201904'),
(21, 16, 'INV/201905'),
(22, 18, 'INV/201905'),
(23, 12, 'INV/201903'),
(24, 15, 'INV/201903'),
(25, 18, 'INV/201909'),
(26, 19, 'INV/201909');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kondisi` char(10) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_petugas` char(11) NOT NULL,
  `kode_inventaris` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama`, `kondisi`, `keterangan`, `status`, `id_jenis`, `tanggal_registrasi`, `id_ruang`, `id_petugas`, `kode_inventaris`) VALUES
(12, 'LCD ASUS', 'baru', 'LCD ASUS X9181', 'ada', 2, '2019-04-01', 3, '1', 'Monitor-01'),
(15, 'LED ASUS', 'baru', 'LED ASUS X917', 'tidak ada', 2, '2019-04-09', 3, '1', 'Monitor-02'),
(16, 'LED ASUS', 'baru', 'LED ASUS Z0181', 'ada', 2, '2019-04-01', 3, '1', 'Monitor-03'),
(17, 'Laptop Asus', 'baru', 'Laptop Asus Core-i3', 'ada', 2, '2019-04-01', 2, '3', 'Laptop-01'),
(18, 'CANON PIXMA', 'baru', 'CANON PIXMA iP2770', 'tidak ada', 2, '2019-04-10', 3, '1', 'Printer-01'),
(19, 'Acer', 'baru', 'Acer 22\" S221HQL Wide (LED)', 'tidak ada', 2, '2019-01-27', 3, '1', 'Monitor-04'),
(20, 'Acer', 'baru', 'Acer 22\" S221HQL Wide (LED)', 'ada', 2, '2019-01-27', 3, '1', 'Monitor-05');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `kode_jenis` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`) VALUES
(1, 'ATK', 'JNS01', 'Alat Tulis Perkantoran'),
(2, 'Sarana', 'JNS02', 'Sarana'),
(3, 'Transport', 'JNS03', 'Kendaraan');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` char(11) NOT NULL,
  `nama_level` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
('1', 'Admin'),
('2', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `alamat`) VALUES
('PG001', 'Drs. Gatot Wachid W.', '19601012198703 1  ', 'Menturus Kudu Jombang'),
('PG002', 'Zainal Fananai, S.Pd, M.M', '132 148 649', 'Ds.Katemas Kec. Kudu '),
('PG003', 'Drs. Siswo Rusianto', '19641119 199802 1 ', 'Jombatan Kesamben '),
('PG004', 'Ristiyono Catur M, S.P', '19720610 200003 1 ', 'Sumber Teguh Kudu '),
('PG005', 'Dra.Ngatminah', '19680411 200501 2 ', 'Sumber Teguh Kudu '),
('PG006', 'Ida Setyowati, M.Pd', '19671011 200501 2 ', 'Sidokaton Kudu Jombang'),
('PG007', 'Anton Masjendi,S.Pd', '19700917 200501 1 ', 'Sumber Teguh Kudu '),
('PG008', 'Irma Koerniati,S.Si', '19710307 200501 2 ', 'Ds Tapen Kudu Jombang'),
('PG009', 'Khrisna Wijayanti , S.Pd', '19730314 200501 2 ', 'Ds Tapen Kudu Jombang'),
('PG010', 'Sukarlik, S.Pd', '19730503 200501 2 ', 'Ds Tapen Kudu Jombang'),
('PG011', 'Drs. Siswandoyo', '19621129 200604 1 ', 'Jatigedong Ploso Jombng'),
('PG012', 'Choiruddin, M.Pd', '19750225 200604 1 ', 'Ds. Bakalan Rayung Kudu'),
('PG013', 'Rudy Dwi Wasono, S.TP', '19760908 200604 1 ', 'Ds. Tapen Kec Kudu'),
('PG014', 'Sugiono, S.Pd', '19640212 200604 1 ', 'Menturus Kudu Jombang'),
('PG015', 'Saptatuhu M, S.Pd', '19710712 200604 1 ', 'Ds.Katemas Kec. Kudu '),
('PG016', 'Drs. Sadak ', '19651112 200701 1 ', 'Jombatan Kesamben '),
('PG017', 'Drs. Bambang S', '19640405 200701 1 ', 'Sumber Teguh Kudu '),
('PG018', 'Imam Asruri, S.Pd', '19680529 200701 1 ', 'Sumber Teguh Kudu '),
('PG019', 'Tri Wahyuningsih, S.Pd', '19690119 200701 2 ', 'Sidokaton Kudu Jombang'),
('PG020', 'Dra. Sudarsih ', '19680602 200701 2 ', 'Sumber Teguh Kudu '),
('PG021', 'Drs.Djoko Soerjono', '19620703 200801 1 ', 'Ds Tapen Kudu Jombang'),
('PG022', 'Siswono, S.Pd ', '19710315 200801 1 ', 'Ds Tapen Kudu Jombang'),
('PG023', 'Mufarokhah, S.Pd', '19680403 200801 2 ', 'Ds Tapen Kudu Jombang'),
('PG024', 'Indarrini, S.Pd', '19720412 200801 2 ', 'Jatigedong Ploso Jombng'),
('PG025', 'Muknaji, S.Pd', '19700105 200801 1 ', 'Ds. Bakalan Rayung Kudu'),
('PG026', 'Kuswandari, S.P', '19770211 200801 2 ', 'Ds. Tapen Kec Kudu'),
('PG027', 'Sido, S.Pd', '19691007 200801 1 ', 'Menturus Kudu Jombang'),
('PG028', 'M. Faried Wadji A, S.Ag', '19740816 200901 1 ', 'Ds.Katemas Kec. Kudu '),
('PG029', 'Ahmad Burhan, S.Pd', '19800227 200901 1 ', 'Jombatan Kesamben '),
('PG030', 'Dolly Ryan SBL, S.TP', '19810223 200901 1 ', 'Sumber Teguh Kudu '),
('PG031', 'Muh. Afandi, SPd.', '19681010 199301 1 ', 'Sumber Teguh Kudu '),
('PG032', 'Saiful Abror, M.Pd', '', 'Sidokaton Kudu Jombang'),
('PG033', 'Nurhadi, S,Pd', '', 'Sumber Teguh Kudu '),
('PG034', 'Nurcholis, S.T', '', 'Ds Tapen Kudu Jombang'),
('PG035', 'M. Mahrus Efendi, S.Pd', '', 'Ds Tapen Kudu Jombang'),
('PG036', 'Dra. Wiwik Agustin', '', 'Ds Tapen Kudu Jombang'),
('PG037', 'Ahmad Zainuddin', '', 'Jatigedong Ploso Jombng'),
('PG038', 'Sumarni, S.Pd', '', 'Ds. Bakalan Rayung Kudu'),
('PG039', 'Nanang Setiyono, S.Pd', '', 'Ds. Tapen Kec Kudu'),
('PG040', 'Totok Kariono, S.T.', '', 'Menturus Kudu Jombang'),
('PG041', 'Endang Widyani', '', 'Ds.Katemas Kec. Kudu '),
('PG042', 'M. Saibani W, S.Pd', '', 'Jombatan Kesamben '),
('PG043', 'Ludfi Diana , S.Pd', '', 'Sumber Teguh Kudu '),
('PG044', 'Anik Faiza, S.PdI', '', 'Sumber Teguh Kudu '),
('PG045', 'Turzaen Aziz M, S.Pd', '', 'Sidokaton Kudu Jombang');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(20) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_peminjaman` varchar(20) DEFAULT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `id_petugas` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjaman`, `id_pegawai`, `id_petugas`) VALUES
('INV/201901', '2019-04-10', '2019-04-11', 'Di Kembalikan', 'PG002', '1'),
('INV/201902', '2019-04-10', '2019-04-11', 'Di Kembalikan', 'PG006', '1'),
('INV/201903', '2019-04-10', '2019-04-12', 'Di Pinjam', 'PG001', '1'),
('INV/201904', '2019-04-10', '2019-04-12', 'Di Kembalikan', 'PG004', '1'),
('INV/201905', '2019-04-11', '2019-04-12', 'Di Kembalikan', 'PG007', '1'),
('INV/201906', '0000-00-00', '2019-04-12', 'Di Proses', 'PG001', '1'),
('INV/201907', '0000-00-00', '2019-04-13', 'Di Proses', 'PG005', '1'),
('INV/201908', '2019-04-10', '2019-04-12', 'Di Proses', 'PG005', '1'),
('INV/201909', '2019-04-10', '2019-04-11', 'Di Pinjam', 'PG010', '1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` char(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_level` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `id_ruang`, `id_level`) VALUES
('1', 'Firman Wahyudi', 'firman', 'firman', 3, '2'),
('2', 'Administrator', 'admin', 'admin', 0, '1'),
('3', 'Ilham Pratama Bustyan', 'ilham', 'ilham', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(40) NOT NULL,
  `kode_ruang` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`) VALUES
(0, 'Semua Ruangan', 'RG00', 'Semua Ruang Bisa Diakses'),
(1, 'TU', 'RG01', 'Ruangan Tata Usaha'),
(2, 'Lab DKV', 'RG02', 'Ruangan Lab Desain Komunikasi Visual'),
(3, 'Lab RPL', 'RG03', 'Ruangan Lab Rekayasa Perangkat Lunak'),
(4, 'Lab MM', 'RG04', 'Ruangan Lab Multimedia'),
(5, 'Lab TKJ', 'RG05', 'Ruangan Lab Teknik Komputer dan Jaringan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpinjam`
--
ALTER TABLE `detailpinjam`
  ADD PRIMARY KEY (`id_detailpinjam`),
  ADD KEY `id_inventaris` (`id_inventaris`),
  ADD KEY `peminjaman` (`id_peminjaman`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `ruang` (`id_ruang`),
  ADD KEY `jenis` (`id_jenis`),
  ADD KEY `petugasg` (`id_petugas`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `pegawai` (`id_pegawai`),
  ADD KEY `petugas` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `level` (`id_level`),
  ADD KEY `ruang` (`id_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailpinjam`
--
ALTER TABLE `detailpinjam`
  MODIFY `id_detailpinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpinjam`
--
ALTER TABLE `detailpinjam`
  ADD CONSTRAINT `id_inven` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_pemin` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `petugasg` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ruang` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

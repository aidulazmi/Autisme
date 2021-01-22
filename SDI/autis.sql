-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 07:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autis`
--

-- --------------------------------------------------------

--
-- Table structure for table `defisiensi`
--

CREATE TABLE `defisiensi` (
  `id_defisiensi` varchar(15) NOT NULL,
  `defisiensi` varchar(100) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `defisiensi`
--

INSERT INTO `defisiensi` (`id_defisiensi`, `defisiensi`, `solusi`) VALUES
('D001', 'Autis Ringan', 'Memberikan Perhatian Lebih'),
('D002', 'Autis Sedang', 'Membawa Konsultasi'),
('D003', 'Autis Berat', 'MElakukan Pengobatan Rutin Ke Psikolog');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `ringan` double NOT NULL,
  `sedang` double NOT NULL,
  `berat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `ringan`, `sedang`, `berat`) VALUES
('G001', 'Menjauhi diri dari orang dewasa', 0.15, 0.4, 0.65),
('G002', 'Pergaulan bersifat “ompersonal” (hanya orang terdekat)', 0.15, 0.4, 0.65),
('G003', 'Hanya dapat menirukan kata-kata, gerakan, suara yang sederhana	', 0.15, 0.4, 0.65),
('G004', 'Dapat menirukan kata, suara dan gerakan setelah disuruh berkali-kali', 0.15, 0.4, 0.65),
('G005', 'Menggunakan objek childish (kekanak-kanakan) misal: menghisap, membanting benda-benda', 0.15, 0.4, 0.65),
('G006', 'Diperingatkan berkali-kali untuk melihat objek', 0.15, 0.4, 0.65),
('G007', 'Menghindari kontak mata', 0.15, 0.4, 0.65),
('G008', 'Tanggapan pendengaran berlebihan seperti jika ada suara-suara disekelilingnya,anak langsung menoleh', 0.15, 0.4, 0.65),
('G009', 'Tidak ada tanggapan pendengaran pada suara-suara tertentu (hanya mendengar suara yang dikenal sepert', 0.15, 0.4, 0.65),
('G010', 'Keterlambatan bicara (terbata-bata), tapi masih bisa dimengerti', 0.15, 0.4, 0.65),
('G011', 'Memegang apa yang diinginkan', 0.15, 0.4, 0.65),
('G012', 'Dapat disuruh tetap pada aktivitasnya', 0.15, 0.4, 0.65),
('G013', 'Sedikit bergerak/ malas bergerak', 0.15, 0.4, 0.65),
('G014', 'Lebih suka menyendiri', 0.15, 0.4, 0.65),
('G015', 'Tidak tertarik bermain dengan teman sebaya', 0.15, 0.4, 0.65),
('G016', 'Lambat sekali menirukan kata, suara, dan gerakan', 0.15, 0.4, 0.65),
('G017', 'Anak kurang tertarik terhadap objek', 0.15, 0.4, 0.65),
('G018', 'Penggunaan objek sangat aneh (misal: benda hanya diputar-putar dengan waktu lama)', 0.15, 0.4, 0.65),
('G019', 'Terpukau pada bagian benda tertentu', 0.15, 0.4, 0.65),
('G020', 'Melihat objek dengan sudut pandang aneh', 0.15, 0.4, 0.65),
('G021', 'Melihat objek dengan jarak sangat dekat', 0.15, 0.4, 0.65),
('G022', 'Terkejut dengan suara-suara', 0.15, 0.4, 0.65),
('G023', 'Menutup telinganya bila mendengar suara-suara', 0.15, 0.4, 0.65),
('G024', 'Ekolalia (bicara berulang-ulang)', 0.15, 0.4, 0.65),
('G025', 'Kemampuan bicara kurang  (seperti kumur2) tapi masih dapat dimengerti ', 0.15, 0.4, 0.65),
('G026', 'Tidak mengerti isyarat atau ekspresi orang lain', 0.15, 0.4, 0.65),
('G027', 'Sangat aktif dan sulit dikendalikan', 0.15, 0.4, 0.65),
('G028', 'Tidur sampai larut malam', 0.15, 0.4, 0.65),
('G029', 'Sangat acuh dan tak mau menyadari ada orang lain didekatnya', 0.15, 0.4, 0.65),
('G030', 'Menarik perhatian anak harus dilakukan usaha yang sangat keras', 0.15, 0.4, 0.65),
('G031', 'Tidak dapat menirukan kata,suara, atau gerakan', 0.15, 0.4, 0.65),
('G32', 'Sangat sulit ditarik perhatiannya pada objek lain', 0.15, 0.4, 0.65),
('G33', 'Sangat sulit menggunakan objek dengan benar', 0.15, 0.4, 0.65),
('G34', 'Sangat keras tidak mau melihat objek', 0.15, 0.4, 0.65),
('G35', 'Melihat sesuatu dengan sangat ekstrim', 0.15, 0.4, 0.65),
('G36', 'Tidak menanggapi suara, seperti tuli, tapi bukan tuli', 0.15, 0.4, 0.65),
('G37', 'Kemampuan bicara tidak dapat dimengerti', 0.15, 0.4, 0.65),
('G38', 'Isyarat aneh yang sulit dimengerti (misal: menyampaikan sesuatu dengan menarik-narik baju orang tuan', 0.15, 0.4, 0.65),
('G39', 'Kadang sangat aktif, kadang sangat in-aktif', 0.15, 0.4, 0.65);

-- --------------------------------------------------------

--
-- Table structure for table `keparahan`
--

CREATE TABLE `keparahan` (
  `id_keparahan` int(11) NOT NULL,
  `keparahan` varchar(100) NOT NULL,
  `rangeMin` double NOT NULL,
  `rangeMax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keparahan`
--

INSERT INTO `keparahan` (`id_keparahan`, `keparahan`, `rangeMin`, `rangeMax`) VALUES
(1, 'ringan', 0, 0.4),
(2, 'sedang', 0.4, 0.8),
(3, 'berat', 0.6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_defisiensi` varchar(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `id_defisiensi`, `id_gejala`) VALUES
(1, 'D001', 'G001'),
(2, 'D001', 'G002'),
(3, 'D001', 'G003'),
(4, 'D001', 'G005'),
(5, 'D001', 'G007'),
(6, 'D003', 'G031'),
(7, 'D003', 'G033'),
(8, 'D003', 'G008'),
(9, 'D003', 'G018'),
(10, 'D003', 'G017'),
(11, 'D003', 'G034'),
(12, 'D002', 'G018'),
(13, 'D002', 'G021'),
(14, 'D002', 'G022'),
(15, 'D003', 'G001'),
(16, 'D003', 'G019'),
(17, 'D003', 'G020'),
(18, 'D003', 'G028'),
(19, 'D003', 'G029'),
(20, 'D003', 'G037'),
(21, 'D003', 'G038'),
(22, 'D003', 'G031'),
(23, 'D002', 'G015'),
(24, 'D002', 'G016'),
(25, 'D002', 'G001'),
(26, 'D002', 'G023'),
(27, 'D002', 'G024'),
(28, 'D002', 'G025'),
(29, 'D002', 'G026'),
(30, 'D002', 'G027'),
(31, 'D003', 'G018'),
(32, 'D003', 'G035'),
(33, 'D003', 'G036'),
(34, 'D002', 'G013'),
(35, 'D002', 'G014'),
(36, 'D002', 'G017'),
(37, 'D002', 'G018'),
(38, 'D001', 'G017'),
(39, 'D001', 'G009'),
(40, 'D001', 'G011'),
(41, 'D001', 'G012'),
(42, 'D002', 'G010'),
(43, 'D002', 'G038'),
(44, 'D002', 'G039'),
(45, 'D001', 'G004'),
(46, 'D001', 'G005');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hakakses` enum('Admin','Pakar','Pasien') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hakakses`, `nama`, `jk`, `email`, `hp`) VALUES
('USA001', 'admin1', 'admin1', 'Admin', 'admin1', 'laki-laki', 'admin1@gmail.com', '052441555888'),
('USA002', 'pasien2', 'pasien2', 'Admin', 'pasien2', 'laki-laki', 'pasien2@gmail.com', '05422145522'),
('USA003', '1', '1', 'Pasien', '1', 'laki-laki', 'c@fghg.com', '85225889'),
('USA1', 'admin', 'admin', 'Admin', 'admin', 'laki-laki', 'admin@gmail.com', '08524788965547'),
('USA2', 'pasien', 'pasien', 'Pasien', 'pasien', 'perempuan', 'pasien@gmail.com', '085214445223368');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `defisiensi`
--
ALTER TABLE `defisiensi`
  ADD PRIMARY KEY (`id_defisiensi`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `keparahan`
--
ALTER TABLE `keparahan`
  ADD PRIMARY KEY (`id_keparahan`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keparahan`
--
ALTER TABLE `keparahan`
  MODIFY `id_keparahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

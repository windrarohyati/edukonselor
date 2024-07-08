-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 06:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `basis_rule`
--

CREATE TABLE `basis_rule` (
  `id_rule` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basis_rule`
--

INSERT INTO `basis_rule` (`id_rule`, `id_jurusan`) VALUES
(29, 1),
(30, 2),
(31, 3),
(28, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_basis_rule`
--

CREATE TABLE `detail_basis_rule` (
  `id_rule` int(11) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_basis_rule`
--

INSERT INTO `detail_basis_rule` (`id_rule`, `id_kriteria`) VALUES
(28, 34),
(28, 35),
(28, 36),
(28, 37),
(28, 38),
(29, 39),
(29, 40),
(29, 41),
(29, 42),
(29, 43),
(30, 44),
(30, 45),
(30, 46),
(30, 47),
(30, 48),
(30, 49),
(30, 50),
(31, 51),
(31, 52),
(31, 53),
(31, 54),
(31, 55),
(31, 56),
(31, 57);

-- --------------------------------------------------------

--
-- Table structure for table `detail_tes`
--

CREATE TABLE `detail_tes` (
  `id_tes` int(11) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_tes`
--

INSERT INTO `detail_tes` (`id_tes`, `id_kriteria`) VALUES
(23, 34),
(23, 39),
(23, 57),
(24, 44),
(24, 45),
(24, 47),
(24, 51),
(24, 55),
(25, 34),
(25, 39),
(25, 41),
(25, 42),
(25, 57),
(26, 37),
(26, 44),
(26, 47),
(26, 55),
(27, 57);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_tes` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `persentase` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_tes`, `id_jurusan`, `persentase`) VALUES
(23, 1, 20),
(23, 3, 14),
(23, 4, 20),
(24, 2, 43),
(24, 3, 29),
(25, 1, 60),
(25, 3, 14),
(25, 4, 20),
(26, 2, 29),
(26, 3, 14),
(26, 4, 20),
(27, 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `keterangan`, `mapel`) VALUES
(1, 'Teknik Otomotif', 'Jurusan Teknik Otomotif di SMK adalah program pendidikan yang dirancang untuk menghasilkan tenaga terampil di bidang perawatan dan perbaikan kendaraan bermotor.', 'Dasar-dasar Teknik Otomotif, Pemeliharaan Mesin, Sistem Kelistrikan Otomotif, Sistem Suspensi dan Kemudi, Teknologi Bahan Bakar dan Emisi, Diagnosa Kerusakan, Kewirausahaan dan Manajemen Bengkel'),
(2, 'Desain Komunikasi Visual ', 'Desain Komunikasi Visual (DKV) adalah bidang studi yang berfokus pada penggunaan elemen visual untuk menyampaikan pesan atau informasi. Ini mencakup berbagai aspek seperti grafis, ilustrasi, tipografi', 'Dasar-dasar Desain Grafis, Teknik Komputer Grafis, Fotografi Dasar, Ilustrasi dan Tipografi, Animasi Dasar, Desain Media Interaktif'),
(3, 'Broadcasting dan Perfilman', 'Jurusan Broadcasting/Perfilman di Sekolah Menengah Kejuruan (SMK) adalah program pendidikan yang dirancang untuk mempersiapkan siswa menjadi tenaga profesional di bidang penyiaran dan perfilman.', 'Dasar-Dasar Broadcasting, Produksi Program TV dan Radio, Teknik Pengambilan Gambar, Editing Video dan Audio, Penulisan Skenario, Public Speaking dan Voice Over, Manajemen Produksi, Animasi Dasar'),
(4, 'Teknik Mesin', 'Teknik Mesin adalah jurusan yang mempelajari berbagai aspek terkait perancangan, produksi, dan perawatan mesin.', 'Gambar Teknik Mesin, Teknologi Mekanik, Proses Produksi, Pemeliharaan dan Perbaikan Mesin, Penggunaan Alat Ukur, Pneumatik dan Hidrolik ');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`) VALUES
(34, 'Dapat berpikir kreatif dan memiliki kemampuan untuk mencari solusi untuk masalah mesin'),
(35, 'Memiliki minat yang tinggi di bidang Teknik Mesin'),
(36, 'Mau belajar mengoperasikan alat – alat pemesinan'),
(37, 'Mau mempelajari perancangan, pengembangan dan pengelolaan mesin'),
(38, 'Mau mempelajari penggunaan perangkat lunak mesin'),
(39, 'Kemampuan untuk berinovasi dan menciptakan solusi untuk kendaraan menjadi lebih baik'),
(40, 'Memiliki minat yang tinggi di bidang Otomotif'),
(41, 'Mampu / mau belajar materi Teknik Kendaraan Ringan'),
(42, 'Mampu / mau belajar materi Teknik Sepeda Motor'),
(43, 'Mau mempelajari perawatan pemeliharaan dan perbaikan kendaraan ringan'),
(44, 'Memiliki kreativitas dan kemampuan menghasilkan ide-ide unik dan desain yang menarik.'),
(45, 'Memiliki minat yang tinggi di bidang Desain'),
(46, 'Memiliki bakat / mau belajar menggambar'),
(47, 'Tertarik untuk mempelajari penggunaan perangkat lunak desain grafis seperti Adobe Photoshop, Illustrator, CorelDRAW, atau InDesign.'),
(48, 'Mau mempelajari penggunaan perangkat lunak dan perangkat keras komputer'),
(49, 'Mau mempelajari cara menggunakan kamera, termasuk pengaturan fokus, pencahayaan, dan pengaturan lainnya.'),
(50, 'Mau mempelajari bidang fotografi dan videografi'),
(51, 'Memiliki kreativitas dan inovasi dalam bidang broadcasting dan perfilman, mampu menciptakan konten yang unik dan menarik.'),
(52, 'Memiliki minat yang tinggi di bidang kreatif'),
(53, 'Memiliki kemampuan komunikasi yang baik'),
(54, 'Mampu/mau mempelajari cara mengedit video dan audio menggunakan komputer'),
(55, 'Tertarik untuk mempelajari cara mengoperasikan peralatan audio dan video, termasuk kamera, mikrofon, dan perangkat lainnya yang digunakan dalam produksi konten broadcasting dan perfilman'),
(56, 'Mau mempelajari fotografi, videografi dan sinematografi'),
(57, 'Berani tampil di depan kamera');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id_tes` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id_tes`, `tanggal`, `nama`) VALUES
(23, '2024-06-05', 'ujang'),
(24, '2024-06-14', 'Tatang'),
(25, '2024-06-25', 'Kokom Komariah'),
(26, '2024-06-26', 'Dono'),
(27, '2024-07-06', '.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`) VALUES
(2, 'Guru', '77e69c137812518e359196bb2f5e9bb9', 'Guru'),
(5, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(7, 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'Kepsek'),
(9, 'Wakasek', 'b0e01a6db48522d0672abc66c07965f6', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basis_rule`
--
ALTER TABLE `basis_rule`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `detail_basis_rule`
--
ALTER TABLE `detail_basis_rule`
  ADD KEY `id_rule` (`id_rule`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `detail_tes`
--
ALTER TABLE `detail_tes`
  ADD KEY `id_tes` (`id_tes`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD KEY `id_tes` (`id_tes`,`id_jurusan`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_rule`
--
ALTER TABLE `basis_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basis_rule`
--
ALTER TABLE `basis_rule`
  ADD CONSTRAINT `basis_rule_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `detail_basis_rule`
--
ALTER TABLE `detail_basis_rule`
  ADD CONSTRAINT `detail_basis_rule_ibfk_1` FOREIGN KEY (`id_rule`) REFERENCES `basis_rule` (`id_rule`),
  ADD CONSTRAINT `detail_basis_rule_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `detail_tes`
--
ALTER TABLE `detail_tes`
  ADD CONSTRAINT `detail_tes_ibfk_1` FOREIGN KEY (`id_tes`) REFERENCES `tes` (`id_tes`),
  ADD CONSTRAINT `detail_tes_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `detail_basis_rule` (`id_kriteria`);

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`id_tes`) REFERENCES `detail_tes` (`id_tes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

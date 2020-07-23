-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 03:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatatanon`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(50) NOT NULL,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID_artikel`, `judul`, `isi`, `tanggal_upload`, `author`, `thumbnail`) VALUES
(10, 'test', '<p>isi<br></p>', '2020-07-06 17:02:48', 'admin', 'bb449f36c364928128647975010a276c.jpg'),
(11, 'hafidz lele stealer', '<div class=\"article fade-up\">\r\n              <div id=\"lipsum\">\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius\r\n gravida magna nec volutpat. Nunc pellentesque interdum nisi id mattis. \r\nPellentesque id lacus metus. Nulla gravida gravida tortor et \r\nsollicitudin. Aenean mattis leo ex, sit amet pulvinar urna volutpat non.\r\n Suspendisse potenti. Sed vel magna nec lectus elementum posuere. Sed \r\nsed gravida lorem. Integer felis velit, hendrerit non orci in, pulvinar \r\nmollis sem. Proin eget urna id velit mattis pretium ut id massa. Sed \r\nposuere sit amet lacus eu aliquet. Maecenas malesuada leo in volutpat \r\ntincidunt.\r\n</p>\r\n<p>\r\nDonec eget tristique magna. Phasellus maximus, ligula vel pretium \r\neuismod, nunc lacus ullamcorper ex, a tincidunt purus urna vitae dui. \r\nPhasellus pellentesque urna vitae nisl dapibus scelerisque. Vivamus \r\nfermentum lobortis nisi, ac malesuada nibh iaculis ut. Mauris a eleifend\r\n magna. In at posuere sem. Aliquam interdum felis nec velit vulputate \r\ndapibus. Vestibulum urna lectus, ullamcorper quis ultricies a, lobortis \r\nin purus. Etiam aliquam ornare dui, vel tincidunt massa aliquam euismod.\r\n Pellentesque egestas erat vitae dolor porta, id dictum ipsum tincidunt.\r\n Cras magna sapien, vestibulum nec massa eu, rhoncus sollicitudin \r\ntellus. Proin orci est, tristique vel justo pretium, cursus varius diam.\r\n Donec in risus nec tortor pharetra sollicitudin quis eu arcu. Mauris \r\nnec fermentum erat.\r\n</p></div>          </div>', '2020-07-06 17:03:15', 'admin', '6f1701d19dd61fc9e8b3b6247f88a95e.jpg'),
(12, 'judul3', '<div id=\"lipsum\">\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius\r\n gravida magna nec volutpat. Nunc pellentesque interdum nisi id mattis. \r\nPellentesque id lacus metus. Nulla gravida gravida tortor et \r\nsollicitudin. Aenean mattis leo ex, sit amet pulvinar urna volutpat non.\r\n Suspendisse potenti. Sed vel magna nec lectus elementum posuere. Sed \r\nsed gravida lorem. Integer felis velit, hendrerit non orci in, pulvinar \r\nmollis sem. Proin eget urna id velit mattis pretium ut id massa. Sed \r\nposuere sit amet lacus eu aliquet. Maecenas malesuada leo in volutpat \r\ntincidunt.\r\n</p>\r\n<p>\r\nDonec eget tristique magna. Phasellus maximus, ligula vel pretium \r\neuismod, nunc lacus ullamcorper ex, a tincidunt purus urna vitae dui. \r\nPhasellus pellentesque urna vitae nisl dapibus scelerisque. Vivamus \r\nfermentum lobortis nisi, ac malesuada nibh iaculis ut. Mauris a eleifend\r\n magna. In at posuere sem. Aliquam interdum felis nec velit vulputate \r\ndapibus. Vestibulum urna lectus, ullamcorper quis ultricies a, lobortis \r\nin purus. Etiam aliquam ornare dui, vel tincidunt massa aliquam euismod.\r\n Pellentesque egestas erat vitae dolor porta, id dictum ipsum tincidunt.\r\n Cras magna sapien, vestibulum nec massa eu, rhoncus sollicitudin \r\ntellus. Proin orci est, tristique vel justo pretium, cursus varius diam.\r\n Donec in risus nec tortor pharetra sollicitudin quis eu arcu. Mauris \r\nnec fermentum erat.\r\n</p></div>', '2020-07-06 17:03:57', 'admin', '5d20d6baea80da5c9f42ade54156e6f8.jpg'),
(13, 'judul2', '<p>isi<br></p>', '2020-07-06 17:15:55', 'admin', '21955c2163fabace50dc1eea954fcc9b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `ID_gambar` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`ID_gambar`, `judul`, `nama_gambar`, `tanggal_upload`, `author`) VALUES
(3, 'Anyaman Mendong', 'a3e6e28fd973aaea6227f8973b37f641.jpg', '2020-07-04 00:39:09', 'admin'),
(4, 'Belajar Gamelan', '71720739710cd17ece40a9d946804ff4.jpg', '2020-07-04 00:39:42', 'admin'),
(5, 'Kunjungan SD', 'aaf5374eb1561755fd688e74a8544914.jpg', '2020-07-04 00:40:12', 'admin'),
(6, 'Dolanan Serok Mancung', '379d32ef259ca206aed12a12d61e2115.jpg', '2020-07-04 00:40:34', 'admin'),
(7, 'Duta Wisata', '04e935a2ebe36a97bbd480b41827ed80.jpg', '2020-07-04 00:40:52', 'admin'),
(8, 'Grobak Sodor', 'b20a79cb55f19b61f2f3a6b129b4eaa3.jpg', '2020-07-04 00:41:11', 'admin'),
(9, 'Tari Kuda Debog', 'f4ac7be931671af4c205af8a24f43bea.jpg', '2020-07-04 00:41:40', 'admin'),
(10, 'Lereng Telomoyo', '4ca9f6eb0e0112f350dab2f4f7d42a88.jpg', '2020-07-04 00:42:09', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `ID_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`ID_paket`, `nama_paket`, `keterangan`, `harga`, `gambar`) VALUES
(1, 'panas 1', 'ayam, nasi, fruit tea', 20000, '81875a87dd6faef49bd496e4cfca4667.png'),
(2, 'panas 2', 'ayam 2, nasi, fruit tea ', 25000, '037a6540eb87c8e9271040cdb0945a76.png'),
(3, 'panas spesial', 'ayam, telur, nasi, fruit tea', 30000, 'f3499e9ce3fef2eca2fc0497b4bd28a6.png');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `ID_publish` int(11) NOT NULL,
  `ID_testimoni` int(11) NOT NULL,
  `tanggal_publish` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`ID_publish`, `ID_testimoni`, `tanggal_publish`) VALUES
(6, 7, '2020-07-04 00:31:39'),
(7, 8, '2020-07-04 00:31:39'),
(8, 9, '2020-07-04 00:31:39'),
(10, 10, '2020-07-08 01:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `ID_testimoni` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `testimoni` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`ID_testimoni`, `nama`, `instansi`, `testimoni`, `tanggal`) VALUES
(7, 'Bang Yoss', 'Tokoh & Pelaku Pariwisata, Motivator Desa Wisata N', ' Desa Wisata Tanon adalah desa wisata satu-satunya di Indonesia dengan branding Desa Menari. Sebuah dusun kecil yang terdiri dari satu keluarga besar yang secara turun temurun adalah pelestari budaya. Desa Menari akan menjadi unggulan di Jawa Tengah khususnya di kabupaten Semarang untuk menjadi kepuasan batin para seniman dalam mengekspresikan rasa kecintaan akan kesenian rakyat. Walaupun belum sepeserpun dapat bantuan dari pemerintah, khususnya,saya berharap untuk bisa menjadi barometer pembelajaran bagi desa wisata budaya. Teruslah bermimpi untuk berkreasi dan tanpa tedeng aling-aling memajukan desa melalui kecintaan budaya. Semoga masyarakatnya terus kreatif untuk menumbuhkan ekonomi kreatif berbasis budaya,tradisi lokal seperti dolanan tradisional dan kreasi mata pencaharian masyarakat untuk menambah daya tarik paket kunjungan di Desa Wisata ini.', '2020-07-04 00:28:47'),
(8, 'Farinia Fianto', 'Managing Director ICIP Jakarta', 'Pertama kali menjejakkan kaki ke Desa Wisata Tanon,Ngrawan,Getasan saya hanya menemukan kesan desa yang sepi,terisolir dan tak menyangka kalau itu adalah sebuah desa wisata.Hanya keasrian,keramahtamahan dan suasana desa yang masih alami yang saya rasakan. Namun kesan itu buyar ketika mengenal lebih jauh Desa wisata Tanon terutama penduduknya yang kreatif dan bersemangat melestarikan budaya dan tradisi. Sungguh menjadi sebuah inspirasi buat saya untuk mengembangkan potensi desa menjadi desa mandiri melalui kecintaan akan lingkungan dan budayanya. Salut untuk warga desa wisata Tanon,maju terus dan sukses selalu.', '2020-07-04 00:28:47'),
(9, 'Mega', 'Tim Program JENDELA MNC TV Jakarta', 'Dusun tanon tak hanya mengandalkan kegiatan beternak dan bertani,Warga dusun tanon mampu memadukan jiwa seni,kreativitas dan inovasi mereka dalam mengolah hasil alam. Melalui cara inilah,warga Dusun Tanon membangun perekonomian mereka secara mandiri.', '2020-07-04 00:28:47'),
(10, 'Hj. Erma Khanifah,S.Pd', 'Motivator&Fasilitator UKM', 'Nothing I Can Say,just…luaaaarrr biasa! Desa Tanon dengan segala kesederhanaannya ternyata bisa dikemas sebagai desa wisata dengan segala paketnya. Semoga bisa menjadi inspirasi bagi desa lainnya.Keep it up!.', '2020-07-04 00:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `Nama`, `Username`, `Password`) VALUES
(18, 'admin', 'ino', '$2y$10$.K3.JJq/PH0y46gEXdvVXu4N7DxtluMWYiM8knJIZ7e4.kRop6A.K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`ID_gambar`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`ID_paket`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`ID_publish`),
  ADD KEY `publikasi_ibfk_1` (`ID_testimoni`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`ID_testimoni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ID_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `ID_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `ID_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `ID_publish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `ID_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD CONSTRAINT `publikasi_ibfk_1` FOREIGN KEY (`ID_testimoni`) REFERENCES `testimoni` (`ID_testimoni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

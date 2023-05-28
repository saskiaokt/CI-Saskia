-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 09:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `tanggal_event` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal_event`, `deskripsi`, `gambar`) VALUES
(18, 'Event 1', '2022-06-01', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu ultrices vitae auctor eu augue ut lectus arcu bibendum. Massa tempor nec feugiat nisl pretium fusce id. Ac auctor augue mauris augue neque gravida. Urna duis convallis convallis tellus id interdum velit laoreet. At auctor urna nunc id cursus metus. Nec feugiat nisl pretium fusce id velit ut. Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Placerat orci nulla pellentesque dignissim enim sit amet venenatis. Aliquet risus feugiat in ante metus dictum at. Integer malesuada nunc vel risus commodo.</p>\r\n\r\n<p>Sed id semper risus in. Massa tincidunt nunc pulvinar sapien et. Ut morbi tincidunt augue interdum velit euismod. Mattis aliquam faucibus purus in massa. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Facilisis leo vel fringilla est ullamcorper. Imperdiet sed euismod nisi porta lorem mollis. Egestas diam in arcu cursus euismod quis viverra. Venenatis tellus in metus vulputate. Accumsan sit amet nulla facilisi. Ut lectus arcu bibendum at. Nulla at volutpat diam ut venenatis. Aliquam ut porttitor leo a diam sollicitudin. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Mi quis hendrerit dolor magna eget. Nibh nisl condimentum id venenatis a condimentum vitae. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus.</p>\r\n\r\n<p>Placerat orci nulla pellentesque dignissim enim sit amet. In dictum non consectetur a erat nam at lectus urna. Sed arcu non odio euismod lacinia at quis risus sed. Dignissim suspendisse in est ante in. Turpis cursus in hac habitasse platea dictumst quisque sagittis. Sodales ut eu sem integer vitae justo eget magna. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. At tempor commodo ullamcorper a lacus vestibulum. In ornare quam viverra orci. Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien. Nec ullamcorper sit amet risus nullam eget felis eget. Est lorem ipsum dolor sit amet consectetur. Blandit aliquam etiam erat velit scelerisque in dictum non. Diam sit amet nisl suscipit. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Egestas diam in arcu cursus euismod quis viverra.</p>\r\n\r\n<p>Amet tellus cras adipiscing enim. At auctor urna nunc id cursus metus aliquam eleifend mi. Leo a diam sollicitudin tempor id. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Tempus imperdiet nulla malesuada pellentesque elit eget. Integer enim neque volutpat ac tincidunt vitae. Condimentum vitae sapien pellentesque habitant morbi. A pellentesque sit amet porttitor eget dolor morbi non arcu. Odio ut sem nulla pharetra diam sit. Nisi vitae suscipit tellus mauris. Auctor augue mauris augue neque gravida in fermentum et. Phasellus faucibus scelerisque eleifend donec. Id velit ut tortor pretium viverra suspendisse. Risus commodo viverra maecenas accumsan. Tempus iaculis urna id volutpat lacus laoreet non. Amet purus gravida quis blandit. Ut eu sem integer vitae justo eget magna fermentum. Scelerisque eleifend donec pretium vulputate sapien. Magna ac placerat vestibulum lectus mauris ultrices. Quam pellentesque nec nam aliquam sem.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1655245689_5c52cb77ae9a98c2af44.jpg'),
(20, 'Event 2', '2022-06-06', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus nullam eget felis eget nunc lobortis mattis aliquam. Convallis posuere morbi leo urna molestie at. Diam quam nulla porttitor massa id neque. Nunc scelerisque viverra mauris in aliquam. Quis blandit turpis cursus in hac. Id leo in vitae turpis massa sed elementum tempus. Ut faucibus pulvinar elementum integer. Viverra maecenas accumsan lacus vel. Vehicula ipsum a arcu cursus. Facilisis volutpat est velit egestas dui. Erat velit scelerisque in dictum non consectetur a erat nam.</p>\r\n\r\n<p>Netus et malesuada fames ac turpis egestas integer eget aliquet. Viverra aliquet eget sit amet tellus cras adipiscing. Dignissim enim sit amet venenatis urna. Nunc eget lorem dolor sed viverra. Et leo duis ut diam quam. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Libero justo laoreet sit amet cursus sit. Pellentesque elit eget gravida cum sociis natoque penatibus et. Neque volutpat ac tincidunt vitae semper quis lectus nulla at. Habitant morbi tristique senectus et netus et malesuada fames ac. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc. Volutpat est velit egestas dui id ornare. Urna neque viverra justo nec ultrices dui sapien eget mi. Duis ut diam quam nulla porttitor massa id. Commodo odio aenean sed adipiscing. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Enim nec dui nunc mattis. Cras sed felis eget velit aliquet sagittis id.</p>\r\n\r\n<p><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS48pxGTJk7MjWk-LBB2Fck0joerNxQ9uO3gMXJq7G9-5M3bJXztnE_2BvtKMpDjVPwxik&amp;usqp=CAU\" style=\"height:183px; margin:22px 10px; width:275px\" /></p>\r\n\r\n<p>Neque ornare aenean euismod elementum. Diam ut venenatis tellus in metus vulputate. Est ullamcorper eget nulla facilisi. Proin nibh nisl condimentum id venenatis a condimentum. Phasellus vestibulum lorem sed risus. Consectetur lorem donec massa sapien. Potenti nullam ac tortor vitae purus. Feugiat sed lectus vestibulum mattis. Felis donec et odio pellentesque diam volutpat commodo. Tempor nec feugiat nisl pretium fusce id velit. Volutpat diam ut venenatis tellus in metus vulputate. Nisi scelerisque eu ultrices vitae auctor eu augue ut.</p>\r\n\r\n<p>Mattis molestie a iaculis at erat pellentesque. Proin fermentum leo vel orci. Feugiat vivamus at augue eget arcu dictum varius. Dis parturient montes nascetur ridiculus mus. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum. Eu ultrices vitae auctor eu augue ut lectus arcu bibendum. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus. Ut consequat semper viverra nam libero justo. Eu sem integer vitae justo eget. Egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Dui id ornare arcu odio ut sem nulla pharetra. Blandit turpis cursus in hac habitasse platea dictumst. Feugiat in ante metus dictum at tempor. Vel orci porta non pulvinar neque laoreet. Condimentum lacinia quis vel eros donec ac odio tempor. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Tincidunt lobortis feugiat vivamus at. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1655245503_f2220e464b22cc3ec9d1.png');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `wa` varchar(40) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_event`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `email`, `wa`, `tanggal_daftar`) VALUES
(1, 20, 'Renaldi Noviandi', 'Laki-laki', 'Jakarta', 'renaldinoviandi9@gmail.com', '083845405765', '2023-05-15'),
(2, 18, 'Renaldi Noviandi', 'Laki-laki', 'Jakarta', 'renaldinoviandi1@gmail.com', '083845405765', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `profil_website`
--

CREATE TABLE `profil_website` (
  `id_profil_website` int(11) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi_atas` text NOT NULL,
  `deskripsi_bawah` text NOT NULL,
  `logo` text NOT NULL,
  `gambar_web1` text NOT NULL,
  `gambar_web2` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_website`
--

INSERT INTO `profil_website` (`id_profil_website`, `nama_website`, `alamat`, `deskripsi_atas`, `deskripsi_bawah`, `logo`, `gambar_web1`, `gambar_web2`, `email`, `wa`) VALUES
(1, 'E-Event', 'Desa Cinangsih, Kec. Cibogo, Kab. Subang, Prov. Jawa Barat', 'Aliquam porta ipsum eu arcu placerat, at mollis lacus tristique. Morbi et lectus in mi malesuada rutrum eu convallis urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam enim nulla, dictum vitae orci eu, scelerisque condimentum nulla. ', 'Aliquam porta ipsum eu arcu placerat, at mollis lacus tristique. Morbi et lectus in mi malesuada rutrum eu convallis urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam enim nulla, dictum vitae orci eu, scelerisque condimentum nulla. ', '1684038188_240af2aec11bf95b4cde.png', '1655949752_fbdda16728a01e58f86d.png', '1684038188_383cd2033430c50b6346.png', 'adminevent@gmail.com', 83845405765);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` enum('Admin') NOT NULL,
  `status_verifikasi` enum('Belum Verifikasi','Sudah Verifikasi') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `username`, `password`, `role`, `status_verifikasi`, `foto`) VALUES
(1, 'Admin', 'adminadmin@gmail.com', 'admin', 'password', 'Admin', 'Sudah Verifikasi', '1684039385_56c57fba106b7ffdc584.png'),
(40, 'Admin Event', 'adminevent@gmail.com', 'adminevent', 'adminevent', 'Admin', 'Sudah Verifikasi', '1684039013_e7a288e585819d48542e.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `profil_website`
--
ALTER TABLE `profil_website`
  ADD PRIMARY KEY (`id_profil_website`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil_website`
--
ALTER TABLE `profil_website`
  MODIFY `id_profil_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

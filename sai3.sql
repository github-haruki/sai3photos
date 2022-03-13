-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 03:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sai3`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hr` set('11','12','13','14','15','16','21','22','23','24','25','26','27','31','32','33','34','35','36','1A','1B','1C','1D','2A','2B','2C','2D','3A','3B','3C','3D','0') CHARACTER SET utf8 DEFAULT NULL,
  `place` set('校内','体育館','運動場','屋外','部展','クラス展','') CHARACTER SET utf8 DEFAULT NULL,
  `photographer` set('水谷海斗','大久保','林春輝','') CHARACTER SET utf8 NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `hr`, `place`, `photographer`, `uploaded_on`, `status`) VALUES
(15, 'saenai_wp_bs-sp1920x1080.jpg', '22', '体育館', '水谷海斗', '2022-03-12 23:14:43', '1'),
(16, '1920x1080_10.jpg', '22', 'クラス展', '水谷海斗', '2022-03-12 23:15:23', '1'),
(17, 'wp_pc.jpg', '22', '屋外', '水谷海斗', '2022-03-13 00:15:27', '1'),
(18, 'saenai-flat_wp02_1920x1080.jpg', '21', '部展', '水谷海斗', '2022-03-13 00:53:43', '1'),
(19, 'saenai_wp_megumi-sp1398x2592.jpg', '32', '屋外', '水谷海斗', '2022-03-13 00:58:01', '1'),
(20, 'wp_1920x1080.jpg', '13,22', '運動場', '水谷海斗', '2022-03-13 00:59:31', '1'),
(21, 'saenai-flat_wp01_1920x1080.jpg', '11,22', '屋外', '水谷海斗', '2022-03-13 01:31:16', '1'),
(22, 'wp_pc.jpg', '22', '屋外', '水谷海斗', '2022-03-13 16:31:25', '1'),
(23, '1920x1080_5.jpg', '11', '体育館', '水谷海斗', '2022-03-13 16:31:30', '1'),
(24, '1920x1080_10.jpg', NULL, NULL, '林春輝', '2022-03-13 17:08:18', '1'),
(25, 'saenai_wp_bs-sp1920x1080.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:31:04', '1'),
(26, 'saenai_wp_megumi-sp1398x2592.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:31:04', '1'),
(27, 'saenai_wp_megumi-sp1920x1080.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:31:04', '1'),
(28, '1920x1080_5.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:33:49', '1'),
(29, '1920x1080_10.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:33:49', '1'),
(30, 'saenai_wp_megumi-sp1398x2592.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:36:07', '1'),
(31, 'saenai_wp_megumi-sp1920x1080.jpg', NULL, NULL, '水谷海斗', '2022-03-13 23:36:07', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2014 at 06:11 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('089de425a9437d885581f466c42143f4', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1405589625, 'a:2:{s:9:"user_data";s:0:"";s:10:"flexi_auth";a:7:{s:15:"user_identifier";b:0;s:7:"user_id";b:0;s:5:"admin";b:0;s:5:"group";b:0;s:10:"privileges";b:0;s:22:"logged_in_via_password";b:0;s:19:"login_session_token";b:0;}}');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'General User'),
(3, 'vender', 'Vender to sign up'),
(8, 'dsaf', 'dsfa');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(200) NOT NULL,
  `cat_description` text NOT NULL,
  `cslug` varchar(40) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_title`, `cat_description`, `cslug`) VALUES
(10, 'house1', 'hhjh', 'house1'),
(15, 'car', 'jhhjkkk', ''),
(16, 'game', 'hik', ''),
(47, 'movie', 'herumna', 'movie'),
(54, 'mobile', 'this is ', 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `shipping_detail` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `rating` tinyint(100) NOT NULL,
  `featured` tinyint(30) NOT NULL,
  `publish` tinyint(30) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `stock_info` int(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `slug` varchar(455) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FKforcategory` (`cat_id`),
  KEY `fkforusers` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_description`, `product_image`, `shipping_detail`, `price`, `rating`, `featured`, `publish`, `cat_id`, `stock_info`, `user_id`, `slug`) VALUES
(1, 'samsung', 'Its a phone', 'Lighthouse.jpg', 'barberqueue', 2000, 3, 1, 1, 1, 1, NULL, ''),
(6, 'ZT', 'all brand new', 'IMG_20140604_1311244.jpg', 'nepal', 10000, 0, 0, 0, 1, 3, NULL, ''),
(7, 'Glass', 'all glass ', '130514-145510.jpg', 'samakhusi', 2000, 0, 0, 0, 1, 4, NULL, ''),
(8, 'photo', 'good', '130324-070729.jpg', 'samakhusi', 1000, 0, 0, 0, 4, 4, NULL, ''),
(9, '', '', '130324-0707291.jpg', '', 0, 0, 0, 0, 1, 0, NULL, ''),
(10, 'yak and yeti', 'Nepali  carpet', '130324-070945.jpg', 'samakhusi', 10000, 0, 0, 0, 6, 4, NULL, ''),
(11, 'slip phone', 'all brand new', '130330-194000.jpg', 'samakhusi', 1000, 0, 0, 0, 2, 2, NULL, ''),
(12, 'bag', 'all brand new', '130330-1940001.jpg', 'babarmahal', 10000, 0, 0, 0, 4, 1, NULL, ''),
(13, 'Quartz', 'nice one', '130330-1940003.jpg', 'babarmahal', 1000, 0, 0, 0, 7, 3, 1, ''),
(14, 'samsung', 't', '1538212_662168127166585_904223287_o2.jpg', '6768889', 6577, 0, 1, 1, 8, 3, 0, 'samsung'),
(15, 'Suzuki', 'This  is the best quality car ever manufactured!', '1618452_536029749827768_127561656_n.jpg', '0', 200000, 0, 0, 0, 15, 0, 0, 'suzuki'),
(16, 'Suzuki', 'This  is the best quality car ever manufactured!', '1618452_536029749827768_127561656_n1.jpg', '0', 200000, 0, 0, 0, 15, 0, 0, 'suzuki'),
(17, 'Sony Xperia', 'this is best ever ', '1618452_536029749827768_127561656_n2.jpg', '0', 350000, 0, 0, 0, 54, 0, 0, 'sony-xperia'),
(18, 'Dil hai tumara', 'this was so amazing', '383497_609688969044226_649377772_n3.jpg', '0', 5576778, 0, 0, 0, 47, 0, 0, 'dil-hai-tumara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `group_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `group_id`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1406870850, 1, 'Admin', 'istrator', 'ADMIN', '0', 1),
(16, '::1', 'hjjjkkj hgjhj', '$2y$08$8dzZnkRXo6VCw5cMcnbOhejaGrkb13pVxkEg5mcFHBvRqgvkmrPOq', NULL, 'girlkk@gmail.com', NULL, NULL, NULL, NULL, 1405847279, 1405847279, 1, 'hjjjkkj', 'hgjhj', 'hghjjk', '657878', 3),
(17, '::1', 'oops k ho yo', '$2y$08$jxZ1e5CZi502Mgspv3sq6.hcetbqxAQemskyehcsa8NvhJmuXIUIO', NULL, 'mero@gmail.com', NULL, NULL, NULL, NULL, 1405847781, 1405847797, 1, 'oops', 'k ho yo', 'tha chaina', '546556', 2),
(18, '::1', 'ram shaym', '$2y$08$JGYWgPGyHbJq1LAaHNPX2usi86ojmS0Uac..3y62v.uziV0LsmRTW', NULL, 'hari@gmail.com', NULL, NULL, NULL, NULL, 1405848025, 1405848025, 1, 'ram', 'shaym', 'hari', '6767', 3),
(19, '::1', 'ram shaym1', '$2y$08$RkFyrw32zQEjWIkV5aUja.qD4g7EJ9QkYy7aHQxW/acbH7Ae3t7US', NULL, 'hari@gmail.com', NULL, NULL, NULL, NULL, 1405848025, 1405848025, 1, 'ram', 'shaym', 'hari', '6767', 3),
(20, '::1', 'utsav bhetu', '$2y$08$6McvuKOiOsQYCVgIJ1Hu/.zw5R4jam.IkNtlOmzeEXO/hTVhEMC5C', NULL, 'utsav@gmail.com', NULL, NULL, NULL, NULL, 1405849280, 1405849280, 1, 'utsav', 'bhetu', 'bhetus', '888', 1),
(21, '::1', 'sabina kandel', '$2y$08$rha5OAtHDJxFoWXZKDC9ueUkZ17Cz7lnZwqLLUB/kYJ9zuPFqiibG', NULL, 'sab@gmail.com', NULL, NULL, NULL, NULL, 1405933454, 1405933454, 1, 'sabina', 'kandel', 'kkkkl', '546577', 3),
(22, '::1', 'hhhi hjhj', '$2y$08$qxyZ0UN26INxB5HL9wD1ueSDo5jYO3YfuN05lo7CtbBJHt9cM6Ws.', NULL, 'ss1@gmail.com', NULL, NULL, NULL, NULL, 1406022525, 1406022525, 1, 'hhhi', 'hjhj', 'hjhj', '54675', 2),
(23, '::1', 'kukkjjklk yuyui', '$2y$08$0hNYJXmn3SltbRvUlQdH4eCmzQ6eLknW1ayLL.YtFeKnVKaLTpu0O', NULL, 'v@gmail.com', NULL, NULL, NULL, NULL, 1406023703, 1406023703, 1, 'kukkjjklk', 'yuyui', 'uuyii', '78879898', 3),
(24, '::1', 'fdfg dfdsfs', '$2y$08$VO1.WCN/wZs14rlP9pFDdOV1I9LMluxBLyyzbekE1nRqinItPFUSO', NULL, 'test@gmail.com', NULL, NULL, NULL, NULL, 1406023837, 1406023837, 1, 'fdfg', 'dfdsfs', 'dfsdfsd', '45345', 8),
(25, '::1', 'fhskjdhkjh jhfdgjfnj', '$2y$08$9l.dkPyw4KPWiWkX9Pa1dOoLG0Q3Y4XuW0PqqrT5cqJdnOifaVo1m', NULL, 'tes@gmail.com', NULL, NULL, NULL, NULL, 1406023957, 1406023957, 1, 'fhskjdhkjh', 'jhfdgjfnj', 'jsfjksdhfhjs', '56757868', 8),
(26, '::1', 'ganga  rai', '$2y$08$7EMWzuvNcMTF/QT4Fvh2GuZG6Ds.TrKAnf2Ck7pF3EfPI0BKXt9Bq', NULL, 'ganga@gmail.com', NULL, NULL, NULL, NULL, 1406276524, 1406279445, 1, 'ganga ', 'rai', 'new comp', '657878', 2),
(27, '::1', 'kritii nemkul', '$2y$08$TPWoHBgnPMBNl8pYtFJRWucVQP.dkX0hHtzhpg19PJwahgTTY689G', NULL, 'kk@gmail.com', NULL, NULL, NULL, NULL, 1406376356, 1406871045, 1, 'kritii', 'nemkul', 'jjj', '678789', 3),
(28, '::1', 'gttht fdgfdg', '$2y$08$usWid6pRwKxzGu3A2qiiKeygRxsiHiRrKdsKGAuwn9bes7jqYzNJu', NULL, 'sas@gmail.com', NULL, NULL, NULL, NULL, 1406538076, 1406538453, 1, 'gttht', 'fdgfdg', '0', '243', 2),
(29, '::1', 'heroo heroo', '$2y$08$JnQqb0Ew1lWzxNpwTJykietOAmXrv6rKyZNcSwa1RdF46FtGWL/2S', NULL, 'hhh@gmail.com', NULL, NULL, NULL, NULL, 1406870943, 1406871019, 1, 'heroo', 'heroo', '0', '465776', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2),
(7, 23, 0),
(6, 23, 3),
(9, 24, 0),
(8, 24, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

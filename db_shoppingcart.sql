-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Jul 11, 2014 at 12:00 PM
=======
<<<<<<< HEAD
-- Generation Time: Jul 17, 2014 at 11:17 PM
=======
-- Generation Time: Jul 11, 2014 at 12:00 PM
>>>>>>> origin/forDesigners
>>>>>>> origin/forDesigners
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
('0d2370c35bd863c75c9f3d354770eb0f', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1405614163, 'a:3:{s:6:"userid";s:2:"10";s:5:"fname";s:6:"ertert";s:8:"validate";b:1;}'),
('6e18133f7cf1e4147922174dcd7c8de8', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1405618033, 'a:3:{s:6:"userid";s:2:"10";s:5:"fname";s:6:"ertert";s:8:"validate";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `demo_user_address`
--

CREATE TABLE IF NOT EXISTS `demo_user_address` (
  `uadd_id` int(11) NOT NULL AUTO_INCREMENT,
  `uadd_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `uadd_alias` varchar(50) NOT NULL DEFAULT '',
  `uadd_recipient` varchar(100) NOT NULL DEFAULT '',
  `uadd_phone` varchar(25) NOT NULL DEFAULT '',
  `uadd_company` varchar(75) NOT NULL DEFAULT '',
  `uadd_address_01` varchar(100) NOT NULL DEFAULT '',
  `uadd_address_02` varchar(100) NOT NULL DEFAULT '',
  `uadd_city` varchar(50) NOT NULL DEFAULT '',
  `uadd_county` varchar(50) NOT NULL DEFAULT '',
  `uadd_post_code` varchar(25) NOT NULL DEFAULT '',
  `uadd_country` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`uadd_id`),
  UNIQUE KEY `uadd_id` (`uadd_id`),
  KEY `uadd_uacc_fk` (`uadd_uacc_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `demo_user_address`
--

INSERT INTO `demo_user_address` (`uadd_id`, `uadd_uacc_fk`, `uadd_alias`, `uadd_recipient`, `uadd_phone`, `uadd_company`, `uadd_address_01`, `uadd_address_02`, `uadd_city`, `uadd_county`, `uadd_post_code`, `uadd_country`) VALUES
(1, 4, 'Home', 'Joe Public', '0123456789', '', '123', '', 'My City', 'My County', 'My Post Code', 'My Country'),
(2, 4, 'Work', 'Joe Public', '0123456789', 'Flexi', '321', '', 'My Work City', 'My Work County', 'My Work Post Code', 'My Work Country');

-- --------------------------------------------------------

--
-- Table structure for table `demo_user_profiles`
--

CREATE TABLE IF NOT EXISTS `demo_user_profiles` (
  `upro_id` int(11) NOT NULL AUTO_INCREMENT,
  `upro_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upro_company` varchar(50) NOT NULL DEFAULT '',
  `upro_first_name` varchar(50) NOT NULL DEFAULT '',
  `upro_last_name` varchar(50) NOT NULL DEFAULT '',
  `upro_phone` varchar(25) NOT NULL DEFAULT '',
  `upro_newsletter` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`upro_id`),
  UNIQUE KEY `upro_id` (`upro_id`),
  KEY `upro_uacc_fk` (`upro_uacc_fk`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `demo_user_profiles`
--

INSERT INTO `demo_user_profiles` (`upro_id`, `upro_uacc_fk`, `upro_company`, `upro_first_name`, `upro_last_name`, `upro_phone`, `upro_newsletter`) VALUES
(1, 1, '', 'John', 'Admin', '0123456789', 0),
(2, 2, '', 'Jim', 'Moderator', '0123465798', 0),
(3, 3, '', 'Joe', 'Public', '0123456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zip_code` int(6) DEFAULT NULL,
  `post_box` int(10) DEFAULT NULL,
  `group_id` int(20) NOT NULL,
  `phone` int(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirm_password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `email`, `country`, `city`, `zip_code`, `post_box`, `group_id`, `phone`, `image`, `password`, `confirm_password`, `gender`) VALUES
(1, 'admin', 'admin', 'admin@yahoo.com', 'nepal', 'nepal', 13324, 3424, 0, 14453, NULL, 'admin11', 'admin11', NULL),
(2, 'kriti', 'nemkul', 'nemkulk@yahoo.com', 'nepal', 'lalitpur', 12345, 1234, 0, 2147483647, '46757_651251811590762_127441764_n3.jpg', 'mekriti', 'mekriti', 'female'),
(3, 'ram', 'ram', 'ram@gmail.com', 'nea', 'hjhkj', 225, 23, 0, 2343, 'aa.jpg', 'ramram', 'ramram', 'male'),
(4, 'hari', 'chapagain', 'hari@gmail.com', 'nepal', 'siddhipur,lalitpur', 476576, 456, 0, 243453, 'Hydrangeas.jpg', 'hari1', 'hari1', 'male'),
(5, 'mina', 'kumari', 'mina@gmail.com', 'nepal', 'siddhipur,lalitpur', 43564, 2345, 0, 365467, 'Jellyfish.jpg', 'mina1', 'mina1', 'female'),
(6, 'pragrya', 'nemkul', 'p@gmail.com', 'Nepal', 'kathmandu', 977, 4564, 0, 657687687, 'Penguins.jpg', 'pragya', 'pragya', 'female'),
(7, 'kriti', 'nemkul', 'nemkulk1@yahoo.com', 'Nepal', 'kathmandu', 977, 6576, 2, 4354, '46757_651251811590762_127441764_n1.jpg', 'kriti', 'kriti', 'female'),
(8, 'ertert', 'ertret', 'aaa@yahoo.com', 'Nepal', 'kathmandu', 977, 354345, 2, 34325, 'dashain.jpg', 'sssss', 'sssss', 'male'),
(9, 'ertert', 'ertret', 'aba@yahoo.com', 'Nepal', 'kathmandu', 977, 56456, 2, 34325, 'vlcsnap-17237.png', 'sssss', 'sssss', 'male'),
(10, 'ertert', 'ertret', 'abc@yahoo.com', 'Nepal', 'kathmandu', 977, 5656, 3, 34325, '224929_246836312093775_976813195_n[1].jpg', 'qqqqq', 'qqqqq', '0'),
(11, 'ertert', 'ertret', 'abcd@yahoo.com', 'Nepal', 'kathmandu', 977, 56456, 2, 34325, '14730_473112642730036_315035117_n.jpg', 'abcde', 'abcde', 'female'),
(12, 'ertert', 'ertret', 'abcde@yahoo.com', 'Nepal', 'kathmandu', 977, 55, 3, 34325, '250760_390739517651005_931283085_n[1].jpg', 'uffff', 'uffff', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE IF NOT EXISTS `tb_cart` (
  `cart_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(20) NOT NULL,
  `total_price` int(100) NOT NULL,
  `qty` int(30) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `fkforproduct` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(200) NOT NULL,
  `cat_description` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_title`, `cat_description`, `slug`) VALUES
(1, 'Phone', 'Its a phone', ''),
(2, 'Mobile', 'All branded mobile', ''),
(3, 'furnitures', 'All branded furniture', ''),
(4, 'Clothes', 'fancy dress', ''),
(5, 'Toys', 'soft toys', ''),
(6, 'Mattresses', 'evey  local product', ''),
(7, 'watch', 'good watch', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_groups`
--

CREATE TABLE IF NOT EXISTS `tb_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_description` text NOT NULL,
  `group_type` varchar(200) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_groups`
--

INSERT INTO `tb_groups` (`group_id`, `group_description`, `group_type`) VALUES
(1, 'admin worked perfectly', 'admin'),
(2, 'user who  buys the product', 'user'),
(3, 'vendor that post the products and their details', 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE IF NOT EXISTS `tb_payment` (
  `payment_id` int(20) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(200) NOT NULL,
  `product_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`payment_id`, `payment_type`, `product_id`, `user_id`) VALUES
(1, 'paypal', 1, 1);

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
  `slug` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FKforcategory` (`cat_id`),
  KEY `fkforusers` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_description`, `product_image`, `shipping_detail`, `price`, `rating`, `featured`, `publish`, `cat_id`, `stock_info`, `user_id`, `slug`) VALUES
(1, 'samsung', 'Its a phone', 'ae1.jpg', 'barberqueue', 2000, 3, 1, 1, 1, 1, NULL, ''),
(6, 'ZT', 'all brand new', 'IMG_20140604_1311244.jpg', 'nepal', 10000, 0, 0, 0, 1, 3, NULL, ''),
(7, 'Glass', 'all glass ', '130514-145510.jpg', 'samakhusi', 2000, 0, 0, 0, 1, 4, NULL, ''),
(8, 'photo', 'good', '130324-070729.jpg', 'samakhusi', 1000, 0, 0, 0, 4, 4, NULL, ''),
(10, 'yak and yeti', 'Nepali  carpet', '130324-070945.jpg', 'samakhusi', 10000, 0, 0, 0, 6, 4, NULL, ''),
(16, 'oops', 'new product', '250760_390739517651005_931283085_n[1]2.jpg', 'nepal', 5000, 4, 1, 1, 7, 4, 10, 'oops'),
(17, 'mero product', 'its mine product', '224929_246836312093775_976813195_n[1].jpg', 'nepal', 50000, 5, 1, 1, 7, 2, 10, 'mero-product');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usergroup`
--

CREATE TABLE IF NOT EXISTS `tb_usergroup` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkforuser` (`user_id`),
  KEY `fkforgrup` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_usergroup`
--

INSERT INTO `tb_usergroup` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(6, 12, 3);
<<<<<<< HEAD
=======
<<<<<<< HEAD

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE IF NOT EXISTS `user_accounts` (
  `uacc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uacc_group_fk` smallint(5) unsigned NOT NULL DEFAULT '0',
  `uacc_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_username` varchar(15) NOT NULL DEFAULT '',
  `uacc_password` varchar(60) NOT NULL DEFAULT '',
  `uacc_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_salt` varchar(40) NOT NULL DEFAULT '',
  `uacc_activation_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_update_email_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_update_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `uacc_suspend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `uacc_fail_login_attempts` smallint(5) NOT NULL DEFAULT '0',
  `uacc_fail_login_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_date_fail_login_ban` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time user is banned until due to repeated failed logins',
  `uacc_date_last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`uacc_id`),
  UNIQUE KEY `uacc_id` (`uacc_id`),
  KEY `uacc_group_fk` (`uacc_group_fk`),
  KEY `uacc_email` (`uacc_email`),
  KEY `uacc_username` (`uacc_username`),
  KEY `uacc_fail_login_ip_address` (`uacc_fail_login_ip_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`uacc_id`, `uacc_group_fk`, `uacc_email`, `uacc_username`, `uacc_password`, `uacc_ip_address`, `uacc_salt`, `uacc_activation_token`, `uacc_forgotten_password_token`, `uacc_forgotten_password_expire`, `uacc_update_email_token`, `uacc_update_email`, `uacc_active`, `uacc_suspend`, `uacc_fail_login_attempts`, `uacc_fail_login_ip_address`, `uacc_date_fail_login_ban`, `uacc_date_last_login`, `uacc_date_added`) VALUES
(1, 3, 'admin@admin.com', 'admin', '$2a$08$lSOQGNqwBFUEDTxm2Y.hb.mfPEAt/iiGY9kJsZsd4ekLJXLD.tCrq', '::1', 'XKVT29q2Jr', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2014-07-16 21:16:54', '2011-01-01 00:00:00'),
(2, 2, 'moderator@moderator.com', 'moderator', '$2a$08$q.0ZhovC5ZkVpkBLJ.Mz.O4VjWsKohYckJNx4KM40MXdP/zEZpwcm', '0.0.0.0', 'ZC38NNBPjF', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2012-04-10 21:58:02', '2011-08-04 16:49:07'),
(3, 1, 'public@public.com', 'public', '$2a$08$GlxQ00VKlev2t.CpvbTOlepTJljxF2RocJghON37r40mbDl4vJLv2', '0.0.0.0', 'CDNFV6dHmn', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2012-04-10 22:01:41', '2011-09-15 12:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `ugrp_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `ugrp_name` varchar(20) NOT NULL DEFAULT '',
  `ugrp_desc` varchar(100) NOT NULL DEFAULT '',
  `ugrp_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ugrp_id`),
  UNIQUE KEY `ugrp_id` (`ugrp_id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`ugrp_id`, `ugrp_name`, `ugrp_desc`, `ugrp_admin`) VALUES
(1, 'Public', 'Public User : has no admin access rights.', 0),
(2, 'Moderator', 'Admin Moderator : has partial admin access rights.', 1),
(3, 'Master Admin', 'Master Admin : has full admin access rights.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login_sessions`
--

CREATE TABLE IF NOT EXISTS `user_login_sessions` (
  `usess_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `usess_series` varchar(40) NOT NULL DEFAULT '',
  `usess_token` varchar(40) NOT NULL DEFAULT '',
  `usess_login_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`usess_token`),
  UNIQUE KEY `usess_token` (`usess_token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_privileges`
--

CREATE TABLE IF NOT EXISTS `user_privileges` (
  `upriv_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `upriv_name` varchar(20) NOT NULL DEFAULT '',
  `upriv_desc` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`upriv_id`),
  UNIQUE KEY `upriv_id` (`upriv_id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_privileges`
--

INSERT INTO `user_privileges` (`upriv_id`, `upriv_name`, `upriv_desc`) VALUES
(1, 'View Users', 'User can view user account details.'),
(2, 'View User Groups', 'User can view user groups.'),
(3, 'View Privileges', 'User can view privileges.'),
(4, 'Insert User Groups', 'User can insert new user groups.'),
(5, 'Insert Privileges', 'User can insert privileges.'),
(6, 'Update Users', 'User can update user account details.'),
(7, 'Update User Groups', 'User can update user groups.'),
(8, 'Update Privileges', 'User can update user privileges.'),
(9, 'Delete Users', 'User can delete user accounts.'),
(10, 'Delete User Groups', 'User can delete user groups.'),
(11, 'Delete Privileges', 'User can delete user privileges.');

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege_groups`
--

CREATE TABLE IF NOT EXISTS `user_privilege_groups` (
  `upriv_groups_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `upriv_groups_ugrp_fk` smallint(5) unsigned NOT NULL DEFAULT '0',
  `upriv_groups_upriv_fk` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`upriv_groups_id`),
  UNIQUE KEY `upriv_groups_id` (`upriv_groups_id`) USING BTREE,
  KEY `upriv_groups_ugrp_fk` (`upriv_groups_ugrp_fk`),
  KEY `upriv_groups_upriv_fk` (`upriv_groups_upriv_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_privilege_groups`
--

INSERT INTO `user_privilege_groups` (`upriv_groups_id`, `upriv_groups_ugrp_fk`, `upriv_groups_upriv_fk`) VALUES
(1, 3, 1),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 2, 2),
(13, 2, 4),
(14, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege_users`
--

CREATE TABLE IF NOT EXISTS `user_privilege_users` (
  `upriv_users_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `upriv_users_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upriv_users_upriv_fk` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`upriv_users_id`),
  UNIQUE KEY `upriv_users_id` (`upriv_users_id`) USING BTREE,
  KEY `upriv_users_uacc_fk` (`upriv_users_uacc_fk`),
  KEY `upriv_users_upriv_fk` (`upriv_users_upriv_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_privilege_users`
--

INSERT INTO `user_privilege_users` (`upriv_users_id`, `upriv_users_uacc_fk`, `upriv_users_upriv_fk`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 2, 1),
(13, 2, 2),
(14, 2, 3),
(15, 2, 6);
=======
>>>>>>> origin/forDesigners
>>>>>>> origin/forDesigners

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD CONSTRAINT `fkforproduct` FOREIGN KEY (`product_id`) REFERENCES `tb_product` (`product_id`);

--
-- Constraints for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD CONSTRAINT `tb_payment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tb_product` (`product_id`),
  ADD CONSTRAINT `tb_payment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `FKforcategory` FOREIGN KEY (`cat_id`) REFERENCES `tb_category` (`cat_id`),
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tb_usergroup`
--
ALTER TABLE `tb_usergroup`
  ADD CONSTRAINT `fkforgrup` FOREIGN KEY (`group_id`) REFERENCES `tb_groups` (`group_id`),
  ADD CONSTRAINT `fkforuser` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

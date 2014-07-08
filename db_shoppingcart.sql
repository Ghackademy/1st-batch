-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2014 at 10:35 PM
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
  `user_type` varchar(20) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirm_password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `email`, `country`, `city`, `zip_code`, `post_box`, `user_type`, `phone`, `image`, `password`, `confirm_password`, `gender`) VALUES
(1, 'admin', 'admin', 'admin@yahoo.com', 'nepal', 'nepal', 13324, 3424, 'admin', 14453, NULL, 'admin11', 'admin11', NULL),
(2, 'kriti', 'nemkul', 'nemkulk@yahoo.com', 'nepal', 'lalitpur', 12345, 1234, 'User', 2147483647, '46757_651251811590762_127441764_n3.jpg', 'mekriti', 'mekriti', 'female'),
(3, 'ram', 'ram', 'ram@gmail.com', 'nea', 'hjhkj', 225, 23, 'Vendor', 2343, 'aa.jpg', 'ramram', 'ramram', 'male'),
(4, 'hari', 'chapagain', 'hari@gmail.com', 'nepal', 'siddhipur,lalitpur', 476576, 456, 'Vendor', 243453, 'Hydrangeas.jpg', 'hari1', 'hari1', 'male'),
(5, 'mina', 'kumari', 'mina@gmail.com', 'nepal', 'siddhipur,lalitpur', 43564, 2345, 'User', 365467, 'Jellyfish.jpg', 'mina1', 'mina1', 'female'),
(6, 'pragrya', 'nemkul', 'p@gmail.com', 'Nepal', 'kathmandu', 977, 4564, 'User', 657687687, 'Penguins.jpg', 'pragya', 'pragya', 'female');

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
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_title`, `cat_description`) VALUES
(1, 'Phone', 'Its a phone'),
(2, 'Mobile', 'All branded mobile'),
(3, 'furnitures', 'All branded furniture'),
(4, 'Clothes', 'fancy dress'),
(5, 'Toys', 'soft toys'),
(6, 'Mattresses', 'evey  local product'),
(7, 'watch', 'good watch');

-- --------------------------------------------------------

--
-- Table structure for table `tb_groups`
--

CREATE TABLE IF NOT EXISTS `tb_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_description` text NOT NULL,
  `group_type` varchar(200) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_groups`
--

INSERT INTO `tb_groups` (`group_id`, `group_description`, `group_type`) VALUES
(1, 'admin worked perfectly', 'admin');

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
  PRIMARY KEY (`product_id`),
  KEY `FKforcategory` (`cat_id`),
  KEY `fkforusers` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_description`, `product_image`, `shipping_detail`, `price`, `rating`, `featured`, `publish`, `cat_id`, `stock_info`, `user_id`) VALUES
(1, 'samsung', 'Its a phone', 'ae1.jpg', 'barberqueue', 2000, 3, 1, 1, 1, 1, NULL),
(6, 'ZT', 'all brand new', 'IMG_20140604_1311244.jpg', 'nepal', 10000, 0, 0, 0, 1, 3, NULL),
(7, 'Glass', 'all glass ', '130514-145510.jpg', 'samakhusi', 2000, 0, 0, 0, 1, 4, NULL),
(8, 'photo', 'good', '130324-070729.jpg', 'samakhusi', 1000, 0, 0, 0, 4, 4, NULL),
(9, '', '', '130324-0707291.jpg', '', 0, 0, 0, 0, 1, 0, NULL),
(10, 'yak and yeti', 'Nepali  carpet', '130324-070945.jpg', 'samakhusi', 10000, 0, 0, 0, 6, 4, NULL),
(11, 'slip phone', 'all brand new', '130330-194000.jpg', 'samakhusi', 1000, 0, 0, 0, 2, 2, NULL),
(12, 'bag', 'all brand new', '130330-1940001.jpg', 'babarmahal', 10000, 0, 0, 0, 4, 1, NULL),
(13, 'Quartz', 'nice one', '130330-1940003.jpg', 'babarmahal', 1000, 0, 0, 0, 7, 3, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_usergroup`
--

INSERT INTO `tb_usergroup` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `zipcode` int(200) NOT NULL,
  `pobox` int(200) NOT NULL,
  `faxno` int(200) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `legal_name` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `business_type` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `firstname`, `lastname`, `country`, `city`, `address`, `phoneno`, `zipcode`, `pobox`, `faxno`, `user_image`, `legal_name`, `street_address`, `business_type`, `email`, `password`, `username`) VALUES
(1, 'kriti', 'dangol', 'Nepal', 'Bhaktapur', 'samakhusi', '98418683883', 977, 38488, 329939, 'ae4.jpg', 'smartsamaj', 'jjjjd', 'sole', 'samina@yahoo.com', 'dmhsa', 'kriti'),
(4, 'samina', 'tuladhar', 'nepal', 'kathmandu', '', '9808939399', 14410, 12224, 0, '', '', '', '', 'samina_tuladhar@yahoo.com', 'samina', 'samina');

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
  ADD CONSTRAINT `tb_payment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`);

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `FKforcategory` FOREIGN KEY (`cat_id`) REFERENCES `tb_category` (`cat_id`),
  ADD CONSTRAINT `fkforusers` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`);

--
-- Constraints for table `tb_usergroup`
--
ALTER TABLE `tb_usergroup`
  ADD CONSTRAINT `fkforgrup` FOREIGN KEY (`group_id`) REFERENCES `tb_groups` (`group_id`),
  ADD CONSTRAINT `fkforuser` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

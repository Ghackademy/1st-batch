-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2014 at 12:32 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbghack`
--

-- --------------------------------------------------------

--
-- Table structure for table `option_details`
--

CREATE TABLE IF NOT EXISTS `option_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(225) NOT NULL,
  `option_value` varchar(225) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `option_details`
--

INSERT INTO `option_details` (`id`, `option_name`, `option_value`, `product_id`) VALUES
(1, 'colour', 'red,black,blue,green', 78),
(2, 'size', 'S,M,L,XL', 78);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(225) NOT NULL,
  `price` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `title`, `description`, `category`, `image`, `price`, `featured`) VALUES
(33, 'Shoes', 'Pretty', 'cloth', 'omg.jpg', '1200', 0),
(35, 'Ear rings', 'Blue earrings', 'access', '1376505_443403875768814_1925514893_n.jpg', '2000', 0),
(37, 'Smileys', '1kjoed', 'mobile', '10422602_758863214176966_9166856797215758205_n1.jpg', '1391', 0),
(43, 'Sunglasses', 'Black Sunglasses', 'access', '1460059_605082826236173_2094599273_n.jpg', '1230', 0),
(44, 'ring', 'diamond ring', 'mobile', '1959361_855298327818657_544053299_n.jpg', '1231', 0),
(45, 'sa', 'as', 'mobile', '2.jpg', '121', 0),
(46, 'Ankur', 'asdkjsdkl', 'cloth', '1964804_10203079572242706_1812140056983381093_n.jpg', '12342', 0),
(47, 'Ankur', 'as', 'access', '10349143_10203079598603365_2077252315962057889_n.jpg', '12313', 0),
(48, 'Ankur', 'asdas', 'access', '10349143_10203079598603365_2077252315962057889_n1.jpg', '1223482398', 0),
(49, 'asd', 'sad', 'mobile', '10345741_10203079570002650_1631164230120637532_n.jpg', '23', 0),
(50, 'Ankur', 'asd', 'mobile', '10349143_10203079598603365_2077252315962057889_n3.jpg', '1231', 0),
(52, 'bsxs', 'asdasd', 'access', '10451026_10203079576242806_4361029728010219698_n.jpg', '1321', 0),
(53, '..m', 'we', 'mobile', '10532778_10203079596763319_2497256956590192715_n.jpg', '123123', 0),
(54, 'ams', 'akmsdas', 'access', '10530673_10203079597443336_1953361319062417148_n.jpg', '123123', 0),
(55, 'asas12', 'asdasd', 'mobile', '10494620_10203079591443186_3777466807729130657_n.jpg', '323232', 0),
(56, 'sdaas', 'as', 'mobile', '10452348_10203079594403260_3642066778945784645_n.jpg', '1232', 0),
(57, 'dsa', 'faf', 'mobile', '10377546_10203079590403160_4821269706008363553_n.jpg', '121', 0),
(58, 'wewer', 'qwe', 'cloth', '10403406_10203079569322633_279368693774813580_n.jpg', '123123', 0),
(59, 'as', 'asdda', 'mobile', '10451026_10203079576242806_4361029728010219698_n2.jpg', '123123', 0),
(61, 'kasnasc', 'kasdjad', 'access', '10494620_10203079591443186_3777466807729130657_n1.jpg', '12313', 0),
(62, 'as', '1231', 'mobile', '10494620_10203079591443186_3777466807729130657_n2.jpg', '24124', 0),
(63, 'ad', '214', 'mobile', '10451026_10203079576242806_4361029728010219698_n4.jpg', '1241', 0),
(64, 'asdADSASD', 'addaksfmaskfmasf', 'mobile', '1924334_10203079575682792_3921549566424041098_n.jpg', '12314', 0),
(65, '2eoyudkjf', 'jhlkasf124', 'mobile', '10403406_10203079569322633_279368693774813580_n1.jpg', '13241', 0),
(66, '2eoyudkjf', 'jhlkasf124', 'mobile', '10403406_10203079569322633_279368693774813580_n2.jpg', '13241', 0),
(67, 'asd', '', 'mobile', '1964804_10203079572242706_1812140056983381093_n1.jpg', '', 0),
(68, 'asdasdasdasd', '', 'mobile', '10401989_10203079583362984_6127111483668214452_n.jpg', '', 0),
(69, 'qrwetfwf', '', 'mobile', '10401989_10203079583362984_6127111483668214452_n1.jpg', '', 0),
(70, '1eqweqwe', 'qweqwe', 'mobile', '10401989_10203079583362984_6127111483668214452_n2.jpg', '', 0),
(71, 'qw', '', 'mobile', '1924334_10203079575682792_3921549566424041098_n1.jpg', '', 0),
(72, 'fkjsjknwlkfna', 'asdkjnhfkjbavbsgfkaw', 'mobile', '10403406_10203079569322633_279368693774813580_n3.jpg', '12314312', 0),
(73, 'n', '', 'mobile', '10367801_10203079589603140_2244205925069995563_n.jpg', '', 0),
(74, 'qwe', '', 'mobile', '1924334_10203079575682792_3921549566424041098_n2.jpg', '', 0),
(75, 'test', 'akdfjhakhahkf', 'access', '10407265_10203079575122778_330612655497769751_n.jpg', '122', 0),
(76, '123', 'aaskldfjlkjslkdj', 'cloth', '10543634_10203079572762719_3541219035479783276_n.jpg', '123123', 0),
(77, 'test', 'hfksdhflskfh', 'mobile', '10530863_10203079568002600_7696578843490955683_n.jpg', '123123', 0),
(78, 'Test1', 'I am a test ', 'access', '1964804_10203079572242706_1812140056983381093_n2.jpg', '121312', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`) VALUES
(3, 'Bazingaa', '289882_10150281718118250_7765707_o1.jpg'),
(4, 'asd', '1452015_553507551390478_2049466099_n.jpg'),
(5, 'dsa', '10377546_10203079590403160_4821269706008363553_n.jpg'),
(6, 'Test1', '12165_925815594111497_8787248609897961092_n.jpg'),
(7, 'asdasdascx', 'New_Image2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `password`, `address`, `hobby`, `comment`) VALUES
(1, 'Ruby', 'ruby', 'Kumaripati', 'Reading', 'My valuable comments.'),
(2, '', '', '', 'Reading', 'Enter your comments'),
(3, '', '', '', 'Reading', 'Enter your comments'),
(4, '', '', '', 'Reading', 'Enter your comments'),
(5, '', '', '', 'Reading', 'Enter your comments'),
(6, '', '', '', 'Reading', 'Enter your comments'),
(7, '', '', '', 'Reading', 'Enter your comments'),
(8, '', '', '', 'Reading', 'Enter your comments'),
(9, '', '', '', 'Reading', 'Enter your comments'),
(10, '', '', '', 'Reading', 'Enter your comments'),
(11, '', '', '', 'Reading', 'Enter your comments'),
(12, '', '', '', 'Reading', 'Enter your comments'),
(13, '', '', '', 'Reading', 'Enter your comments'),
(14, '', '', '', 'Reading', 'Enter your comments'),
(15, '', '', '', 'Reading', 'Enter your comments'),
(16, '', '', '', 'Reading', 'Enter your comments');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase` (
  `date` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_purchase`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`username`, `password`) VALUES
('ram', 'ramas'),
('ruby', 'asdksajdlksajdol');

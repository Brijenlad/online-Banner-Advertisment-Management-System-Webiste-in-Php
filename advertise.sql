-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2015 at 09:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advertise`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `ban_id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_id` int(5) NOT NULL,
  `gal_id` int(5) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `titlee` varchar(50) NOT NULL,
  `height` int(5) NOT NULL,
  `width` int(5) NOT NULL,
  `layout` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `link` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `address` varchar(250) NOT NULL,
  `price` varchar(5) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ban_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ban_id`, `reg_id`, `gal_id`, `logo`, `titlee`, `height`, `width`, `layout`, `duration`, `link`, `content`, `address`, `price`, `date`) VALUES
(26, 1, 10, 'uploadlogo/i-love-u.jpg', 'ttttt', 10, 101, 'Landscape', '3', '', 'dsfdsdsf', 'dsfsd', '600', '0000-00-00'),
(27, 2, 10, 'uploadlogo/Saint_Valentines_Day_Heart_Gifts_013091_.jpg', 'title', 10, 10, 'Landscape', '6', 'm@gmail.com', 'njdldhfnjkfgjohiuguguvtu', '4664f564e6dsfddsf', '1200', '0000-00-00'),
(28, 1, 5, 'uploadlogo/I_LOVE_U.gif', 'love', 10, 10, 'Portrait', '12', 'm@gmail.com', 'sdsfdsfdsggd`', 'dfgfdgdsg', '90000', '0000-00-00'),
(29, 1, 7, 'uploadlogo/Valentines_Day_Wallpapers_6893_NiceFun.jpg', 'aaaa', 2, 2, 'Landscape', '3', 'dsfsd@gmail.com', 'sdsfdgdrfdb', 'cbddbdsf', '15000', '0000-00-00'),
(30, 1, 7, 'uploadlogo/Valentines_Day_Wallpapers_6893_NiceFun.jpg', 'aaaa', 2, 2, 'Landscape', '3', 'dsfsd@gmail.com', 'sdsfdgdrfdb', 'cbddbdsf', '15000', '0000-00-00'),
(31, 1, 7, 'uploadlogo/Valentines_Day_Wallpapers_6893_NiceFun.jpg', 'aaaa', 2, 2, 'Landscape', '3', 'dsfsd@gmail.com', 'sdsfdgdrfdb', 'cbddbdsf', '15000', '0000-00-00'),
(32, 1, 5, 'uploadlogo/valentinewall9.jpg', '11', 11, 11, 'Landscape', '3', 'm@gmail.com', 'sddfs', 'dsfs', '22500', '0000-00-00'),
(33, 1, 5, 'uploadlogo/valentinewall9.jpg', '11', 11, 11, 'Landscape', '3', 'm@gmail.com', 'sddfs', 'dsfs', '22500', '0000-00-00'),
(34, 0, 5, 'uploadlogo/valentinewall9.jpg', '11', 11, 11, 'Landscape', '3', 'm@gmail.com', 'sddfs', 'dsfs', '22500', '2015-10-20'),
(35, 1, 11, 'uploadlogo/love walls.jpg', 'sadsadsa', 10, 10, 'Landscape', '3', '', 'sdsdscf', 'fdgrgsd', '360', '2015-10-20'),
(46, 1, 9, 'uploadlogo/Love.gif', 'dsadas', 12, 12, 'Landscape', '3', 'm@gmail.com', 'fsafslkjaslk', 'mldsm,ds', '0', '2015-10-17'),
(47, 1, 11, 'uploadlogo/ftd-flowers11.jpg', 'dsds', 10, 1, 'Portrait', '6', '', 'fsfsd', 'fdsfs', '720', '2015-10-16'),
(48, 1, 11, 'uploadlogo/i want you(1).gif', '1212', 12, 12, 'Landscape', '3', '', 'dsdsa', '31', '360', '2015-10-15'),
(49, 1, 6, 'uploadlogo/Valentines_Day_Wallpapers_6891_NiceFun.jpg', 'sdsad', 10, 10, 'Landscape', '3', '', 'fsdfsdf', 'fsf', '18000', '2015-10-18'),
(50, 1, 6, 'uploadlogo/Valentines_Day_Wallpapers_6891_NiceFun.jpg', 'sdsad', 10, 10, 'Landscape', '3', '', 'fsdfsdf', 'fsf', '18000', '2015-10-19'),
(51, 1, 5, 'uploadlogo/love(2).gif', 'cdsfdf', 10, 10, 'Landscape', '3', '', 'dsczxzxvvds', 'fdsvsdcv', '22500', '2015-10-20'),
(52, 1, 5, 'uploadlogo/34951.jpg', 'cdsdsv', 12, 12, 'Landscape', '3', '', 'sacvsdsd', 'sdvrevsd', '22500', '2015-10-21'),
(60, 1, 5, 'uploadlogo/34951.jpg', 'cdsdsv', 12, 12, 'Landscape', '3', '', 'sacvsdsd', 'sdvrevsd', '22500', '2015-10-22'),
(61, 1, 5, 'uploadlogo/Banner-Advertising-Company0006.jpg', 'gjhgj', 10, 10, 'Landscape', '3', '', 'fujgp;k;jjl;', 'hklklj', '22500', '2015-10-20'),
(62, 1, 5, 'uploadlogo/Banner-Advertising-Company0006.jpg', 'gjhgj', 10, 10, 'Landscape', '3', '', 'fujgp;k;jjl;', 'hklklj', '22500', '2015-10-20'),
(63, 1, 6, 'uploadlogo/banner-clip-art-free-download-467815.jpg', 'ttet', 10, 101, 'Landscape', '3', '', 'sccSZC', 'VXCV', '18000', '2015-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `com_id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `detail` varchar(150) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`com_id`, `reg_id`, `title`, `detail`) VALUES
(11, 0, 'title1', 'dsds'),
(12, 0, 'aaa', ' ncbds'),
(23, 0, 'fffs', 'fsdfdsfwef'),
(24, 0, 'fffs', 'fsdfdsfwef'),
(25, 5, 'abc', 'abcccccc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cnct_id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `msg` varchar(50) NOT NULL,
  PRIMARY KEY (`cnct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cnct_id`, `uname`, `email`, `contact`, `msg`) VALUES
(1, 'mehul', 'rashmi@yah', '', ''),
(2, 'rashmi', 'RASHMI@YAH', '', ''),
(4, 'bhavini', 'bhavini@ga', '1234556789', ''),
(5, 'bhavini', 'bhavini@ga', '9429789832', ''),
(6, 'hasj', 'jk', '1653612534', ''),
(7, 'bhavini', 'bhavin', '1234556789', ''),
(8, 'myur', 'myur', '1234567890', 'nmbenmfgbdngn'),
(28, 'fdfds', 'fsfd', 'fsdfdsf', 'fsdfdsf'),
(29, 'fdfds', 'fsfd', 'fsdfdsf', 'fsdfdsf'),
(30, 'fdfds', 'fsfd', 'fsdfdsf', 'fsdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gal_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`gal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `title`, `detail`, `image`, `price`) VALUES
(5, 'ssss', 'dscdsds', 'upload/Dynamic-Responsive-jQuery-Grid-Layout-Plugin-JResponsive.jpg', 7500),
(6, 'llll', 'ml,nknnk', 'upload/layout.png', 6000),
(7, 'khjkbjkb', 'ujbmkbk,', 'upload/Intuitive-Draggable-Layout-Plugin-Gridster.jpg', 5000),
(9, 'sdsds', 'fdsds', 'upload/Email_icon.png', 0),
(10, 'ddss', 'sfddfggerdvq', 'upload/Screenshot_2015-09-29-10-59-20.png', 200),
(11, 'llllllll', 'sdfsfwsf', 'upload/The-Drawing-Room_tiny.png', 120);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `inq_id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_id` int(5) NOT NULL,
  `title` varchar(10) NOT NULL,
  `detail` varchar(50) NOT NULL,
  PRIMARY KEY (`inq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `reg_id`, `title`, `detail`) VALUES
(63, 0, 'price', 'price detail of banner.'),
(64, 0, 'banner tit', 'detail of banner'),
(65, 5, 'abc', 'abccc');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `uname`, `contact`, `email`, `pwd`) VALUES
(1, 'abc', '1234567890', 'rashmi@yahoo.com', '123'),
(4, 'rashmi', '9727231552', 'aaa@yahoo.com', '123'),
(5, 'bhavini', '8976564534', 'abc@yahoo.com', '123'),
(7, 'ppp', '1243435367', 'ppp@yahoo.com', '222'),
(22, 'bhavini', '9429789832', 'bhavini@gamil.com', '123'),
(36, 'mayur', '9999999999', 'mayur123@gmail.com', '123'),
(37, 'krunak', '9999999999', 'krunal@gmail.com', '123'),
(38, 'dd', '9999999999', 'a@yahoo.com', '123'),
(39, 'mmm', '9999999999', 'mmm@gmail.com', ''),
(40, 'mayur', '9999999999', 'm@gmail.com', ''),
(41, 'mayur', '9999999999', 'm1@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `renew`
--

CREATE TABLE IF NOT EXISTS `renew` (
  `renew_id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_id` int(5) NOT NULL,
  `ban_id` int(5) NOT NULL,
  `duration` int(6) NOT NULL,
  `time` time NOT NULL,
  `price` int(10) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`renew_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `renew`
--

INSERT INTO `renew` (`renew_id`, `reg_id`, `ban_id`, `duration`, `time`, `price`, `status`) VALUES
(13, 1, 2, 3, '00:00:00', 0, '0'),
(14, 1, 2, 3, '00:00:00', 0, '0'),
(15, 1, 2, 12, '00:00:00', 0, '0'),
(16, 1, 2, 12, '00:00:00', 0, '0'),
(17, 1, 2, 3, '00:00:00', 0, '0'),
(18, 1, 13, 6, '00:00:00', 0, '0'),
(19, 1, 49, 6, '00:00:00', 0, '0'),
(20, 1, 49, 6, '00:00:00', 0, '0'),
(21, 1, 49, 12, '00:00:00', 0, '0'),
(22, 1, 49, 3, '00:00:00', 0, '0'),
(23, 1, 30, 12, '00:00:00', 0, '0'),
(24, 1, 35, 6, '00:00:00', 720, '0'),
(25, 1, 35, 6, '00:00:00', 720, '0'),
(26, 1, 35, 6, '00:00:00', 720, '0'),
(27, 1, 30, 3, '00:00:00', 15000, '0'),
(28, 1, 30, 3, '00:00:00', 15000, 'approved');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

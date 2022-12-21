-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2021 at 09:12 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `document`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `fileno` varchar(225) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `file` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `fileno`, `filename`, `file`) VALUES
(11, 'f 123', 'teacher', 0x4368727973616e7468656d756d2e6a7067),
(12, '54', 'personal file', 0x6d617368616b612e646f6378),
(13, '54', 'TIIU', 0x6d617368616b612e646f6378);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `reciever` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `photo` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `msg`
--


-- --------------------------------------------------------

--
-- Table structure for table `rofficer`
--

CREATE TABLE IF NOT EXISTS `rofficer` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `usertype` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rofficer`
--

INSERT INTO `rofficer` (`id`, `username`, `firstname`, `lastname`, `email`, `usertype`, `phone`, `password`) VALUES
(1, 'registry', 'timo', 'lema', 'timolema@gmail.com', 'Government register  officer', '074563734', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'admin', 'musa', 'aliphonce', 'musaalphonce@yahoo.com', 'system administrator ', '0745657464', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'action', 'james', 'ramadhan', 'j@gmail.com', 'action officer', '0765343783', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `templemsg`
--

CREATE TABLE IF NOT EXISTS `templemsg` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `reciever` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `photo` longblob NOT NULL,
  `count` int(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `templemsg`
--

INSERT INTO `templemsg` (`id`, `reciever`, `message`, `photo`, `count`) VALUES
(4, 'action officer', ' make  \r\n                ', '', 0),
(12, 'system administrator ', '                  \r\n        GO        ', '', 0),
(14, 'accouter officer ', '                  \r\n   HH             ', '', 0),
(22, 'accouter officer ', '       nimetuma file ilo ulifanyie kazi linahitajika haraka please           \r\n                ', '', 0),
(23, 'accouter officer ', '                  \r\n     ol           ', '', 0),
(24, 'Government register  officer', 'document zako zote nimeziona ngoja nizifanyie kazi                  \r\n                ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(35, '20210916133637_field pprs.pdf', 'field pprs_2.pdf'),
(36, '20210917085608_Database1.accdb', 'Database1.accdb');

-- --------------------------------------------------------

--
-- Table structure for table `upload_data`
--

CREATE TABLE IF NOT EXISTS `upload_data` (
  `FILE_NAME` varchar(100) NOT NULL,
  `FILE_SIZE` int(10) NOT NULL,
  `FILE_TYPE` varchar(20) NOT NULL,
  `CATEGORY` varchar(50) NOT NULL,
  `UPLOADED_BY` varchar(50) NOT NULL,
  `PATH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_data`
--

INSERT INTO `upload_data` (`FILE_NAME`, `FILE_SIZE`, `FILE_TYPE`, `CATEGORY`, `UPLOADED_BY`, `PATH`) VALUES
('02.jpg', 5, 'image/jpeg', 'Images', 'joe', 'user_data/joe/02.jpg'),
('02.jpg', 5, 'image/jpeg', 'Images', 'admin', 'user_data/admin/02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'registry', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `usertype`) VALUES
(1, 'Government register  officer'),
(2, 'accouter officer '),
(3, 'action officer'),
(4, 'system administrator '),
(6, '');

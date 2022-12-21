-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2019 at 11:39 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `templemsg`
--

INSERT INTO `templemsg` (`id`, `reciever`, `message`, `photo`, `count`) VALUES
(1, 'Government register  officer', '                  \r\n  welcome              ', '', 0),
(4, 'action officer', ' make  \r\n                ', '', 0),
(5, 'action officer', ' make  \r\n                ', '', 0),
(10, 'Government register  officer', '         go         \r\n                ', '', 0),
(12, 'system administrator ', '                  \r\n        GO        ', '', 0),
(14, 'accouter officer ', '                  \r\n   HH             ', '', 0),
(15, 'Government register  officer', '                  \r\n                seen', '', 0),
(18, 'action officer', '       ok           \r\n                ', '', 0),
(21, 'Government register  officer', '                  \r\n    uu            ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `usertype`) VALUES
(1, 'Government register  officer'),
(2, 'accouter officer '),
(3, 'action officer'),
(4, 'system administrator ');

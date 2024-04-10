-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2023 at 06:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pts`
--
CREATE DATABASE IF NOT EXISTS `pts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pts`;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `deptid` varchar(10) NOT NULL,
  `deptname` varchar(100) NOT NULL,
  PRIMARY KEY (`deptid`),
  UNIQUE KEY `deptname` (`deptname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `deptname`) VALUES
('D-1', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE IF NOT EXISTS `guides` (
  `sino` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `contno` varchar(20) NOT NULL,
  `deptid` varchar(10) DEFAULT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `sque` varchar(100) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`sino`, `name`, `quali`, `contno`, `deptid`, `uname`, `pwd`, `sque`, `ans`, `imgname`) VALUES
(1, 'Shreedar', 'Ph.d', '9844551245', 'D-1', 'shreedhar123', '123456', 'Which is your favt Color ?', 'blue', 'doctor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `sino` int(11) NOT NULL,
  `deptid` varchar(10) DEFAULT NULL,
  `message` varchar(500) NOT NULL,
  `ndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `pid` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `deptid` varchar(10) DEFAULT NULL,
  `guide` varchar(20) DEFAULT NULL,
  `pmates` varchar(100) NOT NULL,
  `tech` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `limits` varchar(200) NOT NULL,
  `future` text NOT NULL,
  `docname` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `title`, `year`, `deptid`, `guide`, `pmates`, `tech`, `descr`, `limits`, `future`, `docname`) VALUES
('BE-2018-1', 'Smart RTO', 2018, 'D-1', 'shreedhar123', 'Jameer\r\nKaran\r\nKalpana\r\nJyothishree', 'PHP & Mysql Android', 'It allows publics to obtain DL over online', 'NIL', 'It could be made all broswser compatible', 'e-LABS.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 05:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_6th_a`
--

CREATE TABLE IF NOT EXISTS `class_6th_a` (
  `en_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `se` int(11) NOT NULL,
  `toc` int(11) NOT NULL,
  `ajt` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `dotnet` int(11) NOT NULL,
  `de` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_6th_a`
--

INSERT INTO `class_6th_a` (`en_no`, `name`, `se`, `toc`, `ajt`, `wt`, `dotnet`, `de`) VALUES
(11, 'sid', 5, 5, 5, 5, 5, 5),
(12, 'shabnam', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_6th_a_total`
--

CREATE TABLE IF NOT EXISTS `class_6th_a_total` (
  `se` int(11) NOT NULL,
  `toc` int(11) NOT NULL,
  `ajt` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `dotnet` int(11) NOT NULL,
  `de` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_6th_a_total`
--

INSERT INTO `class_6th_a_total` (`se`, `toc`, `ajt`, `wt`, `dotnet`, `de`) VALUES
(0, 0, 0, 0, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_6th_b`
--

CREATE TABLE IF NOT EXISTS `class_6th_b` (
  `en_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `se` int(11) NOT NULL,
  `toc` int(11) NOT NULL,
  `ajt` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `dotnet` int(11) NOT NULL,
  `de` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_6th_b`
--

INSERT INTO `class_6th_b` (`en_no`, `name`, `se`, `toc`, `ajt`, `wt`, `dotnet`, `de`) VALUES
(1234, 'damon', 0, 0, 0, 0, 0, 0),
(1235, 'victor', 0, 0, 0, 0, 0, 0),
(1236, 'barry', 0, 0, 0, 0, 0, 0),
(1237, 'elena', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_6th_b_total`
--

CREATE TABLE IF NOT EXISTS `class_6th_b_total` (
  `se` int(11) NOT NULL,
  `toc` int(11) NOT NULL,
  `ajt` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `dotnet` int(11) NOT NULL,
  `de` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_6th_b_total`
--

INSERT INTO `class_6th_b_total` (`se`, `toc`, `ajt`, `wt`, `dotnet`, `de`) VALUES
(0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `pwd` text NOT NULL,
  UNIQUE KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`t_id`, `uname`, `pwd`) VALUES
(1, 'shabnam', 'hakim'),
(2, 'siddharth', 'bhavsar'),
(3, 'viraj', 'agrawal'),
(4, 'dhaivat', 'parikh'),
(5, 'jiral', 'joshi'),
(6, 'nidhi ', 'thakkar');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `t_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`t_id`, `name`, `class`) VALUES
(1, 'se', '6th_a'),
(1, 'wt', '6th_b'),
(2, 'ajt', '6th_b'),
(2, 'dotnet', '6th_a'),
(2, 'dotnet', '6th_b'),
(4, 'toc', '6th_a'),
(4, 'de', '6th_b'),
(3, 'wt', '6th_a'),
(4, 'de', '6th_a'),
(5, 'toc', '6th_b'),
(4, 'ajt', '6th_a'),
(5, 'se', '6th_b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

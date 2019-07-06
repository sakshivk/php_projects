-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2015 at 07:53 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `q_id` int(50) NOT NULL AUTO_INCREMENT,
  `query_title` varchar(100) NOT NULL,
  `query_description` varchar(500) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `sender_role` varchar(100) NOT NULL,
  `sending_time` datetime NOT NULL,
  `receiver_id` int(20) NOT NULL,
  `receiver_role` varchar(100) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`q_id`, `query_title`, `query_description`, `sender_id`, `sender_role`, `sending_time`, `receiver_id`, `receiver_role`) VALUES
(1, 'regarding Networking ', 'there are some router regarding problems', 7, '5', '2014-04-22 15:15:44', 2, '2'),
(48, 'ffghdfgf', 'ansajsdijbfhbsidf<br>', 19, '1', '2015-04-27 12:41:41', 22, ''),
(47, '', 'cssfjsvjdfhbdb', 20, '5', '2015-04-21 10:33:58', 19, ''),
(46, 'cscvdfbvgfbgsfvvasc', 'dscvdsfbfgxbvbs<br>', 19, '1', '2015-04-21 10:24:38', 20, ''),
(45, '', 'dfvfnghnhgdbdsbvdfhndghndf<br>', 19, '1', '2015-04-21 10:23:40', 20, ''),
(44, '', 'sasdvdfbdgfd<br>', 19, '1', '2015-04-18 13:23:50', 20, ''),
(43, '', 'gfgfshsgb', 19, '1', '2015-04-17 11:15:05', 20, ''),
(42, '', 'aefdfnhfxgjdxkgtckmbn,vhjkgcx<br>', 19, '1', '2015-04-17 10:46:09', 20, ''),
(41, '', 'sdvsdfgnjdfjndfb', 20, '5', '2015-04-17 10:18:54', 19, ''),
(40, '', 'asadvfsgndfjfkdgnfsgmdghkdd<br>', 19, '1', '2015-04-17 10:17:18', 20, ''),
(39, '', 'dfdbsfgnfbzvnxfgnx', 22, '2', '2015-04-17 09:57:38', 19, ''),
(38, '', 'dckjcgkjhvgdfj<br>', 19, '1', '2015-04-17 09:55:39', 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` int(20) NOT NULL,
  `status` int(200) NOT NULL,
  `mailid` varchar(20) NOT NULL,
  `display_name` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`u_id`, `name`, `pass`, `role`, `status`, `mailid`, `display_name`) VALUES
(23, 'manisha', 'manisha', 4, 0, 'manisha@gmail', 'manisha'),
(22, 'kavita', 'kavita', 2, 1, 'kavita@gmail', 'kavita'),
(21, 'ajay1', 'ajay', 3, 1, 'ajay@gmail', 'ajay'),
(19, 'ajay', 'ajay', 1, 1, 'ajaydeephunjan@gmail', 'ajay'),
(20, 'manish', 'manish', 5, 1, 'manish@gmail', 'manish');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE IF NOT EXISTS `response` (
  `response_id` int(30) NOT NULL AUTO_INCREMENT,
  `q_id` int(20) NOT NULL,
  `response` varchar(300) NOT NULL,
  `response_by` varchar(50) NOT NULL,
  PRIMARY KEY (`response_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`response_id`, `q_id`, `response`, `response_by`) VALUES
(108, 47, 'gdgfbdfbdsbhgfx', '20'),
(107, 47, 'fdssfgfzdbdfbd<br>', '19'),
(106, 46, 'cbdcasdgchjsagcjakdg', '20'),
(105, 42, 'fhhfgjhfxgjfgjcfjc', '20'),
(104, 40, 'vsdfbsnfgjnfsbzf ', '19'),
(103, 40, 'afdbngdhnhgfb', '20'),
(100, 36, 'i m gud too <br>', '19'),
(102, 38, 'dsmnbvdkfjfgr', '22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `r_id` int(20) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`r_id`, `role`) VALUES
(1, '        admin  '),
(2, ' Network Admin   '),
(3, '    Project Manager  '),
(4, ' team_leader '),
(5, '    employee  '),
(16, 'md');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `status`) VALUES
(0, '    block       '),
(1, 'active   ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

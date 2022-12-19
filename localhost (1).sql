-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2021 at 11:03 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_batstateu`
--
CREATE DATABASE `db_batstateu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_batstateu`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_accounts`
--

CREATE TABLE IF NOT EXISTS `tb_accounts` (
  `fullname` varchar(30) NOT NULL,
  `srcode` varchar(11) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `program` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `campus` varchar(20) NOT NULL,
  PRIMARY KEY (`srcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_accounts`
--

INSERT INTO `tb_accounts` (`fullname`, `srcode`, `contactno`, `email`, `password`, `program`, `department`, `campus`) VALUES
('Juriel Comia', '19-07707', '09055811152', 'juriel.comia@g.batstate-u.edu.ph', 'COMIA', 'BSIT', 'CICS', 'Alangilan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_campus` varchar(25) NOT NULL,
  `admin_department` varchar(25) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10002 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_email`, `admin_name`, `admin_password`, `admin_campus`, `admin_department`) VALUES
(10001, 'bsu.itemfinder@g.batstate-u.edu.ph', 'BSU-OCLIF', 'admin', 'Alangilan', 'CICS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_announcement`
--

CREATE TABLE IF NOT EXISTS `tb_announcement` (
  `department` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `caption` text NOT NULL,
  `timedate` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_announcement`
--

INSERT INTO `tb_announcement` (`department`, `campus`, `caption`, `timedate`, `id`) VALUES
('CICS', 'Alangilan Campus', 'Helloworld', '2021-11-15 12:05:30', 3),
('CABEIHM', 'PB Main 1 Campus', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.', '2021-11-15 12:12:44', 6),
('CIT', 'Lemery Campus', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2021-11-15 12:07:59', 5),
('CEAFA', 'Arasof-Nasugbu Campus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus sit amet elit in ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada nec felis a posuere. Nullam non enim finibus, ultrices tortor eget, tempus orci. Suspendisse pharetra semper ante quis ornare. Ut eu libero non velit sagittis consectetur pulvinar eu lorem. In ullamcorper lorem iaculis sem sodales pellentesque. Donec at sollicitudin tellus. Pellentesque ac orci sapien. Nam in turpis quis justo dapibus tempus. Integer consectetur erat vel ipsum porta fringilla. Vivamus tempor nunc sem, blandit molestie sem dapibus id. Aenean id arcu neque. Praesent commodo tempor sapien, et auctor metus sollicitudin vitae. Morbi imperdiet egestas dictum. Etiam sit amet imperdiet sapien, vel aliquam lacus.', '2021-11-15 16:52:09', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_claimedowner`
--

CREATE TABLE IF NOT EXISTS `tb_claimedowner` (
  `itemno` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `tdclaimed` datetime NOT NULL,
  PRIMARY KEY (`itemno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_claimedowner`
--

INSERT INTO `tb_claimedowner` (`itemno`, `owner`, `tdclaimed`) VALUES
(1121, 'Juriel Comia', '2021-12-01 12:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_claimedrecord`
--

CREATE TABLE IF NOT EXISTS `tb_claimedrecord` (
  `clfinder` varchar(50) NOT NULL,
  `clitemno` int(11) NOT NULL,
  `cltime` time NOT NULL,
  `cldate` date NOT NULL,
  `clitemcategory` varchar(25) NOT NULL,
  `clitemlocation` varchar(50) NOT NULL,
  `cldepartment` varchar(50) NOT NULL,
  `clcampus` varchar(20) NOT NULL,
  PRIMARY KEY (`clitemno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_claimedrecord`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_deletedmsg`
--

CREATE TABLE IF NOT EXISTS `tb_deletedmsg` (
  `dmid` int(11) NOT NULL,
  `dmitemnumber` int(11) NOT NULL,
  `dmsrcode` varchar(15) NOT NULL,
  `dmmyfile` varchar(255) NOT NULL,
  `dmdescription` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`dmid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_deletedmsg`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_iteminfo`
--

CREATE TABLE IF NOT EXISTS `tb_iteminfo` (
  `findername` varchar(50) NOT NULL,
  `itemno` int(11) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `itemcategory` varchar(25) NOT NULL,
  `itemlocation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `campus` varchar(20) NOT NULL,
  PRIMARY KEY (`itemno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1128 ;

--
-- Dumping data for table `tb_iteminfo`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_messages`
--

CREATE TABLE IF NOT EXISTS `tb_messages` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `itemnumber` int(11) NOT NULL,
  `srcode` varchar(15) NOT NULL,
  `myfile` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Dumping data for table `tb_messages`
--

INSERT INTO `tb_messages` (`msgid`, `itemnumber`, `srcode`, `myfile`, `description`, `datetime`) VALUES
(157, 1234, '', 'all_images/3d7c00da242a3740f67a17cd3fab3f53photo-1585401586477-2a671e1cae4e.jpg', 'Hello', '2021-12-02 13:47:55'),
(158, 1234, '', 'all_images/152a977f849177e8a2032af02550c1e3photo-1585401586477-2a671e1cae4e.jpg', 'Hello', '2021-12-02 13:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_verifiedmsg`
--

CREATE TABLE IF NOT EXISTS `tb_verifiedmsg` (
  `archid` int(11) NOT NULL,
  `architemnumber` int(11) NOT NULL,
  `archsrcode` varchar(15) NOT NULL,
  `archmyfile` varchar(255) NOT NULL,
  `archdescription` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`archid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_verifiedmsg`
--


-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2017 at 01:44 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0
--
-- login
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `address` mediumtext NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`phno`),
  UNIQUE KEY `phno` (`phno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `phno`, `address`, `email`, `password`) VALUES
('Richard', 'Parker', 9940630028, 'No-16,8th right street, saravana nagar, manikandapuram, thirumullaivoyal', 'richardp035@gmail.co', 'richard');

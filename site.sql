-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2015 at 07:19 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_key` varchar(120) NOT NULL,
  `about_value` text NOT NULL,
  PRIMARY KEY (`about_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_key`, `about_value`) VALUES
('about_info', 'Hi, I am Jessie Glover.  I am a graduate of the Academy of Makeup Arts in Nashville, TN.  While attending, I learned beauty, fashion, and special effects makeup as well as how to style hair.  I would love to work with you for your wedding or special event.');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_rank` int(11) NOT NULL,
  `exp_text` text NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `frontpage`
--

CREATE TABLE IF NOT EXISTS `frontpage` (
  `frontpage_key` varchar(120) NOT NULL,
  `frontpage_value` text NOT NULL,
  PRIMARY KEY (`frontpage_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontpage`
--

INSERT INTO `frontpage` (`frontpage_key`, `frontpage_value`) VALUES
('description', 'Jessie Glover is a professional makeup artist working in Nashville, Tennessee.');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `site_key` varchar(120) NOT NULL,
  `site_value` text NOT NULL,
  PRIMARY KEY (`site_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_key`, `site_value`) VALUES
('site_name', 'Jessie Glover'),
('site_subtitle', 'Professional Makeup Artist');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

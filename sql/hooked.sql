-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2012 at 09:34 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hooked`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodytype`
--

CREATE TABLE IF NOT EXISTS `bodytype` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bodytype`
--

INSERT INTO `bodytype` (`id`, `type`) VALUES
(1, 'Thin'),
(2, 'Athletic'),
(3, 'Average'),
(4, 'Above Average'),
(5, 'Big/Tall/BBW');

-- --------------------------------------------------------

--
-- Table structure for table `ethnicity`
--

CREATE TABLE IF NOT EXISTS `ethnicity` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ethnicity`
--

INSERT INTO `ethnicity` (`id`, `type`) VALUES
(1, 'African American'),
(2, 'Asian'),
(3, 'Caucasian'),
(4, 'Hispanic'),
(5, 'Middle Eastern'),
(6, 'Native American'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `haircolour`
--

CREATE TABLE IF NOT EXISTS `haircolour` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `haircolour`
--

INSERT INTO `haircolour` (`id`, `type`) VALUES
(1, 'Blonde'),
(2, 'Brown'),
(3, 'Red'),
(4, 'Black'),
(5, 'Grey'),
(6, 'Bald'),
(7, 'Mixed');

-- --------------------------------------------------------

--
-- Table structure for table `height`
--

CREATE TABLE IF NOT EXISTS `height` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `height` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` int(8) NOT NULL,
  `sender_id` int(8) NOT NULL,
  `message` text NOT NULL,
  `read` tinyint(1) NOT NULL,
  `sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sendex` (`sender_id`),
  UNIQUE KEY `recex` (`receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  `faculty_id` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `faculty` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userattributes`
--

CREATE TABLE IF NOT EXISTS `userattributes` (
  `user_id` int(16) NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  `gender` int(11) NOT NULL,
  `height_id` int(11) NOT NULL,
  `hair_colour_id` int(11) NOT NULL,
  `orientation` int(11) NOT NULL COMMENT 'Straight, Bi-Sexual, Gay',
  `bodytype_id` int(11) NOT NULL,
  `birthdate` int(11) NOT NULL,
  `ethnicity_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `heightindex` (`height_id`),
  KEY `hairindex` (`hair_colour_id`),
  KEY `bodyindex` (`bodytype_id`),
  KEY `ethnicityindex` (`ethnicity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `userattributes`
--
ALTER TABLE `userattributes`
  ADD CONSTRAINT `userattributes_ibfk_6` FOREIGN KEY (`ethnicity_id`) REFERENCES `ethnicity` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userattributes_ibfk_3` FOREIGN KEY (`height_id`) REFERENCES `height` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userattributes_ibfk_4` FOREIGN KEY (`hair_colour_id`) REFERENCES `haircolour` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userattributes_ibfk_5` FOREIGN KEY (`bodytype_id`) REFERENCES `bodytype` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql3.freesqldatabase.com
-- Generation Time: Mar 23, 2015 at 05:29 PM
-- Server version: 5.5.40-0ubuntu0.12.04.1
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sql371075`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `StudentID` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `School` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Class` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Forename` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Surname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`StudentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`StudentID`, `School`, `Class`, `Password`, `Forename`, `Surname`) VALUES
(000065, 'UOL', 'CompSci', 'password', '', ''),
(000064, 'UOL', 'CompSci', 'password', '', ''),
(000063, 'UOL', 'CompSci', 'password', '', ''),
(000062, 'UOL', 'CompSci', 'password', '', ''),
(000061, 'UOL', 'CompSci', 'password', '', ''),
(000060, 'UOL', 'CompSci', 'password', '', ''),
(000059, 'UOL', 'CompSci', 'password', '', ''),
(000058, 'UOL', 'CompSci', 'password', '', ''),
(000057, 'UOL', 'CompSci', 'password', '', ''),
(000056, 'UOL', 'CompSci', 'password', '', ''),
(000055, 'UOL', 'CompSci', 'password', '', ''),
(000054, 'UOL', 'CompSci', 'password', '', ''),
(000053, 'UOL', 'CompSci', 'password', '', ''),
(000052, 'UOL', 'CompSci', 'password', '', ''),
(000051, 'UOL', 'CompSci', 'password', '', ''),
(000050, 'UOL', 'CompSci', 'password', '', ''),
(000049, 'UOL', 'CompSci', 'password', '', ''),
(000048, 'UOL', 'CompSci', 'password', '', ''),
(000047, 'UOL', 'CompSci', 'password', '', ''),
(000046, 'UOL', 'CompSci', 'password', '', ''),
(000045, 'UOL', 'CompSci', 'changeme', 'Tim', 'Tim');

-- --------------------------------------------------------

--
-- Table structure for table `Student_Game_Scores`
--

CREATE TABLE IF NOT EXISTS `Student_Game_Scores` (
  `StudentID` int(6) unsigned zerofill NOT NULL,
  `Score` int(11) NOT NULL,
  `Submit_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student_Game_Scores`
--

INSERT INTO `Student_Game_Scores` (`StudentID`, `Score`, `Submit_Time`) VALUES
(000045, 4, '2015-03-22 14:25:50'),
(000059, 51, '2015-03-22 14:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `Student_Scores`
--

CREATE TABLE IF NOT EXISTS `Student_Scores` (
  `StudentID` int(6) unsigned zerofill NOT NULL,
  `Topic1` int(2) NOT NULL,
  `Topic2` int(2) NOT NULL,
  `Topic3` int(2) NOT NULL,
  `Topic4` int(2) NOT NULL,
  `Topic5` int(2) NOT NULL,
  `Topic6` int(2) NOT NULL,
  `Topic7` int(2) NOT NULL,
  KEY `StudentID` (`StudentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `Student_Scores`
--

INSERT INTO `Student_Scores` (`StudentID`, `Topic1`, `Topic2`, `Topic3`, `Topic4`, `Topic5`, `Topic6`, `Topic7`) VALUES
(000045, 10, 3, 2, 2, 1, 0, 0),
(000059, 10, 0, 0, 0, 0, 0, 0),
(000000, 2, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE IF NOT EXISTS `Teacher` (
  `UserID` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Forename` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Surname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `School` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`UserID`, `Forename`, `Surname`, `School`, `Email`, `Password`) VALUES
(000001, 'Sam', 'Taylor', 'UOL', 's.d.taylr@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `Teacher_Class`
--

CREATE TABLE IF NOT EXISTS `Teacher_Class` (
  `UserID` int(6) NOT NULL,
  `Class` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NoStudents` int(2) NOT NULL,
  KEY `UserID` (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `Teacher_Class`
--

INSERT INTO `Teacher_Class` (`UserID`, `Class`, `NoStudents`) VALUES
(1, 'CompSci', 21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 05:45 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs17main`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `School` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Class` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Forename` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Surname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`StudentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `School`, `Class`, `Password`, `Forename`, `Surname`) VALUES
(000001, 'UOL', 'Classone', 'password1', 'Student', 'Name'),
(000002, 'UOL', 'Classone', 'changeme', '', ''),
(000003, 'UOL', 'Classone', 'changeme', '', ''),
(000004, 'UOL', 'Classone', 'changeme', '', ''),
(000005, 'UOL', 'Classone', 'changeme', '', ''),
(000006, 'UOL', 'Classone', 'changeme', '', ''),
(000007, 'UOL', 'Classone', 'changeme', '', ''),
(000008, 'UOL', 'Classone', 'changeme', '', ''),
(000009, 'UOL', 'Classone', 'changeme', '', ''),
(000010, 'UOL', 'Classone', 'changeme', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_game_scores`
--

CREATE TABLE IF NOT EXISTS `student_game_scores` (
  `StudentID` int(6) unsigned zerofill NOT NULL,
  `Score` int(11) NOT NULL,
  `Submit_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_game_scores`
--

INSERT INTO `student_game_scores` (`StudentID`, `Score`, `Submit_Time`) VALUES
(000001, 2, '2015-04-23 14:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `student_scores`
--

CREATE TABLE IF NOT EXISTS `student_scores` (
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
-- Dumping data for table `student_scores`
--

INSERT INTO `student_scores` (`StudentID`, `Topic1`, `Topic2`, `Topic3`, `Topic4`, `Topic5`, `Topic6`, `Topic7`) VALUES
(000001, 10, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `UserID` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Forename` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Surname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `School` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`UserID`, `Forename`, `Surname`, `School`, `Email`, `Password`) VALUES
(000001, 'Test', 'Test', 'UOL', 'tets@test.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE IF NOT EXISTS `teacher_class` (
  `UserID` int(6) NOT NULL,
  `Class` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NoStudents` int(2) NOT NULL,
  KEY `UserID` (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`UserID`, `Class`, `NoStudents`) VALUES
(1, 'Classone', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

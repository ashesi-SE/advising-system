-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2014 at 08:57 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advisory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor_free_times`
--

CREATE TABLE IF NOT EXISTS `advisor_free_times` (
  `advisor_free_times_id` int(11) NOT NULL AUTO_INCREMENT,
  `dates_available` datetime DEFAULT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`advisor_free_times_id`,`faculty_id`),
  KEY `fk_advisor_free_times_faculty1_idx` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `department_name` varchar(45) DEFAULT NULL,
  `student_has_advisor_id` int(11) NOT NULL,
  PRIMARY KEY (`faculty_id`,`student_has_advisor_id`),
  KEY `fk_faculty_student_has_advisor1_idx` (`student_has_advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  `student_has_advisor_id` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`,`student_has_advisor_id`),
  KEY `fk_messages_student_has_advisor1_idx` (`student_has_advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sessions_id` int(11) NOT NULL AUTO_INCREMENT,
  `scheduled_time` datetime DEFAULT NULL,
  `actual_time` datetime DEFAULT NULL,
  `student_has_advisor_id` int(11) NOT NULL,
  PRIMARY KEY (`sessions_id`,`student_has_advisor_id`),
  KEY `fk_sessions_student_has_advisor1_idx` (`student_has_advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `student_has_advisor_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`,`student_has_advisor_id`),
  KEY `fk_student_has_advisor1_idx` (`student_has_advisor_id`),
  KEY `student_has_advisor_id` (`student_has_advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

CREATE TABLE IF NOT EXISTS `student_grades` (
  `grade_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`grade_id`,`student_id`),
  KEY `fk_student_grades_student_idx` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_has_advisor`
--

CREATE TABLE IF NOT EXISTS `student_has_advisor` (
  `student_has_advisor_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `advisor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_has_advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor_free_times`
--
ALTER TABLE `advisor_free_times`
  ADD CONSTRAINT `fk_advisor_free_times_faculty1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `fk_faculty_student_has_advisor1` FOREIGN KEY (`student_has_advisor_id`) REFERENCES `student_has_advisor` (`student_has_advisor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_student_has_advisor1` FOREIGN KEY (`student_has_advisor_id`) REFERENCES `student_has_advisor` (`student_has_advisor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_student_has_advisor1` FOREIGN KEY (`student_has_advisor_id`) REFERENCES `student_has_advisor` (`student_has_advisor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_student_has_advisor1` FOREIGN KEY (`student_has_advisor_id`) REFERENCES `student_has_advisor` (`student_has_advisor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_grades`
--
ALTER TABLE `student_grades`
  ADD CONSTRAINT `fk_student_grades_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

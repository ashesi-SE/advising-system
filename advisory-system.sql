-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2014 at 08:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advisory-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor_free_times`
--

CREATE TABLE IF NOT EXISTS `advisor_free_times` (
  `advisor_free_times_id` int(11) NOT NULL AUTO_INCREMENT,
  `dates_available` datetime DEFAULT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`advisor_free_times_id`),
  KEY `fk_advisor_free_times_faculty_idx` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `advisor_upload`
--

CREATE TABLE IF NOT EXISTS `advisor_upload` (
  `advisor_upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`advisor_upload_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `advisor_upload`
--

INSERT INTO `advisor_upload` (`advisor_upload_id`, `faculty_id`, `path`, `date_created`) VALUES
(3, 0, 'male_silhouette2.jpg', '2014-12-14 20:09:55'),
(4, 0, '20141201205932.ics', '2014-12-14 20:56:47'),
(5, 2, 'Capstone_Project-_Capstone_Rubric-_Thesis.doc', '2014-12-14 21:51:44'),
(6, 2, '20141201205932.ics', '2014-12-15 13:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `department_name` varchar(45) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `role2` varchar(30) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `department_name`, `role`, `role2`) VALUES
(1, 'Doctor', 'Ayorkor', 'Korsah', 'a.korsah', '123', 'Computer Science', 'faculty', 'hod'),
(2, 'Esi', 'Mansah', 'Ansah', 'e.ansah', '123', 'Business Administration', 'faculty', ''),
(3, 'Ebow', 'Spi', 'Spio', 'e.spio', '123', 'Business Administration', 'faculty', 'hod'),
(4, 'Dafla', 'A', 'Aelaf', 'a.dafla', '123', 'Computer Science', 'faculty', ''),
(5, 'Marcia', 'G', 'Grant', 'm.grant', '123', 'Pro', 'Provost', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  `student_has_advisor_id` int(11) NOT NULL,
  `recepient` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`msg_id`),
  KEY `fk_messages_student_has_advisor1_idx` (`student_has_advisor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `message`, `student_has_advisor_id`, `recepient`, `date_created`) VALUES
(4, 'hellewww', 1, 'student', '2014-12-02 02:27:10'),
(5, 'this is another message to my advisor', 1, 'advisor', '2014-12-02 03:04:45'),
(6, 'this is a messgae to my student', 1, 'student', '2014-12-16 03:05:19'),
(7, ' Yo yo yo. Hope you are good', 60, 'student', '2014-12-13 19:04:41'),
(8, ' Can we meet on thursday this week', 60, 'advisor', '2014-12-13 19:06:26'),
(9, ' No we cant meet this thursday', 60, 'student', '2014-12-13 19:08:15'),
(10, ' Hello Ku, just a reminder to meet me tomorrow at 2pm in the Cafeteria. Bring along a copy of your transcript.', 0, 'student', '2014-12-14 20:47:15'),
(11, ' Yes Dr. Ansah. Could I bring a soft copy of my transcript instead?', 67, 'advisor', '2014-12-14 20:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sessions_id` int(11) NOT NULL AUTO_INCREMENT,
  `scheduled_time` datetime DEFAULT NULL,
  `actual_time` datetime DEFAULT NULL,
  `session_notes` text,
  `student_has_advisor_id` int(11) NOT NULL,
  PRIMARY KEY (`sessions_id`),
  KEY `fk_sessions_student_has_advisor1_idx` (`student_has_advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `major` varchar(30) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `major`) VALUES
(1, 'Matha', 'Margaret', 'Kumi', 'm.kumi', '123', 'Computer Science'),
(2, 'Ku', 'Kadf', 'Klint', 'k.klint', '123', 'Business Administration'),
(3, 'Joshua', 'Kwame', 'Laryea', 'j.laryea', '123', 'Computer Science'),
(4, 'Luke', 'van', 'Skywalker', 'l.skywalker', '123', 'Management Information System'),
(5, 'Slim', 'Basta', 'Baby', 's.baby', '123', 'Management Information System'),
(6, 'Soul', 'T', 'Sister', 's.sister', '123', 'Computer Science'),
(7, 'Kwesi', 'B', 'Black', 'k.black', '123', 'Business Administration');

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

CREATE TABLE IF NOT EXISTS `student_grades` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(45) DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`grade_id`),
  KEY `fk_student_grades_student1_idx` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_has_advisor`
--

CREATE TABLE IF NOT EXISTS `student_has_advisor` (
  `student_has_advisor_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_faculty_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`student_has_advisor_id`),
  KEY `fk_student_has_advisor_faculty1_idx` (`faculty_faculty_id`),
  KEY `fk_student_has_advisor_student1_idx` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `student_has_advisor`
--

INSERT INTO `student_has_advisor` (`student_has_advisor_id`, `faculty_faculty_id`, `student_id`) VALUES
(71, 1, 1),
(72, 1, 3),
(73, 4, 6),
(74, 2, 2),
(75, 2, 4),
(76, 3, 5),
(77, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`upload_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `faculty_id`, `path`, `date_created`) VALUES
(1, 3, '3rd_-_7th_november-2.xls', '2014-12-13 21:13:33'),
(2, 1, 'advisory_system.sql', '2014-12-13 21:22:30'),
(3, 1, 'AeroVector_Courses.pdf', '2014-12-14 20:18:43'),
(4, 1, '20141201205932.ics', '2014-12-15 13:51:40');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor_free_times`
--
ALTER TABLE `advisor_free_times`
  ADD CONSTRAINT `fk_advisor_free_times_faculty` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_student_has_advisor1` FOREIGN KEY (`student_has_advisor_id`) REFERENCES `student_has_advisor` (`student_has_advisor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_grades`
--
ALTER TABLE `student_grades`
  ADD CONSTRAINT `fk_student_grades_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_has_advisor`
--
ALTER TABLE `student_has_advisor`
  ADD CONSTRAINT `fk_student_has_advisor_faculty1` FOREIGN KEY (`faculty_faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_has_advisor_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

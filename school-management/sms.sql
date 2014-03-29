-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2013 at 12:41 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE IF NOT EXISTS `assessment` (
  `assessment_id` int(22) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(54) NOT NULL,
  `academic_year` year(4) NOT NULL,
  `assessment_date` varchar(22) NOT NULL,
  `assessment_status` int(11) DEFAULT NULL,
  `assessment_term_type` varchar(11) NOT NULL,
  `school_assessed_by` varchar(22) NOT NULL,
  `no_of_section` int(11) NOT NULL,
  `school_assessed_again_same_year` varchar(12) NOT NULL,
  `assessment_type_if_re_assessed` varchar(22) NOT NULL,
  `aps_Average` varchar(22) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`assessment_id`),
  UNIQUE KEY `School_code` (`school_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `school_code`, `academic_year`, `assessment_date`, `assessment_status`, `assessment_term_type`, `school_assessed_by`, `no_of_section`, `school_assessed_again_same_year`, `assessment_type_if_re_assessed`, `aps_Average`, `update_user`, `update_date`) VALUES
(28, 'BLR0019', 1989, 'August 06,2012', 1, '', 'Prasanth', 0, 'No', 'Baseline', '', 'admin', '2013-01-15 18:30:00'),
(31, 'HYD0002', 1965, 'October 10,2012  ', 1, '', 'Vivek', 10, 'Yes', 'End Line', '', 'admin', '2012-10-08 18:30:00'),
(32, 'HYD0003', 2000, 'October 10,2012  ', 1, '', 'Prasad', 0, 'Yes', 'Endline', '', 'admin', '2013-01-21 18:30:00'),
(34, 'BLR0026', 2013, 'January 21,2013', 1, '', 'Nishanth', 0, 'No', 'EndLine', '', '', '2013-01-10 16:08:23'),
(35, 'BLR0022', 2003, 'October 10,2012  ', 1, '', 'Sateesh', 0, 'Yes', 'BaseLine', '', 'admin', '2013-01-11 07:29:45'),
(36, 'HYD0027', 2013, 'October 17,2011', 1, '', 'Pradeep', 0, 'No', 'MidLine', '', '', '2013-01-16 07:42:54'),
(37, 'DEL0017', 2013, 'January 16,2013', 1, '', 'Giri', 0, 'No', 'MidLine', '', '', '2013-01-19 07:23:39'),
(41, 'BLR0091', 2013, 'February 14,2013', 1, '', 'Nishanth', 0, 'Yes', 'BaseLine', '', '', '2013-02-07 12:54:47'),
(46, 'HYD0098', 2013, 'February 12,2013', 1, '', 'rajesh', 0, 'Yes', 'BaseLine', '', '', '2013-02-13 10:02:55'),
(47, 'DEL0101', 2013, 'February 6,2013', 1, '', 'rajesh', 0, 'Yes', 'BaseLine', '', '', '2013-02-14 02:39:17'),
(48, 'HYD0110', 2013, 'February 15,2013', 1, '', 'rajesh', 0, 'Yes', 'BaseLine', '', '', '2013-02-15 10:13:13'),
(49, 'HYD0117', 2013, 'February 15,2013', 1, '', 'rajesh', 0, 'Yes', 'BaseLine', '', '', '2013-02-15 10:13:42'),
(50, 'BLR0118', 2013, 'February 15,2013', 1, '', 'rajesh', 0, 'Yes', 'BaseLine', '', '', '2013-02-15 10:16:18'),
(51, 'HYD0119', 2013, 'February 19,2013', 1, '', 'Rajesh', 0, 'No', 'MidLine', '', '', '2013-02-15 12:42:40'),
(52, 'HYD0120', 2013, 'February 8,2013', 1, '', 'kali', 0, 'Yes', 'BaseLine', '', '', '2013-02-18 07:05:07'),
(53, 'HYD0121', 2013, '', 1, '', 'HHJH', 0, 'Yes', 'BaseLine', '', '', '2013-02-18 11:25:00'),
(54, 'HYD0122', 2013, 'February 8,2013', 1, '', 'gggg', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 09:28:32'),
(55, 'HYD0123', 2013, 'February 14,2013', 1, '', 'HHJH', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 10:53:34'),
(56, 'HYD0124', 2013, 'August 25,2011', 1, '', 'ghghghg', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 11:01:11'),
(57, 'HYD0125', 2013, 'February 10,2013', 1, '', 'gggg', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 12:56:39'),
(58, 'HYD0126', 2013, 'April 10,2012', 1, '', 'prasad', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 14:28:21'),
(59, 'HYD0127', 2013, 'February 8,2013', 1, '', 'ghghghg', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 14:46:13'),
(60, 'HYD0128', 2013, 'February 8,2013', 1, '', 'ssssss', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 15:53:59'),
(61, 'HYD0129', 2013, 'February 14,2013', 1, '', 'HHJH', 0, 'Yes', 'BaseLine', '', '', '2013-02-25 15:57:28'),
(62, 'HYD0130', 2013, 'February 14,2013', 1, '', 'hhhh', 0, 'Yes', 'BaseLine', '', '', '2013-02-26 07:04:15'),
(63, 'HYD0131', 2013, 'February 6,2013', 1, '', 'ssdsad', 0, 'Yes', 'BaseLine', '', '', '2013-02-28 10:50:34'),
(64, 'HYD0132', 2013, 'March 12,2013', 1, '', 'dfdfd', 0, 'Yes', 'BaseLine', '', '', '2013-03-01 13:31:50'),
(65, 'HYD0133', 2013, 'March 13,2013', 1, '', 'gdfg', 0, 'Yes', 'BaseLine', '', '', '2013-03-01 13:58:40'),
(66, 'HYD0112', 2013, '', 1, '', 'dfdfd', 0, 'Yes', 'BaseLine', '', '', '2013-03-07 10:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `class_id` int(20) NOT NULL,
  `year` year(4) NOT NULL,
  `month` date NOT NULL,
  `no_of_sections` int(11) NOT NULL,
  `no_working_days` int(11) NOT NULL,
  `no_students_attended` int(11) NOT NULL,
  `no_teachers_attended` int(11) NOT NULL,
  `student_cumulative_attendance` int(11) NOT NULL,
  `teacher_cumulative_attendance` int(11) NOT NULL,
  `no_working_days_teachers` int(11) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `assessment_id`, `school_code`, `class_id`, `year`, `month`, `no_of_sections`, `no_working_days`, `no_students_attended`, `no_teachers_attended`, `student_cumulative_attendance`, `teacher_cumulative_attendance`, `no_working_days_teachers`, `update_user`, `update_date`) VALUES
(1, 31, 'HYD0002', 1, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(2, 31, 'HYD0002', 2, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(3, 31, 'HYD0002', 3, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(4, 31, 'HYD0002', 4, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(5, 31, 'HYD0002', 5, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(6, 31, 'HYD0002', 6, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(7, 31, 'HYD0002', 7, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(8, 31, 'HYD0002', 8, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(9, 31, 'HYD0002', 9, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(10, 31, 'HYD0002', 10, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(11, 31, 'HYD0002', 11, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(12, 31, 'HYD0002', 12, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(13, 31, 'HYD0002', 13, 2013, '2013-03-21', 1, 2, 2, 33, 2, 22, 22, 'administrator', '2013-03-21'),
(14, 31, 'HYD0002', 1, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(15, 31, 'HYD0002', 2, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(16, 31, 'HYD0002', 3, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(17, 31, 'HYD0002', 4, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(18, 31, 'HYD0002', 5, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(19, 31, 'HYD0002', 6, 2013, '2013-02-21', 1, 33, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(20, 31, 'HYD0002', 7, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(21, 31, 'HYD0002', 8, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(22, 31, 'HYD0002', 9, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(23, 31, 'HYD0002', 10, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(24, 31, 'HYD0002', 11, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(25, 31, 'HYD0002', 12, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(26, 31, 'HYD0002', 13, 2013, '2013-02-21', 1, 3, 3, 77, 3, 22, 22, 'administrator', '2013-03-21'),
(27, 31, 'HYD0002', 1, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(28, 31, 'HYD0002', 2, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(29, 31, 'HYD0002', 3, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(30, 31, 'HYD0002', 4, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(31, 31, 'HYD0002', 5, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(32, 31, 'HYD0002', 6, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(33, 31, 'HYD0002', 7, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(34, 31, 'HYD0002', 8, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(35, 31, 'HYD0002', 9, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(36, 31, 'HYD0002', 10, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(37, 31, 'HYD0002', 11, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(38, 31, 'HYD0002', 12, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21'),
(39, 31, 'HYD0002', 13, 2013, '2013-01-21', 1, 4, 4, 77, 4, 22, 22, 'administrator', '2013-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(22) NOT NULL,
  `form_name` varchar(54) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `school_code`, `form_name`) VALUES
(1, 'HYD0001', ' Infra  ');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE IF NOT EXISTS `cost` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `expense_cat_id` int(20) NOT NULL,
  `expense_sub_cat_id` int(20) NOT NULL,
  `amount` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cost_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`cost_id`, `assessment_id`, `school_code`, `expense_cat_id`, `expense_sub_cat_id`, `amount`, `quantity`, `total`, `comments`, `update_user`, `update_date`) VALUES
(1, 31, 'HYD0002', 1, 1, 121, 4, 484, 'hi', '', '2013-02-01 13:43:19'),
(2, 31, 'HYD0002', 1, 18, 234, 2, 468, 'haii', '', '2013-02-01 13:43:19'),
(3, 31, 'HYD0002', 1, 17, 67, 4, 268, 'normal', '', '2013-02-01 13:43:19'),
(4, 31, 'HYD0002', 1, 16, 23, 4, 92, 'good', '', '2013-02-01 13:43:19'),
(5, 31, 'HYD0002', 1, 15, 23, 5, 115, '', '', '2013-02-01 13:43:20'),
(6, 31, 'HYD0002', 1, 14, 12, 4, 48, '', '', '2013-02-01 13:43:20'),
(7, 31, 'HYD0002', 1, 13, 14, 5, 70, '', '', '2013-02-01 13:43:20'),
(8, 31, 'HYD0002', 1, 12, 15, 3, 45, '', '', '2013-02-01 13:43:20'),
(9, 31, 'HYD0002', 1, 11, 19, 5, 95, '', '', '2013-02-01 13:43:20'),
(10, 31, 'HYD0002', 1, 10, 10, 3, 30, '', '', '2013-02-01 13:43:20'),
(11, 31, 'HYD0002', 1, 9, 10, 5, 50, '', '', '2013-02-01 13:43:20'),
(12, 31, 'HYD0002', 1, 2, 10, 5, 50, '', '', '2013-02-01 13:43:20'),
(13, 31, 'HYD0002', 1, 3, 10, 5, 50, '', '', '2013-02-01 13:43:20'),
(14, 31, 'HYD0002', 1, 4, 20, 5, 100, '', '', '2013-02-01 13:43:20'),
(15, 31, 'HYD0002', 1, 5, 20, 5, 100, '', '', '2013-02-01 13:43:20'),
(16, 31, 'HYD0002', 1, 6, 20, 5, 100, '', '', '2013-02-01 13:43:20'),
(17, 31, 'HYD0002', 1, 7, 30, 5, 150, '', '', '2013-02-01 13:43:20'),
(18, 31, 'HYD0002', 1, 8, 40, 5, 200, '', '', '2013-02-01 13:43:20'),
(19, 31, 'HYD0002', 2, 25, 22, NULL, NULL, NULL, '', '2013-02-01 13:43:20'),
(20, 31, 'HYD0002', 2, 24, 222, NULL, NULL, NULL, '', '2013-02-01 13:43:20'),
(21, 31, 'HYD0002', 2, 23, 22, NULL, NULL, NULL, '', '2013-02-01 13:43:20'),
(22, 31, 'HYD0002', 2, 22, 22, NULL, NULL, NULL, '', '2013-02-01 13:43:20'),
(23, 31, 'HYD0002', 2, 21, 22, NULL, NULL, NULL, '', '2013-02-01 13:43:20'),
(24, 31, 'HYD0002', 2, 20, 3434, NULL, NULL, NULL, '', '2013-02-01 13:43:20'),
(25, 31, 'HYD0002', 2, 19, 22, NULL, NULL, NULL, '', '2013-02-01 13:43:21'),
(26, 28, 'BLR0019', 1, 1, 5555, 10, NULL, '', '', '2013-02-01 14:16:11'),
(27, 28, 'BLR0019', 1, 18, 0, 1, NULL, '', '', '2013-02-01 14:16:11'),
(28, 28, 'BLR0019', 1, 17, 0, 1, NULL, '', '', '2013-02-01 14:16:11'),
(29, 28, 'BLR0019', 1, 16, 0, 1, NULL, '', '', '2013-02-01 14:16:11'),
(30, 28, 'BLR0019', 1, 15, 0, 1, NULL, '', '', '2013-02-01 14:16:11'),
(31, 28, 'BLR0019', 1, 14, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(32, 28, 'BLR0019', 1, 13, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(33, 28, 'BLR0019', 1, 12, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(34, 28, 'BLR0019', 1, 11, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(35, 28, 'BLR0019', 1, 10, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(36, 28, 'BLR0019', 1, 9, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(37, 28, 'BLR0019', 1, 2, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(38, 28, 'BLR0019', 1, 3, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(39, 28, 'BLR0019', 1, 4, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(40, 28, 'BLR0019', 1, 5, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(41, 28, 'BLR0019', 1, 6, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(42, 28, 'BLR0019', 1, 7, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(43, 28, 'BLR0019', 1, 8, 0, 1, NULL, '', '', '2013-02-01 14:16:12'),
(44, 28, 'BLR0019', 2, 25, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(45, 28, 'BLR0019', 2, 24, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(46, 28, 'BLR0019', 2, 23, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(47, 28, 'BLR0019', 2, 22, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(48, 28, 'BLR0019', 2, 21, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(49, 28, 'BLR0019', 2, 20, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(50, 28, 'BLR0019', 2, 19, 0, NULL, NULL, NULL, '', '2013-02-01 14:16:12'),
(51, 47, 'DEL0101', 1, 1, 200, 1, 200, '', '', '2013-02-14 02:44:33'),
(52, 47, 'DEL0101', 1, 18, 300, 1, 300, '', '', '2013-02-14 02:44:33'),
(53, 47, 'DEL0101', 1, 17, 400, 1, 400, '', '', '2013-02-14 02:44:33'),
(54, 47, 'DEL0101', 1, 16, 500, 1, 500, '', '', '2013-02-14 02:44:33'),
(55, 47, 'DEL0101', 1, 15, 600, 1, 600, '', '', '2013-02-14 02:44:33'),
(56, 47, 'DEL0101', 1, 14, 700, 1, 700, '', '', '2013-02-14 02:44:33'),
(57, 47, 'DEL0101', 1, 13, 800, 1, 800, '', '', '2013-02-14 02:44:33'),
(58, 47, 'DEL0101', 1, 12, 900, 1, 900, '', '', '2013-02-14 02:44:33'),
(59, 47, 'DEL0101', 1, 11, 200, 1, 200, '', '', '2013-02-14 02:44:33'),
(60, 47, 'DEL0101', 1, 10, 300, 1, 300, '', '', '2013-02-14 02:44:33'),
(61, 47, 'DEL0101', 1, 9, 400, 1, 400, '', '', '2013-02-14 02:44:33'),
(62, 47, 'DEL0101', 1, 2, 500, 1, 500, '', '', '2013-02-14 02:44:33'),
(63, 47, 'DEL0101', 1, 3, 600, 1, 600, '', '', '2013-02-14 02:44:33'),
(64, 47, 'DEL0101', 1, 4, 700, 1, 700, '', '', '2013-02-14 02:44:33'),
(65, 47, 'DEL0101', 1, 5, 500, 1, 500, '', '', '2013-02-14 02:44:33'),
(66, 47, 'DEL0101', 1, 6, 200, 1, 200, '', '', '2013-02-14 02:44:33'),
(67, 47, 'DEL0101', 1, 7, 200, 1, 200, '', '', '2013-02-14 02:44:33'),
(68, 47, 'DEL0101', 1, 8, 300, 1, 300, '', '', '2013-02-14 02:44:33'),
(69, 47, 'DEL0101', 2, 25, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:33'),
(70, 47, 'DEL0101', 2, 24, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:33'),
(71, 47, 'DEL0101', 2, 23, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:33'),
(72, 47, 'DEL0101', 2, 22, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:33'),
(73, 47, 'DEL0101', 2, 21, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:33'),
(74, 47, 'DEL0101', 2, 20, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:34'),
(75, 47, 'DEL0101', 2, 19, 100, NULL, NULL, NULL, '', '2013-02-14 02:44:34'),
(76, 31, 'HYD0002', 2, 33, 22, NULL, NULL, NULL, '', '2013-03-06 10:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `enrollment_id` int(22) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(22) NOT NULL,
  `school_code` varchar(22) NOT NULL,
  `academic_year` year(4) NOT NULL,
  `class_id` int(22) NOT NULL,
  `no_of_sections` int(22) NOT NULL,
  `total_enrollment_boys` int(22) NOT NULL,
  `total_enrollment_girls` int(22) NOT NULL,
  `total_enrolments_students` int(100) NOT NULL,
  `total_new_admission_boys` int(22) NOT NULL,
  `total_new_admissions_girls` int(22) NOT NULL,
  `total_free_admissions_students` int(22) NOT NULL,
  `no_of_sectionsprevious` int(11) NOT NULL,
  `total_enrollment_boysprevious` int(11) NOT NULL,
  `total_enrollment_girlsprevious` int(11) NOT NULL,
  `no_of_sectionsprevious2` int(11) NOT NULL,
  `total_enrollments` int(11) NOT NULL,
  `insert_current_date` year(4) NOT NULL,
  `update_current_date` year(4) NOT NULL,
  `insert_prev_date` year(4) NOT NULL,
  `insert_last_prev_date` year(4) NOT NULL,
  `updated_by` varchar(200) NOT NULL,
  PRIMARY KEY (`enrollment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `assessment_id`, `school_code`, `academic_year`, `class_id`, `no_of_sections`, `total_enrollment_boys`, `total_enrollment_girls`, `total_enrolments_students`, `total_new_admission_boys`, `total_new_admissions_girls`, `total_free_admissions_students`, `no_of_sectionsprevious`, `total_enrollment_boysprevious`, `total_enrollment_girlsprevious`, `no_of_sectionsprevious2`, `total_enrollments`, `insert_current_date`, `update_current_date`, `insert_prev_date`, `insert_last_prev_date`, `updated_by`) VALUES
(1, 31, 'HYD0002', 0000, 1, 0, 0, 0, 0, 5, 5, 2, 1, 55, 1, 54, 78, 2013, 2013, 2012, 2011, 'administrator'),
(2, 31, 'HYD0002', 0000, 2, 0, 2, 0, 0, 5, 5, 5, 1, 55, 0, 5, 9, 2013, 2013, 2012, 2011, 'administrator'),
(3, 31, 'HYD0002', 0000, 3, 0, 2, 0, 2, 55, 2, 5, 1, 55, 0, 5, 8, 2013, 2013, 2012, 2011, 'administrator'),
(4, 31, 'HYD0002', 0000, 4, 0, 5, 55, 60, 5, 5, 5, 1, 555, 0, 5, 6, 2013, 2013, 2012, 2011, 'administrator'),
(5, 31, 'HYD0002', 0000, 5, 5, 5, 5, 10, 5, 2, 55, 1, 555, 0, 555, 6, 2013, 2013, 2012, 2011, 'administrator'),
(6, 31, 'HYD0002', 0000, 6, 5, 5, 5, 10, 55, 5, 2, 1, 5, 0, 0, 566, 2013, 2013, 2012, 2011, 'administrator'),
(7, 31, 'HYD0002', 0000, 7, 0, 0, 0, 0, 22, 2, 2, 1, 5, 0, 5, 5, 2013, 2013, 2012, 2011, 'administrator'),
(8, 31, 'HYD0002', 0000, 8, 0, 0, 5, 5, 5, 5, 5, 1, 5, 0, 5, 5, 2013, 2013, 2012, 2011, 'administrator'),
(9, 31, 'HYD0002', 0000, 9, 5, 5, 5, 10, 5, 5, 5, 1, 5, 0, 5, 5, 2013, 2013, 2012, 2011, 'administrator'),
(10, 31, 'HYD0002', 0000, 10, 5, 0, 0, 0, 5, 5, 5, 1, 5, 0, 0, 5, 2013, 2013, 2012, 2011, 'administrator'),
(11, 31, 'HYD0002', 0000, 11, 5, 5, 5, 10, 5, 5, 5, 1, 5, 0, 55, 5, 2013, 2013, 2012, 2011, 'administrator'),
(12, 31, 'HYD0002', 0000, 12, 5, 5, 0, 5, 5, 55, 5, 1, 0, 0, 5, 5, 2013, 2013, 2012, 2011, 'administrator'),
(13, 31, 'HYD0002', 0000, 13, 5, 5, 54, 59, 5, 5, 5, 1, 5, 0, 5, 4, 2013, 2013, 2012, 2011, 'administrator'),
(14, 51, 'HYD0119', 0000, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(15, 51, 'HYD0119', 0000, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(16, 51, 'HYD0119', 0000, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(17, 51, 'HYD0119', 0000, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(18, 51, 'HYD0119', 0000, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(19, 51, 'HYD0119', 0000, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(20, 51, 'HYD0119', 0000, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(21, 51, 'HYD0119', 0000, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(22, 51, 'HYD0119', 0000, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(23, 51, 'HYD0119', 0000, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(24, 51, 'HYD0119', 0000, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(25, 51, 'HYD0119', 0000, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(26, 51, 'HYD0119', 0000, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(27, 54, 'HYD0122', 0000, 1, 7, 7, 7, 14, 7, 7, 7, 71, 71, 71, 0, 0, 2000, 2000, 2000, 2000, ''),
(28, 54, 'HYD0122', 0000, 2, 7, 7, 7, 14, 7, 7, 7, 7, 7, 7, 0, 0, 2000, 2000, 2000, 2000, ''),
(29, 54, 'HYD0122', 0000, 3, 7, 7, 7, 14, 7, 7, 0, 7, 7, 7, 0, 0, 2000, 2000, 2000, 2000, ''),
(30, 54, 'HYD0122', 0000, 4, 7, 0, 0, 0, 0, 0, 0, 77, 7, 7, 0, 0, 2000, 2000, 2000, 2000, ''),
(31, 54, 'HYD0122', 0000, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(32, 54, 'HYD0122', 0000, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(33, 54, 'HYD0122', 0000, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(34, 54, 'HYD0122', 0000, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(35, 54, 'HYD0122', 0000, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(36, 54, 'HYD0122', 0000, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(37, 54, 'HYD0122', 0000, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(38, 54, 'HYD0122', 0000, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(39, 54, 'HYD0122', 0000, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 2000, ''),
(40, 57, 'HYD0125', 0000, 1, 8, 8, 8, 16, 8, 88, 2, 6545, 55, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(41, 57, 'HYD0125', 0000, 2, 8, 8, 8, 16, 5, 8, 2, 55, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(42, 57, 'HYD0125', 0000, 3, 8, 8, 8, 16, 8, 8, 22, 5, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(43, 57, 'HYD0125', 0000, 4, 8, 8, 8, 16, 8, 8, 22, 55, 555, 55, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(44, 57, 'HYD0125', 0000, 5, 8, 8, 8, 16, 8, 8, 22, 55, 55, 555, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(45, 57, 'HYD0125', 0000, 6, 0, 0, 0, 0, 0, 0, 22, 5, 555, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(46, 57, 'HYD0125', 0000, 7, 0, 0, 0, 0, 0, 0, 22, 55, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(47, 57, 'HYD0125', 0000, 8, 0, 0, 0, 0, 0, 0, 22, 5, 5, 5555, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(48, 57, 'HYD0125', 0000, 9, 0, 0, 0, 0, 0, 0, 0, 55, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(49, 57, 'HYD0125', 0000, 10, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(50, 57, 'HYD0125', 0000, 11, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(51, 57, 'HYD0125', 0000, 12, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(52, 57, 'HYD0125', 0000, 13, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 0, 0, 2013, 2013, 2012, 0000, 'administrator'),
(53, 32, 'HYD0003', 0000, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(54, 32, 'HYD0003', 0000, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(55, 32, 'HYD0003', 0000, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(56, 32, 'HYD0003', 0000, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(57, 32, 'HYD0003', 0000, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(58, 32, 'HYD0003', 0000, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(59, 32, 'HYD0003', 0000, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(60, 32, 'HYD0003', 0000, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(61, 32, 'HYD0003', 0000, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(62, 32, 'HYD0003', 0000, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(63, 32, 'HYD0003', 0000, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(64, 32, 'HYD0003', 0000, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator'),
(65, 32, 'HYD0003', 0000, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2013, 2013, 0000, 0000, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE IF NOT EXISTS `financial` (
  `financial_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(22) NOT NULL,
  `expense_cat_id` int(11) NOT NULL,
  `expense_sub_cat_id` int(11) NOT NULL,
  `loan1` int(11) NOT NULL,
  `loan2` int(11) NOT NULL,
  `loan3` int(11) NOT NULL,
  `loan4` int(11) NOT NULL,
  `loan5` int(11) NOT NULL,
  `update_user` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`financial_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`financial_id`, `assessment_id`, `school_code`, `expense_cat_id`, `expense_sub_cat_id`, `loan1`, `loan2`, `loan3`, `loan4`, `loan5`, `update_user`, `update_date`) VALUES
(97, 30, 'HYD0016', 3, 31, 1, 2, 33, 3, 1, 0, '2012-09-29 07:58:37'),
(98, 30, 'HYD0016', 3, 30, 2, 3, 231, 231, 21, 0, '2012-09-29 07:58:37'),
(99, 30, 'HYD0016', 3, 29, 231, 21, 21, 21, 21, 0, '2012-09-29 07:58:37'),
(100, 30, 'HYD0016', 3, 28, 21, 21, 2, 12, 12, 0, '2012-09-29 07:58:37'),
(101, 30, 'HYD0016', 3, 27, 12, 45, 1545, 12, 425, 0, '2012-09-29 07:58:37'),
(102, 30, 'HYD0016', 3, 26, 45, 45, 4, 24, 54, 0, '2012-09-29 07:58:37'),
(103, 30, 'HYD0016', 3, 32, 5, 45, 0, 0, 0, 0, '2012-09-29 07:58:37'),
(104, 31, 'HYD0002', 3, 31, 2222, 2222, 2222, 2222, 222, 0, '2013-02-01 13:40:15'),
(105, 31, 'HYD0002', 3, 30, 2222, 2222, 222, 222, 222, 0, '2013-02-01 13:40:15'),
(106, 31, 'HYD0002', 3, 29, 2222, 2222, 22222, 2222, 2222, 0, '2013-02-01 13:40:15'),
(107, 31, 'HYD0002', 3, 28, 222, 2222, 2222, 2222, 0, 0, '2013-02-01 13:40:15'),
(108, 31, 'HYD0002', 3, 27, 22, 22, 2, 22, 2, 0, '2013-02-01 13:40:15'),
(109, 31, 'HYD0002', 3, 26, 2222, 2222, 2222, 222, 2222, 0, '2013-02-01 13:40:16'),
(110, 31, 'HYD0002', 3, 32, 2222, 2222, 2222, 222, 222, 0, '2013-02-01 13:40:16'),
(111, 47, 'DEL0101', 3, 31, 100, 100, 100, 100, 10, 0, '2013-02-14 02:44:34'),
(112, 47, 'DEL0101', 3, 30, 10, 10, 10, 10, 10, 0, '2013-02-14 02:44:34'),
(113, 47, 'DEL0101', 3, 29, 10, 10, 10, 10, 10, 0, '2013-02-14 02:44:34'),
(114, 47, 'DEL0101', 3, 28, 100, 100, 1000, 100, 100, 0, '2013-02-14 02:44:34'),
(115, 47, 'DEL0101', 3, 27, 100, 100, 100, 100, 10, 0, '2013-02-14 02:44:34'),
(116, 47, 'DEL0101', 3, 26, 100, 1000, 100, 100, 100, 0, '2013-02-14 02:44:34'),
(117, 47, 'DEL0101', 3, 32, 100, 100, 100, 100, 100, 0, '2013-02-14 02:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `observation`
--

CREATE TABLE IF NOT EXISTS `observation` (
  `observation_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `subject_taught` varchar(20) NOT NULL,
  `class_taught` varchar(20) NOT NULL,
  `teacher_response` varchar(20) NOT NULL,
  `response` varchar(22) NOT NULL,
  `observ_cat_id` int(11) NOT NULL,
  `observ_sub_cat_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`observation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `observation`
--

INSERT INTO `observation` (`observation_id`, `assessment_id`, `school_code`, `subject_taught`, `class_taught`, `teacher_response`, `response`, `observ_cat_id`, `observ_sub_cat_id`, `name`, `update_user`, `update_date`) VALUES
(1, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 1, 'prasad', '', '2013-03-11'),
(2, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 2, 'prasad', '', '2013-03-11'),
(3, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 3, 'prasad', '', '2013-03-11'),
(4, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 4, 'prasad', '', '2013-03-11'),
(5, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 5, 'prasad', '', '2013-03-11'),
(6, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 6, 'prasad', '', '2013-03-11'),
(7, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 1, 7, 'prasad', '', '2013-03-11'),
(8, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 8, 'prasad', '', '2013-03-11'),
(9, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 9, 'prasad', '', '2013-03-11'),
(10, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 10, 'prasad', '', '2013-03-11'),
(11, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 11, 'prasad', '', '2013-03-11'),
(12, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 12, 'prasad', '', '2013-03-11'),
(13, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 13, 'prasad', '', '2013-03-11'),
(14, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 14, 'prasad', '', '2013-03-11'),
(15, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 15, 'prasad', '', '2013-03-11'),
(16, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 16, 'prasad', '', '2013-03-11'),
(17, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 17, 'prasad', '', '2013-03-11'),
(18, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 18, 'prasad', '', '2013-03-11'),
(19, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 19, 'prasad', '', '2013-03-11'),
(20, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 20, 'prasad', '', '2013-03-11'),
(21, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 3, 21, 'prasad', '', '2013-03-11'),
(22, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 3, 22, 'prasad', '', '2013-03-11'),
(23, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 3, 23, 'prasad', '', '2013-03-11'),
(24, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 3, 24, 'prasad', '', '2013-03-11'),
(25, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 3, 25, 'prasad', '', '2013-03-11'),
(26, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 26, 'prasad', '', '2013-03-11'),
(27, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 3, 27, 'prasad', '', '2013-03-11'),
(28, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 2, 28, 'prasad', '', '2013-03-11'),
(29, 31, 'HYD0002', 'maths', 'X', 'Yes', 'T1', 4, 29, 'prasad', '', '2013-03-11'),
(30, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 1, 'vivek', '', '2013-03-11'),
(31, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 2, 'vivek', '', '2013-03-11'),
(32, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 3, 'vivek', '', '2013-03-11'),
(33, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 4, 'vivek', '', '2013-03-11'),
(34, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 5, 'vivek', '', '2013-03-11'),
(35, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 6, 'vivek', '', '2013-03-11'),
(36, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 1, 7, 'vivek', '', '2013-03-11'),
(37, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 8, 'vivek', '', '2013-03-11'),
(38, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 9, 'vivek', '', '2013-03-11'),
(39, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 10, 'vivek', '', '2013-03-11'),
(40, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 11, 'vivek', '', '2013-03-11'),
(41, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 12, 'vivek', '', '2013-03-11'),
(42, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 13, 'vivek', '', '2013-03-11'),
(43, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 14, 'vivek', '', '2013-03-11'),
(44, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 15, 'vivek', '', '2013-03-11'),
(45, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 16, 'vivek', '', '2013-03-11'),
(46, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 17, 'vivek', '', '2013-03-11'),
(47, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 18, 'vivek', '', '2013-03-11'),
(48, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 19, 'vivek', '', '2013-03-11'),
(49, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 20, 'vivek', '', '2013-03-11'),
(50, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 3, 21, 'vivek', '', '2013-03-11'),
(51, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 3, 22, 'vivek', '', '2013-03-11'),
(52, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 3, 23, 'vivek', '', '2013-03-11'),
(53, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 3, 24, 'vivek', '', '2013-03-11'),
(54, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 3, 25, 'vivek', '', '2013-03-11'),
(55, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 26, 'vivek', '', '2013-03-11'),
(56, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 3, 27, 'vivek', '', '2013-03-11'),
(57, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 2, 28, 'vivek', '', '2013-03-11'),
(58, 31, 'HYD0002', 'english', 'IX', 'Yes', 'T2', 4, 29, 'vivek', '', '2013-03-11'),
(59, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 1, 'sateesh', '', '2013-03-11'),
(60, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 2, 'sateesh', '', '2013-03-11'),
(61, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 3, 'sateesh', '', '2013-03-11'),
(62, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 4, 'sateesh', '', '2013-03-11'),
(63, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 5, 'sateesh', '', '2013-03-11'),
(64, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 6, 'sateesh', '', '2013-03-11'),
(65, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 1, 7, 'sateesh', '', '2013-03-11'),
(66, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 8, 'sateesh', '', '2013-03-11'),
(67, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 9, 'sateesh', '', '2013-03-11'),
(68, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 10, 'sateesh', '', '2013-03-11'),
(69, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 11, 'sateesh', '', '2013-03-11'),
(70, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 12, 'sateesh', '', '2013-03-11'),
(71, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 13, 'sateesh', '', '2013-03-11'),
(72, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 14, 'sateesh', '', '2013-03-11'),
(73, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 15, 'sateesh', '', '2013-03-11'),
(74, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 16, 'sateesh', '', '2013-03-11'),
(75, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 17, 'sateesh', '', '2013-03-11'),
(76, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 18, 'sateesh', '', '2013-03-11'),
(77, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 19, 'sateesh', '', '2013-03-11'),
(78, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 20, 'sateesh', '', '2013-03-11'),
(79, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 3, 21, 'sateesh', '', '2013-03-11'),
(80, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 3, 22, 'sateesh', '', '2013-03-11'),
(81, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 3, 23, 'sateesh', '', '2013-03-11'),
(82, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 3, 24, 'sateesh', '', '2013-03-11'),
(83, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 3, 25, 'sateesh', '', '2013-03-11'),
(84, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 26, 'sateesh', '', '2013-03-11'),
(85, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 3, 27, 'sateesh', '', '2013-03-11'),
(86, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 2, 28, 'sateesh', '', '2013-03-11'),
(87, 31, 'HYD0002', 'reasoning', 'VIII', 'Yes', 'T3', 4, 29, 'sateesh', '', '2013-03-11'),
(88, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 1, 'shesha', '', '2013-03-11'),
(89, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 2, 'shesha', '', '2013-03-11'),
(90, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 3, 'shesha', '', '2013-03-11'),
(91, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 4, 'shesha', '', '2013-03-11'),
(92, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 5, 'shesha', '', '2013-03-11'),
(93, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 6, 'shesha', '', '2013-03-11'),
(94, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 1, 7, 'shesha', '', '2013-03-11'),
(95, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 8, 'shesha', '', '2013-03-11'),
(96, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 9, 'shesha', '', '2013-03-11'),
(97, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 10, 'shesha', '', '2013-03-11'),
(98, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 11, 'shesha', '', '2013-03-11'),
(99, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 12, 'shesha', '', '2013-03-11'),
(100, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 13, 'shesha', '', '2013-03-11'),
(101, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 14, 'shesha', '', '2013-03-11'),
(102, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 15, 'shesha', '', '2013-03-11'),
(103, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 16, 'shesha', '', '2013-03-11'),
(104, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 17, 'shesha', '', '2013-03-11'),
(105, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 18, 'shesha', '', '2013-03-11'),
(106, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 19, 'shesha', '', '2013-03-11'),
(107, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 20, 'shesha', '', '2013-03-11'),
(108, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 3, 21, 'shesha', '', '2013-03-11'),
(109, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 3, 22, 'shesha', '', '2013-03-11'),
(110, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 3, 23, 'shesha', '', '2013-03-11'),
(111, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 3, 24, 'shesha', '', '2013-03-11'),
(112, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 3, 25, 'shesha', '', '2013-03-11'),
(113, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 26, 'shesha', '', '2013-03-11'),
(114, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 3, 27, 'shesha', '', '2013-03-11'),
(115, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 2, 28, 'shesha', '', '2013-03-11'),
(116, 31, 'HYD0002', 'english', 'X', 'Yes', 'T4', 4, 29, 'shesha', '', '2013-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `other_fees`
--

CREATE TABLE IF NOT EXISTS `other_fees` (
  `other_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `other_fee_category` varchar(20) NOT NULL,
  `fee_amount` float NOT NULL,
  `margin_books` int(11) NOT NULL,
  `margin_etc` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`other_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `other_fees`
--

INSERT INTO `other_fees` (`other_fee_id`, `assessment_id`, `school_code`, `fee_id`, `class_id`, `other_fee_category`, `fee_amount`, `margin_books`, `margin_etc`, `quantity`, `update_user`, `update_date`) VALUES
(1, 31, 'HYD0002', 7, 1, 'other_fee', 0, 10, 0, 3, '', '2013-03-02 15:10:33'),
(2, 31, 'HYD0002', 8, 1, 'other_fee', 3, 10, 0, 2, '', '2013-03-02 15:10:33'),
(3, 31, 'HYD0002', 10, 1, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(4, 31, 'HYD0002', 7, 2, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(5, 31, 'HYD0002', 8, 2, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(6, 31, 'HYD0002', 10, 2, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(7, 31, 'HYD0002', 7, 3, 'other_fee', 2, 10, 0, 2, '', '2013-03-02 15:10:33'),
(8, 31, 'HYD0002', 8, 3, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(9, 31, 'HYD0002', 10, 3, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(10, 31, 'HYD0002', 7, 4, 'other_fee', 3, 10, 0, 2, '', '2013-03-02 15:10:33'),
(11, 31, 'HYD0002', 8, 4, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(12, 31, 'HYD0002', 10, 4, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(13, 31, 'HYD0002', 7, 5, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(14, 31, 'HYD0002', 8, 5, 'other_fee', 2, 10, 0, 2, '', '2013-03-02 15:10:33'),
(15, 31, 'HYD0002', 10, 5, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(16, 31, 'HYD0002', 7, 6, 'other_fee', 3, 10, 0, 2, '', '2013-03-02 15:10:33'),
(17, 31, 'HYD0002', 8, 6, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(18, 31, 'HYD0002', 10, 6, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(19, 31, 'HYD0002', 7, 7, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(20, 31, 'HYD0002', 8, 7, 'other_fee', 2, 10, 0, 2, '', '2013-03-02 15:10:33'),
(21, 31, 'HYD0002', 10, 7, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(22, 31, 'HYD0002', 7, 8, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(23, 31, 'HYD0002', 8, 8, 'other_fee', 3, 10, 0, 2, '', '2013-03-02 15:10:33'),
(24, 31, 'HYD0002', 10, 8, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(25, 31, 'HYD0002', 7, 9, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(26, 31, 'HYD0002', 8, 9, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(27, 31, 'HYD0002', 10, 9, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(28, 31, 'HYD0002', 7, 10, 'other_fee', 2, 10, 0, 2, '', '2013-03-02 15:10:33'),
(29, 31, 'HYD0002', 8, 10, 'other_fee', 3, 10, 0, 3, '', '2013-03-02 15:10:33'),
(30, 31, 'HYD0002', 10, 10, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(31, 31, 'HYD0002', 7, 11, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:33'),
(32, 31, 'HYD0002', 8, 11, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:34'),
(33, 31, 'HYD0002', 10, 11, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:34'),
(34, 31, 'HYD0002', 7, 12, 'other_fee', 2, 10, 0, 2, '', '2013-03-02 15:10:34'),
(35, 31, 'HYD0002', 8, 12, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:34'),
(36, 31, 'HYD0002', 10, 12, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:34'),
(37, 31, 'HYD0002', 7, 13, 'other_fee', 3, 10, 0, 3, '', '2013-03-02 15:10:34'),
(38, 31, 'HYD0002', 8, 13, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:34'),
(39, 31, 'HYD0002', 10, 13, 'other_fee', 4, 10, 0, 4, '', '2013-03-02 15:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `overdue`
--

CREATE TABLE IF NOT EXISTS `overdue` (
  `overdue_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `fee_overdue` float NOT NULL,
  `totalstudents` int(50) NOT NULL,
  `totalfeeoverdue` int(50) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`overdue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `overdue`
--

INSERT INTO `overdue` (`overdue_id`, `assessment_id`, `class_id`, `school_code`, `class_name`, `no_of_students`, `fee_overdue`, `totalstudents`, `totalfeeoverdue`, `update_user`, `update_date`) VALUES
(1, 31, 1, 'HYD0002', '', 0, 100, 558, 4900, '', '0000-00-00'),
(2, 31, 2, 'HYD0002', '', 2, 300, 558, 4900, '', '0000-00-00'),
(3, 31, 3, 'HYD0002', '', 2, 300, 558, 4900, '', '0000-00-00'),
(4, 31, 4, 'HYD0002', '', 2, 300, 558, 4900, '', '0000-00-00'),
(5, 31, 5, 'HYD0002', '', 2, 300, 558, 4900, '', '0000-00-00'),
(6, 31, 6, 'HYD0002', '', 2, 300, 558, 4900, '', '0000-00-00'),
(7, 31, 7, 'HYD0002', '', 5, 300, 558, 4900, '', '0000-00-00'),
(8, 31, 8, 'HYD0002', '', 6, 300, 558, 4900, '', '0000-00-00'),
(9, 31, 9, 'HYD0002', '', 7, 400, 558, 4900, '', '0000-00-00'),
(10, 31, 10, 'HYD0002', '', 8, 400, 558, 4900, '', '0000-00-00'),
(11, 31, 11, 'HYD0002', '', 5, 600, 558, 4900, '', '0000-00-00'),
(12, 31, 12, 'HYD0002', '', 8, 700, 558, 4900, '', '0000-00-00'),
(13, 31, 13, 'HYD0002', '', 9, 600, 558, 4900, '', '0000-00-00'),
(14, 45, 1, 'HYD0097', '', 50, 200, 0, 0, '', '0000-00-00'),
(15, 45, 2, 'HYD0097', '', 200, 200, 0, 0, '', '0000-00-00'),
(16, 45, 3, 'HYD0097', '', 200, 20, 0, 0, '', '0000-00-00'),
(17, 45, 4, 'HYD0097', '', 20, 200, 0, 0, '', '0000-00-00'),
(18, 45, 5, 'HYD0097', '', 200, 200, 0, 0, '', '0000-00-00'),
(19, 45, 6, 'HYD0097', '', 20, 20, 0, 0, '', '0000-00-00'),
(20, 45, 7, 'HYD0097', '', 20, 20, 0, 0, '', '0000-00-00'),
(21, 45, 8, 'HYD0097', '', 2, 2, 0, 0, '', '0000-00-00'),
(22, 45, 9, 'HYD0097', '', 20, 20, 0, 0, '', '0000-00-00'),
(23, 45, 10, 'HYD0097', '', 20, 20, 0, 0, '', '0000-00-00'),
(24, 45, 11, 'HYD0097', '', 2, 2, 0, 0, '', '0000-00-00'),
(25, 45, 12, 'HYD0097', '', 2, 20, 0, 0, '', '0000-00-00'),
(26, 45, 13, 'HYD0097', '', 200, 20, 0, 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `parent_survey`
--

CREATE TABLE IF NOT EXISTS `parent_survey` (
  `parent_survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(22) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `survey_cat_id` int(11) NOT NULL,
  `survey_type` varchar(20) NOT NULL,
  `survey_sub_cat_id` int(11) NOT NULL,
  `parent_response` varchar(10) NOT NULL,
  `response` varchar(22) NOT NULL,
  PRIMARY KEY (`parent_survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=629 ;

--
-- Dumping data for table `parent_survey`
--

INSERT INTO `parent_survey` (`parent_survey_id`, `school_code`, `assessment_id`, `survey_cat_id`, `survey_type`, `survey_sub_cat_id`, `parent_response`, `response`) VALUES
(455, 'HYD0016', 30, 1, 'parents', 1, '2', 'R1'),
(456, 'HYD0016', 30, 1, 'parents', 2, '0', 'R1'),
(457, 'HYD0016', 30, 1, 'parents', 3, 'Select', 'R1'),
(458, 'HYD0016', 30, 1, 'parents', 4, 'Select', 'R1'),
(459, 'HYD0016', 30, 1, 'parents', 5, '1', 'R1'),
(460, 'HYD0016', 30, 1, 'parents', 6, '1', 'R1'),
(461, 'HYD0016', 30, 1, 'parents', 7, 'Select', 'R1'),
(462, 'HYD0016', 30, 1, 'parents', 8, '1', 'R1'),
(463, 'HYD0016', 30, 2, 'parents', 9, 'Select', 'R1'),
(464, 'HYD0016', 30, 2, 'parents', 10, 'Select', 'R1'),
(465, 'HYD0016', 30, 2, 'parents', 11, 'Select', 'R1'),
(466, 'HYD0016', 30, 2, 'parents', 12, 'Select', 'R1'),
(467, 'HYD0016', 30, 2, 'parents', 29, 'Select', 'R1'),
(468, 'HYD0016', 30, 3, 'parents', 13, 'Select', 'R1'),
(469, 'HYD0016', 30, 3, 'parents', 14, 'Select', 'R1'),
(470, 'HYD0016', 30, 3, 'parents', 15, 'Select', 'R1'),
(471, 'HYD0016', 30, 3, 'parents', 16, 'Select', 'R1'),
(472, 'HYD0016', 30, 4, 'parents', 17, 'Select', 'R1'),
(473, 'HYD0016', 30, 4, 'parents', 18, 'Select', 'R1'),
(474, 'HYD0016', 30, 4, 'parents', 19, 'Select', 'R1'),
(475, 'HYD0016', 30, 4, 'parents', 20, 'Select', 'R1'),
(476, 'HYD0016', 30, 4, 'parents', 27, '', 'R1'),
(477, 'HYD0016', 30, 4, 'parents', 28, '', 'R1'),
(478, 'HYD0016', 30, 5, 'parents', 21, 'Select', 'R1'),
(479, 'HYD0016', 30, 5, 'parents', 22, 'Select', 'R1'),
(480, 'HYD0016', 30, 5, 'parents', 23, 'Select', 'R1'),
(481, 'HYD0016', 30, 6, 'parents', 24, 'Select', 'R1'),
(482, 'HYD0016', 30, 6, 'parents', 25, 'Select', 'R1'),
(483, 'HYD0016', 30, 6, 'parents', 26, 'Select', 'R1'),
(484, 'HYD0016', 30, 1, 'parents', 1, '2', 'R2'),
(485, 'HYD0016', 30, 1, 'parents', 2, 'Select', 'R2'),
(486, 'HYD0016', 30, 1, 'parents', 3, 'Select', 'R2'),
(487, 'HYD0016', 30, 1, 'parents', 4, '1', 'R2'),
(488, 'HYD0016', 30, 1, 'parents', 5, 'Select', 'R2'),
(489, 'HYD0016', 30, 1, 'parents', 6, 'Select', 'R2'),
(490, 'HYD0016', 30, 1, 'parents', 7, '2', 'R2'),
(491, 'HYD0016', 30, 1, 'parents', 8, 'Select', 'R2'),
(492, 'HYD0016', 30, 2, 'parents', 9, 'Select', 'R2'),
(493, 'HYD0016', 30, 2, 'parents', 10, 'Select', 'R2'),
(494, 'HYD0016', 30, 2, 'parents', 11, '0', 'R2'),
(495, 'HYD0016', 30, 2, 'parents', 12, '0', 'R2'),
(496, 'HYD0016', 30, 2, 'parents', 29, '0', 'R2'),
(497, 'HYD0016', 30, 3, 'parents', 13, '1', 'R2'),
(498, 'HYD0016', 30, 3, 'parents', 14, '0', 'R2'),
(499, 'HYD0016', 30, 3, 'parents', 15, '0', 'R2'),
(500, 'HYD0016', 30, 3, 'parents', 16, '0', 'R2'),
(501, 'HYD0016', 30, 4, 'parents', 17, '1', 'R2'),
(502, 'HYD0016', 30, 4, 'parents', 18, '0', 'R2'),
(503, 'HYD0016', 30, 4, 'parents', 19, '0', 'R2'),
(504, 'HYD0016', 30, 4, 'parents', 20, '0', 'R2'),
(505, 'HYD0016', 30, 4, 'parents', 27, '', 'R2'),
(506, 'HYD0016', 30, 4, 'parents', 28, '', 'R2'),
(507, 'HYD0016', 30, 5, 'parents', 21, 'Select', 'R2'),
(508, 'HYD0016', 30, 5, 'parents', 22, 'Select', 'R2'),
(509, 'HYD0016', 30, 5, 'parents', 23, 'Select', 'R2'),
(510, 'HYD0016', 30, 6, 'parents', 24, 'Select', 'R2'),
(511, 'HYD0016', 30, 6, 'parents', 25, '0', 'R2'),
(512, 'HYD0016', 30, 6, 'parents', 26, '1', 'R2'),
(513, 'HYD0016', 30, 1, 'parents', 1, '1', 'R1'),
(514, 'HYD0016', 30, 1, 'parents', 2, 'Select', 'R1'),
(515, 'HYD0016', 30, 1, 'parents', 3, '0', 'R1'),
(516, 'HYD0016', 30, 1, 'parents', 4, 'Select', 'R1'),
(517, 'HYD0016', 30, 1, 'parents', 5, '0', 'R1'),
(518, 'HYD0016', 30, 1, 'parents', 6, 'Select', 'R1'),
(519, 'HYD0016', 30, 1, 'parents', 7, '1', 'R1'),
(520, 'HYD0016', 30, 1, 'parents', 8, '2', 'R1'),
(521, 'HYD0016', 30, 2, 'parents', 9, 'Select', 'R1'),
(522, 'HYD0016', 30, 2, 'parents', 10, 'Select', 'R1'),
(523, 'HYD0016', 30, 2, 'parents', 11, 'Select', 'R1'),
(524, 'HYD0016', 30, 2, 'parents', 12, 'Select', 'R1'),
(525, 'HYD0016', 30, 2, 'parents', 29, 'Select', 'R1'),
(526, 'HYD0016', 30, 3, 'parents', 13, 'Select', 'R1'),
(527, 'HYD0016', 30, 3, 'parents', 14, 'Select', 'R1'),
(528, 'HYD0016', 30, 3, 'parents', 15, 'Select', 'R1'),
(529, 'HYD0016', 30, 3, 'parents', 16, 'Select', 'R1'),
(530, 'HYD0016', 30, 4, 'parents', 17, 'Select', 'R1'),
(531, 'HYD0016', 30, 4, 'parents', 18, 'Select', 'R1'),
(532, 'HYD0016', 30, 4, 'parents', 19, 'Select', 'R1'),
(533, 'HYD0016', 30, 4, 'parents', 20, 'Select', 'R1'),
(534, 'HYD0016', 30, 4, 'parents', 27, '', 'R1'),
(535, 'HYD0016', 30, 4, 'parents', 28, '', 'R1'),
(536, 'HYD0016', 30, 5, 'parents', 21, 'Select', 'R1'),
(537, 'HYD0016', 30, 5, 'parents', 22, 'Select', 'R1'),
(538, 'HYD0016', 30, 5, 'parents', 23, 'Select', 'R1'),
(539, 'HYD0016', 30, 6, 'parents', 24, 'Select', 'R1'),
(540, 'HYD0016', 30, 6, 'parents', 25, 'Select', 'R1'),
(541, 'HYD0016', 30, 6, 'parents', 26, 'Select', 'R1'),
(542, 'HYD0016', 30, 1, 'parents', 1, '1', 'R1'),
(543, 'HYD0016', 30, 1, 'parents', 2, 'Select', 'R1'),
(544, 'HYD0016', 30, 1, 'parents', 3, '0', 'R1'),
(545, 'HYD0016', 30, 1, 'parents', 4, 'Select', 'R1'),
(546, 'HYD0016', 30, 1, 'parents', 5, '0', 'R1'),
(547, 'HYD0016', 30, 1, 'parents', 6, 'Select', 'R1'),
(548, 'HYD0016', 30, 1, 'parents', 7, '1', 'R1'),
(549, 'HYD0016', 30, 1, 'parents', 8, '2', 'R1'),
(550, 'HYD0016', 30, 2, 'parents', 9, 'Select', 'R1'),
(551, 'HYD0016', 30, 2, 'parents', 10, 'Select', 'R1'),
(552, 'HYD0016', 30, 2, 'parents', 11, 'Select', 'R1'),
(553, 'HYD0016', 30, 2, 'parents', 12, 'Select', 'R1'),
(554, 'HYD0016', 30, 2, 'parents', 29, 'Select', 'R1'),
(555, 'HYD0016', 30, 3, 'parents', 13, 'Select', 'R1'),
(556, 'HYD0016', 30, 3, 'parents', 14, 'Select', 'R1'),
(557, 'HYD0016', 30, 3, 'parents', 15, 'Select', 'R1'),
(558, 'HYD0016', 30, 3, 'parents', 16, 'Select', 'R1'),
(559, 'HYD0016', 30, 4, 'parents', 17, 'Select', 'R1'),
(560, 'HYD0016', 30, 4, 'parents', 18, 'Select', 'R1'),
(561, 'HYD0016', 30, 4, 'parents', 19, 'Select', 'R1'),
(562, 'HYD0016', 30, 4, 'parents', 20, 'Select', 'R1'),
(563, 'HYD0016', 30, 4, 'parents', 27, '', 'R1'),
(564, 'HYD0016', 30, 4, 'parents', 28, '', 'R1'),
(565, 'HYD0016', 30, 5, 'parents', 21, 'Select', 'R1'),
(566, 'HYD0016', 30, 5, 'parents', 22, 'Select', 'R1'),
(567, 'HYD0016', 30, 5, 'parents', 23, 'Select', 'R1'),
(568, 'HYD0016', 30, 6, 'parents', 24, 'Select', 'R1'),
(569, 'HYD0016', 30, 6, 'parents', 25, 'Select', 'R1'),
(570, 'HYD0016', 30, 6, 'parents', 26, 'Select', 'R1'),
(571, 'HYD0002', 31, 1, 'parents', 1, '1', 'R1'),
(572, 'HYD0002', 31, 1, 'parents', 2, 'Select', 'R1'),
(573, 'HYD0002', 31, 1, 'parents', 3, '1', 'R1'),
(574, 'HYD0002', 31, 1, 'parents', 4, '2', 'R1'),
(575, 'HYD0002', 31, 1, 'parents', 5, 'Select', 'R1'),
(576, 'HYD0002', 31, 1, 'parents', 6, 'Select', 'R1'),
(577, 'HYD0002', 31, 1, 'parents', 7, 'Select', 'R1'),
(578, 'HYD0002', 31, 1, 'parents', 8, 'Select', 'R1'),
(579, 'HYD0002', 31, 2, 'parents', 9, 'Select', 'R1'),
(580, 'HYD0002', 31, 2, 'parents', 10, 'Select', 'R1'),
(581, 'HYD0002', 31, 2, 'parents', 11, 'Select', 'R1'),
(582, 'HYD0002', 31, 2, 'parents', 12, 'Select', 'R1'),
(583, 'HYD0002', 31, 2, 'parents', 29, 'Select', 'R1'),
(584, 'HYD0002', 31, 3, 'parents', 13, 'Select', 'R1'),
(585, 'HYD0002', 31, 3, 'parents', 14, 'Select', 'R1'),
(586, 'HYD0002', 31, 3, 'parents', 15, 'Select', 'R1'),
(587, 'HYD0002', 31, 3, 'parents', 16, 'Select', 'R1'),
(588, 'HYD0002', 31, 4, 'parents', 17, 'Select', 'R1'),
(589, 'HYD0002', 31, 4, 'parents', 18, 'Select', 'R1'),
(590, 'HYD0002', 31, 4, 'parents', 19, 'Select', 'R1'),
(591, 'HYD0002', 31, 4, 'parents', 20, 'Select', 'R1'),
(592, 'HYD0002', 31, 4, 'parents', 27, '', 'R1'),
(593, 'HYD0002', 31, 4, 'parents', 28, '', 'R1'),
(594, 'HYD0002', 31, 5, 'parents', 21, 'Select', 'R1'),
(595, 'HYD0002', 31, 5, 'parents', 22, 'Select', 'R1'),
(596, 'HYD0002', 31, 5, 'parents', 23, 'Select', 'R1'),
(597, 'HYD0002', 31, 6, 'parents', 24, 'Select', 'R1'),
(598, 'HYD0002', 31, 6, 'parents', 25, 'Select', 'R1'),
(599, 'HYD0002', 31, 6, 'parents', 26, 'Select', 'R1'),
(600, 'HYD0002', 31, 1, 'parents', 1, 'Select', 'R2'),
(601, 'HYD0002', 31, 1, 'parents', 2, '1', 'R2'),
(602, 'HYD0002', 31, 1, 'parents', 3, 'Select', 'R2'),
(603, 'HYD0002', 31, 1, 'parents', 4, 'Select', 'R2'),
(604, 'HYD0002', 31, 1, 'parents', 5, '1', 'R2'),
(605, 'HYD0002', 31, 1, 'parents', 6, 'Select', 'R2'),
(606, 'HYD0002', 31, 1, 'parents', 7, '1', 'R2'),
(607, 'HYD0002', 31, 1, 'parents', 8, 'Select', 'R2'),
(608, 'HYD0002', 31, 2, 'parents', 9, 'Select', 'R2'),
(609, 'HYD0002', 31, 2, 'parents', 10, 'Select', 'R2'),
(610, 'HYD0002', 31, 2, 'parents', 11, '1', 'R2'),
(611, 'HYD0002', 31, 2, 'parents', 12, 'Select', 'R2'),
(612, 'HYD0002', 31, 2, 'parents', 29, '2', 'R2'),
(613, 'HYD0002', 31, 3, 'parents', 13, '1', 'R2'),
(614, 'HYD0002', 31, 3, 'parents', 14, '1', 'R2'),
(615, 'HYD0002', 31, 3, 'parents', 15, 'Select', 'R2'),
(616, 'HYD0002', 31, 3, 'parents', 16, 'Select', 'R2'),
(617, 'HYD0002', 31, 4, 'parents', 17, 'Select', 'R2'),
(618, 'HYD0002', 31, 4, 'parents', 18, 'Select', 'R2'),
(619, 'HYD0002', 31, 4, 'parents', 19, 'Select', 'R2'),
(620, 'HYD0002', 31, 4, 'parents', 20, 'Select', 'R2'),
(621, 'HYD0002', 31, 4, 'parents', 27, '', 'R2'),
(622, 'HYD0002', 31, 4, 'parents', 28, '', 'R2'),
(623, 'HYD0002', 31, 5, 'parents', 21, 'Select', 'R2'),
(624, 'HYD0002', 31, 5, 'parents', 22, 'Select', 'R2'),
(625, 'HYD0002', 31, 5, 'parents', 23, 'Select', 'R2'),
(626, 'HYD0002', 31, 6, 'parents', 24, 'Select', 'R2'),
(627, 'HYD0002', 31, 6, 'parents', 25, 'Select', 'R2'),
(628, 'HYD0002', 31, 6, 'parents', 26, 'Select', 'R2');

-- --------------------------------------------------------

--
-- Table structure for table `ref_class_name`
--

CREATE TABLE IF NOT EXISTS `ref_class_name` (
  `class_id` int(22) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(55) NOT NULL,
  `class_segment` varchar(55) NOT NULL,
  `update_user` varchar(55) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ref_class_name`
--

INSERT INTO `ref_class_name` (`class_id`, `class_name`, `class_segment`, `update_user`, `update_date`) VALUES
(1, 'Nursery', 'Pre-Primary ', 'admin', '2012-08-31'),
(2, 'LKG', 'Pre-Primary ', 'admin', '2012-08-31'),
(3, 'UKG', 'Pre-Primary ', 'admin', '2012-08-31'),
(4, 'Class 1', 'Primary ', 'admin', '2012-08-31'),
(5, 'Class 2', 'Primary ', 'admin', '2012-08-31'),
(6, 'Class 3', 'Primary ', 'admin', '2012-08-31'),
(7, 'Class 4', 'Primary ', 'admin', '2012-08-31'),
(8, 'Class 5', 'Primary ', 'admin', '2012-08-31'),
(9, 'Class 6', 'Secondary', 'admin', '2012-08-31'),
(10, 'Class 7', 'Secondary', 'admin', '2012-08-31'),
(11, 'Class 8', 'Secondary', 'admin', '2012-08-31'),
(12, 'Class 9', 'Secondary', 'admin', '2012-08-31'),
(13, 'Class 10', 'Secondary', 'admin', '2012-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `ref_designation`
--

CREATE TABLE IF NOT EXISTS `ref_designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ref_designation`
--

INSERT INTO `ref_designation` (`designation_id`, `designation_name`, `update_user`, `update_date`) VALUES
(2, 'B Ed', 'admin', '2012-09-11 17:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `ref_expense_category`
--

CREATE TABLE IF NOT EXISTS `ref_expense_category` (
  `expense_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_cat_name` varchar(20) NOT NULL,
  `expense_type` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`expense_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ref_expense_category`
--

INSERT INTO `ref_expense_category` (`expense_cat_id`, `expense_cat_name`, `expense_type`, `update_user`, `update_date`) VALUES
(1, 'Expenses', 'Expense', 'prasanth', '2012-08-21'),
(2, 'Investments', 'Invest', 'prasanth', '2012-08-21'),
(3, 'Financial', 'loan', 'prasanth', '2012-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `ref_expense_sub_category`
--

CREATE TABLE IF NOT EXISTS `ref_expense_sub_category` (
  `expense_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_sub_cat_name` varchar(50) NOT NULL,
  `expense_cat_id` int(11) NOT NULL,
  `expense_cat_name` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`expense_sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `ref_expense_sub_category`
--

INSERT INTO `ref_expense_sub_category` (`expense_sub_cat_id`, `expense_sub_cat_name`, `expense_cat_id`, `expense_cat_name`, `update_user`, `update_date`) VALUES
(1, 'Rent / Lease', 1, 'Expenses', 'prasanth', '2012-08-21'),
(2, 'Other Operating Expenses', 1, 'Expenses', 'prasanth', '2012-08-21'),
(3, 'Building Maintenance', 1, 'Expenses', 'prasanth', '2012-08-21'),
(4, 'Electricity Bills', 1, 'Expenses', 'prasanth', '2012-08-21'),
(5, 'Water Charges', 1, 'Expenses', 'prasanth', '2012-08-21'),
(6, 'Stationary', 1, 'Expenses', 'prasanth', '2012-08-21'),
(7, 'Printing and Xerox', 1, 'Expenses', 'prasanth', '2012-08-21'),
(8, 'Telephone and Postage', 1, 'Expenses', 'prasanth', '2012-08-21'),
(9, 'Miscellaneous', 1, 'Expenses', 'prasanth', '2012-08-21'),
(10, 'Marketing / Ads Expenses', 1, 'Expenses', 'prasanth', '2012-08-21'),
(11, 'Scholarships', 1, 'Expenses', 'prasanth', '2012-08-21'),
(12, 'Programs, Functions and Events', 1, 'Expenses', 'prasanth', '2012-08-21'),
(13, 'Transportation Costs', 1, 'Expenses', 'prasanth', '2012-08-21'),
(14, 'Management Salary - Principal/Correspondent/Head', 1, 'Expenses', 'prasanth', '2012-08-21'),
(15, 'Owner''s Salary', 1, 'Expenses', 'prasanth', '2012-08-21'),
(16, 'Depreciation', 1, 'Expenses', 'prasanth', '2012-08-21'),
(17, 'Academic Interventions & Trainings', 1, 'Expenses', 'prasanth', '2012-08-21'),
(18, 'Non Teaching Staff Salaries', 1, 'Expenses', 'prasanth', '2012-08-21'),
(19, 'Investments On', 2, 'Investments', 'prasanth', '2012-08-21'),
(20, 'Land', 2, 'Investments', 'prasanth', '2012-08-21'),
(21, 'Construction', 2, 'Investments', 'prasanth', '2012-08-21'),
(22, 'Furniture', 2, 'Investments', 'prasanth', '2012-08-21'),
(23, 'Vehicle', 2, 'Investments', 'prasanth', '2012-08-21'),
(24, 'Computers', 2, 'Investments', 'prasanth', '2012-08-21'),
(25, 'Others', 2, 'Investments', 'prasanth', '2012-08-21'),
(26, 'Loan Taken', 3, 'Financial', 'prasanth', '2012-08-21'),
(27, 'Interest Rate (per annum)', 3, 'Financial', 'prasanth', '2012-08-21'),
(28, 'Years', 3, 'Financial', 'prasanth', '2012-08-21'),
(29, 'No. of Yearly Payments', 3, 'Financial', 'prasanth', '2012-08-21'),
(30, 'Current Year', 3, 'Financial', 'prasanth', '2012-08-21'),
(31, 'EMI', 3, 'Financial', 'prasanth', '2012-08-21'),
(32, 'Bank Charges', 3, 'Financial', 'prasanth', '2012-08-21'),
(33, 'tgert', 2, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_facility_category`
--

CREATE TABLE IF NOT EXISTS `ref_facility_category` (
  `facility_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_cat_name` varchar(30) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`facility_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ref_facility_category`
--

INSERT INTO `ref_facility_category` (`facility_cat_id`, `facility_cat_name`, `update_user`, `update_date`) VALUES
(1, 'Building', 'admin', '2012-08-07'),
(2, 'Learning Infrastructure', 'admin', '2012-08-07'),
(3, 'School Infrastructure', 'admin', '2012-08-07'),
(4, 'Activities', 'admin', '2012-08-10'),
(5, 'new', '', '0000-00-00'),
(6, 'new2', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_facility_sub_category`
--

CREATE TABLE IF NOT EXISTS `ref_facility_sub_category` (
  `facility_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_sub_cat_name` varchar(22) NOT NULL,
  `facility_sub_cat_type_field` text NOT NULL,
  `facility_sub_cat_type` varchar(34) NOT NULL,
  `facility_cat_id` int(11) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`facility_sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `ref_facility_sub_category`
--

INSERT INTO `ref_facility_sub_category` (`facility_sub_cat_id`, `facility_sub_cat_name`, `facility_sub_cat_type_field`, `facility_sub_cat_type`, `facility_cat_id`, `update_user`, `update_date`) VALUES
(1, 'Ownership', 'Owned,Partially Owned,Rented', 'dropdown', 1, 'admin', '2012-08-07'),
(2, 'Number of Class Rooms', 'NULL', 'textbox', 1, 'admin', '2012-08-07'),
(3, 'Area(sq feet)', 'null', 'textbox', 1, 'admin', '2012-08-07'),
(4, 'Computers Lab', 'Yes,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-07'),
(5, 'Construction Type', 'Semi-Pucca,Pucca,Tiled', 'dropdown', 1, 'admin', '2012-08-09'),
(6, 'Number of Computers', 'NULL', 'textbox', 2, 'admin', '2012-08-10'),
(7, 'Internet availability', 'Yes,No', 'dropdown', 2, 'admin', '2012-08-10'),
(8, 'Digital Class', 'Yes,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-10'),
(9, 'Library', 'Yes,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-10'),
(12, 'Science Lab', 'Yes,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-10'),
(13, 'Classrooms', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(14, 'Staff Room', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(15, 'Transport', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(16, 'Black Boards', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(17, 'Benches & Desks', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(18, 'Toilets', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(19, 'Toilets For Females', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(20, 'Indoor games', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(21, 'Outdoor games', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(22, 'Inter / Intra events', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(23, 'Access to games', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(24, 'Safety', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(25, 'Cleanliness', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(26, 'Drinking Water', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(27, 'Fire Extinguisher', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(28, 'First aid', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(29, 'Ventilation', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(30, 'Other Teaching Aids', 'Yes,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-11'),
(61, 'newsub', '', 'textbox', 5, '', '0000-00-00'),
(62, 'messub2', '', 'textbox', 6, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_fee`
--

CREATE TABLE IF NOT EXISTS `ref_fee` (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `fee_name` varchar(40) NOT NULL,
  `fee_category` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ref_fee`
--

INSERT INTO `ref_fee` (`fee_id`, `fee_name`, `fee_category`, `update_user`, `update_date`) VALUES
(1, 'Admission Fee', 'school_fee', 'prasanth', '2012-08-20 18:30:00'),
(2, 'Tuition Fees', 'school_fee', 'prasanth', '2012-08-20 18:30:00'),
(3, 'Term Fees', 'school_fee', 'prasanth', '2012-08-20 18:30:00'),
(4, 'Exam Fees', 'school_fee', 'prasanth', '2012-08-20 18:30:00'),
(5, 'Computer Fees', 'school_fee', 'prasanth', '2012-08-20 18:30:00'),
(6, 'Others', 'school_fee', 'prasanth', '2012-08-20 18:30:00'),
(7, 'Books', 'other_fee', 'prasanth', '2012-08-20 18:30:00'),
(8, 'Uniform, Tie, Belt, ID, etc', 'other_fee', 'prasanth', '2012-08-20 18:30:00'),
(9, 'Transport fee', 'transport_fee', 'admin', '2012-09-14 13:04:38'),
(10, 'sch feee', 'school_fee', 'admin', '2013-03-14 11:21:04'),
(11, 'sch fee 2', 'school_fee', 'admin', '2013-03-14 11:43:16'),
(12, 'schfee333', 'school_fee', 'admin', '2013-03-14 12:23:25'),
(13, 'sch 44444', 'school_fee', 'admin', '2013-03-14 12:29:15'),
(14, 'sch 5555', 'school_fee', 'admin', '2013-03-14 12:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `ref_observ_category`
--

CREATE TABLE IF NOT EXISTS `ref_observ_category` (
  `observ_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `observ_cat_name` varchar(40) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`observ_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ref_observ_category`
--

INSERT INTO `ref_observ_category` (`observ_cat_id`, `observ_cat_name`, `update_user`, `update_date`) VALUES
(1, 'Teacher-Student Interaction', 'prasanth', '2012-08-21'),
(2, 'Teacher-Learning Methodology', 'prasanth', '2012-08-21'),
(3, 'Assessment Technique', 'prasanth', '2012-08-21'),
(4, 'xxx', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_observ_sub_category`
--

CREATE TABLE IF NOT EXISTS `ref_observ_sub_category` (
  `observ_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `observ_sub_cat_name` varchar(100) NOT NULL,
  `observ_cat_id` int(11) NOT NULL,
  `observ_cat_name` varchar(40) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`observ_sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `ref_observ_sub_category`
--

INSERT INTO `ref_observ_sub_category` (`observ_sub_cat_id`, `observ_sub_cat_name`, `observ_cat_id`, `observ_cat_name`, `update_user`, `update_date`) VALUES
(1, 'Addresses students by name', 1, 'Teacher Student Interaction', 'prasanth', '2012-08-21'),
(2, 'Walks around the classroom', 1, 'Teacher Student Interaction', 'prasanth', '2012-08-21'),
(3, 'Friendly/patient yet firm with students with positive gestures', 1, 'Teacher-Student interaction', 'Prasanna', '2012-08-21'),
(4, 'Maintains eye contact with the class', 1, 'Teacher-Student interaction', 'Prasanna', '2012-08-21'),
(5, 'Responds to questions raised by students', 1, 'Teacher-Student interaction', 'Prasanna', '2012-08-21'),
(6, 'Maintains discipline in the class', 1, 'Teacher-Student interaction', 'Prasanna', '2012-08-21'),
(7, 'students are attentive', 1, 'Teacher-Student interaction', 'Prasanna', '2012-08-21'),
(8, 'Focuses on student understanding', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(9, 'Presents factually correct content', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(10, 'Gave instructions in simple steps', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(11, 'uses Visual aids', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(12, 'Periodically clears doubts of the students', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(13, 'Connects the lesson to students environment', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(14, 'Teacher built in time for students to discuss concepts', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(15, 'Encourages interaction among students to accomplish the task', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(16, 'Presents a relaxed stance after asking the question', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(17, 'Uses blackboard in an organized fashion', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(18, 'Uses blackboard interactively', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(19, 'Students ask relevant content related questions', 2, 'Teaching-Learning Methodology', 'Prasanna', '2012-08-21'),
(20, 'Students easily understood the instructions/tasks provided', 2, 'Teaching-Learning Methodology', 'prasanna', '2012-08-21'),
(21, 'Addresses questions to individual students as well as the group at large', 3, 'Assessment Technique', 'Prasanna', '2012-08-21'),
(22, 'Accepts all student responses including the ''wrong ones'' with encouraging feedback', 3, 'Assessment Technique', 'Prasanna', '2012-08-21'),
(23, 'Uses questioning as a tool to improve student understanding', 3, 'Assessment Technique', 'Prasanna', '2012-08-21'),
(24, 'Revises the main points of the lesson', 3, 'Assessment Technique', 'Prasanna', '2012-08-21'),
(25, 'Students participate actively when asked questions', 3, 'Assessment Technique', 'Prasanna', '2012-08-21'),
(26, 'fvfg', 2, '', '', '0000-00-00'),
(27, 'vh', 3, '', '', '0000-00-00'),
(28, 'fvfg', 2, '', '', '0000-00-00'),
(29, 'xxx1', 4, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_qualification`
--

CREATE TABLE IF NOT EXISTS `ref_qualification` (
  `qualification_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification_name` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`qualification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ref_qualification`
--

INSERT INTO `ref_qualification` (`qualification_id`, `qualification_name`, `update_user`, `update_date`) VALUES
(1, 'B.Ed', 'prasanth', '2012-08-21'),
(2, 'Med', 'prasanth', '2012-08-21'),
(3, 'TTC', 'prasanth', '2012-08-21'),
(4, 'rr', 'admin', '0000-00-00'),
(5, 'BE', 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_subject`
--

CREATE TABLE IF NOT EXISTS `ref_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(20) NOT NULL,
  `subject_category` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ref_subject`
--

INSERT INTO `ref_subject` (`subject_id`, `subject_name`, `subject_category`, `update_user`, `update_date`) VALUES
(3, 'Maths', '', 'admin', '0000-00-00'),
(4, 'English', 'x', 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_survey_category`
--

CREATE TABLE IF NOT EXISTS `ref_survey_category` (
  `survey_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_cat_name` varchar(120) NOT NULL,
  `survey_cat_type` varchar(120) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`survey_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ref_survey_category`
--

INSERT INTO `ref_survey_category` (`survey_cat_id`, `survey_cat_name`, `survey_cat_type`, `update_user`, `update_date`) VALUES
(1, 'Parents', 'Academics', 'admin', '0000-00-00'),
(2, 'Parents', 'School Infrastructure', 'admin', '0000-00-00'),
(3, 'Parents', 'Teachers & School Management', 'admin', '0000-00-00'),
(4, 'Parents', 'Communication', 'admin', '0000-00-00'),
(5, 'Parents', 'Fees', 'admin', '0000-00-00'),
(6, 'Parents', 'Change of School', 'admin', '0000-00-00'),
(7, 'teacher', 'Academics', 'admin', '2012-09-13'),
(8, 'teacher', 'Co-Curricular Activities', 'admin', '2012-09-13'),
(9, 'teacher', 'Extra-Curricular Activities', 'admin', '2012-09-13'),
(10, 'teacher', 'Teachers Management', 'admin', '2012-09-13'),
(11, 'teacher', 'Teacher Development', 'admin', '2012-09-13'),
(12, 'teacher', 'Teacher Motivation', 'admin', '2012-09-13'),
(13, 'teacher', 'School Growth', 'admin', '2012-09-13'),
(14, 'teacher', 'Resource Planning', 'admin', '2012-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `ref_survey_sub_category`
--

CREATE TABLE IF NOT EXISTS `ref_survey_sub_category` (
  `survey_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_sub_cat_name` text NOT NULL,
  `survey_cat_id` int(11) NOT NULL,
  `survey_cat_name` varchar(20) NOT NULL DEFAULT 'teacher',
  `survey_sub_cat_type` varchar(20) NOT NULL DEFAULT 'dropdown',
  `survey_sub_cat_value` varchar(54) NOT NULL,
  `update_user` varchar(20) NOT NULL DEFAULT 'prasanth',
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`survey_sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `ref_survey_sub_category`
--

INSERT INTO `ref_survey_sub_category` (`survey_sub_cat_id`, `survey_sub_cat_name`, `survey_cat_id`, `survey_cat_name`, `survey_sub_cat_type`, `survey_sub_cat_value`, `update_user`, `update_date`) VALUES
(1, 'Are you satisfied with the English skills of your child ?', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(2, 'How do you judge the English skills of your child ? 	\r\n	', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(3, 'Are you satisfied with the Math Skills of your child? 	\r\n	', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(4, 'How do you judge the Math skills of your child ? ', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(5, 'Are you satisfied with the number of students who have passed from Class X in the school ?', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(6, 'If no, what is one area of improvement to help students prepare better for Class X exam ?', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(7, 'Are you satisfied with the school''s co-curricular activities (debates, physical training, quiz, events on special days) ? ', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(8, 'Are you satisfied with the school''s extracurricular activities (outdoor games, indoor games, music and dance) ? ', 1, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(9, 'Do you find the classrooms airy and well lit ? ', 2, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(10, 'Do you find the school premises (classrooms, toilets) to be clean & hygienic ?', 2, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(11, 'Does the computer lab in the school add value to your child''s education ? 	\r\n', 2, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(12, 'Does the library in the school help your child''s reading ability ? ', 2, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(13, 'Are you satisfied with the teachers in the school? 	\r\n 	', 3, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(14, 'What is one main area of improvement for the teachers ? 	\r\n	', 3, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(15, 'Are you satisfied with the School principal? 	\r\n 	', 3, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(16, 'What is one main area of improvement for the principal ?', 3, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(17, 'What is the best way for the school to communicate with you about student related issues? 	\r\n	', 4, 'Parents\r\n', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(18, 'Has the school communicated about student related issues through the above chosen option? 	\r\n	What is the best way for the school to communicate with you about school related issues? 	\r\n	Has the school communicated about school related issues through the above chosen option?', 4, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(19, 'What is the best way for the school to communicate with you about school related issues? 	\r\n	', 4, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(20, 'Has the school communicated about school related issues through the above chosen option?', 4, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(21, 'Do you think your child gets enough value for the fees paid? 	\r\n	', 5, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(22, 'Has the management created appropriate fee payment options? 	\r\n', 5, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(23, 'If no, what mode of fee payment would you prefer? ', 5, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(24, 'Would you continue your child in this school? 	\r\n	', 6, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(25, 'If yes, till which class would your child continue? 	\r\n	', 6, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(26, 'If no/not sure, what reason would encourage you to consider a shift?', 6, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(27, '21&22 	\r\n', 4, 'Parents', 'text', '', 'admin', '0000-00-00 00:00:00'),
(28, '23&24', 4, 'Parents', 'text', '', 'admin', '0000-00-00 00:00:00'),
(29, 'Does the science lab help in improving your child''s knowledge ?', 2, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(55, 'Academic Progress Monitoring', 7, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:36:13'),
(56, 'Remedial Program', 7, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:38:08'),
(57, 'Extra Class (After school hours)', 7, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:38:08'),
(58, 'Learning Aids', 8, 'teacher', 'text', '', 'prasanth', '2012-09-22 08:40:02'),
(59, 'Computer(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:43:24'),
(60, 'Techno Class(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:43:24'),
(61, 'Laboratory(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:43:51'),
(62, 'Models(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:43:51'),
(63, 'Charts(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:44:25'),
(64, 'Others(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:44:25'),
(65, 'Activity based learning (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:45:36'),
(66, 'Competitions (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:45:36'),
(67, 'Expert guest lecture (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:46:09'),
(68, 'Field Visits (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:46:09'),
(69, 'Competitions (5=Nil or 0)', 9, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:46:57'),
(70, 'Sports (5=Nil or 0)', 9, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:46:57'),
(74, 'Hobby Clubs (1=Yes 2=No)', 9, 'teacher', 'text', '', 'prasanth', '2012-09-22 08:47:58'),
(75, 'Sports', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:49:14'),
(76, 'Music / Dance', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:49:14'),
(77, 'Quiz / Debate', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:49:44'),
(78, 'NCC / Guide', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:49:44'),
(79, 'Others', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:49:54'),
(80, 'Curriculum/Lesson Planning', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:50:39'),
(81, 'Teacher Involvement', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:50:39'),
(82, 'Syllabus Coverage', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:51:17'),
(83, 'Teachers Meeting', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:51:17'),
(84, 'Performance Review Frequency (5=Never)', 11, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:52:15'),
(85, 'Teacher Support / Help', 11, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 08:52:15'),
(86, 'Training (1=Yes, 2=No)', 11, 'teacher', 'text', '', 'prasanth', '2012-09-22 08:54:19'),
(87, 'Teaching', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:54:44'),
(88, 'English', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:54:44'),
(89, 'Learning Aids', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:55:13'),
(90, 'Subject', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:55:13'),
(91, 'Others', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:55:56'),
(92, 'Professional Development', 11, 'teacher', 'text', '', 'prasanth', '2012-09-22 08:55:56'),
(93, 'Participation in new initiatives', 11, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 08:56:38'),
(94, 'Encourage new ideas from teachers', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 08:56:38'),
(95, 'Financial Incentive (1=Yes 2=No)', 12, 'teacher', 'text', '', 'prasanth', '2012-09-22 08:57:09'),
(96, 'Gifts', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:48:34'),
(97, 'Bonus', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:49:08'),
(98, 'Over-time', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:49:08'),
(99, 'Others', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:49:54'),
(100, 'Future Attrition', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:49:54'),
(101, 'Teacher Attrition Reason (5=Others)', 12, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 09:50:24'),
(102, 'Goals & Aspiration', 13, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 09:51:16'),
(103, 'Enrollment (Num)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:51:16'),
(104, 'Student Fee (% Increase)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:52:13'),
(105, 'Infrastructure (Additions)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:52:13'),
(106, 'Technology (Additions)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:53:30'),
(107, 'Learning Outcome (% Improvement)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:53:30'),
(108, 'Teacher Competency (% Improvement)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 09:54:16'),
(109, 'Special Projects - Teacher Meeting?', 14, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 09:54:16'),
(110, 'Allocation of Substitute - Delegated?', 14, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 09:55:29'),
(111, 'Lesson Plan - Substitute teacher', 14, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 09:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `ref_test_category`
--

CREATE TABLE IF NOT EXISTS `ref_test_category` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_cat_name` varchar(22) NOT NULL,
  `test_cat_type` varchar(22) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ref_test_category`
--

INSERT INTO `ref_test_category` (`test_id`, `test_cat_name`, `test_cat_type`, `update_user`, `update_date`) VALUES
(1, 'M3B1', 'student', 'prasanth', '2012-09-30 06:00:40'),
(2, 'E3B1', 'student', 'prasanth', '2012-09-30 06:00:40'),
(3, 'E7B3', 'teacher', 'prasanth', '2012-09-30 06:01:33'),
(4, 'M7B1', 'teacher', 'prasanth', '2012-09-30 06:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `ref_test_sub_category`
--

CREATE TABLE IF NOT EXISTS `ref_test_sub_category` (
  `test_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_sub_cat_name` varchar(50) NOT NULL,
  `test_cat_id` int(11) NOT NULL,
  `test_cat_name` varchar(22) NOT NULL,
  `test_sub_cat_type` varchar(22) NOT NULL,
  `test_sub_cat_value` varchar(22) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`test_sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `ref_test_sub_category`
--

INSERT INTO `ref_test_sub_category` (`test_sub_cat_id`, `test_sub_cat_name`, `test_cat_id`, `test_cat_name`, `test_sub_cat_type`, `test_sub_cat_value`, `update_user`, `update_date`) VALUES
(1, '1', 3, 'E7B3', 'dropdown', '0,1,2', 'prasanth', '2012-09-30 08:58:16'),
(2, '2(i)', 3, 'E7B3', 'dropdown', '0,1,2', 'prasanth', '2012-09-30 08:58:16'),
(3, '2(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 08:58:58'),
(4, '3(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 08:58:58'),
(5, '3(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 08:59:32'),
(6, '4(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 08:59:32'),
(7, '4(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:00:26'),
(8, '5(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:00:26'),
(9, '5(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:00:58'),
(10, '5(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:00:58'),
(11, '5(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:01:26'),
(12, '6(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:01:26'),
(13, '6(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:01:48'),
(14, '6(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:01:48'),
(15, '6(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:02:23'),
(16, '7(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:02:23'),
(17, '7(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:03:02'),
(18, '7(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:03:02'),
(19, '7(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:03:29'),
(20, '8(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:03:29'),
(21, '8(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:03:51'),
(22, '8(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:03:51'),
(23, '8(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:04:20'),
(24, '8(v)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:04:20'),
(25, '8(vi)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:05:04'),
(26, '9(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:05:04'),
(27, '9(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:05:40'),
(28, '10(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:05:40'),
(29, '10(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:08:26'),
(30, '11(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:08:26'),
(31, '11(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:08:49'),
(32, '12', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:08:49'),
(33, '13(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:09:30'),
(34, '13(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:09:30'),
(35, '13(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:13:56'),
(36, '13(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:13:56'),
(37, '14(i)a', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:14:33'),
(38, '14(i)b', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:14:33'),
(39, '14(ii)a', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:15:03'),
(40, '14(ii)b', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:15:03'),
(41, '15', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:15:30'),
(42, '16(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:15:30'),
(43, '16(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:16:35'),
(44, '16(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:16:35'),
(45, '16(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:17:02'),
(46, '17(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:17:02'),
(47, '17(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:17:27'),
(48, '17(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:17:27'),
(49, '17(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:18:10'),
(50, '18(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:18:10'),
(51, '18(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:18:30'),
(52, '18(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:18:30'),
(53, '18(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:18:55'),
(54, '19(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:18:55'),
(55, '19(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:19:17'),
(56, '19(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:19:17'),
(57, '19(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:19:37'),
(58, '20', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 09:19:37'),
(59, '1(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:46:22'),
(60, '1(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:46:22'),
(61, '1(iii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:47:26'),
(62, '2(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:47:26'),
(63, '2(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:48:17'),
(64, '2(iii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:48:17'),
(65, '3', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:49:04'),
(66, '4', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:49:04'),
(67, '5(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:50:08'),
(68, '5(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 08:50:08'),
(69, '6', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:51:13'),
(70, '7', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 08:51:13'),
(71, '8(i)', 1, 'M3B1', 'dropdown', '0,0.5', 'prasanth', '2012-10-01 08:52:20'),
(72, '8(ii)', 1, 'M3B1', 'dropdown', '0,0.5', 'prasanth', '2012-10-01 08:52:20'),
(73, '9(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:53:03'),
(74, '9(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:53:03'),
(75, '10', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:53:46'),
(76, '11', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:53:46'),
(77, '12', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:54:38'),
(78, '13(i)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5', 'prasanth', '2012-10-01 08:54:38'),
(79, '13(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5', 'prasanth', '2012-10-01 08:55:26'),
(80, '14(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:55:26'),
(81, '14(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:56:24'),
(82, '15(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:56:24'),
(83, '15(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:57:54'),
(84, '16(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:57:54'),
(85, '16(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:58:32'),
(86, '17', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:58:32'),
(87, '18', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:59:39'),
(88, '19', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 08:59:39'),
(89, '20', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:00:32'),
(90, '21', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:00:32'),
(91, '22', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:01:09'),
(92, '23', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:01:09'),
(93, '24(i)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 09:05:54'),
(94, '24(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:05:54'),
(95, '25(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:07:06'),
(96, '25(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:07:06'),
(97, '26', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:08:01'),
(98, '27', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 09:08:01'),
(99, '28', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2,2.5,3', 'prasanth', '2012-10-01 09:08:45'),
(100, '29', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 09:08:45'),
(101, '30', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 09:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `school_code` varchar(11) NOT NULL,
  `school_name` varchar(55) NOT NULL,
  `yearofestablish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `date`, `school_code`, `school_name`, `yearofestablish`) VALUES
(125, '2013-02-15', 'HYD0114', 'aa', 0),
(2, '2012-08-07', 'HYD0002', 'SLIC', 2011),
(15, '2012-08-07', 'HYD0003', 'Ingram Institute', 0),
(126, '2013-02-15', 'HYD0115', 'aa', 0),
(17, '2012-08-28', 'DEL0017', 'DPS', 0),
(19, '2012-08-29', 'BLR0019', 'Dehradun Public School', 0),
(115, '2013-02-14', 'HYD0105', 'little', 0),
(22, '2012-10-03', 'BLR0022', 'Shantiniketan High School', 0),
(122, '2013-02-15', 'HYD0111', 'grey matters', 0),
(89, '2013-01-21', 'BLR0087', 'Gray Mattress Capital', 0),
(124, '2013-02-15', 'HYD0113', 'abc', 0),
(123, '2013-02-15', 'HYD0112', 'aqwe', 0),
(119, '2013-02-15', 'HYD0108', 'abcd', 0),
(86, '2013-01-16', 'HYD0027', 'chaitanya techno school', 0),
(132, '2013-02-18', 'HYD0121', 'WERWER', 0),
(131, '2013-02-18', 'HYD0120', 'new school', 0),
(130, '2013-02-15', 'HYD0119', 'bhashyam', 0),
(129, '2013-02-15', 'BLR0118', 'zzzzzz', 0),
(85, '2013-01-16', 'BLR0026', 'Goutham Model School', 0),
(121, '2013-02-15', 'HYD0110', 'abcsd', 0),
(128, '2013-02-15', 'HYD0117', 'mmmmm', 0),
(127, '2013-02-15', 'HYD0116', 'aa', 0),
(120, '2013-02-15', 'BLR0109', 'ggggg', 0),
(117, '2013-02-15', 'BLR0107', 'delhi public', 0),
(133, '2013-02-25', 'HYD0122', 'nnnnnnn', 0),
(134, '2013-02-25', 'HYD0123', 'dddddd', 0),
(135, '2013-02-25', 'HYD0124', 'vvbv', 0),
(136, '2013-02-25', 'HYD0125', 'guru', 0),
(137, '0000-00-00', 'HYD0126', 'pius systems', 0),
(138, '2013-02-25', 'HYD0127', 'pius2', 2010),
(139, '2013-02-25', 'HYD0128', 'pius engineering', 2012),
(140, '2013-02-25', 'HYD0129', 'pius uk', 2011),
(141, '2013-02-26', 'HYD0130', 'oooooo', 2013),
(142, '2013-02-28', 'HYD0131', 'sssxsx', 0),
(143, '2013-03-01', 'HYD0132', 'dfdfdfd', 0),
(144, '2013-03-01', 'HYD0133', 'gggggggggg', 0),
(145, '2013-03-07', 'HYD0134', 'newschool', 0),
(146, '2013-03-07', 'HYD0135', 'dfdfdfd', 0),
(147, '2013-03-07', 'HYD0136', 'dfdfdfd', 0),
(148, '2013-03-07', 'HYD0137', 'dfdfdfd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school_facility`
--

CREATE TABLE IF NOT EXISTS `school_facility` (
  `Facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(22) NOT NULL,
  `facility_cat_id` int(11) NOT NULL,
  `facility_sub_cat_id` int(11) NOT NULL,
  `facility_sub_cat_value` varchar(55) NOT NULL,
  `update_user` varchar(11) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`Facility_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=979 ;

--
-- Dumping data for table `school_facility`
--

INSERT INTO `school_facility` (`Facility_id`, `school_code`, `facility_cat_id`, `facility_sub_cat_id`, `facility_sub_cat_value`, `update_user`, `update_date`) VALUES
(1, 'HYD0001', 1, 1, 'nishant', '', '0000-00-00'),
(4, 'HYD0001', 1, 2, 'sharma', '', '0000-00-00'),
(5, 'HYD0001', 1, 3, 'Tield', '', '0000-00-00'),
(6, 'HYD0001', 1, 5, '10', '', '0000-00-00'),
(7, 'HYD0001', 2, 4, 'Ineffective', '', '0000-00-00'),
(8, 'HYD0001', 2, 6, '12', '', '0000-00-00'),
(9, 'HYD0001', 2, 7, 'Yes', '', '0000-00-00'),
(10, 'HYD0001', 2, 8, 'No', '', '0000-00-00'),
(11, 'HYD0001', 2, 9, 'Ineffective', '', '0000-00-00'),
(12, 'HYD0001', 2, 12, 'No', '', '0000-00-00'),
(13, 'HYD0001', 3, 13, 'Ineffective', '', '0000-00-00'),
(14, 'HYD0001', 3, 14, 'Ineffective', '', '0000-00-00'),
(15, 'HYD0001', 3, 15, 'No', '', '0000-00-00'),
(16, 'HYD0001', 3, 16, 'Ineffective', '', '0000-00-00'),
(17, 'HYD0001', 3, 17, 'Effective', '', '0000-00-00'),
(18, 'HYD0001', 3, 18, 'Effective', '', '0000-00-00'),
(19, 'HYD0001', 3, 19, 'Effective', '', '0000-00-00'),
(20, 'HYD0001', 3, 20, 'Yes', '', '0000-00-00'),
(21, 'HYD0001', 3, 21, 'Yes', '', '0000-00-00'),
(22, 'HYD0001', 3, 22, 'Yes', '', '0000-00-00'),
(23, 'HYD0001', 3, 23, 'Effective', '', '0000-00-00'),
(24, 'HYD0001', 4, 24, 'Effective', '', '0000-00-00'),
(25, 'HYD0001', 4, 25, 'Effective', '', '0000-00-00'),
(26, 'HYD0001', 4, 26, 'Effective', '', '0000-00-00'),
(27, 'HYD0001', 4, 27, 'Effective', '', '0000-00-00'),
(28, 'HYD0001', 4, 28, 'No', '', '0000-00-00'),
(29, 'HYD0001', 4, 29, 'No', '', '0000-00-00'),
(372, 'HYD0002', 1, 1, 'Partially Owned', '', '0000-00-00'),
(373, 'HYD0002', 1, 2, '', '', '0000-00-00'),
(374, 'HYD0002', 1, 3, '1650', '', '0000-00-00'),
(375, 'HYD0002', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(376, 'HYD0002', 2, 4, 'Yes', '', '0000-00-00'),
(377, 'HYD0002', 2, 6, '', '', '0000-00-00'),
(378, 'HYD0002', 2, 7, 'Yes', '', '0000-00-00'),
(379, 'HYD0002', 2, 8, 'Yes', '', '0000-00-00'),
(380, 'HYD0002', 2, 9, 'Yes', '', '0000-00-00'),
(381, 'HYD0002', 2, 12, 'Yes', '', '0000-00-00'),
(382, 'HYD0002', 3, 13, 'Yes', '', '0000-00-00'),
(383, 'HYD0002', 3, 14, 'Ineffective', '', '0000-00-00'),
(384, 'HYD0002', 3, 15, 'Yes', '', '0000-00-00'),
(385, 'HYD0002', 3, 16, 'Yes', '', '0000-00-00'),
(386, 'HYD0002', 3, 17, 'Yes', '', '0000-00-00'),
(387, 'HYD0002', 3, 18, 'Yes', '', '0000-00-00'),
(388, 'HYD0002', 3, 19, 'Yes', '', '0000-00-00'),
(389, 'HYD0002', 3, 20, 'Yes', '', '0000-00-00'),
(390, 'HYD0002', 3, 21, 'Yes', '', '0000-00-00'),
(391, 'HYD0002', 3, 22, 'Yes', '', '0000-00-00'),
(392, 'HYD0002', 3, 23, 'Yes', '', '0000-00-00'),
(393, 'HYD0002', 4, 24, 'Yes', '', '0000-00-00'),
(394, 'HYD0002', 4, 25, 'Yes', '', '0000-00-00'),
(395, 'HYD0002', 4, 26, 'Yes', '', '0000-00-00'),
(396, 'HYD0002', 4, 27, 'Yes', '', '0000-00-00'),
(397, 'HYD0002', 4, 28, 'Yes', '', '0000-00-00'),
(398, 'HYD0002', 4, 29, 'No', '', '0000-00-00'),
(788, 'HYD0003', 4, 24, 'Yes', '', '0000-00-00'),
(789, 'HYD0003', 4, 24, 'Yes', '', '0000-00-00'),
(790, 'HYD0003', 3, 13, 'Yes', '', '0000-00-00'),
(791, 'HYD0003', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(792, 'HYD0003', 4, 24, 'Yes', '', '0000-00-00'),
(793, 'HYD0003', 2, 6, '55', '', '0000-00-00'),
(794, 'HYD0003', 2, 7, 'Yes', '', '0000-00-00'),
(795, 'HYD0003', 2, 8, 'Yes', '', '0000-00-00'),
(796, 'HYD0003', 2, 9, 'Yes', '', '0000-00-00'),
(797, 'HYD0003', 2, 12, 'Yes', '', '0000-00-00'),
(798, 'HYD0003', 3, 13, 'Yes', '', '0000-00-00'),
(799, 'HYD0003', 3, 14, 'Yes', '', '0000-00-00'),
(800, 'HYD0003', 3, 15, 'Yes', '', '0000-00-00'),
(801, 'HYD0003', 3, 16, 'Yes', '', '0000-00-00'),
(802, 'HYD0003', 3, 17, 'Yes', '', '0000-00-00'),
(803, 'HYD0003', 3, 18, 'Yes', '', '0000-00-00'),
(804, 'HYD0003', 3, 19, 'Yes', '', '0000-00-00'),
(805, 'HYD0003', 3, 20, 'Yes', '', '0000-00-00'),
(806, 'HYD0003', 3, 21, 'Yes', '', '0000-00-00'),
(807, 'HYD0003', 3, 22, 'Yes', '', '0000-00-00'),
(808, 'HYD0003', 3, 23, 'Yes', '', '0000-00-00'),
(809, 'HYD0003', 4, 24, 'Yes', '', '0000-00-00'),
(810, 'HYD0003', 4, 25, 'Yes', '', '0000-00-00'),
(811, 'HYD0003', 4, 26, 'Yes', '', '0000-00-00'),
(812, 'HYD0003', 4, 27, 'Yes', '', '0000-00-00'),
(813, 'HYD0003', 4, 28, 'Yes', '', '0000-00-00'),
(814, 'HYD0003', 4, 29, 'No', '', '0000-00-00'),
(815, 'HYD0016', 4, 24, 'Effective', '', '0000-00-00'),
(816, 'HYD0016', 4, 24, 'Effective', '', '0000-00-00'),
(817, 'HYD0016', 3, 13, 'Effective', '', '0000-00-00'),
(818, 'HYD0016', 1, 5, '', '', '0000-00-00'),
(819, 'HYD0016', 4, 24, 'Effective', '', '0000-00-00'),
(820, 'HYD0016', 2, 6, '', '', '0000-00-00'),
(821, 'HYD0016', 2, 7, 'Yes', '', '0000-00-00'),
(822, 'HYD0016', 2, 8, 'Ineffective', '', '0000-00-00'),
(823, 'HYD0016', 2, 9, 'Effective', '', '0000-00-00'),
(824, 'HYD0016', 2, 12, 'Effective', '', '0000-00-00'),
(825, 'HYD0016', 3, 13, 'Effective', '', '0000-00-00'),
(826, 'HYD0016', 3, 14, 'Effective', '', '0000-00-00'),
(827, 'HYD0016', 3, 15, 'Yes', '', '0000-00-00'),
(828, 'HYD0016', 3, 16, 'Effective', '', '0000-00-00'),
(829, 'HYD0016', 3, 17, 'Effective', '', '0000-00-00'),
(830, 'HYD0016', 3, 18, 'Effective', '', '0000-00-00'),
(831, 'HYD0016', 3, 19, 'Effective', '', '0000-00-00'),
(832, 'HYD0016', 3, 20, 'Yes', '', '0000-00-00'),
(833, 'HYD0016', 3, 21, 'Yes', '', '0000-00-00'),
(834, 'HYD0016', 3, 22, 'Yes', '', '0000-00-00'),
(835, 'HYD0016', 3, 23, 'Effective', '', '0000-00-00'),
(836, 'HYD0016', 4, 24, 'Effective', '', '0000-00-00'),
(837, 'HYD0016', 4, 25, 'Ineffective', '', '0000-00-00'),
(838, 'HYD0016', 4, 26, 'Effective', '', '0000-00-00'),
(839, 'HYD0016', 4, 27, 'No', '', '0000-00-00'),
(840, 'HYD0016', 4, 28, 'No', '', '0000-00-00'),
(841, 'HYD0016', 4, 29, 'No', '', '0000-00-00'),
(842, 'HYD0001', 2, 30, 'Effective', '', '0000-00-00'),
(846, 'HYD0001', 4, 57, '2000', '', '0000-00-00'),
(847, 'HYD0001', 1, 58, 'No', '', '0000-00-00'),
(848, 'BLR0019', 1, 1, 'Rented', '', '0000-00-00'),
(849, 'BLR0019', 1, 2, '22', '', '0000-00-00'),
(850, 'BLR0019', 1, 3, '1400', '', '0000-00-00'),
(851, 'BLR0019', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(852, 'BLR0019', 1, 58, 'NO', '', '0000-00-00'),
(853, 'BLR0019', 2, 4, 'Ineffective', '', '0000-00-00'),
(854, 'BLR0019', 2, 6, '15', '', '0000-00-00'),
(855, 'BLR0019', 2, 7, 'Yes', '', '0000-00-00'),
(856, 'BLR0019', 2, 8, 'Yes', '', '0000-00-00'),
(857, 'BLR0019', 2, 9, 'Ineffective', '', '0000-00-00'),
(858, 'BLR0019', 2, 12, 'Yes', '', '0000-00-00'),
(859, 'BLR0019', 2, 30, 'Ineffective', '', '0000-00-00'),
(860, 'BLR0019', 3, 13, 'Yes', '', '0000-00-00'),
(861, 'BLR0019', 3, 14, 'Yes', '', '0000-00-00'),
(862, 'BLR0019', 3, 15, 'Yes', '', '0000-00-00'),
(863, 'BLR0019', 3, 16, 'Yes', '', '0000-00-00'),
(864, 'BLR0019', 3, 17, 'Yes', '', '0000-00-00'),
(865, 'BLR0019', 3, 18, 'Yes', '', '0000-00-00'),
(866, 'BLR0019', 3, 19, 'Ineffective', '', '0000-00-00'),
(867, 'BLR0019', 3, 20, 'Yes', '', '0000-00-00'),
(868, 'BLR0019', 3, 21, 'Yes', '', '0000-00-00'),
(869, 'BLR0019', 3, 22, 'Yes', '', '0000-00-00'),
(870, 'BLR0019', 3, 23, 'Yes', '', '0000-00-00'),
(871, 'BLR0019', 4, 24, 'Yes', '', '0000-00-00'),
(872, 'BLR0019', 4, 25, 'Yes', '', '0000-00-00'),
(873, 'BLR0019', 4, 26, 'Yes', '', '0000-00-00'),
(874, 'BLR0019', 4, 27, 'Yes', '', '0000-00-00'),
(875, 'BLR0019', 4, 28, 'Yes', '', '0000-00-00'),
(876, 'BLR0019', 4, 29, 'No', '', '0000-00-00'),
(877, 'BLR0019', 4, 57, '', '', '0000-00-00'),
(878, 'HYD0016', 1, 1, '', '', '0000-00-00'),
(879, 'HYD0016', 1, 2, '', '', '0000-00-00'),
(880, 'HYD0016', 1, 3, 'Semi-Pucca', '', '0000-00-00'),
(881, 'HYD0016', 2, 4, 'Effective', '', '0000-00-00'),
(882, 'HYD0016', 2, 30, 'Effective', '', '0000-00-00'),
(883, 'HYD0003', 1, 1, 'Rented', '', '0000-00-00'),
(884, 'HYD0003', 1, 2, '22', '', '0000-00-00'),
(885, 'HYD0003', 1, 3, '1500', '', '0000-00-00'),
(886, 'HYD0003', 2, 4, 'Yes', '', '0000-00-00'),
(887, 'HYD0003', 2, 30, 'Yes', '', '0000-00-00'),
(889, 'HYD0027', 1, 1, 'Owned', '', '0000-00-00'),
(890, 'HYD0027', 1, 2, '22', '', '0000-00-00'),
(891, 'HYD0027', 1, 3, '1986', '', '0000-00-00'),
(892, 'HYD0027', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(893, 'HYD0027', 2, 4, 'Yes', '', '0000-00-00'),
(894, 'HYD0027', 2, 6, '56', '', '0000-00-00'),
(895, 'HYD0027', 2, 7, 'Yes', '', '0000-00-00'),
(896, 'HYD0027', 2, 8, 'Yes', '', '0000-00-00'),
(897, 'HYD0027', 2, 9, 'Yes', '', '0000-00-00'),
(898, 'HYD0027', 2, 12, 'Yes', '', '0000-00-00'),
(899, 'HYD0027', 2, 30, 'Yes', '', '0000-00-00'),
(900, 'HYD0027', 3, 13, 'Yes', '', '0000-00-00'),
(901, 'HYD0027', 3, 14, 'Yes', '', '0000-00-00'),
(902, 'HYD0027', 3, 15, 'Yes', '', '0000-00-00'),
(903, 'HYD0027', 3, 16, 'Yes', '', '0000-00-00'),
(904, 'HYD0027', 3, 17, 'Yes', '', '0000-00-00'),
(905, 'HYD0027', 3, 18, 'Yes', '', '0000-00-00'),
(906, 'HYD0027', 3, 19, 'Yes', '', '0000-00-00'),
(907, 'HYD0027', 3, 20, 'Yes', '', '0000-00-00'),
(908, 'HYD0027', 3, 21, 'Yes', '', '0000-00-00'),
(909, 'HYD0027', 3, 22, 'Yes', '', '0000-00-00'),
(910, 'HYD0027', 3, 23, 'Yes', '', '0000-00-00'),
(911, 'HYD0027', 4, 24, 'Yes', '', '0000-00-00'),
(912, 'HYD0027', 4, 25, 'Yes', '', '0000-00-00'),
(913, 'HYD0027', 4, 26, 'Yes', '', '0000-00-00'),
(914, 'HYD0027', 4, 27, 'Yes', '', '0000-00-00'),
(915, 'HYD0027', 4, 28, 'Yes', '', '0000-00-00'),
(916, 'HYD0027', 4, 29, 'Yes', '', '0000-00-00'),
(917, 'BLR0087', 1, 1, 'Owned', '', '0000-00-00'),
(918, 'BLR0087', 1, 2, '26', '', '0000-00-00'),
(919, 'BLR0087', 1, 3, '1789', '', '0000-00-00'),
(920, 'BLR0087', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(921, 'BLR0087', 2, 4, 'Yes', '', '0000-00-00'),
(922, 'BLR0087', 2, 6, '26', '', '0000-00-00'),
(923, 'BLR0087', 2, 7, 'Yes', '', '0000-00-00'),
(924, 'BLR0087', 2, 8, 'Yes', '', '0000-00-00'),
(925, 'BLR0087', 2, 9, 'Yes', '', '0000-00-00'),
(926, 'BLR0087', 2, 12, 'Yes', '', '0000-00-00'),
(927, 'BLR0087', 2, 30, 'Yes', '', '0000-00-00'),
(928, 'BLR0087', 3, 13, 'Yes', '', '0000-00-00'),
(929, 'BLR0087', 3, 14, 'Yes', '', '0000-00-00'),
(930, 'BLR0087', 3, 15, 'Yes', '', '0000-00-00'),
(931, 'BLR0087', 3, 16, 'Yes', '', '0000-00-00'),
(932, 'BLR0087', 3, 17, 'Yes', '', '0000-00-00'),
(933, 'BLR0087', 3, 18, 'Yes', '', '0000-00-00'),
(934, 'BLR0087', 3, 19, 'Yes', '', '0000-00-00'),
(935, 'BLR0087', 3, 20, 'Yes', '', '0000-00-00'),
(936, 'BLR0087', 3, 21, 'Yes', '', '0000-00-00'),
(937, 'BLR0087', 3, 22, 'Yes', '', '0000-00-00'),
(938, 'BLR0087', 3, 23, 'Yes', '', '0000-00-00'),
(939, 'BLR0087', 4, 24, 'Yes', '', '0000-00-00'),
(940, 'BLR0087', 4, 25, 'Yes', '', '0000-00-00'),
(941, 'BLR0087', 4, 26, 'Yes', '', '0000-00-00'),
(942, 'BLR0087', 4, 27, 'Yes', '', '0000-00-00'),
(943, 'BLR0087', 4, 28, 'Yes', '', '0000-00-00'),
(944, 'BLR0087', 4, 29, 'Yes', '', '0000-00-00'),
(946, 'HYD0098', 1, 1, 'Owned', '', '0000-00-00'),
(947, 'HYD0098', 1, 2, '', '', '0000-00-00'),
(948, 'HYD0098', 1, 3, '', '', '0000-00-00'),
(949, 'HYD0098', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(950, 'HYD0098', 2, 4, 'Yes', '', '0000-00-00'),
(951, 'HYD0098', 2, 6, '', '', '0000-00-00'),
(952, 'HYD0098', 2, 7, 'Yes', '', '0000-00-00'),
(953, 'HYD0098', 2, 8, 'Yes', '', '0000-00-00'),
(954, 'HYD0098', 2, 9, 'Yes', '', '0000-00-00'),
(955, 'HYD0098', 2, 12, 'Yes', '', '0000-00-00'),
(956, 'HYD0098', 2, 30, 'Yes', '', '0000-00-00'),
(957, 'HYD0098', 3, 13, 'Yes', '', '0000-00-00'),
(958, 'HYD0098', 3, 14, 'Yes', '', '0000-00-00'),
(959, 'HYD0098', 3, 15, 'Yes', '', '0000-00-00'),
(960, 'HYD0098', 3, 16, 'Yes', '', '0000-00-00'),
(961, 'HYD0098', 3, 17, 'Yes', '', '0000-00-00'),
(962, 'HYD0098', 3, 18, 'Yes', '', '0000-00-00'),
(963, 'HYD0098', 3, 19, 'Yes', '', '0000-00-00'),
(964, 'HYD0098', 3, 20, 'Yes', '', '0000-00-00'),
(965, 'HYD0098', 3, 21, 'Yes', '', '0000-00-00'),
(966, 'HYD0098', 3, 22, 'Yes', '', '0000-00-00'),
(967, 'HYD0098', 3, 23, 'Yes', '', '0000-00-00'),
(968, 'HYD0098', 4, 24, 'Yes', '', '0000-00-00'),
(969, 'HYD0098', 4, 25, 'Yes', '', '0000-00-00'),
(970, 'HYD0098', 4, 26, 'Yes', '', '0000-00-00'),
(971, 'HYD0098', 4, 27, 'Yes', '', '0000-00-00'),
(972, 'HYD0098', 4, 28, 'Yes', '', '0000-00-00'),
(973, 'HYD0098', 4, 29, 'Yes', '', '0000-00-00'),
(974, 'HYD0098', 4, 31, '1', '', '0000-00-00'),
(975, 'HYD0003', 4, 31, '1', '', '0000-00-00'),
(976, 'HYD0002', 2, 30, 'Yes', '', '0000-00-00'),
(977, 'HYD0002', 5, 61, '', '', '0000-00-00'),
(978, 'HYD0002', 6, 62, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `school_fees`
--

CREATE TABLE IF NOT EXISTS `school_fees` (
  `school_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `fee_term_type` varchar(20) NOT NULL,
  `school_fee_category` varchar(10) NOT NULL,
  `fee_amount` float NOT NULL,
  `quantity` float NOT NULL,
  `total_amount` float NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`school_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `school_fees`
--

INSERT INTO `school_fees` (`school_fee_id`, `assessment_id`, `fee_id`, `class_id`, `school_code`, `fee_term_type`, `school_fee_category`, `fee_amount`, `quantity`, `total_amount`, `update_user`, `update_date`) VALUES
(1, 31, 1, 1, 'HYD0002', 'Quarterly', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(2, 31, 2, 1, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(3, 31, 3, 1, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(4, 31, 4, 1, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(5, 31, 5, 1, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(6, 31, 6, 1, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(7, 31, 1, 2, 'HYD0002', 'Quarterly', 'school_fee', 43, 0, 0, 'admin', '0000-00-00'),
(8, 31, 2, 2, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(9, 31, 3, 2, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(10, 31, 4, 2, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(11, 31, 5, 2, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(12, 31, 6, 2, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(13, 31, 1, 3, 'HYD0002', 'Quarterly', 'school_fee', 54, 0, 0, 'admin', '0000-00-00'),
(14, 31, 2, 3, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(15, 31, 3, 3, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(16, 31, 4, 3, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(17, 31, 5, 3, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(18, 31, 6, 3, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(19, 31, 1, 4, 'HYD0002', 'Quarterly', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(20, 31, 2, 4, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(21, 31, 3, 4, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(22, 31, 4, 4, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(23, 31, 5, 4, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(24, 31, 6, 4, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(25, 31, 1, 5, 'HYD0002', 'Quarterly', 'school_fee', 50, 0, 0, 'admin', '0000-00-00'),
(26, 31, 2, 5, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(27, 31, 3, 5, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(28, 31, 4, 5, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(29, 31, 5, 5, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(30, 31, 6, 5, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(31, 31, 1, 6, 'HYD0002', 'Quarterly', 'school_fee', 50, 0, 0, 'admin', '0000-00-00'),
(32, 31, 2, 6, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(33, 31, 3, 6, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(34, 31, 4, 6, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(35, 31, 5, 6, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(36, 31, 6, 6, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(37, 31, 1, 7, 'HYD0002', 'Quarterly', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(38, 31, 2, 7, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(39, 31, 3, 7, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(40, 31, 4, 7, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(41, 31, 5, 7, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(42, 31, 6, 7, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(43, 31, 1, 8, 'HYD0002', 'Quarterly', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(44, 31, 2, 8, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(45, 31, 3, 8, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(46, 31, 4, 8, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(47, 31, 5, 8, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(48, 31, 6, 8, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(49, 31, 1, 9, 'HYD0002', 'Quarterly', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(50, 31, 2, 9, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(51, 31, 3, 9, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(52, 31, 4, 9, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(53, 31, 5, 9, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(54, 31, 6, 9, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(55, 31, 1, 10, 'HYD0002', 'Quarterly', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(56, 31, 2, 10, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(57, 31, 3, 10, 'HYD0002', 'Monthly', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(58, 31, 4, 10, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(59, 31, 5, 10, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(60, 31, 6, 10, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(61, 31, 1, 11, 'HYD0002', 'Quarterly', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(62, 31, 2, 11, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(63, 31, 3, 11, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(64, 31, 4, 11, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(65, 31, 5, 11, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(66, 31, 6, 11, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(67, 31, 1, 12, 'HYD0002', 'Quarterly', 'school_fee', 6, 0, 0, 'admin', '0000-00-00'),
(68, 31, 2, 12, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(69, 31, 3, 12, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(70, 31, 4, 12, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(71, 31, 5, 12, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(72, 31, 6, 12, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(73, 31, 1, 13, 'HYD0002', 'Quarterly', 'school_fee', 6, 0, 0, 'admin', '0000-00-00'),
(74, 31, 2, 13, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(75, 31, 3, 13, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(76, 31, 4, 13, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(77, 31, 5, 13, 'HYD0002', 'Quarterly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(78, 31, 6, 13, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(79, 31, 10, 1, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(80, 31, 11, 1, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(81, 31, 10, 2, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(82, 31, 11, 2, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(83, 31, 10, 3, 'HYD0002', 'Thrice', 'school_fee', 33, 0, 0, 'admin', '0000-00-00'),
(84, 31, 11, 3, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(85, 31, 10, 4, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(86, 31, 11, 4, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(87, 31, 10, 5, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(88, 31, 11, 5, 'HYD0002', 'Thrice', 'school_fee', 44, 0, 0, 'admin', '0000-00-00'),
(89, 31, 10, 6, 'HYD0002', 'Thrice', 'school_fee', 33, 0, 0, 'admin', '0000-00-00'),
(90, 31, 11, 6, 'HYD0002', 'Thrice', 'school_fee', 44, 0, 0, 'admin', '0000-00-00'),
(91, 31, 10, 7, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(92, 31, 11, 7, 'HYD0002', 'Thrice', 'school_fee', 44, 0, 0, 'admin', '0000-00-00'),
(93, 31, 10, 8, 'HYD0002', 'Thrice', 'school_fee', 33, 0, 0, 'admin', '0000-00-00'),
(94, 31, 11, 8, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(95, 31, 10, 9, 'HYD0002', 'Thrice', 'school_fee', 33, 0, 0, 'admin', '0000-00-00'),
(96, 31, 11, 9, 'HYD0002', 'Thrice', 'school_fee', 74, 0, 0, 'admin', '0000-00-00'),
(97, 31, 10, 10, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(98, 31, 11, 10, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(99, 31, 10, 11, 'HYD0002', 'Thrice', 'school_fee', 33, 0, 0, 'admin', '0000-00-00'),
(100, 31, 11, 11, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(101, 31, 10, 12, 'HYD0002', 'Thrice', 'school_fee', 33, 0, 0, 'admin', '0000-00-00'),
(102, 31, 11, 12, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(103, 31, 10, 13, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(104, 31, 11, 13, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(105, 31, 12, 1, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(106, 31, 12, 2, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(107, 31, 12, 3, 'HYD0002', 'Thrice', 'school_fee', 55, 0, 0, 'admin', '0000-00-00'),
(108, 31, 12, 4, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(109, 31, 12, 5, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(110, 31, 12, 6, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(111, 31, 12, 7, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(112, 31, 12, 8, 'HYD0002', 'Thrice', 'school_fee', 7, 0, 0, 'admin', '0000-00-00'),
(113, 31, 12, 9, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(114, 31, 12, 10, 'HYD0002', 'Thrice', 'school_fee', 6, 0, 0, 'admin', '0000-00-00'),
(115, 31, 12, 11, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(116, 31, 12, 12, 'HYD0002', 'Thrice', 'school_fee', 7, 0, 0, 'admin', '0000-00-00'),
(117, 31, 12, 13, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(118, 31, 13, 1, 'HYD0002', 'Thrice', 'school_fee', 7, 0, 0, 'admin', '0000-00-00'),
(119, 31, 13, 2, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(120, 31, 13, 3, 'HYD0002', 'Thrice', 'school_fee', 7, 0, 0, 'admin', '0000-00-00'),
(121, 31, 13, 4, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(122, 31, 13, 5, 'HYD0002', 'Thrice', 'school_fee', 6, 0, 0, 'admin', '0000-00-00'),
(123, 31, 13, 6, 'HYD0002', 'Thrice', 'school_fee', 6, 0, 0, 'admin', '0000-00-00'),
(124, 31, 13, 7, 'HYD0002', 'Thrice', 'school_fee', 8, 0, 0, 'admin', '0000-00-00'),
(125, 31, 13, 8, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(126, 31, 13, 9, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(127, 31, 13, 10, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(128, 31, 13, 11, 'HYD0002', 'Thrice', 'school_fee', 50, 0, 0, 'admin', '0000-00-00'),
(129, 31, 13, 12, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(130, 31, 13, 13, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(131, 31, 14, 1, 'HYD0002', 'Thrice', 'school_fee', 444, 0, 0, 'admin', '0000-00-00'),
(132, 31, 14, 2, 'HYD0002', 'Thrice', 'school_fee', 444, 0, 0, 'admin', '0000-00-00'),
(133, 31, 14, 3, 'HYD0002', 'Thrice', 'school_fee', 44, 0, 0, 'admin', '0000-00-00'),
(134, 31, 14, 4, 'HYD0002', 'Thrice', 'school_fee', 4, 0, 0, 'admin', '0000-00-00'),
(135, 31, 14, 5, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(136, 31, 14, 6, 'HYD0002', 'Thrice', 'school_fee', 44, 0, 0, 'admin', '0000-00-00'),
(137, 31, 14, 7, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(138, 31, 14, 8, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(139, 31, 14, 9, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(140, 31, 14, 10, 'HYD0002', 'Thrice', 'school_fee', 30, 0, 0, 'admin', '0000-00-00'),
(141, 31, 14, 11, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(142, 31, 14, 12, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(143, 31, 14, 13, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `school_profile`
--

CREATE TABLE IF NOT EXISTS `school_profile` (
  `profile_id` int(22) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(22) NOT NULL,
  `school_name` varchar(22) NOT NULL,
  `school_desc` varchar(55) NOT NULL,
  `school_type` varchar(22) NOT NULL,
  `location` varchar(22) NOT NULL,
  `year_of_estblished` year(4) NOT NULL,
  `recognition` varchar(22) NOT NULL,
  `recognition_upto_class` varchar(22) NOT NULL,
  `accredition` varchar(22) NOT NULL,
  `correspondent_name` varchar(22) NOT NULL,
  `phone_no` varchar(22) NOT NULL,
  `qualification` varchar(12) NOT NULL,
  `school_mailing_address` varchar(55) NOT NULL,
  `city` varchar(22) NOT NULL,
  `pincode` int(11) NOT NULL,
  `co_education` varchar(22) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`profile_id`),
  UNIQUE KEY `School_code` (`school_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`profile_id`, `school_code`, `school_name`, `school_desc`, `school_type`, `location`, `year_of_estblished`, `recognition`, `recognition_upto_class`, `accredition`, `correspondent_name`, `phone_no`, `qualification`, `school_mailing_address`, `city`, `pincode`, `co_education`, `update_user`, `update_date`) VALUES
(5, 'HYD0001', ' BBD ', 'BBDG', '', 'HYD', 1984, 'Yes', 'Class 10', 'xz', 'Prashanth', '9849984998', 'B.tech', 'Prashanth@gmail.com', 'Hyderabad', 500001, 'No', 'admin', '2013-01-28'),
(14, 'HYD0002', 'SLIC', '', '', 'HYD', 1965, 'Yes', 'Class 6', 'HSC', '', '', '', 'Hyderabad,Banjara Hills.', 'Hyderabad', 500014, 'No', '', '0000-00-00'),
(19, 'HYD0003', 'Ingram Institute', 'IISG', '', 'HYD', 1985, 'Yes', 'Class 10', 'HSC', 'Prasad.', '9568554666', 'MTECH', 'Hyderabad,Jublee Hills.', 'Hyderabad', 500014, 'Yes', '', '0000-00-00'),
(20, 'HYD0016', ' VMSC ', '', '', 'HYD', 2010, 'Yes', 'Class 10', '', '', '', '', '', '', 560063, 'Yes', '', '0000-00-00'),
(22, 'BLR0019', 'Dehradun Public School', 'DPSG', '', 'HYD', 1984, 'Yes', 'Class 10', 'HSC', 'Prasanth', '9866156515', '', 'Karnataka,Banglore.', 'Banglore', 560037, 'Yes', '', '0000-00-00'),
(23, 'HYD0027', 'chaitanya techno schoo', 'CHAG', '', '', 0000, 'Yes', 'Class 10', 'HSC', 'Pradeep', '8998989898', '', 'Hyderabad,Banjara Hills.', 'Hyderabad', 500014, 'Yes', '', '0000-00-00'),
(24, 'BLR0087', 'Gray Mattress Capital', 'GMCG', '', '', 0000, 'Yes', 'Class 3', 'PG', 'Mahesh', '9658665872', '', 'Karnataka,Banglore.', 'Banglore', 560037, 'Yes', '', '0000-00-00'),
(25, 'DEL0017', 'DPS', 'DPSG', '', '', 0000, 'YES', 'Class 1', 'HSC', 'Giri', '9867685482', '', 'Delhi.', 'Delhi', 110001, 'YES', '', '0000-00-00'),
(26, 'BLR0022', 'Shantiniketan High Sch', 'SHSG', '', '', 0000, 'YES', 'Class 10', 'HSC', 'Sateesh', '9562858586', '', 'Karnataka,Banglore.', 'Banglore', 560037, 'YES', '', '0000-00-00'),
(27, 'BLR0026', 'Goutham Model School', 'GMSG', '', '', 0000, 'YES', 'Class 10', 'HSC', 'Nishanth', '965865865', '', 'Karnataka,Banglore.', 'Banglore', 560037, 'YES', '', '0000-00-00'),
(28, 'HYD0098', 'pius', '', '', '', 0000, 'Yes', 'Class 1', 'HSC', '', '', '', '', '', 0, 'Yes', '', '0000-00-00'),
(29, 'HYD0097', 'abc', '', '', '', 0000, 'YES', 'Class 1', 'HSC', '', '', '', '', '', 0, 'YES', '', '0000-00-00'),
(30, 'HYD0119', 'bhashyam', '', '', '', 0000, 'YES', 'Class 1', 'HSC', '', '', '', '', '', 0, 'YES', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE IF NOT EXISTS `student_test` (
  `student_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(22) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `question_id` varchar(22) NOT NULL,
  `test_cat_name` varchar(22) NOT NULL,
  `student_name` varchar(22) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `response` varchar(22) NOT NULL,
  PRIMARY KEY (`student_test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=345 ;

--
-- Dumping data for table `student_test`
--

INSERT INTO `student_test` (`student_test_id`, `school_code`, `assessment_id`, `question_id`, `test_cat_name`, `student_name`, `roll_no`, `response`) VALUES
(87, 'HYD0016', 30, '1(i)', 'M3B1', 'S1', 0, '1'),
(88, 'HYD0016', 30, '1(ii)', 'M3B1', 'S1', 0, '0.5'),
(89, 'HYD0016', 30, '1(iii)', 'M3B1', 'S1', 0, '0'),
(90, 'HYD0016', 30, '2(i)', 'M3B1', 'S1', 0, '0'),
(91, 'HYD0016', 30, '2(ii)', 'M3B1', 'S1', 0, '0'),
(92, 'HYD0016', 30, '2(iii)', 'M3B1', 'S1', 0, '0'),
(93, 'HYD0016', 30, '3', 'M3B1', 'S1', 0, '0'),
(94, 'HYD0016', 30, '4', 'M3B1', 'S1', 0, '0'),
(95, 'HYD0016', 30, '5(i)', 'M3B1', 'S1', 0, '0'),
(96, 'HYD0016', 30, '5(ii)', 'M3B1', 'S1', 0, '0'),
(97, 'HYD0016', 30, '6', 'M3B1', 'S1', 0, '0'),
(98, 'HYD0016', 30, '7', 'M3B1', 'S1', 0, '0'),
(99, 'HYD0016', 30, '8(i)', 'M3B1', 'S1', 0, '0'),
(100, 'HYD0016', 30, '8(ii)', 'M3B1', 'S1', 0, '0'),
(101, 'HYD0016', 30, '9(i)', 'M3B1', 'S1', 0, '0'),
(102, 'HYD0016', 30, '9(ii)', 'M3B1', 'S1', 0, '0'),
(103, 'HYD0016', 30, '10', 'M3B1', 'S1', 0, '0'),
(104, 'HYD0016', 30, '11', 'M3B1', 'S1', 0, '0'),
(105, 'HYD0016', 30, '12', 'M3B1', 'S1', 0, '0'),
(106, 'HYD0016', 30, '13(i)', 'M3B1', 'S1', 0, '0'),
(107, 'HYD0016', 30, '13(ii)', 'M3B1', 'S1', 0, '0'),
(108, 'HYD0016', 30, '14(i)', 'M3B1', 'S1', 0, '0'),
(109, 'HYD0016', 30, '14(ii)', 'M3B1', 'S1', 0, '0'),
(110, 'HYD0016', 30, '15(i)', 'M3B1', 'S1', 0, '0'),
(111, 'HYD0016', 30, '15(ii)', 'M3B1', 'S1', 0, '0'),
(112, 'HYD0016', 30, '16(i)', 'M3B1', 'S1', 0, '0'),
(113, 'HYD0016', 30, '16(ii)', 'M3B1', 'S1', 0, '0'),
(114, 'HYD0016', 30, '17', 'M3B1', 'S1', 0, '0'),
(115, 'HYD0016', 30, '18', 'M3B1', 'S1', 0, '0'),
(116, 'HYD0016', 30, '19', 'M3B1', 'S1', 0, '0'),
(117, 'HYD0016', 30, '20', 'M3B1', 'S1', 0, '0'),
(118, 'HYD0016', 30, '21', 'M3B1', 'S1', 0, '0'),
(119, 'HYD0016', 30, '22', 'M3B1', 'S1', 0, '0'),
(120, 'HYD0016', 30, '23', 'M3B1', 'S1', 0, '0'),
(121, 'HYD0016', 30, '24(i)', 'M3B1', 'S1', 0, '0'),
(122, 'HYD0016', 30, '24(ii)', 'M3B1', 'S1', 0, '0'),
(123, 'HYD0016', 30, '25(i)', 'M3B1', 'S1', 0, '0'),
(124, 'HYD0016', 30, '25(ii)', 'M3B1', 'S1', 0, '0'),
(125, 'HYD0016', 30, '26', 'M3B1', 'S1', 0, '0'),
(126, 'HYD0016', 30, '27', 'M3B1', 'S1', 0, '0'),
(127, 'HYD0016', 30, '28', 'M3B1', 'S1', 0, '0'),
(128, 'HYD0016', 30, '29', 'M3B1', 'S1', 0, '0'),
(129, 'HYD0016', 30, '30', 'M3B1', 'S1', 0, '0'),
(130, 'HYD0016', 30, '1(i)', 'M3B1', 'D1', 0, '0'),
(131, 'HYD0016', 30, '1(ii)', 'M3B1', 'D1', 0, '1'),
(132, 'HYD0016', 30, '1(iii)', 'M3B1', 'D1', 0, '0'),
(133, 'HYD0016', 30, '2(i)', 'M3B1', 'D1', 0, '0'),
(134, 'HYD0016', 30, '2(ii)', 'M3B1', 'D1', 0, '0'),
(135, 'HYD0016', 30, '2(iii)', 'M3B1', 'D1', 0, '0'),
(136, 'HYD0016', 30, '3', 'M3B1', 'D1', 0, '0'),
(137, 'HYD0016', 30, '4', 'M3B1', 'D1', 0, '0'),
(138, 'HYD0016', 30, '5(i)', 'M3B1', 'D1', 0, '0'),
(139, 'HYD0016', 30, '5(ii)', 'M3B1', 'D1', 0, '0'),
(140, 'HYD0016', 30, '6', 'M3B1', 'D1', 0, '0'),
(141, 'HYD0016', 30, '7', 'M3B1', 'D1', 0, '0'),
(142, 'HYD0016', 30, '8(i)', 'M3B1', 'D1', 0, '0'),
(143, 'HYD0016', 30, '8(ii)', 'M3B1', 'D1', 0, '0'),
(144, 'HYD0016', 30, '9(i)', 'M3B1', 'D1', 0, '0'),
(145, 'HYD0016', 30, '9(ii)', 'M3B1', 'D1', 0, '0'),
(146, 'HYD0016', 30, '10', 'M3B1', 'D1', 0, '0'),
(147, 'HYD0016', 30, '11', 'M3B1', 'D1', 0, '0'),
(148, 'HYD0016', 30, '12', 'M3B1', 'D1', 0, '0'),
(149, 'HYD0016', 30, '13(i)', 'M3B1', 'D1', 0, '0'),
(150, 'HYD0016', 30, '13(ii)', 'M3B1', 'D1', 0, '0'),
(151, 'HYD0016', 30, '14(i)', 'M3B1', 'D1', 0, '0'),
(152, 'HYD0016', 30, '14(ii)', 'M3B1', 'D1', 0, '0'),
(153, 'HYD0016', 30, '15(i)', 'M3B1', 'D1', 0, '0'),
(154, 'HYD0016', 30, '15(ii)', 'M3B1', 'D1', 0, '0'),
(155, 'HYD0016', 30, '16(i)', 'M3B1', 'D1', 0, '0'),
(156, 'HYD0016', 30, '16(ii)', 'M3B1', 'D1', 0, '0'),
(157, 'HYD0016', 30, '17', 'M3B1', 'D1', 0, '0'),
(158, 'HYD0016', 30, '18', 'M3B1', 'D1', 0, '0'),
(159, 'HYD0016', 30, '19', 'M3B1', 'D1', 0, '0'),
(160, 'HYD0016', 30, '20', 'M3B1', 'D1', 0, '0'),
(161, 'HYD0016', 30, '21', 'M3B1', 'D1', 0, '0'),
(162, 'HYD0016', 30, '22', 'M3B1', 'D1', 0, '0'),
(163, 'HYD0016', 30, '23', 'M3B1', 'D1', 0, '0'),
(164, 'HYD0016', 30, '24(i)', 'M3B1', 'D1', 0, '0'),
(165, 'HYD0016', 30, '24(ii)', 'M3B1', 'D1', 0, '0'),
(166, 'HYD0016', 30, '25(i)', 'M3B1', 'D1', 0, '0'),
(167, 'HYD0016', 30, '25(ii)', 'M3B1', 'D1', 0, '0'),
(168, 'HYD0016', 30, '26', 'M3B1', 'D1', 0, '0'),
(169, 'HYD0016', 30, '27', 'M3B1', 'D1', 0, '0'),
(170, 'HYD0016', 30, '28', 'M3B1', 'D1', 0, '0'),
(171, 'HYD0016', 30, '29', 'M3B1', 'D1', 0, '0'),
(172, 'HYD0016', 30, '30', 'M3B1', 'D1', 0, '0'),
(173, 'HYD0003', 32, '1(i)', 'M3B1', 'a', 0, '1'),
(174, 'HYD0003', 32, '1(ii)', 'M3B1', 'a', 0, '0'),
(175, 'HYD0003', 32, '1(iii)', 'M3B1', 'a', 0, '0'),
(176, 'HYD0003', 32, '2(i)', 'M3B1', 'a', 0, '0'),
(177, 'HYD0003', 32, '2(ii)', 'M3B1', 'a', 0, '0'),
(178, 'HYD0003', 32, '2(iii)', 'M3B1', 'a', 0, '0'),
(179, 'HYD0003', 32, '3', 'M3B1', 'a', 0, '0'),
(180, 'HYD0003', 32, '4', 'M3B1', 'a', 0, '0'),
(181, 'HYD0003', 32, '5(i)', 'M3B1', 'a', 0, '0'),
(182, 'HYD0003', 32, '5(ii)', 'M3B1', 'a', 0, '0'),
(183, 'HYD0003', 32, '6', 'M3B1', 'a', 0, '0'),
(184, 'HYD0003', 32, '7', 'M3B1', 'a', 0, '0'),
(185, 'HYD0003', 32, '8(i)', 'M3B1', 'a', 0, '0'),
(186, 'HYD0003', 32, '8(ii)', 'M3B1', 'a', 0, '0'),
(187, 'HYD0003', 32, '9(i)', 'M3B1', 'a', 0, '0'),
(188, 'HYD0003', 32, '9(ii)', 'M3B1', 'a', 0, '0'),
(189, 'HYD0003', 32, '10', 'M3B1', 'a', 0, '0'),
(190, 'HYD0003', 32, '11', 'M3B1', 'a', 0, '0'),
(191, 'HYD0003', 32, '12', 'M3B1', 'a', 0, '0'),
(192, 'HYD0003', 32, '13(i)', 'M3B1', 'a', 0, '0'),
(193, 'HYD0003', 32, '13(ii)', 'M3B1', 'a', 0, '0'),
(194, 'HYD0003', 32, '14(i)', 'M3B1', 'a', 0, '0'),
(195, 'HYD0003', 32, '14(ii)', 'M3B1', 'a', 0, '0'),
(196, 'HYD0003', 32, '15(i)', 'M3B1', 'a', 0, '0'),
(197, 'HYD0003', 32, '15(ii)', 'M3B1', 'a', 0, '0'),
(198, 'HYD0003', 32, '16(i)', 'M3B1', 'a', 0, '0'),
(199, 'HYD0003', 32, '16(ii)', 'M3B1', 'a', 0, '0'),
(200, 'HYD0003', 32, '17', 'M3B1', 'a', 0, '0'),
(201, 'HYD0003', 32, '18', 'M3B1', 'a', 0, '0'),
(202, 'HYD0003', 32, '19', 'M3B1', 'a', 0, '0'),
(203, 'HYD0003', 32, '20', 'M3B1', 'a', 0, '0'),
(204, 'HYD0003', 32, '21', 'M3B1', 'a', 0, '0'),
(205, 'HYD0003', 32, '22', 'M3B1', 'a', 0, '0'),
(206, 'HYD0003', 32, '23', 'M3B1', 'a', 0, '0'),
(207, 'HYD0003', 32, '24(i)', 'M3B1', 'a', 0, '0'),
(208, 'HYD0003', 32, '24(ii)', 'M3B1', 'a', 0, '0'),
(209, 'HYD0003', 32, '25(i)', 'M3B1', 'a', 0, '0'),
(210, 'HYD0003', 32, '25(ii)', 'M3B1', 'a', 0, '0'),
(211, 'HYD0003', 32, '26', 'M3B1', 'a', 0, '0'),
(212, 'HYD0003', 32, '27', 'M3B1', 'a', 0, '0'),
(213, 'HYD0003', 32, '28', 'M3B1', 'a', 0, '0'),
(214, 'HYD0003', 32, '29', 'M3B1', 'a', 0, '0'),
(215, 'HYD0003', 32, '30', 'M3B1', 'a', 0, '0'),
(216, 'HYD0003', 32, '1(i)', 'M3B1', '', 0, '0'),
(217, 'HYD0003', 32, '1(ii)', 'M3B1', '', 0, '0'),
(218, 'HYD0003', 32, '1(iii)', 'M3B1', '', 0, '0'),
(219, 'HYD0003', 32, '2(i)', 'M3B1', '', 0, '0'),
(220, 'HYD0003', 32, '2(ii)', 'M3B1', '', 0, '0'),
(221, 'HYD0003', 32, '2(iii)', 'M3B1', '', 0, '0'),
(222, 'HYD0003', 32, '3', 'M3B1', '', 0, '0'),
(223, 'HYD0003', 32, '4', 'M3B1', '', 0, '0'),
(224, 'HYD0003', 32, '5(i)', 'M3B1', '', 0, '0'),
(225, 'HYD0003', 32, '5(ii)', 'M3B1', '', 0, '0'),
(226, 'HYD0003', 32, '6', 'M3B1', '', 0, '0'),
(227, 'HYD0003', 32, '7', 'M3B1', '', 0, '0'),
(228, 'HYD0003', 32, '8(i)', 'M3B1', '', 0, '0'),
(229, 'HYD0003', 32, '8(ii)', 'M3B1', '', 0, '0'),
(230, 'HYD0003', 32, '9(i)', 'M3B1', '', 0, '0'),
(231, 'HYD0003', 32, '9(ii)', 'M3B1', '', 0, '0'),
(232, 'HYD0003', 32, '10', 'M3B1', '', 0, '0'),
(233, 'HYD0003', 32, '11', 'M3B1', '', 0, '0'),
(234, 'HYD0003', 32, '12', 'M3B1', '', 0, '0'),
(235, 'HYD0003', 32, '13(i)', 'M3B1', '', 0, '0'),
(236, 'HYD0003', 32, '13(ii)', 'M3B1', '', 0, '0'),
(237, 'HYD0003', 32, '14(i)', 'M3B1', '', 0, '0'),
(238, 'HYD0003', 32, '14(ii)', 'M3B1', '', 0, '0'),
(239, 'HYD0003', 32, '15(i)', 'M3B1', '', 0, '0'),
(240, 'HYD0003', 32, '15(ii)', 'M3B1', '', 0, '0'),
(241, 'HYD0003', 32, '16(i)', 'M3B1', '', 0, '0'),
(242, 'HYD0003', 32, '16(ii)', 'M3B1', '', 0, '0'),
(243, 'HYD0003', 32, '17', 'M3B1', '', 0, '0'),
(244, 'HYD0003', 32, '18', 'M3B1', '', 0, '0'),
(245, 'HYD0003', 32, '19', 'M3B1', '', 0, '0'),
(246, 'HYD0003', 32, '20', 'M3B1', '', 0, '0'),
(247, 'HYD0003', 32, '21', 'M3B1', '', 0, '0'),
(248, 'HYD0003', 32, '22', 'M3B1', '', 0, '0'),
(249, 'HYD0003', 32, '23', 'M3B1', '', 0, '0'),
(250, 'HYD0003', 32, '24(i)', 'M3B1', '', 0, '0'),
(251, 'HYD0003', 32, '24(ii)', 'M3B1', '', 0, '0'),
(252, 'HYD0003', 32, '25(i)', 'M3B1', '', 0, '0'),
(253, 'HYD0003', 32, '25(ii)', 'M3B1', '', 0, '0'),
(254, 'HYD0003', 32, '26', 'M3B1', '', 0, '0'),
(255, 'HYD0003', 32, '27', 'M3B1', '', 0, '0'),
(256, 'HYD0003', 32, '28', 'M3B1', '', 0, '0'),
(257, 'HYD0003', 32, '29', 'M3B1', '', 0, '0'),
(258, 'HYD0003', 32, '30', 'M3B1', '', 0, '0'),
(259, 'HYD0002', 31, '1(i)', 'M3B1', '', 0, '0'),
(260, 'HYD0002', 31, '1(ii)', 'M3B1', '', 0, '0.5'),
(261, 'HYD0002', 31, '1(iii)', 'M3B1', '', 0, '0'),
(262, 'HYD0002', 31, '2(i)', 'M3B1', '', 0, '0'),
(263, 'HYD0002', 31, '2(ii)', 'M3B1', '', 0, '0'),
(264, 'HYD0002', 31, '2(iii)', 'M3B1', '', 0, '0'),
(265, 'HYD0002', 31, '3', 'M3B1', '', 0, '0'),
(266, 'HYD0002', 31, '4', 'M3B1', '', 0, '0'),
(267, 'HYD0002', 31, '5(i)', 'M3B1', '', 0, '0'),
(268, 'HYD0002', 31, '5(ii)', 'M3B1', '', 0, '0'),
(269, 'HYD0002', 31, '6', 'M3B1', '', 0, '0'),
(270, 'HYD0002', 31, '7', 'M3B1', '', 0, '0'),
(271, 'HYD0002', 31, '8(i)', 'M3B1', '', 0, '0'),
(272, 'HYD0002', 31, '8(ii)', 'M3B1', '', 0, '0'),
(273, 'HYD0002', 31, '9(i)', 'M3B1', '', 0, '0'),
(274, 'HYD0002', 31, '9(ii)', 'M3B1', '', 0, '0'),
(275, 'HYD0002', 31, '10', 'M3B1', '', 0, '0'),
(276, 'HYD0002', 31, '11', 'M3B1', '', 0, '0'),
(277, 'HYD0002', 31, '12', 'M3B1', '', 0, '0'),
(278, 'HYD0002', 31, '13(i)', 'M3B1', '', 0, '0'),
(279, 'HYD0002', 31, '13(ii)', 'M3B1', '', 0, '0'),
(280, 'HYD0002', 31, '14(i)', 'M3B1', '', 0, '0'),
(281, 'HYD0002', 31, '14(ii)', 'M3B1', '', 0, '0'),
(282, 'HYD0002', 31, '15(i)', 'M3B1', '', 0, '0'),
(283, 'HYD0002', 31, '15(ii)', 'M3B1', '', 0, '0'),
(284, 'HYD0002', 31, '16(i)', 'M3B1', '', 0, '0'),
(285, 'HYD0002', 31, '16(ii)', 'M3B1', '', 0, '0'),
(286, 'HYD0002', 31, '17', 'M3B1', '', 0, '0'),
(287, 'HYD0002', 31, '18', 'M3B1', '', 0, '0'),
(288, 'HYD0002', 31, '19', 'M3B1', '', 0, '0'),
(289, 'HYD0002', 31, '20', 'M3B1', '', 0, '0'),
(290, 'HYD0002', 31, '21', 'M3B1', '', 0, '0'),
(291, 'HYD0002', 31, '22', 'M3B1', '', 0, '0'),
(292, 'HYD0002', 31, '23', 'M3B1', '', 0, '0'),
(293, 'HYD0002', 31, '24(i)', 'M3B1', '', 0, '0'),
(294, 'HYD0002', 31, '24(ii)', 'M3B1', '', 0, '0'),
(295, 'HYD0002', 31, '25(i)', 'M3B1', '', 0, '0'),
(296, 'HYD0002', 31, '25(ii)', 'M3B1', '', 0, '0'),
(297, 'HYD0002', 31, '26', 'M3B1', '', 0, '0'),
(298, 'HYD0002', 31, '27', 'M3B1', '', 0, '0'),
(299, 'HYD0002', 31, '28', 'M3B1', '', 0, '0'),
(300, 'HYD0002', 31, '29', 'M3B1', '', 0, '0'),
(301, 'HYD0002', 31, '30', 'M3B1', '', 0, '0'),
(302, 'HYD0002', 31, '1(i)', 'M3B1', '', 0, '0'),
(303, 'HYD0002', 31, '1(ii)', 'M3B1', '', 0, '0.5'),
(304, 'HYD0002', 31, '1(iii)', 'M3B1', '', 0, '0'),
(305, 'HYD0002', 31, '2(i)', 'M3B1', '', 0, '0'),
(306, 'HYD0002', 31, '2(ii)', 'M3B1', '', 0, '0'),
(307, 'HYD0002', 31, '2(iii)', 'M3B1', '', 0, '0'),
(308, 'HYD0002', 31, '3', 'M3B1', '', 0, '0'),
(309, 'HYD0002', 31, '4', 'M3B1', '', 0, '0'),
(310, 'HYD0002', 31, '5(i)', 'M3B1', '', 0, '0'),
(311, 'HYD0002', 31, '5(ii)', 'M3B1', '', 0, '0'),
(312, 'HYD0002', 31, '6', 'M3B1', '', 0, '0'),
(313, 'HYD0002', 31, '7', 'M3B1', '', 0, '0'),
(314, 'HYD0002', 31, '8(i)', 'M3B1', '', 0, '0'),
(315, 'HYD0002', 31, '8(ii)', 'M3B1', '', 0, '0'),
(316, 'HYD0002', 31, '9(i)', 'M3B1', '', 0, '0'),
(317, 'HYD0002', 31, '9(ii)', 'M3B1', '', 0, '0'),
(318, 'HYD0002', 31, '10', 'M3B1', '', 0, '0'),
(319, 'HYD0002', 31, '11', 'M3B1', '', 0, '0'),
(320, 'HYD0002', 31, '12', 'M3B1', '', 0, '0'),
(321, 'HYD0002', 31, '13(i)', 'M3B1', '', 0, '0'),
(322, 'HYD0002', 31, '13(ii)', 'M3B1', '', 0, '0'),
(323, 'HYD0002', 31, '14(i)', 'M3B1', '', 0, '0'),
(324, 'HYD0002', 31, '14(ii)', 'M3B1', '', 0, '0'),
(325, 'HYD0002', 31, '15(i)', 'M3B1', '', 0, '0'),
(326, 'HYD0002', 31, '15(ii)', 'M3B1', '', 0, '0'),
(327, 'HYD0002', 31, '16(i)', 'M3B1', '', 0, '0'),
(328, 'HYD0002', 31, '16(ii)', 'M3B1', '', 0, '0'),
(329, 'HYD0002', 31, '17', 'M3B1', '', 0, '0'),
(330, 'HYD0002', 31, '18', 'M3B1', '', 0, '0'),
(331, 'HYD0002', 31, '19', 'M3B1', '', 0, '0'),
(332, 'HYD0002', 31, '20', 'M3B1', '', 0, '0'),
(333, 'HYD0002', 31, '21', 'M3B1', '', 0, '0'),
(334, 'HYD0002', 31, '22', 'M3B1', '', 0, '0'),
(335, 'HYD0002', 31, '23', 'M3B1', '', 0, '0'),
(336, 'HYD0002', 31, '24(i)', 'M3B1', '', 0, '0'),
(337, 'HYD0002', 31, '24(ii)', 'M3B1', '', 0, '0'),
(338, 'HYD0002', 31, '25(i)', 'M3B1', '', 0, '0'),
(339, 'HYD0002', 31, '25(ii)', 'M3B1', '', 0, '0'),
(340, 'HYD0002', 31, '26', 'M3B1', '', 0, '0'),
(341, 'HYD0002', 31, '27', 'M3B1', '', 0, '0'),
(342, 'HYD0002', 31, '28', 'M3B1', '', 0, '0'),
(343, 'HYD0002', 31, '29', 'M3B1', '', 0, '0'),
(344, 'HYD0002', 31, '30', 'M3B1', '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `academic_year` year(4) NOT NULL,
  `teacher_name` varchar(20) NOT NULL,
  `fulltime_parttime` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `teacher_training` varchar(10) NOT NULL,
  `teaching_exp_years` int(11) NOT NULL,
  `years_in_current_school` int(11) NOT NULL,
  `class_segment_taught` varchar(10) NOT NULL,
  `subject_taught` varchar(20) NOT NULL,
  `specific_subject` varchar(20) NOT NULL,
  `monthly_salary` float NOT NULL,
  `year` int(4) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `assessment_id`, `school_code`, `academic_year`, `teacher_name`, `fulltime_parttime`, `gender`, `age`, `qualification`, `teacher_training`, `teaching_exp_years`, `years_in_current_school`, `class_segment_taught`, `subject_taught`, `specific_subject`, `monthly_salary`, `year`, `designation`, `update_user`, `update_date`) VALUES
(1, 31, 'HYD0002', 0000, 'aa1', 'Full time', 'Male', 55, 'PG', 'M.Ed', 4, 0, 'S', '3', 'YES', 12000, 2013, 'principle', 'admin', '2013-03-04 16:15:52'),
(2, 31, 'HYD0002', 0000, 'aa2', 'Part time', 'Female', 33, 'PG', 'M.Ed', 4, 4, 'S', '3', 'YES', 1222, 1995, 'vise pricipal', 'admin', '2013-03-04 16:16:51'),
(3, 31, 'HYD0002', 0000, 'aa3', 'Full time', 'Male', 35, 'HSC', 'M.Ed', 3, 3, 'PP', '5', 'YES', 1200, 2013, 'hod', 'admin', '2013-03-11 14:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_survey`
--

CREATE TABLE IF NOT EXISTS `teacher_survey` (
  `teacher_survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(22) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `survey_cat_id` int(11) NOT NULL,
  `survey_cat_name` varchar(20) NOT NULL,
  `survey_type` varchar(20) NOT NULL,
  `survey_sub_cat_id` int(11) NOT NULL,
  `survay_sub_cat_name` varchar(20) NOT NULL,
  `survey_sub_cat_type` varchar(20) NOT NULL,
  `sl_response` int(11) DEFAULT NULL,
  `teacher_code_name` varchar(55) NOT NULL,
  `teacher_response` int(11) DEFAULT NULL,
  PRIMARY KEY (`teacher_survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1560 ;

--
-- Dumping data for table `teacher_survey`
--

INSERT INTO `teacher_survey` (`teacher_survey_id`, `school_code`, `assessment_id`, `survey_cat_id`, `survey_cat_name`, `survey_type`, `survey_sub_cat_id`, `survay_sub_cat_name`, `survey_sub_cat_type`, `sl_response`, `teacher_code_name`, `teacher_response`) VALUES
(1344, 'HYD0016', 30, 7, '', 'teacher', 55, '', '', 0, 'T1', 0),
(1345, 'HYD0016', 30, 7, '', 'teacher', 56, '', '', 0, 'T1', 0),
(1346, 'HYD0016', 30, 7, '', 'teacher', 57, '', '', 1, 'T1', 2),
(1347, 'HYD0016', 30, 8, '', 'teacher', 58, '', '', 0, 'T1', NULL),
(1348, 'HYD0016', 30, 8, '', 'teacher', 59, '', '', 1, 'T1', 0),
(1349, 'HYD0016', 30, 8, '', 'teacher', 60, '', '', 0, 'T1', 0),
(1350, 'HYD0016', 30, 8, '', 'teacher', 61, '', '', 1, 'T1', 0),
(1351, 'HYD0016', 30, 8, '', 'teacher', 62, '', '', 1, 'T1', 0),
(1352, 'HYD0016', 30, 8, '', 'teacher', 63, '', '', 1, 'T1', 1),
(1353, 'HYD0016', 30, 8, '', 'teacher', 64, '', '', 0, 'T1', 1),
(1354, 'HYD0016', 30, 8, '', 'teacher', 65, '', '', 0, 'T1', 1),
(1355, 'HYD0016', 30, 8, '', 'teacher', 66, '', '', 0, 'T1', 0),
(1356, 'HYD0016', 30, 8, '', 'teacher', 67, '', '', 0, 'T1', 1),
(1357, 'HYD0016', 30, 8, '', 'teacher', 68, '', '', 0, 'T1', 0),
(1358, 'HYD0016', 30, 9, '', 'teacher', 69, '', '', 1, 'T1', 0),
(1359, 'HYD0016', 30, 9, '', 'teacher', 70, '', '', 0, 'T1', 0),
(1360, 'HYD0016', 30, 9, '', 'teacher', 74, '', '', 0, 'T1', NULL),
(1361, 'HYD0016', 30, 9, '', 'teacher', 75, '', '', 0, 'T1', 0),
(1362, 'HYD0016', 30, 9, '', 'teacher', 76, '', '', 0, 'T1', 1),
(1363, 'HYD0016', 30, 9, '', 'teacher', 77, '', '', 0, 'T1', 1),
(1364, 'HYD0016', 30, 9, '', 'teacher', 78, '', '', 0, 'T1', 1),
(1365, 'HYD0016', 30, 9, '', 'teacher', 79, '', '', 0, 'T1', 0),
(1366, 'HYD0016', 30, 10, '', 'teacher', 80, '', '', 0, 'T1', 0),
(1367, 'HYD0016', 30, 10, '', 'teacher', 81, '', '', 0, 'T1', 0),
(1368, 'HYD0016', 30, 10, '', 'teacher', 82, '', '', 0, 'T1', 0),
(1369, 'HYD0016', 30, 10, '', 'teacher', 83, '', '', 1, 'T1', 0),
(1370, 'HYD0016', 30, 11, '', 'teacher', 84, '', '', 0, 'T1', 2),
(1371, 'HYD0016', 30, 11, '', 'teacher', 85, '', '', 0, 'T1', 2),
(1372, 'HYD0016', 30, 11, '', 'teacher', 86, '', '', 0, 'T1', NULL),
(1373, 'HYD0016', 30, 11, '', 'teacher', 87, '', '', 0, 'T1', 2),
(1374, 'HYD0016', 30, 11, '', 'teacher', 88, '', '', 0, 'T1', 0),
(1375, 'HYD0016', 30, 11, '', 'teacher', 89, '', '', 0, 'T1', 0),
(1376, 'HYD0016', 30, 11, '', 'teacher', 90, '', '', 1, 'T1', 0),
(1377, 'HYD0016', 30, 11, '', 'teacher', 91, '', '', 2, 'T1', 2),
(1378, 'HYD0016', 30, 11, '', 'teacher', 92, '', '', 0, 'T1', NULL),
(1379, 'HYD0016', 30, 11, '', 'teacher', 93, '', '', 2, 'T1', 2),
(1380, 'HYD0016', 30, 11, '', 'teacher', 94, '', '', 2, 'T1', 0),
(1381, 'HYD0016', 30, 12, '', 'teacher', 95, '', '', 0, 'T1', NULL),
(1382, 'HYD0016', 30, 12, '', 'teacher', 96, '', '', 0, 'T1', 0),
(1383, 'HYD0016', 30, 12, '', 'teacher', 97, '', '', 0, 'T1', 0),
(1384, 'HYD0016', 30, 12, '', 'teacher', 98, '', '', 0, 'T1', 0),
(1385, 'HYD0016', 30, 12, '', 'teacher', 99, '', '', 0, 'T1', 0),
(1386, 'HYD0016', 30, 12, '', 'teacher', 100, '', '', 0, 'T1', 0),
(1387, 'HYD0016', 30, 12, '', 'teacher', 101, '', '', 0, 'T1', 0),
(1388, 'HYD0016', 30, 13, '', 'teacher', 102, '', '', 0, 'T1', 0),
(1389, 'HYD0016', 30, 13, '', 'teacher', 103, '', '', 0, 'T1', 0),
(1390, 'HYD0016', 30, 13, '', 'teacher', 104, '', '', 0, 'T1', 0),
(1391, 'HYD0016', 30, 13, '', 'teacher', 105, '', '', 0, 'T1', 0),
(1392, 'HYD0016', 30, 13, '', 'teacher', 106, '', '', 0, 'T1', 0),
(1393, 'HYD0016', 30, 13, '', 'teacher', 107, '', '', 0, 'T1', 0),
(1394, 'HYD0016', 30, 13, '', 'teacher', 108, '', '', 0, 'T1', 0),
(1395, 'HYD0016', 30, 14, '', 'teacher', 109, '', '', 0, 'T1', 0),
(1396, 'HYD0016', 30, 14, '', 'teacher', 110, '', '', 0, 'T1', 0),
(1397, 'HYD0016', 30, 14, '', 'teacher', 111, '', '', 0, 'T1', 0),
(1398, 'HYD0016', 30, 7, '', 'teacher', 55, '', '', 2, 'T2', 0),
(1399, 'HYD0016', 30, 7, '', 'teacher', 56, '', '', 1, 'T2', 0),
(1400, 'HYD0016', 30, 7, '', 'teacher', 57, '', '', 0, 'T2', 1),
(1401, 'HYD0016', 30, 8, '', 'teacher', 58, '', '', 0, 'T2', NULL),
(1402, 'HYD0016', 30, 8, '', 'teacher', 59, '', '', 1, 'T2', 0),
(1403, 'HYD0016', 30, 8, '', 'teacher', 60, '', '', 0, 'T2', 2),
(1404, 'HYD0016', 30, 8, '', 'teacher', 61, '', '', 0, 'T2', 1),
(1405, 'HYD0016', 30, 8, '', 'teacher', 62, '', '', 1, 'T2', 0),
(1406, 'HYD0016', 30, 8, '', 'teacher', 63, '', '', 0, 'T2', 1),
(1407, 'HYD0016', 30, 8, '', 'teacher', 64, '', '', 0, 'T2', 0),
(1408, 'HYD0016', 30, 8, '', 'teacher', 65, '', '', 0, 'T2', 0),
(1409, 'HYD0016', 30, 8, '', 'teacher', 66, '', '', 1, 'T2', 0),
(1410, 'HYD0016', 30, 8, '', 'teacher', 67, '', '', 1, 'T2', 0),
(1411, 'HYD0016', 30, 8, '', 'teacher', 68, '', '', 0, 'T2', 0),
(1412, 'HYD0016', 30, 9, '', 'teacher', 69, '', '', 1, 'T2', 0),
(1413, 'HYD0016', 30, 9, '', 'teacher', 70, '', '', 0, 'T2', 0),
(1414, 'HYD0016', 30, 9, '', 'teacher', 74, '', '', 0, 'T2', NULL),
(1415, 'HYD0016', 30, 9, '', 'teacher', 75, '', '', 0, 'T2', 0),
(1416, 'HYD0016', 30, 9, '', 'teacher', 76, '', '', 1, 'T2', 0),
(1417, 'HYD0016', 30, 9, '', 'teacher', 77, '', '', 0, 'T2', 0),
(1418, 'HYD0016', 30, 9, '', 'teacher', 78, '', '', 0, 'T2', 0),
(1419, 'HYD0016', 30, 9, '', 'teacher', 79, '', '', 0, 'T2', 1),
(1420, 'HYD0016', 30, 10, '', 'teacher', 80, '', '', 0, 'T2', 0),
(1421, 'HYD0016', 30, 10, '', 'teacher', 81, '', '', 0, 'T2', 1),
(1422, 'HYD0016', 30, 10, '', 'teacher', 82, '', '', 1, 'T2', 0),
(1423, 'HYD0016', 30, 10, '', 'teacher', 83, '', '', 0, 'T2', 0),
(1424, 'HYD0016', 30, 11, '', 'teacher', 84, '', '', 0, 'T2', 0),
(1425, 'HYD0016', 30, 11, '', 'teacher', 85, '', '', 1, 'T2', 0),
(1426, 'HYD0016', 30, 11, '', 'teacher', 86, '', '', 1, 'T2', NULL),
(1427, 'HYD0016', 30, 11, '', 'teacher', 87, '', '', 0, 'T2', 0),
(1428, 'HYD0016', 30, 11, '', 'teacher', 88, '', '', 1, 'T2', 0),
(1429, 'HYD0016', 30, 11, '', 'teacher', 89, '', '', 0, 'T2', 0),
(1430, 'HYD0016', 30, 11, '', 'teacher', 90, '', '', 0, 'T2', 0),
(1431, 'HYD0016', 30, 11, '', 'teacher', 91, '', '', 1, 'T2', 0),
(1432, 'HYD0016', 30, 11, '', 'teacher', 92, '', '', 0, 'T2', NULL),
(1433, 'HYD0016', 30, 11, '', 'teacher', 93, '', '', 0, 'T2', 0),
(1434, 'HYD0016', 30, 11, '', 'teacher', 94, '', '', 0, 'T2', 0),
(1435, 'HYD0016', 30, 12, '', 'teacher', 95, '', '', 0, 'T2', NULL),
(1436, 'HYD0016', 30, 12, '', 'teacher', 96, '', '', 0, 'T2', 1),
(1437, 'HYD0016', 30, 12, '', 'teacher', 97, '', '', 0, 'T2', 0),
(1438, 'HYD0016', 30, 12, '', 'teacher', 98, '', '', 1, 'T2', 0),
(1439, 'HYD0016', 30, 12, '', 'teacher', 99, '', '', 0, 'T2', 0),
(1440, 'HYD0016', 30, 12, '', 'teacher', 100, '', '', 1, 'T2', 0),
(1441, 'HYD0016', 30, 12, '', 'teacher', 101, '', '', 0, 'T2', 1),
(1442, 'HYD0016', 30, 13, '', 'teacher', 102, '', '', 0, 'T2', 0),
(1443, 'HYD0016', 30, 13, '', 'teacher', 103, '', '', 0, 'T2', 0),
(1444, 'HYD0016', 30, 13, '', 'teacher', 104, '', '', 1, 'T2', 0),
(1445, 'HYD0016', 30, 13, '', 'teacher', 105, '', '', 0, 'T2', 0),
(1446, 'HYD0016', 30, 13, '', 'teacher', 106, '', '', 1, 'T2', 0),
(1447, 'HYD0016', 30, 13, '', 'teacher', 107, '', '', 0, 'T2', 1),
(1448, 'HYD0016', 30, 13, '', 'teacher', 108, '', '', 2, 'T2', 0),
(1449, 'HYD0016', 30, 14, '', 'teacher', 109, '', '', 1, 'T2', 1),
(1450, 'HYD0016', 30, 14, '', 'teacher', 110, '', '', 1, 'T2', 0),
(1451, 'HYD0016', 30, 14, '', 'teacher', 111, '', '', 0, 'T2', 0),
(1452, 'HYD0002', 31, 7, '', 'teacher', 55, '', '', 1, 'T1', 1),
(1453, 'HYD0002', 31, 7, '', 'teacher', 56, '', '', 1, 'T1', 2),
(1454, 'HYD0002', 31, 7, '', 'teacher', 57, '', '', 2, 'T1', 0),
(1455, 'HYD0002', 31, 8, '', 'teacher', 58, '', '', 0, 'T1', 0),
(1456, 'HYD0002', 31, 8, '', 'teacher', 59, '', '', 0, 'T1', 0),
(1457, 'HYD0002', 31, 8, '', 'teacher', 60, '', '', 0, 'T1', 0),
(1458, 'HYD0002', 31, 8, '', 'teacher', 61, '', '', 0, 'T1', 0),
(1459, 'HYD0002', 31, 8, '', 'teacher', 62, '', '', 0, 'T1', 0),
(1460, 'HYD0002', 31, 8, '', 'teacher', 63, '', '', 0, 'T1', 0),
(1461, 'HYD0002', 31, 8, '', 'teacher', 64, '', '', 0, 'T1', 0),
(1462, 'HYD0002', 31, 8, '', 'teacher', 65, '', '', 0, 'T1', 0),
(1463, 'HYD0002', 31, 8, '', 'teacher', 66, '', '', 0, 'T1', 0),
(1464, 'HYD0002', 31, 8, '', 'teacher', 67, '', '', 0, 'T1', 0),
(1465, 'HYD0002', 31, 8, '', 'teacher', 68, '', '', 0, 'T1', 0),
(1466, 'HYD0002', 31, 9, '', 'teacher', 69, '', '', 0, 'T1', 0),
(1467, 'HYD0002', 31, 9, '', 'teacher', 70, '', '', 0, 'T1', 0),
(1468, 'HYD0002', 31, 9, '', 'teacher', 74, '', '', 0, 'T1', 0),
(1469, 'HYD0002', 31, 9, '', 'teacher', 75, '', '', 0, 'T1', 0),
(1470, 'HYD0002', 31, 9, '', 'teacher', 76, '', '', 0, 'T1', 0),
(1471, 'HYD0002', 31, 9, '', 'teacher', 77, '', '', 0, 'T1', 0),
(1472, 'HYD0002', 31, 9, '', 'teacher', 78, '', '', 0, 'T1', 0),
(1473, 'HYD0002', 31, 9, '', 'teacher', 79, '', '', 0, 'T1', 0),
(1474, 'HYD0002', 31, 10, '', 'teacher', 80, '', '', 0, 'T1', 0),
(1475, 'HYD0002', 31, 10, '', 'teacher', 81, '', '', 0, 'T1', 0),
(1476, 'HYD0002', 31, 10, '', 'teacher', 82, '', '', 0, 'T1', 0),
(1477, 'HYD0002', 31, 10, '', 'teacher', 83, '', '', 0, 'T1', 0),
(1478, 'HYD0002', 31, 11, '', 'teacher', 84, '', '', 0, 'T1', 0),
(1479, 'HYD0002', 31, 11, '', 'teacher', 85, '', '', 0, 'T1', 0),
(1480, 'HYD0002', 31, 11, '', 'teacher', 86, '', '', 0, 'T1', 0),
(1481, 'HYD0002', 31, 11, '', 'teacher', 87, '', '', 0, 'T1', 0),
(1482, 'HYD0002', 31, 11, '', 'teacher', 88, '', '', 0, 'T1', 0),
(1483, 'HYD0002', 31, 11, '', 'teacher', 89, '', '', 0, 'T1', 0),
(1484, 'HYD0002', 31, 11, '', 'teacher', 90, '', '', 0, 'T1', 0),
(1485, 'HYD0002', 31, 11, '', 'teacher', 91, '', '', 0, 'T1', 0),
(1486, 'HYD0002', 31, 11, '', 'teacher', 92, '', '', 0, 'T1', 0),
(1487, 'HYD0002', 31, 11, '', 'teacher', 93, '', '', 0, 'T1', 0),
(1488, 'HYD0002', 31, 11, '', 'teacher', 94, '', '', 0, 'T1', 0),
(1489, 'HYD0002', 31, 12, '', 'teacher', 95, '', '', 0, 'T1', 0),
(1490, 'HYD0002', 31, 12, '', 'teacher', 96, '', '', 0, 'T1', 0),
(1491, 'HYD0002', 31, 12, '', 'teacher', 97, '', '', 0, 'T1', 0),
(1492, 'HYD0002', 31, 12, '', 'teacher', 98, '', '', 0, 'T1', 0),
(1493, 'HYD0002', 31, 12, '', 'teacher', 99, '', '', 0, 'T1', 0),
(1494, 'HYD0002', 31, 12, '', 'teacher', 100, '', '', 0, 'T1', 0),
(1495, 'HYD0002', 31, 12, '', 'teacher', 101, '', '', 0, 'T1', 0),
(1496, 'HYD0002', 31, 13, '', 'teacher', 102, '', '', 0, 'T1', 0),
(1497, 'HYD0002', 31, 13, '', 'teacher', 103, '', '', 0, 'T1', 0),
(1498, 'HYD0002', 31, 13, '', 'teacher', 104, '', '', 0, 'T1', 0),
(1499, 'HYD0002', 31, 13, '', 'teacher', 105, '', '', 0, 'T1', 0),
(1500, 'HYD0002', 31, 13, '', 'teacher', 106, '', '', 0, 'T1', 0),
(1501, 'HYD0002', 31, 13, '', 'teacher', 107, '', '', 0, 'T1', 0),
(1502, 'HYD0002', 31, 13, '', 'teacher', 108, '', '', 0, 'T1', 0),
(1503, 'HYD0002', 31, 14, '', 'teacher', 109, '', '', 0, 'T1', 0),
(1504, 'HYD0002', 31, 14, '', 'teacher', 110, '', '', 0, 'T1', 0),
(1505, 'HYD0002', 31, 14, '', 'teacher', 111, '', '', 0, 'T1', 0),
(1506, 'HYD0003', 32, 7, '', 'teacher', 55, '', '', 0, 'T1', 0),
(1507, 'HYD0003', 32, 7, '', 'teacher', 56, '', '', 0, 'T1', 0),
(1508, 'HYD0003', 32, 7, '', 'teacher', 57, '', '', 0, 'T1', 0),
(1509, 'HYD0003', 32, 8, '', 'teacher', 58, '', '', 0, 'T1', 0),
(1510, 'HYD0003', 32, 8, '', 'teacher', 59, '', '', 0, 'T1', 0),
(1511, 'HYD0003', 32, 8, '', 'teacher', 60, '', '', 0, 'T1', 0),
(1512, 'HYD0003', 32, 8, '', 'teacher', 61, '', '', 0, 'T1', 0),
(1513, 'HYD0003', 32, 8, '', 'teacher', 62, '', '', 0, 'T1', 0),
(1514, 'HYD0003', 32, 8, '', 'teacher', 63, '', '', 0, 'T1', 0),
(1515, 'HYD0003', 32, 8, '', 'teacher', 64, '', '', 0, 'T1', 0),
(1516, 'HYD0003', 32, 8, '', 'teacher', 65, '', '', 0, 'T1', 0),
(1517, 'HYD0003', 32, 8, '', 'teacher', 66, '', '', 0, 'T1', 0),
(1518, 'HYD0003', 32, 8, '', 'teacher', 67, '', '', 0, 'T1', 0),
(1519, 'HYD0003', 32, 8, '', 'teacher', 68, '', '', 0, 'T1', 0),
(1520, 'HYD0003', 32, 9, '', 'teacher', 69, '', '', 0, 'T1', 0),
(1521, 'HYD0003', 32, 9, '', 'teacher', 70, '', '', 0, 'T1', 0),
(1522, 'HYD0003', 32, 9, '', 'teacher', 74, '', '', 0, 'T1', 0),
(1523, 'HYD0003', 32, 9, '', 'teacher', 75, '', '', 0, 'T1', 0),
(1524, 'HYD0003', 32, 9, '', 'teacher', 76, '', '', 0, 'T1', 0),
(1525, 'HYD0003', 32, 9, '', 'teacher', 77, '', '', 0, 'T1', 0),
(1526, 'HYD0003', 32, 9, '', 'teacher', 78, '', '', 0, 'T1', 0),
(1527, 'HYD0003', 32, 9, '', 'teacher', 79, '', '', 0, 'T1', 0),
(1528, 'HYD0003', 32, 10, '', 'teacher', 80, '', '', 0, 'T1', 0),
(1529, 'HYD0003', 32, 10, '', 'teacher', 81, '', '', 0, 'T1', 0),
(1530, 'HYD0003', 32, 10, '', 'teacher', 82, '', '', 0, 'T1', 0),
(1531, 'HYD0003', 32, 10, '', 'teacher', 83, '', '', 0, 'T1', 0),
(1532, 'HYD0003', 32, 11, '', 'teacher', 84, '', '', 0, 'T1', 0),
(1533, 'HYD0003', 32, 11, '', 'teacher', 85, '', '', 0, 'T1', 0),
(1534, 'HYD0003', 32, 11, '', 'teacher', 86, '', '', 0, 'T1', 0),
(1535, 'HYD0003', 32, 11, '', 'teacher', 87, '', '', 0, 'T1', 0),
(1536, 'HYD0003', 32, 11, '', 'teacher', 88, '', '', 0, 'T1', 0),
(1537, 'HYD0003', 32, 11, '', 'teacher', 89, '', '', 0, 'T1', 0),
(1538, 'HYD0003', 32, 11, '', 'teacher', 90, '', '', 0, 'T1', 0),
(1539, 'HYD0003', 32, 11, '', 'teacher', 91, '', '', 0, 'T1', 0),
(1540, 'HYD0003', 32, 11, '', 'teacher', 92, '', '', 0, 'T1', 0),
(1541, 'HYD0003', 32, 11, '', 'teacher', 93, '', '', 0, 'T1', 0),
(1542, 'HYD0003', 32, 11, '', 'teacher', 94, '', '', 0, 'T1', 0),
(1543, 'HYD0003', 32, 12, '', 'teacher', 95, '', '', 0, 'T1', 0),
(1544, 'HYD0003', 32, 12, '', 'teacher', 96, '', '', 0, 'T1', 0),
(1545, 'HYD0003', 32, 12, '', 'teacher', 97, '', '', 0, 'T1', 0),
(1546, 'HYD0003', 32, 12, '', 'teacher', 98, '', '', 0, 'T1', 0),
(1547, 'HYD0003', 32, 12, '', 'teacher', 99, '', '', 0, 'T1', 0),
(1548, 'HYD0003', 32, 12, '', 'teacher', 100, '', '', 0, 'T1', 0),
(1549, 'HYD0003', 32, 12, '', 'teacher', 101, '', '', 0, 'T1', 0),
(1550, 'HYD0003', 32, 13, '', 'teacher', 102, '', '', 0, 'T1', 0),
(1551, 'HYD0003', 32, 13, '', 'teacher', 103, '', '', 0, 'T1', 0),
(1552, 'HYD0003', 32, 13, '', 'teacher', 104, '', '', 0, 'T1', 0),
(1553, 'HYD0003', 32, 13, '', 'teacher', 105, '', '', 0, 'T1', 0),
(1554, 'HYD0003', 32, 13, '', 'teacher', 106, '', '', 0, 'T1', 0),
(1555, 'HYD0003', 32, 13, '', 'teacher', 107, '', '', 0, 'T1', 0),
(1556, 'HYD0003', 32, 13, '', 'teacher', 108, '', '', 0, 'T1', 0),
(1557, 'HYD0003', 32, 14, '', 'teacher', 109, '', '', 0, 'T1', 0),
(1558, 'HYD0003', 32, 14, '', 'teacher', 110, '', '', 0, 'T1', 0),
(1559, 'HYD0003', 32, 14, '', 'teacher', 111, '', '', 0, 'T1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_test`
--

CREATE TABLE IF NOT EXISTS `teacher_test` (
  `teacher_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `question_id` varchar(22) NOT NULL,
  `test_cat_name` varchar(22) NOT NULL,
  `teacher_name` varchar(22) NOT NULL,
  `class_category` varchar(22) NOT NULL,
  `qualification` varchar(22) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `response` varchar(22) NOT NULL,
  PRIMARY KEY (`teacher_test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `teacher_test`
--

INSERT INTO `teacher_test` (`teacher_test_id`, `school_code`, `assessment_id`, `question_id`, `test_cat_name`, `teacher_name`, `class_category`, `qualification`, `roll_no`, `response`) VALUES
(1, 0, 30, '1', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(2, 0, 30, '2(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(3, 0, 30, '2(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(4, 0, 30, '3(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(5, 0, 30, '3(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(6, 0, 30, '4(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(7, 0, 30, '4(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(8, 0, 30, '5(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(9, 0, 30, '5(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(10, 0, 30, '5(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(11, 0, 30, '5(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(12, 0, 30, '6(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(13, 0, 30, '6(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(14, 0, 30, '6(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(15, 0, 30, '6(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(16, 0, 30, '7(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(17, 0, 30, '7(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(18, 0, 30, '7(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(19, 0, 30, '7(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(20, 0, 30, '8(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(21, 0, 30, '8(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(22, 0, 30, '8(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(23, 0, 30, '8(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(24, 0, 30, '8(v)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(25, 0, 30, '8(vi)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(26, 0, 30, '9(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(27, 0, 30, '9(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(28, 0, 30, '10(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(29, 0, 30, '10(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(30, 0, 30, '11(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(31, 0, 30, '11(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(32, 0, 30, '12', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(33, 0, 30, '13(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(34, 0, 30, '13(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(35, 0, 30, '13(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(36, 0, 30, '13(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(37, 0, 30, '14(i)a', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(38, 0, 30, '14(i)b', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(39, 0, 30, '14(ii)a', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(40, 0, 30, '14(ii)b', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(41, 0, 30, '15', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(42, 0, 30, '16(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(43, 0, 30, '16(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(44, 0, 30, '16(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(45, 0, 30, '16(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(46, 0, 30, '17(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(47, 0, 30, '17(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(48, 0, 30, '17(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(49, 0, 30, '17(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(50, 0, 30, '18(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(51, 0, 30, '18(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(52, 0, 30, '18(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(53, 0, 30, '18(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(54, 0, 30, '19(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(55, 0, 30, '19(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(56, 0, 30, '19(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(57, 0, 30, '19(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(58, 0, 30, '20', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(59, 0, 30, '1', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(60, 0, 30, '2(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(61, 0, 30, '2(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(62, 0, 30, '3(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(63, 0, 30, '3(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(64, 0, 30, '4(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(65, 0, 30, '4(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(66, 0, 30, '5(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(67, 0, 30, '5(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(68, 0, 30, '5(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(69, 0, 30, '5(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(70, 0, 30, '6(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(71, 0, 30, '6(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(72, 0, 30, '6(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(73, 0, 30, '6(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(74, 0, 30, '7(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(75, 0, 30, '7(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(76, 0, 30, '7(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(77, 0, 30, '7(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(78, 0, 30, '8(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(79, 0, 30, '8(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(80, 0, 30, '8(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(81, 0, 30, '8(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(82, 0, 30, '8(v)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(83, 0, 30, '8(vi)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(84, 0, 30, '9(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(85, 0, 30, '9(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(86, 0, 30, '10(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(87, 0, 30, '10(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(88, 0, 30, '11(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(89, 0, 30, '11(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(90, 0, 30, '12', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(91, 0, 30, '13(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(92, 0, 30, '13(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(93, 0, 30, '13(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(94, 0, 30, '13(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(95, 0, 30, '14(i)a', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(96, 0, 30, '14(i)b', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(97, 0, 30, '14(ii)a', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(98, 0, 30, '14(ii)b', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(99, 0, 30, '15', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(100, 0, 30, '16(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(101, 0, 30, '16(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(102, 0, 30, '16(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(103, 0, 30, '16(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(104, 0, 30, '17(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(105, 0, 30, '17(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(106, 0, 30, '17(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(107, 0, 30, '17(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(108, 0, 30, '18(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(109, 0, 30, '18(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(110, 0, 30, '18(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(111, 0, 30, '18(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(112, 0, 30, '19(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(113, 0, 30, '19(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(114, 0, 30, '19(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(115, 0, 30, '19(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(116, 0, 30, '20', 'E7B3', '', 'PP&P', 'HSC', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tenth`
--

CREATE TABLE IF NOT EXISTS `tenth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(10) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `nos_class_ten` int(11) NOT NULL,
  `nos_first_div_6gpa` int(11) NOT NULL,
  `nos_sec_div_5gpa` int(11) NOT NULL,
  `nos_third_div_4gpa` int(11) NOT NULL,
  `nos_failed_below_3gpa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `tenth`
--

INSERT INTO `tenth` (`id`, `school_code`, `assessment_id`, `nos_class_ten`, `nos_first_div_6gpa`, `nos_sec_div_5gpa`, `nos_third_div_4gpa`, `nos_failed_below_3gpa`) VALUES
(13, 'HYD0001', 29, 5, 8, 7, 4, 6),
(36, 'BLR0019', 28, 2, 5, 5, 5, 8),
(37, 'HYD0016', 30, 1, 2, 2, 2, 2),
(68, 'HYD0002', 31, 33, 20, 5, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transport_fees`
--

CREATE TABLE IF NOT EXISTS `transport_fees` (
  `transport_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `transport_fee_category` varchar(20) NOT NULL,
  `fee_amount` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transport_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `transport_fees`
--

INSERT INTO `transport_fees` (`transport_fee_id`, `assessment_id`, `school_code`, `fee_id`, `class_id`, `transport_fee_category`, `fee_amount`, `quantity`, `update_user`, `update_date`) VALUES
(1, 31, 'HYD0002', 9, 1, 'transport_fee', 0, 10, 'admin', '2013-03-02 13:58:20'),
(2, 31, 'HYD0002', 15, 1, 'transport_fee', 3, 10, 'admin', '2013-03-02 13:58:20'),
(3, 31, 'HYD0002', 16, 1, 'transport_fee', 4, 10, 'admin', '2013-03-02 13:58:20'),
(4, 31, 'HYD0002', 9, 2, 'transport_fee', 3, 10, 'admin', '2013-03-02 13:58:20'),
(5, 31, 'HYD0002', 15, 2, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(6, 31, 'HYD0002', 16, 2, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(7, 31, 'HYD0002', 9, 3, 'transport_fee', 4, 10, 'admin', '2013-03-02 13:58:20'),
(8, 31, 'HYD0002', 15, 3, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(9, 31, 'HYD0002', 16, 3, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(10, 31, 'HYD0002', 9, 4, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(11, 31, 'HYD0002', 15, 4, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(12, 31, 'HYD0002', 16, 4, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(13, 31, 'HYD0002', 9, 5, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(14, 31, 'HYD0002', 15, 5, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(15, 31, 'HYD0002', 16, 5, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(16, 31, 'HYD0002', 9, 6, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(17, 31, 'HYD0002', 15, 6, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(18, 31, 'HYD0002', 16, 6, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(19, 31, 'HYD0002', 9, 7, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(20, 31, 'HYD0002', 15, 7, 'transport_fee', 0, 5, 'admin', '2013-03-02 13:58:20'),
(21, 31, 'HYD0002', 16, 7, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(22, 31, 'HYD0002', 9, 8, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(23, 31, 'HYD0002', 15, 8, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(24, 31, 'HYD0002', 16, 8, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(25, 31, 'HYD0002', 9, 9, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(26, 31, 'HYD0002', 15, 9, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(27, 31, 'HYD0002', 16, 9, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(28, 31, 'HYD0002', 9, 10, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(29, 31, 'HYD0002', 15, 10, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(30, 31, 'HYD0002', 16, 10, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(31, 31, 'HYD0002', 9, 11, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(32, 31, 'HYD0002', 15, 11, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(33, 31, 'HYD0002', 16, 11, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(34, 31, 'HYD0002', 9, 12, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(35, 31, 'HYD0002', 15, 12, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(36, 31, 'HYD0002', 16, 12, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(37, 31, 'HYD0002', 9, 13, 'transport_fee', 0, 0, 'admin', '2013-03-02 13:58:20'),
(38, 31, 'HYD0002', 15, 13, 'transport_fee', 5, 55, 'admin', '2013-03-02 13:58:21'),
(39, 31, 'HYD0002', 16, 13, 'transport_fee', 22, 5, 'admin', '2013-03-02 13:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_roll` varchar(22) NOT NULL,
  `email` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_roll`, `email`, `first_name`, `last_name`, `date_of_birth`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'pi@pi-us.com', 'pius', 'systems', '2010-09-13'),
(5, 'prasanth', '32250170a0dca92d53ec9624f336ca24', 'volunteer', 'pkali@pi-us.com', 'prasanth', 'k', '0000-00-00'),
(6, 'shiva', 'f88f1e2c46546c9fb5b8415db3c93993', 'volunteer', 'kshiva@pi-us.com', 'shiva', 'kakileti', '0000-00-00'),
(7, 'shiva', '0f31f53d9fdef66d5b42fd69e99132da', 'volunteer', 'shivakakileti89@gmail.com', 'shiva', 'kakileti', '0000-00-00'),
(8, 'raja', '526e34d04735124f05a090181f3e6e8a', 'volunteer', 'raja@gmail.com', 'raja', 'm', '0000-00-00'),
(9, 'shiva', '69f404925df883e0e5579d65b7768e7c', 'volunteer', 'emails@mails.com', 'shiva', 'shiva', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

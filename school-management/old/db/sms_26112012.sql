-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2012 at 10:44 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `school_code`, `academic_year`, `assessment_date`, `assessment_status`, `assessment_term_type`, `school_assessed_by`, `no_of_section`, `school_assessed_again_same_year`, `assessment_type_if_re_assessed`, `aps_Average`, `update_user`, `update_date`) VALUES
(28, 'BLR0019', 0000, 'September 11,2012', 1, '', 'zx', 0, 'Yes', 'Baseline', '', '', '0000-00-00 00:00:00'),
(29, 'HYD0001', 0000, '3, Aug 2012  ', 1, '', 'yes', 0, 'Yes', 'Baseline', '', '', '0000-00-00 00:00:00'),
(30, 'HYD0016', 0000, 'September 28,2012     ', 0, '', '', 0, 'Yes', 'Baseline', '', '', '0000-00-00 00:00:00'),
(31, 'HYD0002', 0000, 'September 28,2012', 1, '', 'Prasanth', 10, 'Yes', 'End Line', '', '', '2012-10-09 00:00:00'),
(32, 'HYD0003', 0000, 'October 10,2012  ', 1, '', 'Anil', 0, 'Yes', 'Endline', '', '', '0000-00-00 00:00:00');

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
  `no_of_setion` int(11) NOT NULL,
  `no_working_days` int(11) NOT NULL,
  `no_students_attended` int(11) NOT NULL,
  `no_teachers_attended` int(11) NOT NULL,
  `student_cumulative_attendance` int(11) NOT NULL,
  `teacher_cumulative_attendance` int(11) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=670 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `assessment_id`, `school_code`, `class_id`, `year`, `month`, `no_of_setion`, `no_working_days`, `no_students_attended`, `no_teachers_attended`, `student_cumulative_attendance`, `teacher_cumulative_attendance`, `update_user`, `update_date`) VALUES
(550, 29, 'HYD0001', 1, 0000, '2012-09-30', 1, 13, 26, 0, 40, 0, 'admin', '0000-00-00'),
(551, 29, 'HYD0001', 2, 0000, '2012-09-30', 2, 14, 27, 0, 41, 0, 'admin', '0000-00-00'),
(552, 29, 'HYD0001', 3, 0000, '2012-09-30', 3, 15, 28, 0, 42, 0, 'admin', '0000-00-00'),
(553, 29, 'HYD0001', 4, 0000, '2012-09-30', 3, 16, 29, 0, 43, 0, 'admin', '0000-00-00'),
(554, 29, 'HYD0001', 5, 0000, '2012-09-30', 4, 17, 30, 0, 44, 0, 'admin', '0000-00-00'),
(555, 29, 'HYD0001', 6, 0000, '2012-09-30', 5, 18, 31, 0, 45, 0, 'admin', '0000-00-00'),
(556, 29, 'HYD0001', 7, 0000, '2012-09-30', 6, 19, 32, 0, 46, 0, 'admin', '0000-00-00'),
(557, 29, 'HYD0001', 8, 0000, '2012-09-30', 7, 20, 34, 0, 47, 0, 'admin', '0000-00-00'),
(558, 29, 'HYD0001', 9, 0000, '2012-09-30', 8, 21, 35, 0, 48, 0, 'admin', '0000-00-00'),
(559, 29, 'HYD0001', 10, 0000, '2012-09-30', 9, 22, 36, 0, 49, 0, 'admin', '0000-00-00'),
(560, 29, 'HYD0001', 11, 0000, '2012-09-30', 10, 23, 37, 0, 50, 0, 'admin', '0000-00-00'),
(561, 29, 'HYD0001', 12, 0000, '2012-09-30', 11, 24, 38, 0, 51, 0, 'admin', '0000-00-00'),
(562, 29, 'HYD0001', 13, 0000, '2012-09-30', 12, 25, 39, 0, 52, 0, 'admin', '0000-00-00'),
(563, 29, 'HYD0001', 1, 0000, '2012-08-30', 1, 88, 8, 0, 8, 0, 'admin', '0000-00-00'),
(564, 29, 'HYD0001', 2, 0000, '2012-08-30', 22, 88, 8, 0, 8, 0, 'admin', '0000-00-00'),
(565, 29, 'HYD0001', 3, 0000, '2012-08-30', 32, 8, 88, 0, 8, 0, 'admin', '0000-00-00'),
(566, 29, 'HYD0001', 4, 0000, '2012-08-30', 42, 88, 0, 0, 8, 0, 'admin', '0000-00-00'),
(567, 29, 'HYD0001', 5, 0000, '2012-08-30', 52, 88, 8, 0, 8, 0, 'admin', '0000-00-00'),
(568, 29, 'HYD0001', 6, 0000, '2012-08-30', 62, 8, 8, 0, 88, 0, 'admin', '0000-00-00'),
(569, 29, 'HYD0001', 7, 0000, '2012-08-30', 72, 88, 88, 0, 8, 0, 'admin', '0000-00-00'),
(570, 29, 'HYD0001', 8, 0000, '2012-08-30', 82, 88, 8, 0, 88, 0, 'admin', '0000-00-00'),
(571, 29, 'HYD0001', 9, 0000, '2012-08-30', 92, 88, 8, 0, 8, 0, 'admin', '0000-00-00'),
(572, 29, 'HYD0001', 10, 0000, '2012-08-30', 1022, 0, 8, 0, 8, 0, 'admin', '0000-00-00'),
(573, 29, 'HYD0001', 11, 0000, '2012-08-30', 112, 8, 8, 0, 88, 0, 'admin', '0000-00-00'),
(574, 29, 'HYD0001', 12, 0000, '2012-08-30', 12, 88, 8, 0, 8, 0, 'admin', '0000-00-00'),
(575, 29, 'HYD0001', 13, 0000, '2012-08-30', 232, 8, 88, 0, 8, 0, 'admin', '0000-00-00'),
(576, 29, 'HYD0001', 1, 0000, '2012-07-30', 1, 12, 8, 0, 1, 0, 'admin', '0000-00-00'),
(577, 29, 'HYD0001', 2, 0000, '2012-07-30', 22, 2, 8, 0, 2, 0, 'admin', '0000-00-00'),
(578, 29, 'HYD0001', 3, 0000, '2012-07-30', 32, 1, 8, 0, 3, 0, 'admin', '0000-00-00'),
(579, 29, 'HYD0001', 4, 0000, '2012-07-30', 42, 0, 8, 0, 4, 0, 'admin', '0000-00-00'),
(580, 29, 'HYD0001', 5, 0000, '2012-07-30', 522, 2, 8, 0, 5, 0, 'admin', '0000-00-00'),
(581, 29, 'HYD0001', 6, 0000, '2012-07-30', 6, 2, 8, 0, 6, 0, 'admin', '0000-00-00'),
(582, 29, 'HYD0001', 7, 0000, '2012-07-30', 722, 7, 8, 0, 7, 0, 'admin', '0000-00-00'),
(583, 29, 'HYD0001', 8, 0000, '2012-07-30', 82, 8, 8, 0, 8, 0, 'admin', '0000-00-00'),
(584, 29, 'HYD0001', 9, 0000, '2012-07-30', 92, 8, 8, 0, 9, 0, 'admin', '0000-00-00'),
(585, 29, 'HYD0001', 10, 0000, '2012-07-30', 102, 8, 8, 0, 10, 0, 'admin', '0000-00-00'),
(586, 29, 'HYD0001', 11, 0000, '2012-07-30', 112, 56, 8, 0, 11, 0, 'admin', '0000-00-00'),
(587, 29, 'HYD0001', 12, 0000, '2012-07-30', 122, 5, 8, 0, 12, 0, 'admin', '0000-00-00'),
(588, 29, 'HYD0001', 13, 0000, '2012-07-30', 132, 5, 8, 0, 13, 0, 'admin', '0000-00-00'),
(589, 32, 'HYD0003', 1, 0000, '2012-10-03', 1, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(590, 32, 'HYD0003', 2, 0000, '2012-10-03', 2, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(591, 32, 'HYD0003', 3, 0000, '2012-10-03', 3, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(592, 32, 'HYD0003', 4, 0000, '2012-10-03', 4, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(593, 32, 'HYD0003', 5, 0000, '2012-10-03', 22, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(594, 32, 'HYD0003', 6, 0000, '2012-10-03', 5, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(595, 32, 'HYD0003', 7, 0000, '2012-10-03', 66, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(596, 32, 'HYD0003', 8, 0000, '2012-10-03', 6, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(597, 32, 'HYD0003', 9, 0000, '2012-10-03', 6, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(598, 32, 'HYD0003', 10, 0000, '2012-10-03', 6, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(599, 32, 'HYD0003', 11, 0000, '2012-10-03', 6, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(600, 32, 'HYD0003', 12, 0000, '2012-10-03', 6, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(601, 32, 'HYD0003', 13, 0000, '2012-10-03', 9, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(602, 32, 'HYD0003', 1, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(603, 32, 'HYD0003', 2, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(604, 32, 'HYD0003', 3, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(605, 32, 'HYD0003', 4, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(606, 32, 'HYD0003', 5, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(607, 32, 'HYD0003', 6, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(608, 32, 'HYD0003', 7, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(609, 32, 'HYD0003', 8, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(610, 32, 'HYD0003', 9, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(611, 32, 'HYD0003', 10, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(612, 32, 'HYD0003', 11, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(613, 32, 'HYD0003', 12, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(614, 32, 'HYD0003', 13, 0000, '2012-09-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(615, 32, 'HYD0003', 1, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(616, 32, 'HYD0003', 2, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(617, 32, 'HYD0003', 3, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(618, 32, 'HYD0003', 4, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(619, 32, 'HYD0003', 5, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(620, 32, 'HYD0003', 6, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(621, 32, 'HYD0003', 7, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(622, 32, 'HYD0003', 8, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(623, 32, 'HYD0003', 9, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(624, 32, 'HYD0003', 10, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(625, 32, 'HYD0003', 11, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(626, 32, 'HYD0003', 12, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(627, 32, 'HYD0003', 13, 0000, '2012-08-03', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(628, 31, 'HYD0002', 1, 0000, '2012-10-06', 1, 0, 5, 0, 0, 0, 'admin', '0000-00-00'),
(629, 31, 'HYD0002', 2, 0000, '2012-10-06', 1, 5, 5, 0, 0, 0, 'admin', '0000-00-00'),
(630, 31, 'HYD0002', 3, 0000, '2012-10-06', 1, 5, 5, 0, 0, 0, 'admin', '0000-00-00'),
(631, 31, 'HYD0002', 4, 0000, '2012-10-06', 1, 5, 5, 0, 0, 0, 'admin', '0000-00-00'),
(632, 31, 'HYD0002', 5, 0000, '2012-10-06', 11, 0, 5, 0, 0, 0, 'admin', '0000-00-00'),
(633, 31, 'HYD0002', 6, 0000, '2012-10-06', 1, 5, 5, 0, 0, 0, 'admin', '0000-00-00'),
(634, 31, 'HYD0002', 7, 0000, '2012-10-06', 1, 5, 0, 0, 0, 0, 'admin', '0000-00-00'),
(635, 31, 'HYD0002', 8, 0000, '2012-10-06', 1, 5, 0, 0, 0, 0, 'admin', '0000-00-00'),
(636, 31, 'HYD0002', 9, 0000, '2012-10-06', 1, 5, 0, 0, 0, 0, 'admin', '0000-00-00'),
(637, 31, 'HYD0002', 10, 0000, '2012-10-06', 11, 5, 0, 0, 0, 0, 'admin', '0000-00-00'),
(638, 31, 'HYD0002', 11, 0000, '2012-10-06', 1, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(639, 31, 'HYD0002', 12, 0000, '2012-10-06', 1, 55, 0, 0, 0, 0, 'admin', '0000-00-00'),
(640, 31, 'HYD0002', 13, 0000, '2012-10-06', 11, 5, 0, 0, 0, 0, 'admin', '0000-00-00'),
(641, 31, 'HYD0002', 15, 0000, '2012-10-05', 1, 5, 0, 0, 0, 0, 'admin', '0000-00-00'),
(642, 31, 'HYD0002', 1, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(643, 31, 'HYD0002', 2, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(644, 31, 'HYD0002', 3, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(645, 31, 'HYD0002', 4, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(646, 31, 'HYD0002', 5, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(647, 31, 'HYD0002', 6, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(648, 31, 'HYD0002', 7, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(649, 31, 'HYD0002', 8, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(650, 31, 'HYD0002', 9, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(651, 31, 'HYD0002', 10, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(652, 31, 'HYD0002', 11, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(653, 31, 'HYD0002', 12, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(654, 31, 'HYD0002', 13, 0000, '2012-09-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(655, 31, 'HYD0002', 15, 0000, '2012-09-05', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(656, 31, 'HYD0002', 1, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(657, 31, 'HYD0002', 2, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(658, 31, 'HYD0002', 3, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(659, 31, 'HYD0002', 4, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(660, 31, 'HYD0002', 5, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(661, 31, 'HYD0002', 6, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(662, 31, 'HYD0002', 7, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(663, 31, 'HYD0002', 8, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(664, 31, 'HYD0002', 9, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(665, 31, 'HYD0002', 10, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(666, 31, 'HYD0002', 11, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(667, 31, 'HYD0002', 12, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(668, 31, 'HYD0002', 13, 0000, '2012-08-06', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00'),
(669, 31, 'HYD0002', 15, 0000, '2012-08-05', 0, 0, 0, 0, 0, 0, 'admin', '0000-00-00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cost`
--


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
  `total_new_admission_boys` int(22) NOT NULL,
  `total_new_admissions_girls` int(22) NOT NULL,
  `total_free_admissions_students` int(22) NOT NULL,
  PRIMARY KEY (`enrollment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=282 ;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `assessment_id`, `school_code`, `academic_year`, `class_id`, `no_of_sections`, `total_enrollment_boys`, `total_enrollment_girls`, `total_new_admission_boys`, `total_new_admissions_girls`, `total_free_admissions_students`) VALUES
(217, 29, 'HYD0001', 0000, 1, 1, 1, 1, 1, 1, 1),
(218, 29, 'HYD0001', 0000, 2, 11, 1, 0, 0, 0, 0),
(219, 29, 'HYD0001', 0000, 3, 0, 0, 0, 0, 0, 0),
(220, 29, 'HYD0001', 0000, 4, 0, 0, 0, 0, 0, 0),
(221, 29, 'HYD0001', 0000, 5, 0, 0, 0, 0, 0, 0),
(222, 29, 'HYD0001', 0000, 6, 0, 0, 0, 0, 0, 0),
(223, 29, 'HYD0001', 0000, 7, 0, 0, 0, 0, 0, 0),
(224, 29, 'HYD0001', 0000, 8, 0, 0, 0, 0, 0, 0),
(225, 29, 'HYD0001', 0000, 9, 0, 0, 0, 0, 0, 0),
(226, 29, 'HYD0001', 0000, 10, 0, 0, 0, 0, 0, 0),
(227, 29, 'HYD0001', 0000, 11, 0, 0, 0, 0, 0, 0),
(228, 29, 'HYD0001', 0000, 12, 0, 0, 0, 0, 0, 0),
(229, 29, 'HYD0001', 0000, 13, 0, 0, 0, 0, 0, 0),
(230, 29, 'HYD0001', 0000, 1, 1, 1, 1, 1, 1, 1),
(231, 29, 'HYD0001', 0000, 2, 11, 1, 0, 0, 0, 0),
(232, 29, 'HYD0001', 0000, 3, 0, 0, 0, 0, 0, 0),
(233, 29, 'HYD0001', 0000, 4, 0, 0, 0, 0, 0, 0),
(234, 29, 'HYD0001', 0000, 5, 0, 0, 0, 0, 0, 0),
(235, 29, 'HYD0001', 0000, 6, 0, 0, 0, 0, 0, 0),
(236, 29, 'HYD0001', 0000, 7, 0, 0, 0, 0, 0, 0),
(237, 29, 'HYD0001', 0000, 8, 0, 0, 0, 0, 0, 0),
(238, 29, 'HYD0001', 0000, 9, 0, 0, 0, 0, 0, 0),
(239, 29, 'HYD0001', 0000, 10, 0, 0, 0, 0, 0, 0),
(240, 29, 'HYD0001', 0000, 11, 0, 0, 0, 0, 0, 0),
(241, 29, 'HYD0001', 0000, 12, 0, 0, 0, 0, 0, 0),
(242, 29, 'HYD0001', 0000, 13, 0, 0, 0, 0, 0, 0),
(243, 30, 'HYD0016', 0000, 1, 1, 1, 1, 1, 11, 1),
(244, 30, 'HYD0016', 0000, 2, 1, 11, 1, 11, 1, 1),
(245, 30, 'HYD0016', 0000, 3, 0, 5, 0, 0, 0, 0),
(246, 30, 'HYD0016', 0000, 4, 0, 5, 0, 0, 0, 0),
(247, 30, 'HYD0016', 0000, 5, 0, 0, 0, 0, 0, 0),
(248, 30, 'HYD0016', 0000, 6, 0, 0, 0, 0, 0, 0),
(249, 30, 'HYD0016', 0000, 7, 0, 0, 0, 0, 0, 0),
(250, 30, 'HYD0016', 0000, 8, 0, 5, 0, 0, 0, 0),
(251, 30, 'HYD0016', 0000, 9, 0, 0, 0, 0, 0, 0),
(252, 30, 'HYD0016', 0000, 10, 0, 0, 0, 0, 0, 0),
(253, 30, 'HYD0016', 0000, 11, 0, 0, 0, 0, 0, 0),
(254, 30, 'HYD0016', 0000, 12, 0, 0, 0, 0, 0, 0),
(255, 30, 'HYD0016', 0000, 13, 0, 0, 0, 0, 0, 0),
(256, 31, 'HYD0002', 0000, 1, 2, 2, 2, 22, 2, 2),
(257, 31, 'HYD0002', 0000, 2, 2, 2, 2, 2, 2, 2),
(258, 31, 'HYD0002', 0000, 3, 2, 2, 2, 2, 22, 2),
(259, 31, 'HYD0002', 0000, 4, 2, 2, 0, 0, 0, 0),
(260, 31, 'HYD0002', 0000, 5, 0, 0, 0, 0, 0, 0),
(261, 31, 'HYD0002', 0000, 6, 0, 0, 0, 0, 0, 0),
(262, 31, 'HYD0002', 0000, 7, 0, 0, 0, 0, 0, 0),
(263, 31, 'HYD0002', 0000, 8, 0, 0, 0, 0, 0, 0),
(264, 31, 'HYD0002', 0000, 9, 0, 0, 0, 0, 0, 0),
(265, 31, 'HYD0002', 0000, 10, 0, 0, 0, 0, 0, 0),
(266, 31, 'HYD0002', 0000, 11, 0, 0, 0, 0, 0, 0),
(267, 31, 'HYD0002', 0000, 12, 0, 0, 0, 0, 0, 0),
(268, 31, 'HYD0002', 0000, 13, 2, 0, 0, 0, 0, 0),
(269, 32, 'HYD0003', 0000, 1, 0, 0, 0, 0, 0, 0),
(270, 32, 'HYD0003', 0000, 2, 0, 0, 0, 0, 0, 0),
(271, 32, 'HYD0003', 0000, 3, 0, 0, 0, 0, 0, 0),
(272, 32, 'HYD0003', 0000, 4, 0, 0, 0, 0, 0, 0),
(273, 32, 'HYD0003', 0000, 5, 0, 0, 0, 0, 0, 0),
(274, 32, 'HYD0003', 0000, 6, 0, 0, 0, 0, 0, 0),
(275, 32, 'HYD0003', 0000, 7, 0, 0, 0, 0, 0, 0),
(276, 32, 'HYD0003', 0000, 8, 0, 0, 0, 0, 0, 0),
(277, 32, 'HYD0003', 0000, 9, 0, 0, 0, 0, 0, 0),
(278, 32, 'HYD0003', 0000, 10, 0, 0, 0, 0, 0, 0),
(279, 32, 'HYD0003', 0000, 11, 0, 0, 0, 0, 0, 0),
(280, 32, 'HYD0003', 0000, 12, 0, 0, 0, 0, 0, 0),
(281, 32, 'HYD0003', 0000, 13, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`financial_id`, `assessment_id`, `school_code`, `expense_cat_id`, `expense_sub_cat_id`, `loan1`, `loan2`, `loan3`, `loan4`, `loan5`, `update_user`, `update_date`) VALUES
(97, 30, 'HYD0016', 3, 31, 1, 2, 33, 3, 1, 0, '2012-09-29 13:28:37'),
(98, 30, 'HYD0016', 3, 30, 2, 3, 231, 231, 21, 0, '2012-09-29 13:28:37'),
(99, 30, 'HYD0016', 3, 29, 231, 21, 21, 21, 21, 0, '2012-09-29 13:28:37'),
(100, 30, 'HYD0016', 3, 28, 21, 21, 2, 12, 12, 0, '2012-09-29 13:28:37'),
(101, 30, 'HYD0016', 3, 27, 12, 45, 1545, 12, 425, 0, '2012-09-29 13:28:37'),
(102, 30, 'HYD0016', 3, 26, 45, 45, 4, 24, 54, 0, '2012-09-29 13:28:37'),
(103, 30, 'HYD0016', 3, 32, 5, 45, 0, 0, 0, 0, '2012-09-29 13:28:37');

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
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`observation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- Dumping data for table `observation`
--

INSERT INTO `observation` (`observation_id`, `assessment_id`, `school_code`, `subject_taught`, `class_taught`, `teacher_response`, `response`, `observ_cat_id`, `observ_sub_cat_id`, `update_user`, `update_date`) VALUES
(126, 30, 'HYD0016', '', '', 'NA', 'T1', 1, 1, '', '0000-00-00'),
(127, 30, 'HYD0016', '', '', 'Ineffective', 'T1', 1, 6, '', '0000-00-00'),
(128, 30, 'HYD0016', '', '', 'No', 'T1', 1, 3, '', '0000-00-00'),
(129, 30, 'HYD0016', '', '', 'Ineffective', 'T1', 1, 5, '', '0000-00-00'),
(130, 30, 'HYD0016', '', '', 'No', 'T1', 1, 2, '', '0000-00-00'),
(131, 30, 'HYD0016', '', '', 'No', 'T1', 1, 7, '', '0000-00-00'),
(132, 30, 'HYD0016', '', '', 'No', 'T1', 1, 4, '', '0000-00-00'),
(133, 30, 'HYD0016', '', '', 'No', 'T1', 2, 19, '', '0000-00-00'),
(134, 30, 'HYD0016', '', '', 'NA', 'T1', 2, 11, '', '0000-00-00'),
(135, 30, 'HYD0016', '', '', 'No', 'T1', 2, 16, '', '0000-00-00'),
(136, 30, 'HYD0016', '', '', 'NA', 'T1', 2, 8, '', '0000-00-00'),
(137, 30, 'HYD0016', '', '', 'NA', 'T1', 2, 13, '', '0000-00-00'),
(138, 30, 'HYD0016', '', '', 'No', 'T1', 2, 18, '', '0000-00-00'),
(139, 30, 'HYD0016', '', '', 'NA', 'T1', 2, 10, '', '0000-00-00'),
(140, 30, 'HYD0016', '', '', 'NA', 'T1', 2, 15, '', '0000-00-00'),
(141, 30, 'HYD0016', '', '', 'Yes', 'T1', 2, 20, '', '0000-00-00'),
(142, 30, 'HYD0016', '', '', 'Yes', 'T1', 2, 12, '', '0000-00-00'),
(143, 30, 'HYD0016', '', '', 'Yes', 'T1', 2, 17, '', '0000-00-00'),
(144, 30, 'HYD0016', '', '', 'NA', 'T1', 2, 9, '', '0000-00-00'),
(145, 30, 'HYD0016', '', '', 'No', 'T1', 2, 14, '', '0000-00-00'),
(146, 30, 'HYD0016', '', '', 'Yes', 'T1', 3, 24, '', '0000-00-00'),
(147, 30, 'HYD0016', '', '', 'Yes', 'T1', 3, 21, '', '0000-00-00'),
(148, 30, 'HYD0016', '', '', 'NA', 'T1', 3, 23, '', '0000-00-00'),
(149, 30, 'HYD0016', '', '', 'Ineffective', 'T1', 3, 25, '', '0000-00-00'),
(150, 30, 'HYD0016', '', '', 'NA', 'T1', 3, 22, '', '0000-00-00'),
(151, 30, 'HYD0016', 'English', 'Class 10', 'Ineffective', 'T2', 1, 1, '', '0000-00-00'),
(152, 30, 'HYD0016', 'English', 'Class 10', 'Ineffective', 'T2', 1, 6, '', '0000-00-00'),
(153, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 1, 3, '', '0000-00-00'),
(154, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 1, 5, '', '0000-00-00'),
(155, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 1, 2, '', '0000-00-00'),
(156, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 1, 7, '', '0000-00-00'),
(157, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 1, 4, '', '0000-00-00'),
(158, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 19, '', '0000-00-00'),
(159, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 11, '', '0000-00-00'),
(160, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 16, '', '0000-00-00'),
(161, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 8, '', '0000-00-00'),
(162, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 13, '', '0000-00-00'),
(163, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 18, '', '0000-00-00'),
(164, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 10, '', '0000-00-00'),
(165, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 15, '', '0000-00-00'),
(166, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 20, '', '0000-00-00'),
(167, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 12, '', '0000-00-00'),
(168, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 17, '', '0000-00-00'),
(169, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 9, '', '0000-00-00'),
(170, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 2, 14, '', '0000-00-00'),
(171, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 3, 24, '', '0000-00-00'),
(172, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 3, 21, '', '0000-00-00'),
(173, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 3, 23, '', '0000-00-00'),
(174, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 3, 25, '', '0000-00-00'),
(175, 30, 'HYD0016', 'English', 'Class 10', 'Yes', 'T2', 3, 22, '', '0000-00-00');

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
  `fee_amount_actual` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` float NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`other_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=273 ;

--
-- Dumping data for table `other_fees`
--

INSERT INTO `other_fees` (`other_fee_id`, `assessment_id`, `school_code`, `fee_id`, `class_id`, `other_fee_category`, `fee_amount`, `fee_amount_actual`, `quantity`, `total_amount`, `update_user`, `update_date`) VALUES
(221, 30, 'HYD0016', 7, 1, 'other_fee', 1, 0, 2, 0, 'admin', '2012-09-15 13:23:49'),
(222, 30, 'HYD0016', 8, 1, 'other_fee', 3, 0, 4, 0, 'admin', '2012-09-15 13:23:49'),
(223, 30, 'HYD0016', 7, 2, 'other_fee', 5, 0, 6, 0, 'admin', '2012-09-15 13:23:49'),
(224, 30, 'HYD0016', 8, 2, 'other_fee', 7, 0, 8, 0, 'admin', '2012-09-15 13:23:49'),
(225, 30, 'HYD0016', 7, 3, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(226, 30, 'HYD0016', 8, 3, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(227, 30, 'HYD0016', 7, 4, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(228, 30, 'HYD0016', 8, 4, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(229, 30, 'HYD0016', 7, 5, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(230, 30, 'HYD0016', 8, 5, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(231, 30, 'HYD0016', 7, 6, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(232, 30, 'HYD0016', 8, 6, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(233, 30, 'HYD0016', 7, 7, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(234, 30, 'HYD0016', 8, 7, 'other_fee', 0, 0, 0, 0, 'admin', '2012-09-15 13:23:49'),
(235, 30, 'HYD0016', 7, 8, 'other_fee', 1, 0, 2, 0, 'admin', '2012-09-15 13:23:50'),
(236, 30, 'HYD0016', 8, 8, 'other_fee', 2, 0, 5, 0, 'admin', '2012-09-15 13:23:50'),
(237, 30, 'HYD0016', 7, 9, 'other_fee', 2, 0, 6, 0, 'admin', '2012-09-15 13:23:50'),
(238, 30, 'HYD0016', 8, 9, 'other_fee', 8, 0, 5, 0, 'admin', '2012-09-15 13:23:50'),
(239, 30, 'HYD0016', 7, 10, 'other_fee', 2, 0, 5, 0, 'admin', '2012-09-15 13:23:50'),
(240, 30, 'HYD0016', 8, 10, 'other_fee', 3, 0, 4, 0, 'admin', '2012-09-15 13:23:50'),
(241, 30, 'HYD0016', 7, 11, 'other_fee', 2, 0, 5, 0, 'admin', '2012-09-15 13:23:50'),
(242, 30, 'HYD0016', 8, 11, 'other_fee', 2, 0, 3, 0, 'admin', '2012-09-15 13:23:50'),
(243, 30, 'HYD0016', 7, 12, 'other_fee', 1, 0, 5, 0, 'admin', '2012-09-15 13:23:50'),
(244, 30, 'HYD0016', 8, 12, 'other_fee', 2, 0, 3, 0, 'admin', '2012-09-15 13:23:50'),
(245, 30, 'HYD0016', 7, 13, 'other_fee', 1, 0, 2, 0, 'admin', '2012-09-15 13:23:50'),
(246, 30, 'HYD0016', 8, 13, 'other_fee', 5, 0, 6, 0, 'admin', '2012-09-15 13:23:50'),
(247, 31, 'HYD0002', 7, 1, 'other_fee', 5, 0, 5, 0, 'admin', '2012-10-04 19:32:59'),
(248, 31, 'HYD0002', 8, 1, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(249, 31, 'HYD0002', 7, 2, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(250, 31, 'HYD0002', 8, 2, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(251, 31, 'HYD0002', 7, 3, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(252, 31, 'HYD0002', 8, 3, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(253, 31, 'HYD0002', 7, 4, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(254, 31, 'HYD0002', 8, 4, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(255, 31, 'HYD0002', 7, 5, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(256, 31, 'HYD0002', 8, 5, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(257, 31, 'HYD0002', 7, 6, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(258, 31, 'HYD0002', 8, 6, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(259, 31, 'HYD0002', 7, 7, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(260, 31, 'HYD0002', 8, 7, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(261, 31, 'HYD0002', 7, 8, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(262, 31, 'HYD0002', 8, 8, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(263, 31, 'HYD0002', 7, 9, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(264, 31, 'HYD0002', 8, 9, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(265, 31, 'HYD0002', 7, 10, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(266, 31, 'HYD0002', 8, 10, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(267, 31, 'HYD0002', 7, 11, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(268, 31, 'HYD0002', 8, 11, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(269, 31, 'HYD0002', 7, 12, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(270, 31, 'HYD0002', 8, 12, 'other_fee', 0, 0, 0, 0, 'admin', '2012-10-04 19:32:59'),
(271, 31, 'HYD0002', 7, 13, 'other_fee', 10, 0, 10, 0, 'admin', '2012-10-04 19:32:59'),
(272, 31, 'HYD0002', 8, 13, 'other_fee', 10, 0, 10, 0, 'admin', '2012-10-04 19:32:59');

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
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`overdue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `overdue`
--

INSERT INTO `overdue` (`overdue_id`, `assessment_id`, `class_id`, `school_code`, `class_name`, `no_of_students`, `fee_overdue`, `update_user`, `update_date`) VALUES
(1, 1, 1, 'BLR0019', '', 2, 1, '', '0000-00-00'),
(2, 1, 2, 'BLR0019', '', 2, 1, '', '0000-00-00'),
(3, 1, 3, 'BLR0019', '', 2, 1, '', '0000-00-00'),
(4, 1, 4, 'BLR0019', '', 2, 1, '', '0000-00-00'),
(5, 1, 5, 'BLR0019', '', 2, 2, '', '0000-00-00'),
(6, 1, 6, 'BLR0019', '', 0, 0, '', '0000-00-00'),
(7, 1, 7, 'BLR0019', '', 0, 0, '', '0000-00-00'),
(8, 1, 8, 'BLR0019', '', 2, 3, '', '0000-00-00'),
(9, 1, 9, 'BLR0019', '', 2, 2, '', '0000-00-00'),
(10, 1, 10, 'BLR0019', '', 3, 0, '', '0000-00-00'),
(11, 1, 11, 'BLR0019', '', 3, 1, '', '0000-00-00'),
(12, 1, 12, 'BLR0019', '', 2, 0, '', '0000-00-00'),
(13, 1, 13, 'BLR0019', '', 0, 8, '', '0000-00-00'),
(14, 1, 1, 'HYD0001', '', 1, 2, '', '0000-00-00'),
(15, 1, 2, 'HYD0001', '', 2, 3, '', '0000-00-00'),
(16, 1, 3, 'HYD0001', '', 4, 5, '', '0000-00-00'),
(17, 1, 4, 'HYD0001', '', 3, 3, '', '0000-00-00'),
(18, 1, 5, 'HYD0001', '', 2, 0, '', '0000-00-00'),
(19, 1, 6, 'HYD0001', '', 3, 0, '', '0000-00-00'),
(20, 1, 7, 'HYD0001', '', 2, 3, '', '0000-00-00'),
(21, 1, 8, 'HYD0001', '', 3, 3, '', '0000-00-00'),
(22, 1, 9, 'HYD0001', '', 3, 3, '', '0000-00-00'),
(23, 1, 10, 'HYD0001', '', 3, 3, '', '0000-00-00'),
(24, 1, 11, 'HYD0001', '', 3, 33, '', '0000-00-00'),
(25, 1, 12, 'HYD0001', '', 3, 3, '', '0000-00-00'),
(26, 1, 13, 'HYD0001', '', 0, 0, '', '0000-00-00'),
(27, 1, 1, 'HYD0016', '', 12, 2, '', '0000-00-00'),
(28, 1, 2, 'HYD0016', '', 2, 2, '', '0000-00-00'),
(29, 1, 3, 'HYD0016', '', 22, 2, '', '0000-00-00'),
(30, 1, 4, 'HYD0016', '', 22, 2, '', '0000-00-00'),
(31, 1, 5, 'HYD0016', '', 2, 2, '', '0000-00-00'),
(32, 1, 6, 'HYD0016', '', 22, 2, '', '0000-00-00'),
(33, 1, 7, 'HYD0016', '', 2, 2, '', '0000-00-00'),
(34, 1, 8, 'HYD0016', '', 22, 2, '', '0000-00-00'),
(35, 1, 9, 'HYD0016', '', 2, 2, '', '0000-00-00'),
(36, 1, 10, 'HYD0016', '', 22, 0, '', '0000-00-00'),
(37, 1, 11, 'HYD0016', '', 0, 0, '', '0000-00-00'),
(38, 1, 12, 'HYD0016', '', 0, 0, '', '0000-00-00'),
(39, 1, 13, 'HYD0016', '', 0, 0, '', '0000-00-00'),
(40, 31, 1, 'HYD0002', '', 2, 2, '', '0000-00-00'),
(41, 31, 2, 'HYD0002', '', 2, 2, '', '0000-00-00'),
(42, 31, 3, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(43, 31, 4, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(44, 31, 5, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(45, 31, 6, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(46, 31, 7, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(47, 31, 8, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(48, 31, 9, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(49, 31, 10, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(50, 31, 11, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(51, 31, 12, 'HYD0002', '', 0, 0, '', '0000-00-00'),
(52, 31, 13, 'HYD0002', '', 0, 0, '', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=714 ;

--
-- Dumping data for table `parent_survey`
--

INSERT INTO `parent_survey` (`parent_survey_id`, `school_code`, `assessment_id`, `survey_cat_id`, `survey_type`, `survey_sub_cat_id`, `parent_response`, `response`) VALUES
(658, 'HYD0001', 29, 1, 'parents', 1, '0', 'R1'),
(659, 'HYD0001', 29, 1, 'parents', 2, '0', 'R1'),
(660, 'HYD0001', 29, 1, 'parents', 3, 'Select', 'R1'),
(661, 'HYD0001', 29, 1, 'parents', 4, 'Select', 'R1'),
(662, 'HYD0001', 29, 1, 'parents', 5, 'Select', 'R1'),
(663, 'HYD0001', 29, 1, 'parents', 6, 'Select', 'R1'),
(664, 'HYD0001', 29, 1, 'parents', 7, 'Select', 'R1'),
(665, 'HYD0001', 29, 1, 'parents', 8, 'Select', 'R1'),
(666, 'HYD0001', 29, 2, 'parents', 9, 'Select', 'R1'),
(667, 'HYD0001', 29, 2, 'parents', 10, 'Select', 'R1'),
(668, 'HYD0001', 29, 2, 'parents', 11, 'Select', 'R1'),
(669, 'HYD0001', 29, 2, 'parents', 12, 'Select', 'R1'),
(670, 'HYD0001', 29, 2, 'parents', 29, 'Select', 'R1'),
(671, 'HYD0001', 29, 3, 'parents', 13, 'Select', 'R1'),
(672, 'HYD0001', 29, 3, 'parents', 14, 'Select', 'R1'),
(673, 'HYD0001', 29, 3, 'parents', 15, 'Select', 'R1'),
(674, 'HYD0001', 29, 3, 'parents', 16, 'Select', 'R1'),
(675, 'HYD0001', 29, 4, 'parents', 17, 'Select', 'R1'),
(676, 'HYD0001', 29, 4, 'parents', 18, 'Select', 'R1'),
(677, 'HYD0001', 29, 4, 'parents', 19, 'Select', 'R1'),
(678, 'HYD0001', 29, 4, 'parents', 20, 'Select', 'R1'),
(679, 'HYD0001', 29, 4, 'parents', 27, '', 'R1'),
(680, 'HYD0001', 29, 4, 'parents', 28, '', 'R1'),
(681, 'HYD0001', 29, 5, 'parents', 21, 'Select', 'R1'),
(682, 'HYD0001', 29, 5, 'parents', 22, 'Select', 'R1'),
(683, 'HYD0001', 29, 5, 'parents', 23, 'Select', 'R1'),
(684, 'HYD0001', 29, 6, 'parents', 24, 'Select', 'R1'),
(685, 'HYD0001', 29, 6, 'parents', 25, 'Select', 'R1'),
(686, 'HYD0001', 29, 6, 'parents', 26, 'Select', 'R1'),
(687, 'HYD0001', 29, 1, 'parents', 1, '0', 'R2'),
(688, 'HYD0001', 29, 1, 'parents', 2, '1', 'R2'),
(689, 'HYD0001', 29, 1, 'parents', 3, 'Select', 'R2'),
(690, 'HYD0001', 29, 1, 'parents', 4, 'Select', 'R2'),
(691, 'HYD0001', 29, 1, 'parents', 5, 'Select', 'R2'),
(692, 'HYD0001', 29, 1, 'parents', 6, 'Select', 'R2'),
(693, 'HYD0001', 29, 1, 'parents', 7, 'Select', 'R2'),
(694, 'HYD0001', 29, 1, 'parents', 8, 'Select', 'R2'),
(695, 'HYD0001', 29, 2, 'parents', 9, 'Select', 'R2'),
(696, 'HYD0001', 29, 2, 'parents', 10, 'Select', 'R2'),
(697, 'HYD0001', 29, 2, 'parents', 11, 'Select', 'R2'),
(698, 'HYD0001', 29, 2, 'parents', 12, 'Select', 'R2'),
(699, 'HYD0001', 29, 2, 'parents', 13, 'Select', 'R2'),
(700, 'HYD0001', 29, 3, 'parents', 14, 'Select', 'R2'),
(701, 'HYD0001', 29, 3, 'parents', 15, 'Select', 'R2'),
(702, 'HYD0001', 29, 3, 'parents', 16, 'Select', 'R2'),
(703, 'HYD0001', 29, 3, 'parents', 17, 'Select', 'R2'),
(704, 'HYD0001', 29, 4, 'parents', 18, 'Select', 'R2'),
(705, 'HYD0001', 29, 4, 'parents', 19, 'Select', 'R2'),
(706, 'HYD0001', 29, 4, 'parents', 20, 'Select', 'R2'),
(707, 'HYD0001', 29, 4, 'parents', 21, 'Select', 'R2'),
(708, 'HYD0001', 29, 5, 'parents', 22, 'Select', 'R2'),
(709, 'HYD0001', 29, 5, 'parents', 23, 'Select', 'R2'),
(710, 'HYD0001', 29, 5, 'parents', 24, 'Select', 'R2'),
(711, 'HYD0001', 29, 6, 'parents', 25, 'Select', 'R2'),
(712, 'HYD0001', 29, 6, 'parents', 26, 'Select', 'R2'),
(713, 'HYD0001', 29, 6, 'parents', 27, 'Select', 'R2');

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
(2, 'B Ed', 'admin', '2012-09-11 23:25:14');

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
(2, 'Investments on', 'Invest', 'prasanna', '2012-11-21'),
(3, 'Financial Expenses', 'loan', 'prasanna', '2012-11-21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

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
(19, 'Investments On', 2, 'Investments On', 'prasanth', '2012-08-21'),
(20, 'Land', 2, 'Investments on', 'prasanth', '2012-08-21'),
(21, 'Construction', 2, 'Investments On', 'prasanth', '2012-08-21'),
(22, 'Furniture', 2, 'Investments On', 'prasanth', '2012-08-21'),
(23, 'Vehicle', 2, 'Investments On', 'prasanth', '2012-08-21'),
(24, 'Computers', 2, 'Investments On', 'prasanth', '2012-08-21'),
(25, 'Others', 2, 'Investments On', 'prasanth', '2012-08-21'),
(26, 'Loan Taken', 3, 'Financial Expenses', 'prasanth', '2012-08-21'),
(27, 'Interest Rate (per annum)', 3, 'Financial Expenses', 'prasanth', '2012-08-21'),
(28, 'Years', 3, 'Financial Expenses', 'prasanth', '2012-08-21'),
(29, 'No. of Yearly Payments', 3, 'Financial Expenses', 'prasanth', '2012-08-21'),
(30, 'Current Year', 3, 'Financial Expenses', 'prasanth', '2012-08-21'),
(31, 'EMI', 3, 'Financial Expenses', 'prasanna', '2012-08-21'),
(32, 'Bank Charges', 3, 'Financial Expenses', 'prasanna', '2012-08-21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ref_facility_category`
--

INSERT INTO `ref_facility_category` (`facility_cat_id`, `facility_cat_name`, `update_user`, `update_date`) VALUES
(1, 'Building', 'admin', '2012-08-07'),
(2, 'Learning Infrastructure', 'admin', '2012-08-07'),
(3, 'School Infrastructure', 'admin', '2012-08-07'),
(4, 'Activities', 'admin', '2012-08-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `ref_facility_sub_category`
--

INSERT INTO `ref_facility_sub_category` (`facility_sub_cat_id`, `facility_sub_cat_name`, `facility_sub_cat_type_field`, `facility_sub_cat_type`, `facility_cat_id`, `update_user`, `update_date`) VALUES
(1, 'Ownership', 'Owned,Partially Owned,Rented', 'dropdown', 1, 'admin', '2012-08-07'),
(2, 'Number of Class Rooms', 'NULL', 'textbox', 1, 'admin', '2012-08-07'),
(3, 'Area(sq feet)', 'Sq.ft,Sq.yard', 'dropdown', 1, 'admin', '2012-08-07'),
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
(20, 'Playground', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(21, 'Indoor games', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(22, 'outdoor games', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(23, 'Inter / Intra Games', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(24, 'Access to Games', 'Yes,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(25, 'Safety', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(26, 'Cleanliness', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(27, 'Drinking Water', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(28, 'Fire Extinguisher', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(29, 'First aid', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(30, 'Other Teaching Aids', 'Yes,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-11'),
(31, 'Ventilation', 'Yes,Ineffective,No', 'dropdown', 4, 'admin', '2012-11-19');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ref_fee`
--

INSERT INTO `ref_fee` (`fee_id`, `fee_name`, `fee_category`, `update_user`, `update_date`) VALUES
(1, 'Admissions Fee', 'school_fee', 'prasanth', '2012-08-21 00:00:00'),
(2, 'Tuition Fees', 'school_fee', 'prasanth', '2012-08-21 00:00:00'),
(3, 'Term Fees', 'school_fee', 'prasanth', '2012-08-21 00:00:00'),
(4, 'Exam Fees', 'school_fee', 'prasanth', '2012-08-21 00:00:00'),
(5, 'Computer Fees', 'school_fee', 'prasanth', '2012-08-21 00:00:00'),
(6, 'Others', 'school_fee', 'prasanth', '2012-08-21 00:00:00'),
(7, 'Books etc per student', 'other_fee', 'prasanth', '2012-08-21 00:00:00'),
(8, 'Uniform, Tie, Belt, ID, etc per student', 'other_fee', 'prasanth', '2012-08-21 00:00:00'),
(9, 'Fees charged for transport per month', 'transport_fee', 'admin', '2012-09-14 18:34:38');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ref_observ_category`
--

INSERT INTO `ref_observ_category` (`observ_cat_id`, `observ_cat_name`, `update_user`, `update_date`) VALUES
(1, 'Teacher-Student Interaction', 'prasanth', '2012-08-21'),
(2, 'Teaching-Learning Methodology', 'prasanth', '2012-08-21'),
(3, 'Assessment Technique', 'prasanth', '2012-08-21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(25, 'Students participate actively when asked questions', 3, 'Assessment Technique', 'Prasanna', '2012-08-21');

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
(4, 'Others', 'Prasanna', '2012-11-19'),
(5, 'None', 'Prasanna', '2012-11-19');

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
(2, 'How do you judge the English skills of your child ? 	\r\n	', 1, 'Parents', 'dropdown', '0,1,2,3,4', 'admin', '0000-00-00 00:00:00'),
(3, 'Are you satisfied with the Math Skills of your child? 	\r\n	', 1, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(4, 'How do you judge the Math skills of your child ? ', 1, 'Parents', 'dropdown', '0,1,2,3,4,5', 'admin', '0000-00-00 00:00:00'),
(5, 'Are you satisfied with the number of students who have passed from Class X in the school ?', 1, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(6, 'If no, what is one area of improvement to help students prepare better for Class X exam ?', 1, 'Parents', 'dropdown', '0,1,2,3,4,5,6', 'admin', '0000-00-00 00:00:00'),
(7, 'Are you satisfied with the school''s co-curricular activities (debates, physical training, quiz, events on special days) ? ', 1, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(8, 'Are you satisfied with the school''s extracurricular activities (outdoor games, indoor games, music and dance) ? ', 1, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(9, 'Do you find the school premises (classrooms, toilets) to be clean & hygienic ?', 2, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(10, 'Do you find the classrooms airy and well lit ?', 2, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(11, 'Does the computer lab in the school add value to your child''s education ? 	\r\n', 2, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(12, 'Does the library in the school help your child''s reading ability ? ', 2, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(13, 'Does the Science lab helpin improving your child''s knownledge?	\r\n 	', 2, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(14, 'Are you satisfied with the teachers in the school?	\r\n	', 3, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(15, 'What is one main area of improvement for the teachers?	\r\n 	', 3, 'Parents', 'dropdown', '0,1,2,3,4', 'admin', '0000-00-00 00:00:00'),
(16, 'Are you satisfied with the school principal?', 3, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(17, 'What is one main area of improvement for the principal?\r\n	', 3, 'Parents\r\n', 'dropdown', '0,1,2,3,4,5', 'admin', '0000-00-00 00:00:00'),
(18, 'What is the best way for the school to communicate with you about student related issues? 	\r\n	', 4, 'Parents', 'dropdown', '0,1,2,3,4,5', 'admin', '0000-00-00 00:00:00'),
(19, 'Has the school communicated about student related issues through the above chosen option?\r\n	', 4, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(20, 'What is the best way for the school to comunicate with you about school related issues?', 4, 'Parents', 'dropdown', '0,1,2,3,4,5', 'admin', '0000-00-00 00:00:00'),
(21, 'Has the school communicated about school related issues through the above chosen option?	\r\n	', 4, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(22, 'Do you think your child gets enough value for the fees paid? 	\r\n', 5, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(23, 'Has the management created appropriate fee payment options? ', 5, 'Parents', 'dropdown', '0,1,2', 'admin', '0000-00-00 00:00:00'),
(24, 'If no,what mode of fee payment would you prefer?\r\n	', 5, 'Parents', 'dropdown', '0,1,2,3,4,5', 'admin', '0000-00-00 00:00:00'),
(25, 'Would you continue your child in this school?', 6, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(26, 'If yes, till which class would your child continue?', 6, 'Parents', 'dropdown', '0,1,2,3,4', 'admin', '0000-00-00 00:00:00'),
(27, 'If no/not sure, what reason would encourage you to consider a shift?', 6, 'Parents', 'dropdown', '0,1,2,3,4,5,6', 'admin', '0000-00-00 00:00:00'),
(28, '23&24', 0, 'Parents', 'text', '', 'admin', '0000-00-00 00:00:00'),
(29, 'Does the science lab help in improving your child''s knowledge ?', 0, 'Parents', 'dropdown', '0,1,2,3', 'admin', '0000-00-00 00:00:00'),
(55, 'Academic Progress Monitoring', 7, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:06:13'),
(56, 'Remedial Program', 7, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:08:08'),
(57, 'Extra Class (After school hours)', 7, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:08:08'),
(58, 'Learning Aids', 8, 'teacher', 'text', '', 'prasanth', '2012-09-22 14:10:02'),
(59, 'Computer(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:13:24'),
(60, 'Techno Class(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:13:24'),
(61, 'Laboratory(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:13:51'),
(62, 'Models(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:13:51'),
(63, 'Charts(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:14:25'),
(64, 'Others(1=Yes, 2=No)', 8, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:14:25'),
(65, 'Activity based learning (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:15:36'),
(66, 'Competitions (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:15:36'),
(67, 'Expert guest lecture (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:16:09'),
(68, 'Field Visits (5=Nil or 0)', 8, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:16:09'),
(69, 'Competitions (5=Nil or 0)', 9, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:16:57'),
(70, 'Sports (5=Nil or 0)', 9, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:16:57'),
(74, 'Hobby Clubs (1=Yes 2=No)', 9, 'teacher', 'text', '', 'prasanth', '2012-09-22 14:17:58'),
(75, 'Sports', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:19:14'),
(76, 'Music / Dance', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:19:14'),
(77, 'Quiz / Debate', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:19:44'),
(78, 'NCC / Guide', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:19:44'),
(79, 'Others', 9, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:19:54'),
(80, 'Curriculum/Lesson Planning', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:20:39'),
(81, 'Teacher Involvement', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:20:39'),
(82, 'Syllabus Coverage', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:21:17'),
(83, 'Teachers Meeting', 10, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:21:17'),
(84, 'Performance Review Frequency (5=Never)', 11, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:22:15'),
(85, 'Teacher Support / Help', 11, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 14:22:15'),
(86, 'Training (1=Yes, 2=No)', 11, 'teacher', 'text', '', 'prasanth', '2012-09-22 14:24:19'),
(87, 'Teaching', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:24:44'),
(88, 'English', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:24:44'),
(89, 'Learning Aids', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:25:13'),
(90, 'Subject', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:25:13'),
(91, 'Others', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:25:56'),
(92, 'Professional Development', 11, 'teacher', 'text', '', 'prasanth', '2012-09-22 14:25:56'),
(93, 'Participation in new initiatives', 11, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 14:26:38'),
(94, 'Encourage new ideas from teachers', 11, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 14:26:38'),
(95, 'Financial Incentive (1=Yes 2=No)', 12, 'teacher', 'text', '', 'prasanth', '2012-09-22 14:27:09'),
(96, 'Gifts', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:18:34'),
(97, 'Bonus', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:19:08'),
(98, 'Over-time', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:19:08'),
(99, 'Others', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:19:54'),
(100, 'Future Attrition', 12, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:19:54'),
(101, 'Teacher Attrition Reason (5=Others)', 12, 'teacher', 'dropdown', '1,2,3,4,5', 'prasanth', '2012-09-22 15:20:24'),
(102, 'Goals & Aspiration', 13, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 15:21:16'),
(103, 'Enrollment (Num)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:21:16'),
(104, 'Student Fee (% Increase)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:22:13'),
(105, 'Infrastructure (Additions)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:22:13'),
(106, 'Technology (Additions)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:23:30'),
(107, 'Learning Outcome (% Improvement)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:23:30'),
(108, 'Teacher Competency (% Improvement)', 13, 'teacher', 'dropdown', '1,2', 'prasanth', '2012-09-22 15:24:16'),
(109, 'Special Projects - Teacher Meeting?', 14, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 15:24:16'),
(110, 'Allocation of Substitute - Delegated?', 14, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 15:25:29'),
(111, 'Lesson Plan - Substitute teacher', 14, 'teacher', 'dropdown', '1,2,3', 'prasanth', '2012-09-22 15:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tenth_category`
--

CREATE TABLE IF NOT EXISTS `ref_tenth_category` (
  `tenth_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenth_questions_name` text NOT NULL,
  `tenth_select_value` varchar(20) NOT NULL,
  `tenth_select_value_type` varchar(20) NOT NULL,
  `updateuser` varchar(20) NOT NULL,
  `updatedate` date NOT NULL,
  PRIMARY KEY (`tenth_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ref_tenth_category`
--

INSERT INTO `ref_tenth_category` (`tenth_cat_id`, `tenth_questions_name`, `tenth_select_value`, `tenth_select_value_type`, `updateuser`, `updatedate`) VALUES
(1, 'Does the School has class X?', 'Yes,No', 'dropdown', 'Prasanna', '2012-11-19'),
(2, 'Does the School has class 3?', 'Yes,No', 'dropdown', 'Prasanna', '2012-11-19'),
(3, 'Does the School has class 5?', 'Yes,No', 'dropdown', 'Prasanna', '2012-11-19'),
(4, 'Does the School has class 7?', 'Yes,No', 'dropdown', 'Prasanna', '2012-11-19'),
(5, 'Does the School has class 9?', 'Yes,No', 'dropdown', 'Prasanna', '2012-11-19');

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
(1, 'M3B1', 'student', 'prasanth', '2012-09-30 11:30:40'),
(2, 'E3B1', 'student', 'prasanth', '2012-09-30 11:30:40'),
(3, 'E7B3', 'teacher', 'prasanth', '2012-09-30 11:31:33'),
(4, 'M7B1', 'teacher', 'prasanth', '2012-09-30 11:31:33');

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
(1, '1', 3, 'E7B3', 'dropdown', '0,1,2', 'prasanth', '2012-09-30 14:28:16'),
(2, '2(i)', 3, 'E7B3', 'dropdown', '0,1,2', 'prasanth', '2012-09-30 14:28:16'),
(3, '2(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:28:58'),
(4, '3(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:28:58'),
(5, '3(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:29:32'),
(6, '4(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:29:32'),
(7, '4(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:30:26'),
(8, '5(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:30:26'),
(9, '5(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:30:58'),
(10, '5(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:30:58'),
(11, '5(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:31:26'),
(12, '6(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:31:26'),
(13, '6(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:31:48'),
(14, '6(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:31:48'),
(15, '6(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:32:23'),
(16, '7(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:32:23'),
(17, '7(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:33:02'),
(18, '7(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:33:02'),
(19, '7(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:33:29'),
(20, '8(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:33:29'),
(21, '8(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:33:51'),
(22, '8(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:33:51'),
(23, '8(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:34:20'),
(24, '8(v)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:34:20'),
(25, '8(vi)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:35:04'),
(26, '9(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:35:04'),
(27, '9(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:35:40'),
(28, '10(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:35:40'),
(29, '10(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:38:26'),
(30, '11(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:38:26'),
(31, '11(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:38:49'),
(32, '12', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:38:49'),
(33, '13(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:39:30'),
(34, '13(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:39:30'),
(35, '13(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:43:56'),
(36, '13(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:43:56'),
(37, '14(i)a', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:44:33'),
(38, '14(i)b', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:44:33'),
(39, '14(ii)a', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:45:03'),
(40, '14(ii)b', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:45:03'),
(41, '15', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:45:30'),
(42, '16(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:45:30'),
(43, '16(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:46:35'),
(44, '16(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:46:35'),
(45, '16(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:47:02'),
(46, '17(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:47:02'),
(47, '17(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:47:27'),
(48, '17(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:47:27'),
(49, '17(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:48:10'),
(50, '18(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:48:10'),
(51, '18(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:48:30'),
(52, '18(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:48:30'),
(53, '18(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:48:55'),
(54, '19(i)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:48:55'),
(55, '19(ii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:49:17'),
(56, '19(iii)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:49:17'),
(57, '19(iv)', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:49:37'),
(58, '20', 3, 'E7B3', 'dropdown', '0,1', 'prasanth', '2012-09-30 14:49:37'),
(59, '1(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:16:22'),
(60, '1(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:16:22'),
(61, '1(iii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:17:26'),
(62, '2(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:17:26'),
(63, '2(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:18:17'),
(64, '2(iii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:18:17'),
(65, '3', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:19:04'),
(66, '4', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:19:04'),
(67, '5(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:20:08'),
(68, '5(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 14:20:08'),
(69, '6', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:21:13'),
(70, '7', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 14:21:13'),
(71, '8(i)', 1, 'M3B1', 'dropdown', '0,0.5', 'prasanth', '2012-10-01 14:22:20'),
(72, '8(ii)', 1, 'M3B1', 'dropdown', '0,0.5', 'prasanth', '2012-10-01 14:22:20'),
(73, '9(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:23:03'),
(74, '9(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:23:03'),
(75, '10', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:23:46'),
(76, '11', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:23:46'),
(77, '12', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:24:38'),
(78, '13(i)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5', 'prasanth', '2012-10-01 14:24:38'),
(79, '13(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5', 'prasanth', '2012-10-01 14:25:26'),
(80, '14(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:25:26'),
(81, '14(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:26:24'),
(82, '15(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:26:24'),
(83, '15(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:27:54'),
(84, '16(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:27:54'),
(85, '16(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:28:32'),
(86, '17', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:28:32'),
(87, '18', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:29:39'),
(88, '19', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:29:39'),
(89, '20', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:30:32'),
(90, '21', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:30:32'),
(91, '22', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:31:09'),
(92, '23', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:31:09'),
(93, '24(i)', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 14:35:54'),
(94, '24(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:35:54'),
(95, '25(i)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:37:06'),
(96, '25(ii)', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:37:06'),
(97, '26', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:38:01'),
(98, '27', 1, 'M3B1', 'dropdown', '0,0.5,1', 'prasanth', '2012-10-01 14:38:01'),
(99, '28', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2,2.5,3', 'prasanth', '2012-10-01 14:38:45'),
(100, '29', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 14:38:45'),
(101, '30', 1, 'M3B1', 'dropdown', '0,0.5,1,1.5,2', 'prasanth', '2012-10-01 14:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `school_code` varchar(11) NOT NULL,
  `school_name` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `date`, `school_code`, `school_name`) VALUES
(1, '2012-08-16', 'HYD0001', 'BBD'),
(2, '2012-08-07', 'HYD0002', 'SLIC'),
(15, '2012-08-07', 'HYD0003', 'Ingram Institute'),
(16, '2012-08-27', 'HYD0016', 'VMSC'),
(17, '2012-08-28', 'DEL0017', 'DPS'),
(19, '2012-08-29', 'BLR0019', 'Dehradun Public School'),
(20, '2012-09-23', 'DEL0020', 'ABC'),
(21, '2012-09-23', 'BLR0021', 'ABC'),
(22, '2012-10-03', 'BLR0022', 'Shantiniketan High School');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=890 ;

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
(372, 'HYD0002', 1, 1, 'Owned', '', '0000-00-00'),
(373, 'HYD0002', 1, 2, '12', '', '0000-00-00'),
(374, 'HYD0002', 1, 3, '1650', '', '0000-00-00'),
(375, 'HYD0002', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(376, 'HYD0002', 2, 4, 'Effective', '', '0000-00-00'),
(377, 'HYD0002', 2, 6, 'Effective', '', '0000-00-00'),
(378, 'HYD0002', 2, 7, 'Yes', '', '0000-00-00'),
(379, 'HYD0002', 2, 8, 'Effective', '', '0000-00-00'),
(380, 'HYD0002', 2, 9, 'Effective', '', '0000-00-00'),
(381, 'HYD0002', 2, 12, 'Effective', '', '0000-00-00'),
(382, 'HYD0002', 3, 13, 'Effective', '', '0000-00-00'),
(383, 'HYD0002', 3, 14, 'Ineffective', '', '0000-00-00'),
(384, 'HYD0002', 3, 15, 'Yes', '', '0000-00-00'),
(385, 'HYD0002', 3, 16, 'Effective', '', '0000-00-00'),
(386, 'HYD0002', 3, 17, 'Effective', '', '0000-00-00'),
(387, 'HYD0002', 3, 18, 'Effective', '', '0000-00-00'),
(388, 'HYD0002', 3, 19, 'Effective', '', '0000-00-00'),
(389, 'HYD0002', 3, 20, 'Yes', '', '0000-00-00'),
(390, 'HYD0002', 3, 21, 'Yes', '', '0000-00-00'),
(391, 'HYD0002', 3, 22, 'Yes', '', '0000-00-00'),
(392, 'HYD0002', 3, 23, 'Effective', '', '0000-00-00'),
(393, 'HYD0002', 4, 24, 'Effective', '', '0000-00-00'),
(394, 'HYD0002', 4, 25, 'Effective', '', '0000-00-00'),
(395, 'HYD0002', 4, 26, 'Effective', '', '0000-00-00'),
(396, 'HYD0002', 4, 27, 'Effective', '', '0000-00-00'),
(397, 'HYD0002', 4, 28, 'Effective', '', '0000-00-00'),
(398, 'HYD0002', 4, 29, 'No', '', '0000-00-00'),
(788, 'HYD0003', 4, 24, 'Effective', '', '0000-00-00'),
(789, 'HYD0003', 4, 24, 'Effective', '', '0000-00-00'),
(790, 'HYD0003', 3, 13, 'Effective', '', '0000-00-00'),
(791, 'HYD0003', 1, 5, 'Semi-Pucca', '', '0000-00-00'),
(792, 'HYD0003', 4, 24, 'Effective', '', '0000-00-00'),
(793, 'HYD0003', 2, 6, '', '', '0000-00-00'),
(794, 'HYD0003', 2, 7, 'Yes', '', '0000-00-00'),
(795, 'HYD0003', 2, 8, 'Effective', '', '0000-00-00'),
(796, 'HYD0003', 2, 9, 'Effective', '', '0000-00-00'),
(797, 'HYD0003', 2, 12, 'Effective', '', '0000-00-00'),
(798, 'HYD0003', 3, 13, 'Effective', '', '0000-00-00'),
(799, 'HYD0003', 3, 14, 'Effective', '', '0000-00-00'),
(800, 'HYD0003', 3, 15, 'Yes', '', '0000-00-00'),
(801, 'HYD0003', 3, 16, 'Effective', '', '0000-00-00'),
(802, 'HYD0003', 3, 17, 'Effective', '', '0000-00-00'),
(803, 'HYD0003', 3, 18, 'Effective', '', '0000-00-00'),
(804, 'HYD0003', 3, 19, 'Effective', '', '0000-00-00'),
(805, 'HYD0003', 3, 20, 'Yes', '', '0000-00-00'),
(806, 'HYD0003', 3, 21, 'Yes', '', '0000-00-00'),
(807, 'HYD0003', 3, 22, 'Yes', '', '0000-00-00'),
(808, 'HYD0003', 3, 23, 'Effective', '', '0000-00-00'),
(809, 'HYD0003', 4, 24, 'Effective', '', '0000-00-00'),
(810, 'HYD0003', 4, 25, 'Effective', '', '0000-00-00'),
(811, 'HYD0003', 4, 26, 'Effective', '', '0000-00-00'),
(812, 'HYD0003', 4, 27, 'Effective', '', '0000-00-00'),
(813, 'HYD0003', 4, 28, 'Effective', '', '0000-00-00'),
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
(850, 'BLR0019', 1, 3, 'Sq.yard', '', '0000-00-00'),
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
(886, 'HYD0003', 2, 4, 'Effective', '', '0000-00-00'),
(887, 'HYD0003', 2, 30, 'Effective', '', '0000-00-00'),
(888, 'HYD0002', 2, 30, 'Effective', '', '0000-00-00'),
(889, 'BLR0019', 4, 31, 'Yes', '', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=951 ;

--
-- Dumping data for table `school_fees`
--

INSERT INTO `school_fees` (`school_fee_id`, `assessment_id`, `fee_id`, `class_id`, `school_code`, `fee_term_type`, `school_fee_category`, `fee_amount`, `quantity`, `total_amount`, `update_user`, `update_date`) VALUES
(873, 31, 1, 1, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(874, 31, 2, 1, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(875, 31, 3, 1, 'HYD0002', 'Annually', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(876, 31, 4, 1, 'HYD0002', 'Annually', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(877, 31, 5, 1, 'HYD0002', 'Monthly', 'school_fee', 55, 0, 0, 'admin', '0000-00-00'),
(878, 31, 6, 1, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(879, 31, 1, 2, 'HYD0002', 'Thrice', 'school_fee', 55, 0, 0, 'admin', '0000-00-00'),
(880, 31, 2, 2, 'HYD0002', 'Thrice', 'school_fee', 5, 0, 0, 'admin', '0000-00-00'),
(881, 31, 3, 2, 'HYD0002', 'Annually', 'school_fee', 55, 0, 0, 'admin', '0000-00-00'),
(882, 31, 4, 2, 'HYD0002', 'Annually', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(883, 31, 5, 2, 'HYD0002', 'Monthly', 'school_fee', 232136, 0, 0, 'admin', '0000-00-00'),
(884, 31, 6, 2, 'HYD0002', 'Thrice', 'school_fee', 232, 0, 0, 'admin', '0000-00-00'),
(885, 31, 1, 3, 'HYD0002', 'Thrice', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(886, 31, 2, 3, 'HYD0002', 'Thrice', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(887, 31, 3, 3, 'HYD0002', 'Annually', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(888, 31, 4, 3, 'HYD0002', 'Annually', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(889, 31, 5, 3, 'HYD0002', 'Monthly', 'school_fee', 232, 0, 0, 'admin', '0000-00-00'),
(890, 31, 6, 3, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(891, 31, 1, 4, 'HYD0002', 'Thrice', 'school_fee', 323, 0, 0, 'admin', '0000-00-00'),
(892, 31, 2, 4, 'HYD0002', 'Thrice', 'school_fee', 232, 0, 0, 'admin', '0000-00-00'),
(893, 31, 3, 4, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(894, 31, 4, 4, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(895, 31, 5, 4, 'HYD0002', 'Monthly', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(896, 31, 6, 4, 'HYD0002', 'Thrice', 'school_fee', 232, 0, 0, 'admin', '0000-00-00'),
(897, 31, 1, 5, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(898, 31, 2, 5, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(899, 31, 3, 5, 'HYD0002', 'Annually', 'school_fee', 323, 0, 0, 'admin', '0000-00-00'),
(900, 31, 4, 5, 'HYD0002', 'Annually', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(901, 31, 5, 5, 'HYD0002', 'Monthly', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(902, 31, 6, 5, 'HYD0002', 'Thrice', 'school_fee', 232, 0, 0, 'admin', '0000-00-00'),
(903, 31, 1, 6, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(904, 31, 2, 6, 'HYD0002', 'Thrice', 'school_fee', 3232, 0, 0, 'admin', '0000-00-00'),
(905, 31, 3, 6, 'HYD0002', 'Annually', 'school_fee', 0, 0, 0, 'admin', '0000-00-00'),
(906, 31, 4, 6, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(907, 31, 5, 6, 'HYD0002', 'Monthly', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(908, 31, 6, 6, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(909, 31, 1, 7, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(910, 31, 2, 7, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(911, 31, 3, 7, 'HYD0002', 'Annually', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(912, 31, 4, 7, 'HYD0002', 'Annually', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(913, 31, 5, 7, 'HYD0002', 'Monthly', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(914, 31, 6, 7, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(915, 31, 1, 8, 'HYD0002', 'Thrice', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(916, 31, 2, 8, 'HYD0002', 'Thrice', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(917, 31, 3, 8, 'HYD0002', 'Annually', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(918, 31, 4, 8, 'HYD0002', 'Annually', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(919, 31, 5, 8, 'HYD0002', 'Monthly', 'school_fee', 23, 0, 0, 'admin', '0000-00-00'),
(920, 31, 6, 8, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(921, 31, 1, 9, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(922, 31, 2, 9, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(923, 31, 3, 9, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(924, 31, 4, 9, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(925, 31, 5, 9, 'HYD0002', 'Monthly', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(926, 31, 6, 9, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(927, 31, 1, 10, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(928, 31, 2, 10, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(929, 31, 3, 10, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(930, 31, 4, 10, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(931, 31, 5, 10, 'HYD0002', 'Monthly', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(932, 31, 6, 10, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(933, 31, 1, 11, 'HYD0002', 'Thrice', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(934, 31, 2, 11, 'HYD0002', 'Thrice', 'school_fee', 3, 0, 0, 'admin', '0000-00-00'),
(935, 31, 3, 11, 'HYD0002', 'Annually', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(936, 31, 4, 11, 'HYD0002', 'Annually', 'school_fee', 32, 0, 0, 'admin', '0000-00-00'),
(937, 31, 5, 11, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(938, 31, 6, 11, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(939, 31, 1, 12, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(940, 31, 2, 12, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(941, 31, 3, 12, 'HYD0002', 'Annually', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(942, 31, 4, 12, 'HYD0002', 'Annually', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(943, 31, 5, 12, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(944, 31, 6, 12, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(945, 31, 1, 13, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(946, 31, 2, 13, 'HYD0002', 'Thrice', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(947, 31, 3, 13, 'HYD0002', 'Annually', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(948, 31, 4, 13, 'HYD0002', 'Annually', 'school_fee', 22, 0, 0, 'admin', '0000-00-00'),
(949, 31, 5, 13, 'HYD0002', 'Monthly', 'school_fee', 2, 0, 0, 'admin', '0000-00-00'),
(950, 31, 6, 13, 'HYD0002', 'Thrice', 'school_fee', 2, 0, 0, 'admin', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`profile_id`, `school_code`, `school_name`, `school_desc`, `school_type`, `location`, `year_of_estblished`, `recognition`, `recognition_upto_class`, `accredition`, `correspondent_name`, `phone_no`, `qualification`, `school_mailing_address`, `city`, `pincode`, `co_education`, `update_user`, `update_date`) VALUES
(5, 'HYD0001', ' BBD ', 'ok', '', 'HYD', 1984, 'Yes', 'Class 10', 'xz', '1793702730', '98910910', '1200', 'sbjdb@hj.com', 'asasa', 123456, 'No', '', '0000-00-00'),
(14, 'HYD0002', ' SLIC ', '', '', 'HYD', 1965, 'Yes', 'Class 10', 'SSLC', '', '', '', '', '', 560003, 'Yes', '', '0000-00-00'),
(19, 'HYD0003', ' Ingram Institute ', 'IIS', '', 'HYD', 1985, 'Yes', 'Class 10', 'ICSE', '', '9568554666', 'MTECH', 'sndk', '', 500063, 'Yes', '', '0000-00-00'),
(20, 'HYD0016', ' VMSC ', '', '', 'HYD', 2010, 'Yes', 'Class 10', '', '', '', '', '', '', 560063, 'Yes', '', '0000-00-00'),
(22, 'BLR0019', 'Dehradun Public School', 'DPS', '', 'HYD', 1984, 'Yes', 'Class 5', 'NCERT', 'Mr.Sandeep', '9700445566', 'Graduate1', 'H.No:1-2-345,vijaynagar colony,Quthbullahpur', 'hyderabad', 500062, 'Yes', '', '0000-00-00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_test`
--


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
  `designation` varchar(20) NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `assessment_id`, `school_code`, `academic_year`, `teacher_name`, `fulltime_parttime`, `gender`, `age`, `qualification`, `teacher_training`, `teaching_exp_years`, `years_in_current_school`, `class_segment_taught`, `subject_taught`, `specific_subject`, `monthly_salary`, `designation`, `update_user`, `update_date`) VALUES
(11, 31, 'HYD0002', 0000, 'A', 'Full time', 'Female', 0, 'Graduate', 'M.Ed', 0, 0, 'PP', '', 'YES', 0, '', '', '2012-10-06 13:42:18'),
(12, 31, 'HYD0002', 0000, 'B', 'Full time', 'Male', 0, 'Graduate', 'B.Ed', 0, 0, 'PP', '', 'YES', 0, '', '', '2012-10-06 13:42:18'),
(13, 31, 'HYD0002', 0000, 'C', 'Part time', 'Select', 0, 'Graduate', 'M.Ed', 0, 0, 'S', '', 'NO', 0, '', 'admin', '2012-10-06 13:42:18'),
(14, 31, 'HYD0002', 0000, 'D', 'Full time', 'Male', 0, 'HSC', 'B.Ed', 0, 0, 'P', '', 'YES', 0, '', '', '2012-10-06 13:42:46'),
(15, 31, 'HYD0002', 0000, 'E', 'Full time', 'Female', 0, 'Graduate', 'B.Ed', 0, 0, 'PP', '', 'YES', 0, '', '', '2012-10-06 13:42:46'),
(16, 28, 'BLR0019', 0000, '', 'Select', 'Select', 0, 'Select', 'Others', 0, 0, 'Select', '', 'Select', 0, '', '', '2012-11-19 17:08:00'),
(17, 28, 'BLR0019', 0000, '', 'Select', 'Select', 0, 'Select', 'Select', 0, 0, 'Select', '', 'Select', 0, '', '', '2012-11-19 17:08:00');

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
(1, 0, 29, '1', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(2, 0, 29, '2(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(3, 0, 29, '2(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(4, 0, 29, '3(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(5, 0, 29, '3(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(6, 0, 29, '4(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(7, 0, 29, '4(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(8, 0, 29, '5(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(9, 0, 29, '5(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(10, 0, 29, '5(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(11, 0, 29, '5(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(12, 0, 29, '6(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(13, 0, 29, '6(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(14, 0, 29, '6(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(15, 0, 29, '6(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(16, 0, 29, '7(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(17, 0, 29, '7(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(18, 0, 29, '7(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(19, 0, 29, '7(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(20, 0, 29, '8(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(21, 0, 29, '8(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(22, 0, 29, '8(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(23, 0, 29, '8(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(24, 0, 29, '8(v)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(25, 0, 29, '8(vi)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(26, 0, 29, '9(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(27, 0, 29, '9(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(28, 0, 29, '10(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(29, 0, 29, '10(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(30, 0, 29, '11(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(31, 0, 29, '11(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(32, 0, 29, '12', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(33, 0, 29, '13(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(34, 0, 29, '13(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(35, 0, 29, '13(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(36, 0, 29, '13(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(37, 0, 29, '14(i)a', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(38, 0, 29, '14(i)b', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(39, 0, 29, '14(ii)a', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(40, 0, 29, '14(ii)b', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(41, 0, 29, '15', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(42, 0, 29, '16(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(43, 0, 29, '16(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(44, 0, 29, '16(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(45, 0, 29, '16(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(46, 0, 29, '17(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(47, 0, 29, '17(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(48, 0, 29, '17(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(49, 0, 29, '17(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(50, 0, 29, '18(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(51, 0, 29, '18(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(52, 0, 29, '18(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(53, 0, 29, '18(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(54, 0, 29, '19(i)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(55, 0, 29, '19(ii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(56, 0, 29, '19(iii)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(57, 0, 29, '19(iv)', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(58, 0, 29, '20', 'E7B3', '', 'PP&P', 'Graduate', 1, '0'),
(59, 0, 29, '1', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(60, 0, 29, '2(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(61, 0, 29, '2(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(62, 0, 29, '3(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(63, 0, 29, '3(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(64, 0, 29, '4(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(65, 0, 29, '4(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(66, 0, 29, '5(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(67, 0, 29, '5(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(68, 0, 29, '5(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(69, 0, 29, '5(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(70, 0, 29, '6(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(71, 0, 29, '6(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(72, 0, 29, '6(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(73, 0, 29, '6(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(74, 0, 29, '7(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(75, 0, 29, '7(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(76, 0, 29, '7(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(77, 0, 29, '7(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(78, 0, 29, '8(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(79, 0, 29, '8(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(80, 0, 29, '8(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(81, 0, 29, '8(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(82, 0, 29, '8(v)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(83, 0, 29, '8(vi)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(84, 0, 29, '9(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(85, 0, 29, '9(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(86, 0, 29, '10(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(87, 0, 29, '10(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(88, 0, 29, '11(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(89, 0, 29, '11(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(90, 0, 29, '12', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(91, 0, 29, '13(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(92, 0, 29, '13(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(93, 0, 29, '13(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(94, 0, 29, '13(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(95, 0, 29, '14(i)a', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(96, 0, 29, '14(i)b', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(97, 0, 29, '14(ii)a', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(98, 0, 29, '14(ii)b', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(99, 0, 29, '15', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(100, 0, 29, '16(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(101, 0, 29, '16(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(102, 0, 29, '16(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(103, 0, 29, '16(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(104, 0, 29, '17(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(105, 0, 29, '17(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(106, 0, 29, '17(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(107, 0, 29, '17(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(108, 0, 29, '18(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(109, 0, 29, '18(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(110, 0, 29, '18(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(111, 0, 29, '18(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(112, 0, 29, '19(i)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(113, 0, 29, '19(ii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(114, 0, 29, '19(iii)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(115, 0, 29, '19(iv)', 'E7B3', '', 'PP&P', 'HSC', 2, '0'),
(116, 0, 29, '20', 'E7B3', '', 'PP&P', 'HSC', 2, '0');

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
  `tenth_cat_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `tenth`
--

INSERT INTO `tenth` (`id`, `school_code`, `assessment_id`, `nos_class_ten`, `nos_first_div_6gpa`, `nos_sec_div_5gpa`, `nos_third_div_4gpa`, `nos_failed_below_3gpa`, `tenth_cat_id`) VALUES
(13, 'HYD0001', 29, 5, 8, 7, 4, 6, 0),
(36, 'BLR0019', 28, 2, 5, 5, 5, 8, 0),
(37, 'HYD0016', 30, 1, 2, 2, 2, 2, 0),
(68, 'HYD0002', 31, 2, 2, 2, 2, 2, 0);

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
  `fee_amount_actual` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` float NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transport_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `transport_fees`
--

INSERT INTO `transport_fees` (`transport_fee_id`, `assessment_id`, `school_code`, `fee_id`, `class_id`, `transport_fee_category`, `fee_amount`, `fee_amount_actual`, `quantity`, `total_amount`, `update_user`, `update_date`) VALUES
(1, 30, 'HYD0016', 9, 1, 'transport_fee', 1, 0, 2, 0, 'admin', '2012-09-15 16:04:34'),
(2, 30, 'HYD0016', 9, 2, 'transport_fee', 3, 0, 4, 0, 'admin', '2012-09-15 16:04:34'),
(3, 30, 'HYD0016', 9, 3, 'transport_fee', 23, 0, 3, 0, 'admin', '2012-09-15 16:04:34'),
(4, 30, 'HYD0016', 9, 4, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:34'),
(5, 30, 'HYD0016', 9, 5, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(6, 30, 'HYD0016', 9, 6, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(7, 30, 'HYD0016', 9, 7, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(8, 30, 'HYD0016', 9, 8, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(9, 30, 'HYD0016', 9, 9, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(10, 30, 'HYD0016', 9, 10, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(11, 30, 'HYD0016', 9, 11, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(12, 30, 'HYD0016', 9, 12, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(13, 30, 'HYD0016', 9, 13, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-15 16:04:35'),
(14, 29, 'HYD0001', 9, 1, 'transport_fee', 1, 0, 2, 0, 'admin', '2012-09-23 16:24:57'),
(15, 29, 'HYD0001', 9, 2, 'transport_fee', 2, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(16, 29, 'HYD0001', 9, 3, 'transport_fee', 22, 0, 2, 0, 'admin', '2012-09-23 16:24:57'),
(17, 29, 'HYD0001', 9, 4, 'transport_fee', 2, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(18, 29, 'HYD0001', 9, 5, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(19, 29, 'HYD0001', 9, 6, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(20, 29, 'HYD0001', 9, 7, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(21, 29, 'HYD0001', 9, 8, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(22, 29, 'HYD0001', 9, 9, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(23, 29, 'HYD0001', 9, 10, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(24, 29, 'HYD0001', 9, 11, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(25, 29, 'HYD0001', 9, 12, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(26, 29, 'HYD0001', 9, 13, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-09-23 16:24:57'),
(27, 32, 'HYD0003', 9, 1, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(28, 32, 'HYD0003', 9, 2, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(29, 32, 'HYD0003', 9, 3, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(30, 32, 'HYD0003', 9, 4, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(31, 32, 'HYD0003', 9, 5, 'transport_fee', 55, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(32, 32, 'HYD0003', 9, 6, 'transport_fee', 5, 0, 55, 0, 'admin', '2012-10-03 21:50:42'),
(33, 32, 'HYD0003', 9, 7, 'transport_fee', 0, 0, 55, 0, 'admin', '2012-10-03 21:50:42'),
(34, 32, 'HYD0003', 9, 8, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(35, 32, 'HYD0003', 9, 9, 'transport_fee', 5, 0, 55, 0, 'admin', '2012-10-03 21:50:42'),
(36, 32, 'HYD0003', 9, 10, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(37, 32, 'HYD0003', 9, 11, 'transport_fee', 5, 0, 55, 0, 'admin', '2012-10-03 21:50:42'),
(38, 32, 'HYD0003', 9, 12, 'transport_fee', 5, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(39, 32, 'HYD0003', 9, 13, 'transport_fee', 55, 0, 5, 0, 'admin', '2012-10-03 21:50:42'),
(40, 31, 'HYD0002', 9, 1, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(41, 31, 'HYD0002', 9, 2, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(42, 31, 'HYD0002', 9, 3, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(43, 31, 'HYD0002', 9, 4, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(44, 31, 'HYD0002', 9, 5, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(45, 31, 'HYD0002', 9, 6, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(46, 31, 'HYD0002', 9, 7, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(47, 31, 'HYD0002', 9, 8, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(48, 31, 'HYD0002', 9, 9, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(49, 31, 'HYD0002', 9, 10, 'transport_fee', 2, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(50, 31, 'HYD0002', 9, 11, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(51, 31, 'HYD0002', 9, 12, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36'),
(52, 31, 'HYD0002', 9, 13, 'transport_fee', 0, 0, 0, 0, 'admin', '2012-10-04 15:03:36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_roll`, `email`, `first_name`, `last_name`, `date_of_birth`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'pi@pi-us.com', 'pius', 'systems', '2010-09-13'),
(5, 'prasanth', '32250170a0dca92d53ec9624f336ca24', 'volunteer', 'pkali@pi-us.com', 'prasanth', 'k', '0000-00-00');

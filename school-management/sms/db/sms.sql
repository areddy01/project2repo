-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 11:10 AM
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
  `assessment_status` varchar(11) NOT NULL,
  `assessment_term_type` varchar(11) NOT NULL,
  `school_assessed_by` varchar(22) NOT NULL,
  `no_of_section` int(11) NOT NULL,
  `school_assessed_again_same_year` varchar(12) NOT NULL,
  `assessment_type_if_re_assessed` varchar(22) NOT NULL,
  `aps_Average` varchar(22) NOT NULL,
  `update_user` varchar(22) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`assessment_id`),
  UNIQUE KEY `School_code` (`school_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `school_code`, `academic_year`, `assessment_date`, `assessment_status`, `assessment_term_type`, `school_assessed_by`, `no_of_section`, `school_assessed_again_same_year`, `assessment_type_if_re_assessed`, `aps_Average`, `update_user`, `update_date`) VALUES
(30, 'DEL0001', 0000, 'August 14,2012', '', '', 'Darniki', 0, 'NO', 'Baseline', '', '', '0000-00-00'),
(32, 'HYD0022', 0000, ' ', '', '', '', 0, 'YES', 'Baseline', '', '', '0000-00-00');

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
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `enrollment_id` int(22) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(22) NOT NULL,
  `school_code` varchar(22) NOT NULL,
  `academic_year` year(4) NOT NULL,
  `class_id` int(22) NOT NULL,
  `class_name` varchar(22) NOT NULL,
  `class_segment` varchar(22) NOT NULL,
  `no_of_sections` int(22) NOT NULL,
  `total_enrollment_boys` int(22) NOT NULL,
  `total_enrollment_girls` int(22) NOT NULL,
  `total_new_admission_boys` int(22) NOT NULL,
  `total_new_admissions_girls` int(22) NOT NULL,
  `total_free_admissions_students` int(22) NOT NULL,
  PRIMARY KEY (`enrollment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `assessment_id`, `school_code`, `academic_year`, `class_id`, `class_name`, `class_segment`, `no_of_sections`, `total_enrollment_boys`, `total_enrollment_girls`, `total_new_admission_boys`, `total_new_admissions_girls`, `total_free_admissions_students`) VALUES
(1, 1, 'Delhi Public School', 0000, 1, '', '', 1, 1, 1, 1, 1, 1),
(2, 1, 'Delhi Public School', 0000, 2, '', '', 1, 1, 1, 11, 1, 1),
(3, 1, 'Delhi Public School', 0000, 3, '', '', 11, 0, 11, 1, 0, 0),
(4, 1, 'Delhi Public School', 0000, 4, '', '', 0, 0, 0, 0, 0, 0),
(5, 1, 'Delhi Public School', 0000, 5, '', '', 0, 0, 0, 0, 0, 0),
(6, 1, 'Delhi Public School', 0000, 6, '', '', 0, 0, 0, 0, 0, 0),
(7, 1, 'Delhi Public School', 0000, 7, '', '', 0, 0, 0, 0, 0, 0),
(8, 1, 'Delhi Public School', 0000, 8, '', '', 0, 0, 0, 0, 0, 0),
(9, 1, 'Delhi Public School', 0000, 9, '', '', 0, 0, 0, 0, 0, 0),
(10, 1, 'Delhi Public School', 0000, 10, '', '', 0, 0, 0, 0, 0, 0),
(11, 1, 'Delhi Public School', 0000, 11, '', '', 0, 0, 0, 0, 0, 0),
(12, 1, 'Delhi Public School', 0000, 12, '', '', 0, 0, 0, 0, 0, 0),
(13, 1, 'Delhi Public School', 0000, 13, '', '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `infra`
--

CREATE TABLE IF NOT EXISTS `infra` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_full_name` varchar(255) NOT NULL,
  `sch_graph_name` varchar(50) NOT NULL,
  `loc` varchar(10) NOT NULL,
  `year_of_estd` int(11) NOT NULL,
  `recognition` varchar(10) NOT NULL,
  `rcg_upto_class` int(11) NOT NULL,
  `sch_assessed_by` varchar(100) NOT NULL,
  `date_of_assessment` date NOT NULL,
  `flag_sch_assessed` varchar(10) NOT NULL,
  `ment_assessment` varchar(25) NOT NULL,
  `Sch_code` varchar(10) NOT NULL,
  `co_edu` varchar(10) NOT NULL,
  `accreditation` varchar(25) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `corr_name` varchar(100) NOT NULL,
  `ph_no` int(11) NOT NULL,
  `sch_mail_add` varchar(100) NOT NULL,
  `city_pincode` varchar(100) NOT NULL,
  `ownership` varchar(10) NOT NULL,
  `no_of_classrooms` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `const_type` varchar(20) NOT NULL,
  `comp_lab` varchar(20) NOT NULL,
  `no_of_comps` varchar(20) NOT NULL,
  `internet_avail` varchar(20) NOT NULL,
  `digi_class` varchar(20) NOT NULL,
  `library` varchar(20) NOT NULL,
  `sci_lab` varchar(20) NOT NULL,
  `other_teaching_aids` varchar(20) NOT NULL,
  `classrooms` varchar(20) NOT NULL,
  `staffroom` varchar(20) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `blackboards` varchar(20) NOT NULL,
  `benches` varchar(20) NOT NULL,
  `toilets` varchar(20) NOT NULL,
  `toilets_for_females` varchar(20) NOT NULL,
  `indoor_games` varchar(20) NOT NULL,
  `outdoor_games` varchar(20) NOT NULL,
  `inter_intra_events` varchar(20) NOT NULL,
  `access_to_games` varchar(20) NOT NULL,
  `safety` varchar(20) NOT NULL,
  `cleanliness` varchar(20) NOT NULL,
  `drinking_water` varchar(20) NOT NULL,
  `fire_extinguisher` varchar(20) NOT NULL,
  `first_aid` varchar(20) NOT NULL,
  `ventilation` varchar(20) NOT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `infra`
--


-- --------------------------------------------------------

--
-- Table structure for table `overdue`
--

CREATE TABLE IF NOT EXISTS `overdue` (
  `overdue_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `school_code` varchar(10) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `fee_overdue` float NOT NULL,
  `update_user` varchar(20) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`overdue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=209 ;

--
-- Dumping data for table `overdue`
--

INSERT INTO `overdue` (`overdue_id`, `assessment_id`, `school_code`, `class_id`, `class_name`, `no_of_students`, `fee_overdue`, `update_user`, `update_date`) VALUES
(195, 1, 'DEL0001', 1, '', 1, 1, '', '0000-00-00'),
(196, 1, 'DEL0001', 2, '', 1, 1, '', '0000-00-00'),
(197, 1, 'DEL0001', 3, '', 1, 1, '', '0000-00-00'),
(198, 1, 'DEL0001', 4, '', 1, 1, '', '0000-00-00'),
(199, 1, 'DEL0001', 5, '', 1, 1, '', '0000-00-00'),
(200, 1, 'DEL0001', 6, '', 12, 12, '', '0000-00-00'),
(201, 1, 'DEL0001', 7, '', 12, 12, '', '0000-00-00'),
(202, 1, 'DEL0001', 8, '', 12, 12, '', '0000-00-00'),
(203, 1, 'DEL0001', 9, '', 1, 1, '', '0000-00-00'),
(204, 1, 'DEL0001', 10, '', 1, 1, '', '0000-00-00'),
(205, 1, 'DEL0001', 11, '', 11, 1, '', '0000-00-00'),
(206, 1, 'DEL0001', 12, '', 1, 1, '', '0000-00-00'),
(207, 1, 'DEL0001', 13, '', 1, 1, '', '0000-00-00'),
(208, 1, 'DEL0001', 0, '', 0, 0, '', '0000-00-00');

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
(1, 'Nursery', 'Pre Primary', 'prasanth', '2012-09-03'),
(2, 'LKG', 'Pre Primary', 'prasanth', '2012-09-03'),
(3, 'UKG', 'Pre Primary', 'prasanth', '2012-09-03'),
(4, 'Class 1', 'Primary', 'prasanth', '2012-09-03'),
(5, 'Class 2', 'Primary', 'prasanth', '2012-09-03'),
(6, 'Class 3', 'Primary', 'prasanth', '2012-09-03'),
(7, 'Class 4', 'Primary', 'prasanth', '2012-09-03'),
(8, 'Class 5', 'Primary', 'prasanth', '2012-09-03'),
(9, 'Class 6', 'Secondary', 'prasanth', '2012-09-03'),
(10, 'Class 7', 'Secondary', 'prasanth', '2012-09-03'),
(11, 'Class 8', 'Secondary', 'prasanth', '2012-09-03'),
(12, 'Class 9', 'Secondary', 'prasanth', '2012-09-03'),
(13, 'Class 10', 'Secondary', 'prasanth', '2012-09-03');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `ref_facility_sub_category`
--

INSERT INTO `ref_facility_sub_category` (`facility_sub_cat_id`, `facility_sub_cat_name`, `facility_sub_cat_type_field`, `facility_sub_cat_type`, `facility_cat_id`, `update_user`, `update_date`) VALUES
(1, 'Ownership', 'Owned,Partially-Owned,Rented', 'dropdown', 1, 'admin', '2012-08-07'),
(2, 'Area(sq feet)', 'NULL', 'textbox', 1, 'admin', '2012-08-07'),
(3, 'Construction Type', 'Semi-Pucca,Pucca,Tiled', 'dropdown', 1, 'admin', '2012-08-07'),
(4, 'Computer Labs', 'Effective,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-07'),
(5, 'Number of Class Rooms', 'NULL', 'textbox', 1, 'admin', '2012-08-09'),
(6, 'Number of Computers', 'NULL', 'textbox', 2, 'admin', '2012-08-10'),
(7, 'Internet availability', 'Yes,No', 'dropdown', 2, 'admin', '2012-08-10'),
(8, 'Digital Class', 'Effective,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-10'),
(9, 'Library', 'Effective,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-10'),
(12, 'Other Teaching Aids', 'Effective,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-10'),
(13, 'Classrooms', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(14, 'Staff Room', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(15, 'Transport', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(16, 'Black Boards', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(17, 'Benches & Desks', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(18, 'Toilets', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(19, 'Toilets For Females', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(20, 'Indoor games', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(21, 'Outdoor games', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(22, 'Inter / Intra events', 'Yes,No', 'dropdown', 3, 'admin', '2012-08-10'),
(23, 'Access to games', 'Effective,Ineffective,No', 'dropdown', 3, 'admin', '2012-08-10'),
(24, 'Safety', 'Effective,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(25, 'Cleanliness', 'Effective,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(26, 'Drinking Water', 'Effective,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(27, 'Fire Extinguisher', 'Effective,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(28, 'First aid', 'Effective,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(29, 'Ventilation', 'Effective,Ineffective,No', 'dropdown', 4, 'admin', '2012-08-10'),
(30, 'Science Lab', 'Effective,Ineffective,No', 'dropdown', 2, 'admin', '2012-08-11'),
(57, 'Playground', '', 'textbox', 4, '', '0000-00-00'),
(58, 'smoking', '', 'textbox', 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_subject`
--

CREATE TABLE IF NOT EXISTS `ref_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(30) NOT NULL,
  `subject_category` varchar(30) NOT NULL,
  `update_user` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subject_id`),
  UNIQUE KEY `subject_name` (`subject_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ref_subject`
--

INSERT INTO `ref_subject` (`subject_id`, `subject_name`, `subject_category`, `update_user`, `update_date`) VALUES
(5, 'Maths', '', 'admin', '0000-00-00 00:00:00'),
(6, 'English', '', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `school_code` varchar(11) NOT NULL,
  `school_name` varchar(55) NOT NULL,
  `active_school` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `date`, `school_code`, `school_name`, `active_school`) VALUES
(21, '2012-08-30', 'DEL0001', 'Delhi Public School', 1),
(22, '2012-08-30', 'HYD0022', 'Gray Matter Cap', 1),
(23, '2012-08-30', 'HYD0023', 'Zinc Smelter hign School', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=925 ;

--
-- Dumping data for table `school_facility`
--

INSERT INTO `school_facility` (`Facility_id`, `school_code`, `facility_cat_id`, `facility_sub_cat_id`, `facility_sub_cat_value`, `update_user`, `update_date`) VALUES
(895, 'DEL0001', 1, 1, 'Owned', '', '0000-00-00'),
(896, 'DEL0001', 1, 2, '1500', '', '0000-00-00'),
(897, 'DEL0001', 1, 3, 'Tiled', '', '0000-00-00'),
(898, 'DEL0001', 1, 5, '22', '', '0000-00-00'),
(899, 'DEL0001', 1, 58, 'No', '', '0000-00-00'),
(900, 'DEL0001', 2, 4, 'Effective', '', '0000-00-00'),
(901, 'DEL0001', 2, 6, '20', '', '0000-00-00'),
(902, 'DEL0001', 2, 7, 'Yes', '', '0000-00-00'),
(903, 'DEL0001', 2, 8, 'No', '', '0000-00-00'),
(904, 'DEL0001', 2, 9, 'Effective', '', '0000-00-00'),
(905, 'DEL0001', 2, 12, 'Effective', '', '0000-00-00'),
(906, 'DEL0001', 2, 30, 'Effective', '', '0000-00-00'),
(907, 'DEL0001', 3, 13, 'Effective', '', '0000-00-00'),
(908, 'DEL0001', 3, 14, 'Effective', '', '0000-00-00'),
(909, 'DEL0001', 3, 15, 'No', '', '0000-00-00'),
(910, 'DEL0001', 3, 16, 'Effective', '', '0000-00-00'),
(911, 'DEL0001', 3, 17, 'Effective', '', '0000-00-00'),
(912, 'DEL0001', 3, 18, 'Effective', '', '0000-00-00'),
(913, 'DEL0001', 3, 19, 'Effective', '', '0000-00-00'),
(914, 'DEL0001', 3, 20, 'Yes', '', '0000-00-00'),
(915, 'DEL0001', 3, 21, 'Yes', '', '0000-00-00'),
(916, 'DEL0001', 3, 22, 'Yes', '', '0000-00-00'),
(917, 'DEL0001', 3, 23, 'Effective', '', '0000-00-00'),
(918, 'DEL0001', 4, 24, 'Effective', '', '0000-00-00'),
(919, 'DEL0001', 4, 25, 'Effective', '', '0000-00-00'),
(920, 'DEL0001', 4, 26, 'Effective', '', '0000-00-00'),
(921, 'DEL0001', 4, 27, 'Ineffective', '', '0000-00-00'),
(922, 'DEL0001', 4, 28, 'Ineffective', '', '0000-00-00'),
(923, 'DEL0001', 4, 29, 'Effective', '', '0000-00-00'),
(924, 'DEL0001', 4, 57, 'Yes', '', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`profile_id`, `school_code`, `school_name`, `school_desc`, `school_type`, `location`, `year_of_estblished`, `recognition`, `recognition_upto_class`, `accredition`, `correspondent_name`, `phone_no`, `qualification`, `school_mailing_address`, `city`, `pincode`, `co_education`, `update_user`, `update_date`) VALUES
(25, 'DEL0001', 'Delhi Public School', 'DPS', '', '', 1985, 'YES', 'Class 10', 'ICSE', 'Santosh', '9090350246', 'B Ed', 'Uppal', 'Hyderabad', 500025, 'YES', '', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tenth`
--

INSERT INTO `tenth` (`id`, `school_code`, `assessment_id`, `nos_class_ten`, `nos_first_div_6gpa`, `nos_sec_div_5gpa`, `nos_third_div_4gpa`, `nos_failed_below_3gpa`) VALUES
(1, 'DEL0001', 1, 8, 0, 0, 0, 0),
(2, 'HYD0023', 30, 10, 2, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

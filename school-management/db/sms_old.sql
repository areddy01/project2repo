-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2012 at 05:08 PM
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
-- Table structure for table `admissions`
--

CREATE TABLE IF NOT EXISTS `admissions` (
  `nur_no_of_sec` int(11) NOT NULL,
  `nur_boys_enroll` int(11) NOT NULL,
  `nur_girls_enroll` int(11) NOT NULL,
  `nur_tot_enroll` int(11) NOT NULL,
  `nur_boys_admin` int(11) NOT NULL,
  `nur_girls_admin` int(11) NOT NULL,
  `nur_tot_admin` int(11) NOT NULL,
  `nur_free_stud` int(11) NOT NULL,
  `lkg_no_of_sec` int(11) NOT NULL,
  `lkg_boys_enroll` int(11) NOT NULL,
  `lkg_girls_enroll` int(11) NOT NULL,
  `lkg_tot_enroll` int(11) NOT NULL,
  `lkg_boys_admin` int(11) NOT NULL,
  `lkg_girls_admin` int(11) NOT NULL,
  `lkg_tot_admin` int(11) NOT NULL,
  `lkg_free_stud` int(11) NOT NULL,
  `ukg_no_of_sec` int(11) NOT NULL,
  `ukg_boys_enroll` int(11) NOT NULL,
  `ukg_girls_enroll` int(11) NOT NULL,
  `ukg_tot_enroll` int(11) NOT NULL,
  `ukg_boys_admin` int(11) NOT NULL,
  `ukg_girls_admin` int(11) NOT NULL,
  `ukg_tot_admin` int(11) NOT NULL,
  `ukg_free_stud` int(11) NOT NULL,
  `cls1_no_of_sec` int(11) DEFAULT NULL,
  `cls1_boys_enroll` int(11) DEFAULT NULL,
  `cls1_girls_enroll` int(11) DEFAULT NULL,
  `cls1_tot_enroll` int(11) DEFAULT NULL,
  `cls1_boys_admin` int(11) DEFAULT NULL,
  `cls1_girls_admin` int(11) DEFAULT NULL,
  `cls1_tot_admin` int(11) DEFAULT NULL,
  `cls1_fee_stud` int(11) DEFAULT NULL,
  `cls2_no_of_sec` int(11) DEFAULT NULL,
  `cls2_boys_enroll` int(11) DEFAULT NULL,
  `cls2_girls_enroll` int(11) DEFAULT NULL,
  `cls2_tot_enroll` int(11) DEFAULT NULL,
  `cls2_boys_admin` int(11) DEFAULT NULL,
  `cls2_girls_admin` int(11) DEFAULT NULL,
  `cls2_tot_admin` int(11) DEFAULT NULL,
  `cls2_fee_stud` int(11) DEFAULT NULL,
  `cls3_no_of_sec` int(11) DEFAULT NULL,
  `cls3_boys_enroll` int(11) DEFAULT NULL,
  `cls3_girls_enroll` int(11) DEFAULT NULL,
  `cls3_tot_enroll` int(11) DEFAULT NULL,
  `cls3_boys_admin` int(11) DEFAULT NULL,
  `cls3_girls_admin` int(11) DEFAULT NULL,
  `cls3_tot_admin` int(11) DEFAULT NULL,
  `cls3_fee_stud` int(11) DEFAULT NULL,
  `cls4_no_of_sec` int(11) DEFAULT NULL,
  `cls4_boys_enroll` int(11) DEFAULT NULL,
  `cls4_girls_enroll` int(11) DEFAULT NULL,
  `cls4_tot_enroll` int(11) DEFAULT NULL,
  `cls4_boys_admin` int(11) DEFAULT NULL,
  `cls4_girls_admin` int(11) DEFAULT NULL,
  `cls4_tot_admin` int(11) DEFAULT NULL,
  `cls4_fee_stud` int(11) DEFAULT NULL,
  `cls5_no_of_sec` int(11) DEFAULT NULL,
  `cls5_boys_enroll` int(11) DEFAULT NULL,
  `cls5_girls_enroll` int(11) DEFAULT NULL,
  `cls5_tot_enroll` int(11) DEFAULT NULL,
  `cls5_boys_admin` int(11) DEFAULT NULL,
  `cls5_girls_admin` int(11) DEFAULT NULL,
  `cls5_tot_admin` int(11) DEFAULT NULL,
  `cls5_fee_stud` int(11) DEFAULT NULL,
  `cls6_no_of_sec` int(11) DEFAULT NULL,
  `cls6_boys_enroll` int(11) DEFAULT NULL,
  `cls6_girls_enroll` int(11) DEFAULT NULL,
  `cls6_tot_enroll` int(11) DEFAULT NULL,
  `cls6_boys_admin` int(11) DEFAULT NULL,
  `cls6_girls_admin` int(11) DEFAULT NULL,
  `cls6_tot_admin` int(11) DEFAULT NULL,
  `cls6_fee_stud` int(11) DEFAULT NULL,
  `cls7_no_of_sec` int(11) DEFAULT NULL,
  `cls7_boys_enroll` int(11) DEFAULT NULL,
  `cls7_girls_enroll` int(11) DEFAULT NULL,
  `cls7_tot_enroll` int(11) DEFAULT NULL,
  `cls7_boys_admin` int(11) DEFAULT NULL,
  `cls7_girls_admin` int(11) DEFAULT NULL,
  `cls7_tot_admin` int(11) DEFAULT NULL,
  `cls7_fee_stud` int(11) DEFAULT NULL,
  `cls8_no_of_sec` int(11) DEFAULT NULL,
  `cls8_boys_enroll` int(11) DEFAULT NULL,
  `cls8_girls_enroll` int(11) DEFAULT NULL,
  `cls8_tot_enroll` int(11) DEFAULT NULL,
  `cls8_boys_admin` int(11) DEFAULT NULL,
  `cls8_girls_admin` int(11) DEFAULT NULL,
  `cls8_tot_admin` int(11) DEFAULT NULL,
  `cls8_fee_stud` int(11) DEFAULT NULL,
  `cls9_no_of_sec` int(11) DEFAULT NULL,
  `cls9_boys_enroll` int(11) DEFAULT NULL,
  `cls9_girls_enroll` int(11) DEFAULT NULL,
  `cls9_tot_enroll` int(11) DEFAULT NULL,
  `cls9_boys_admin` int(11) DEFAULT NULL,
  `cls9_girls_admin` int(11) DEFAULT NULL,
  `cls9_tot_admin` int(11) DEFAULT NULL,
  `cls9_fee_stud` int(11) DEFAULT NULL,
  `cls10_no_of_sec` int(11) DEFAULT NULL,
  `cls10_boys_enroll` int(11) DEFAULT NULL,
  `cls10_girls_enroll` int(11) DEFAULT NULL,
  `cls10_tot_enroll` int(11) DEFAULT NULL,
  `cls10_boys_admin` int(11) DEFAULT NULL,
  `cls10_girls_admin` int(11) DEFAULT NULL,
  `cls10_tot_admin` int(11) DEFAULT NULL,
  `cls10_fee_stud` int(11) DEFAULT NULL,
  `pp_no_of_sec` int(11) DEFAULT NULL,
  `pp_boys_enroll` int(11) DEFAULT NULL,
  `pp_girls_enroll` int(11) DEFAULT NULL,
  `pp_tot_enroll` int(11) DEFAULT NULL,
  `pp_boys_admin` int(11) DEFAULT NULL,
  `pp_girls_admin` int(11) DEFAULT NULL,
  `pp_tot_admin` int(11) DEFAULT NULL,
  `pp_fee_stud` int(11) DEFAULT NULL,
  `pri_no_of_sec` int(11) DEFAULT NULL,
  `pri_boys_enroll` int(11) DEFAULT NULL,
  `pri_girls_enroll` int(11) DEFAULT NULL,
  `pri_tot_enroll` int(11) DEFAULT NULL,
  `pri_boys_admin` int(11) DEFAULT NULL,
  `pri_girls_admin` int(11) DEFAULT NULL,
  `pri_tot_admin` int(11) DEFAULT NULL,
  `pri_fee_stud` int(11) DEFAULT NULL,
  `sec_no_of_sec` int(11) DEFAULT NULL,
  `sec_boys_enroll` int(11) DEFAULT NULL,
  `sec_girls_enroll` int(11) DEFAULT NULL,
  `sec_tot_enroll` int(11) DEFAULT NULL,
  `sec_boys_admin` int(11) DEFAULT NULL,
  `sec_girls_admin` int(11) DEFAULT NULL,
  `sec_tot_admin` int(11) DEFAULT NULL,
  `sec_fee_stud` int(11) DEFAULT NULL,
  `sch_tot_no_of_sec` int(11) DEFAULT NULL,
  `sch_tot_boys_enroll` int(11) DEFAULT NULL,
  `sch_tot_girls_enroll` int(11) DEFAULT NULL,
  `sch_tot_tot_enroll` int(11) DEFAULT NULL,
  `sch_tot_boys_admin` int(11) DEFAULT NULL,
  `sch_tot_girls_admin` int(11) DEFAULT NULL,
  `sch_tot_tot_admin` int(11) DEFAULT NULL,
  `sch_tot_fee_stud` int(11) DEFAULT NULL,
  `prev_nur_no_of_sec` int(11) DEFAULT NULL,
  `prev_nur_boys_enroll` int(11) DEFAULT NULL,
  `prev_nur_girls_enroll` int(11) DEFAULT NULL,
  `prev_nur_tot_enroll` int(11) DEFAULT NULL,
  `prev_lkg_no_of_sec` int(11) DEFAULT NULL,
  `prev_lkg_boys_enroll` int(11) DEFAULT NULL,
  `prev_lkg_girls_enroll` int(11) DEFAULT NULL,
  `prev_lkg_tot_enroll` int(11) DEFAULT NULL,
  `prev_ukg_no_of_sec` int(11) DEFAULT NULL,
  `prev_ukg_boys_enroll` int(11) DEFAULT NULL,
  `prev_ukg_girls_enroll` int(11) DEFAULT NULL,
  `prev_ukg_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls1_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls1_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls1_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls1_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls2_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls2_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls2_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls2_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls3_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls3_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls3_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls3_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls4_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls4_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls4_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls4_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls5_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls5_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls5_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls5_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls6_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls6_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls6_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls6_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls7_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls7_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls7_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls7_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls8_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls8_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls8_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls8_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls9_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls9_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls9_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls9_tot_enroll` int(11) DEFAULT NULL,
  `prev_cls10_no_of_sec` int(11) DEFAULT NULL,
  `prev_cls10_boys_enroll` int(11) DEFAULT NULL,
  `prev_cls10_girls_enroll` int(11) DEFAULT NULL,
  `prev_cls10_tot_enroll` int(11) DEFAULT NULL,
  `prev2_nur_total_enroll` int(11) DEFAULT NULL,
  `prev2_lkg_total_enroll` int(11) DEFAULT NULL,
  `prev2_ukg_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls1_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls2_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls3_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls4_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls5_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls6_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls7_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls8_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls9_total_enroll` int(11) DEFAULT NULL,
  `prev2_cls10_total_enroll` int(11) DEFAULT NULL,
  `prev2_pp_total_enroll` int(11) DEFAULT NULL,
  `prev2_pri_total_enroll` int(11) DEFAULT NULL,
  `prev2_sec_total_enroll` int(11) DEFAULT NULL,
  `prev2_sch_total_enroll` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissions`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `infra`
--

INSERT INTO `infra` (`table_id`, `sch_full_name`, `sch_graph_name`, `loc`, `year_of_estd`, `recognition`, `rcg_upto_class`, `sch_assessed_by`, `date_of_assessment`, `flag_sch_assessed`, `ment_assessment`, `Sch_code`, `co_edu`, `accreditation`, `qualification`, `corr_name`, `ph_no`, `sch_mail_add`, `city_pincode`, `ownership`, `no_of_classrooms`, `area`, `const_type`, `comp_lab`, `no_of_comps`, `internet_avail`, `digi_class`, `library`, `sci_lab`, `other_teaching_aids`, `classrooms`, `staffroom`, `transport`, `blackboards`, `benches`, `toilets`, `toilets_for_females`, `indoor_games`, `outdoor_games`, `inter_intra_events`, `access_to_games`, `safety`, `cleanliness`, `drinking_water`, `fire_extinguisher`, `first_aid`, `ventilation`) VALUES
(1, '', '', 'HYD', 0, 'Yes', 0, '', '0000-00-00', 'Yes', 'Baseline', '', 'Yes', '', '', '', 0, '', '', '', 0, 0, 'Pucca', 'Effective', '', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Yes', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective'),
(2, 'kANNA', 'DF', 'HYD', 0, 'Yes', 0, '', '0000-00-00', 'Yes', 'Baseline', '', 'Yes', '', '', '', 0, '', '', '', 0, 0, 'Pucca', 'Effective', '', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Yes', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective'),
(3, 'kANNA', 'DF', 'HYD', 0, 'Yes', 0, '', '0000-00-00', 'Yes', 'Baseline', '', 'Yes', '', '', '', 0, '', '', '', 0, 0, 'Pucca', 'Effective', '', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Yes', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective'),
(4, 'Pius systems', 'PIUS', 'DEL', 11, 'Yes', 0, 'Prasanth', '0000-00-00', 'Yes', 'Baseline', 'DEL002', 'Yes', 'NAAC', 'BTech', 'Anil Kumar', 2147483647, 'Adarsh Nagar', 'Hyderabad & 500063', 'Rented', 10, 25000, 'Pucca', 'Effective', '25', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Yes', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective'),
(5, 'D', 'HI', 'HYD', 2000, 'Yes', 0, 'HHHJ', '0000-00-00', 'Yes', 'Baseline', 'ASD', 'Yes', 'GHH', 'FZDF', 'ZDF', 2147483647, 'GKKK@pi-us.com', 'DF', 'SDFSDFSDF', 0, 0, 'Pucca', 'Effective', 'AD', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Yes', 'Yes', 'Yes', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective', 'Effective');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schoolname` varchar(100) NOT NULL,
  `schoolid` int(22) NOT NULL,
  `design` varchar(30) NOT NULL,
  `active` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `schoolname`, `schoolid`, `design`, `active`) VALUES
(16, 'PIUS EMPLYOEE', 55, 'S/W', NULL),
(15, 'PIUS SCHOOL', 7, 'PIUS DESIGN', '1'),
(14, 'Vuyyuru Public School', 2003, 'VPS-ANIL', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_fee`
--

CREATE TABLE IF NOT EXISTS `school_fee` (
  `freq_admin` varchar(25) NOT NULL,
  `freq_tut` varchar(25) NOT NULL,
  `freq_term` varchar(25) NOT NULL,
  `freq_exam` varchar(25) NOT NULL,
  `freq_computer` varchar(25) NOT NULL,
  `freq_others` varchar(25) NOT NULL,
  `nur_admin` float NOT NULL,
  `nur_tut` float NOT NULL,
  `nur_term` float NOT NULL,
  `nur_exam` float NOT NULL,
  `nur_comp` float NOT NULL,
  `nur_other` float NOT NULL,
  `lkg_admin` float NOT NULL,
  `lkg_tut` float NOT NULL,
  `lkg_term` float NOT NULL,
  `lkg_exam` float NOT NULL,
  `lkg_comp` float NOT NULL,
  `lkg_other` float NOT NULL,
  `ukg_admin` float NOT NULL,
  `ukg_tut` float NOT NULL,
  `ukg_term` float NOT NULL,
  `ukg_exam` float NOT NULL,
  `ukg_comp` float NOT NULL,
  `ukg_other` float NOT NULL,
  `cls1_admin` float NOT NULL,
  `cls1_tut` float NOT NULL,
  `cls1_term` float NOT NULL,
  `cls1_exam` float NOT NULL,
  `cls1_comp` float NOT NULL,
  `cls1_other` float NOT NULL,
  `cls2_admin` float NOT NULL,
  `cls2_tut` float NOT NULL,
  `cls2_term` float NOT NULL,
  `cls2_exam` float NOT NULL,
  `cls2_comp` float NOT NULL,
  `cls2_other` float NOT NULL,
  `cls3_admin` float NOT NULL,
  `cls3_tut` float NOT NULL,
  `cls3_term` float NOT NULL,
  `cls3_exam` float NOT NULL,
  `cls3_comp` float NOT NULL,
  `cls3_other` float NOT NULL,
  `cls4_admin` float NOT NULL,
  `cls4_tut` float NOT NULL,
  `cls4_term` float NOT NULL,
  `cls4_exam` float NOT NULL,
  `cls4_comp` float NOT NULL,
  `cls4_other` float NOT NULL,
  `cls5_admin` float NOT NULL,
  `cls5_tut` float NOT NULL,
  `cls5_term` float NOT NULL,
  `cls5_exam` float NOT NULL,
  `cls5_comp` float NOT NULL,
  `cls5_other` float NOT NULL,
  `cls6_admin` float NOT NULL,
  `cls6_tut` float NOT NULL,
  `cls6_term` float NOT NULL,
  `cls6_exam` float NOT NULL,
  `cls6_comp` float NOT NULL,
  `cls6_other` float NOT NULL,
  `cls7_admin` float NOT NULL,
  `cls7_tut` float NOT NULL,
  `cls7_term` float NOT NULL,
  `cls7_exam` float NOT NULL,
  `cls7_comp` float NOT NULL,
  `cls7_other` float NOT NULL,
  `cls8_admin` float NOT NULL,
  `cls8_tut` float NOT NULL,
  `cls8_term` float NOT NULL,
  `cls8_exam` float NOT NULL,
  `cls8_comp` float NOT NULL,
  `cls8_other` float NOT NULL,
  `cls9_admin` float NOT NULL,
  `cls9_tut` float NOT NULL,
  `cls9_term` float NOT NULL,
  `cls9_exam` float NOT NULL,
  `cls9_comp` float NOT NULL,
  `cls9_other` float NOT NULL,
  `cls10_admin` float NOT NULL,
  `cls10_tut` float NOT NULL,
  `cls10_term` float NOT NULL,
  `cls10_exam` float NOT NULL,
  `cls10_comp` float NOT NULL,
  `cls10_other` float NOT NULL,
  `coll_tut_curr` float NOT NULL,
  `coll_tut_prev` float NOT NULL,
  `rent_curr` float NOT NULL,
  `rent_prev` float NOT NULL,
  `others_curr` float NOT NULL,
  `others_prev` float NOT NULL,
  `donations_curr` float NOT NULL,
  `donations_prev` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_fee`
--


-- --------------------------------------------------------

--
-- Table structure for table `school_fees`
--

CREATE TABLE IF NOT EXISTS `school_fees` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `userid` int(22) NOT NULL,
  `schoolid` varchar(22) NOT NULL,
  `data` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `school_fees`
--

INSERT INTO `school_fees` (`id`, `userid`, `schoolid`, `data`) VALUES
(1, 1, '1a', 'a:2:{s:6:"schfee";a:92:{s:10:"freq_admin";s:6:"Select";s:8:"freq_tut";s:6:"Select";s:9:"freq_term";s:6:"Select";s:9:"freq_exam";s:6:"Select";s:13:"freq_computer";s:6:"Select";s:11:"freq_others";s:6:"Select";s:9:"nur_admin";s:0:"";s:7:"nur_tut";s:0:"";s:8:"nur_term";s:0:"";s:8:"nur_exam";s:0:"";s:8:"nur_comp";s:0:"";s:9:"nur_other";s:0:"";s:9:"lkg_admin";s:0:"";s:7:"lkg_tut";s:0:"";s:8:"lkg_term";s:0:"";s:8:"lkg_exam";s:0:"";s:8:"lkg_comp";s:0:"";s:9:"lkg_other";s:0:"";s:9:"ukg_admin";s:0:"";s:7:"ukg_tut";s:0:"";s:8:"ukg_term";s:0:"";s:8:"ukg_exam";s:0:"";s:8:"ukg_comp";s:0:"";s:9:"ukg_other";s:0:"";s:10:"cls1_admin";s:0:"";s:8:"cls1_tut";s:0:"";s:9:"cls1_term";s:0:"";s:9:"cls1_exam";s:0:"";s:9:"cls1_comp";s:0:"";s:10:"cls1_other";s:0:"";s:10:"cls2_admin";s:0:"";s:8:"cls2_tut";s:0:"";s:9:"cls2_term";s:0:"";s:9:"cls2_exam";s:0:"";s:9:"cls2_comp";s:0:"";s:10:"cls2_other";s:0:"";s:10:"cls3_admin";s:0:"";s:8:"cls3_tut";s:0:"";s:9:"cls3_term";s:0:"";s:9:"cls3_exam";s:0:"";s:9:"cls3_comp";s:0:"";s:10:"cls3_other";s:0:"";s:10:"cls4_admin";s:0:"";s:8:"cls4_tut";s:0:"";s:9:"cls4_term";s:0:"";s:9:"cls4_exam";s:0:"";s:9:"cls4_comp";s:0:"";s:10:"cls4_other";s:0:"";s:10:"cls5_admin";s:0:"";s:8:"cls5_tut";s:0:"";s:9:"cls5_term";s:0:"";s:9:"cls5_exam";s:0:"";s:9:"cls5_comp";s:0:"";s:10:"cls5_other";s:0:"";s:10:"cls6_admin";s:0:"";s:8:"cls6_tut";s:0:"";s:9:"cls6_term";s:0:"";s:9:"cls6_exam";s:0:"";s:9:"cls6_comp";s:0:"";s:10:"cls6_other";s:0:"";s:10:"cls7_admin";s:0:"";s:8:"cls7_tut";s:0:"";s:9:"cls7_term";s:0:"";s:9:"cls7_exam";s:0:"";s:9:"cls7_comp";s:0:"";s:10:"cls7_other";s:0:"";s:10:"cls8_admin";s:0:"";s:8:"cls8_tut";s:0:"";s:9:"cls8_term";s:0:"";s:9:"cls8_exam";s:0:"";s:9:"cls8_comp";s:0:"";s:10:"cls8_other";s:0:"";s:10:"cls9_admin";s:0:"";s:8:"cls9_tut";s:0:"";s:9:"cls9_term";s:0:"";s:9:"cls9_exam";s:0:"";s:9:"cls9_comp";s:0:"";s:10:"cls9_other";s:0:"";s:11:"cls10_admin";s:0:"";s:9:"cls10_tut";s:0:"";s:10:"cls10_term";s:0:"";s:10:"cls10_exam";s:0:"";s:10:"cls10_comp";s:0:"";s:11:"cls10_other";s:0:"";s:13:"coll_tut_curr";s:0:"";s:13:"coll_tut_prev";s:0:"";s:9:"rent_curr";s:0:"";s:9:"rent_prev";s:0:"";s:11:"others_curr";s:0:"";s:11:"others_prev";s:0:"";s:14:"donations_curr";s:0:"";s:14:"donations_prev";s:0:"";}s:7:"Submit1";s:6:"submit";}'),
(2, 1, '1a', 'a:2:{s:6:"schfee";a:92:{s:10:"freq_admin";s:6:"Select";s:8:"freq_tut";s:6:"Select";s:9:"freq_term";s:6:"Select";s:9:"freq_exam";s:6:"Select";s:13:"freq_computer";s:6:"Select";s:11:"freq_others";s:6:"Select";s:9:"nur_admin";s:0:"";s:7:"nur_tut";s:0:"";s:8:"nur_term";s:0:"";s:8:"nur_exam";s:0:"";s:8:"nur_comp";s:0:"";s:9:"nur_other";s:0:"";s:9:"lkg_admin";s:0:"";s:7:"lkg_tut";s:0:"";s:8:"lkg_term";s:0:"";s:8:"lkg_exam";s:0:"";s:8:"lkg_comp";s:0:"";s:9:"lkg_other";s:0:"";s:9:"ukg_admin";s:0:"";s:7:"ukg_tut";s:0:"";s:8:"ukg_term";s:0:"";s:8:"ukg_exam";s:0:"";s:8:"ukg_comp";s:0:"";s:9:"ukg_other";s:0:"";s:10:"cls1_admin";s:0:"";s:8:"cls1_tut";s:0:"";s:9:"cls1_term";s:0:"";s:9:"cls1_exam";s:0:"";s:9:"cls1_comp";s:0:"";s:10:"cls1_other";s:0:"";s:10:"cls2_admin";s:0:"";s:8:"cls2_tut";s:0:"";s:9:"cls2_term";s:0:"";s:9:"cls2_exam";s:0:"";s:9:"cls2_comp";s:0:"";s:10:"cls2_other";s:0:"";s:10:"cls3_admin";s:0:"";s:8:"cls3_tut";s:0:"";s:9:"cls3_term";s:0:"";s:9:"cls3_exam";s:0:"";s:9:"cls3_comp";s:0:"";s:10:"cls3_other";s:0:"";s:10:"cls4_admin";s:0:"";s:8:"cls4_tut";s:0:"";s:9:"cls4_term";s:0:"";s:9:"cls4_exam";s:0:"";s:9:"cls4_comp";s:0:"";s:10:"cls4_other";s:0:"";s:10:"cls5_admin";s:0:"";s:8:"cls5_tut";s:0:"";s:9:"cls5_term";s:0:"";s:9:"cls5_exam";s:0:"";s:9:"cls5_comp";s:0:"";s:10:"cls5_other";s:0:"";s:10:"cls6_admin";s:0:"";s:8:"cls6_tut";s:0:"";s:9:"cls6_term";s:0:"";s:9:"cls6_exam";s:0:"";s:9:"cls6_comp";s:0:"";s:10:"cls6_other";s:0:"";s:10:"cls7_admin";s:0:"";s:8:"cls7_tut";s:0:"";s:9:"cls7_term";s:0:"";s:9:"cls7_exam";s:0:"";s:9:"cls7_comp";s:0:"";s:10:"cls7_other";s:0:"";s:10:"cls8_admin";s:0:"";s:8:"cls8_tut";s:0:"";s:9:"cls8_term";s:0:"";s:9:"cls8_exam";s:0:"";s:9:"cls8_comp";s:0:"";s:10:"cls8_other";s:0:"";s:10:"cls9_admin";s:0:"";s:8:"cls9_tut";s:0:"";s:9:"cls9_term";s:0:"";s:9:"cls9_exam";s:0:"";s:9:"cls9_comp";s:0:"";s:10:"cls9_other";s:0:"";s:11:"cls10_admin";s:0:"";s:9:"cls10_tut";s:0:"";s:10:"cls10_term";s:0:"";s:10:"cls10_exam";s:0:"";s:10:"cls10_comp";s:0:"";s:11:"cls10_other";s:0:"";s:13:"coll_tut_curr";s:0:"";s:13:"coll_tut_prev";s:0:"";s:9:"rent_curr";s:0:"";s:9:"rent_prev";s:0:"";s:11:"others_curr";s:0:"";s:11:"others_prev";s:0:"";s:14:"donations_curr";s:0:"";s:14:"donations_prev";s:0:"";}s:7:"Submit1";s:6:"submit";}'),
(3, 1, '1a', 'a:2:{s:6:"schfee";a:92:{s:10:"freq_admin";s:6:"Select";s:8:"freq_tut";s:6:"Select";s:9:"freq_term";s:6:"Select";s:9:"freq_exam";s:6:"Select";s:13:"freq_computer";s:6:"Select";s:11:"freq_others";s:6:"Select";s:9:"nur_admin";s:0:"";s:7:"nur_tut";s:0:"";s:8:"nur_term";s:0:"";s:8:"nur_exam";s:0:"";s:8:"nur_comp";s:0:"";s:9:"nur_other";s:0:"";s:9:"lkg_admin";s:0:"";s:7:"lkg_tut";s:0:"";s:8:"lkg_term";s:0:"";s:8:"lkg_exam";s:0:"";s:8:"lkg_comp";s:0:"";s:9:"lkg_other";s:0:"";s:9:"ukg_admin";s:0:"";s:7:"ukg_tut";s:0:"";s:8:"ukg_term";s:0:"";s:8:"ukg_exam";s:0:"";s:8:"ukg_comp";s:0:"";s:9:"ukg_other";s:0:"";s:10:"cls1_admin";s:0:"";s:8:"cls1_tut";s:0:"";s:9:"cls1_term";s:0:"";s:9:"cls1_exam";s:0:"";s:9:"cls1_comp";s:0:"";s:10:"cls1_other";s:0:"";s:10:"cls2_admin";s:0:"";s:8:"cls2_tut";s:0:"";s:9:"cls2_term";s:0:"";s:9:"cls2_exam";s:0:"";s:9:"cls2_comp";s:0:"";s:10:"cls2_other";s:0:"";s:10:"cls3_admin";s:0:"";s:8:"cls3_tut";s:0:"";s:9:"cls3_term";s:0:"";s:9:"cls3_exam";s:0:"";s:9:"cls3_comp";s:0:"";s:10:"cls3_other";s:0:"";s:10:"cls4_admin";s:0:"";s:8:"cls4_tut";s:0:"";s:9:"cls4_term";s:0:"";s:9:"cls4_exam";s:0:"";s:9:"cls4_comp";s:0:"";s:10:"cls4_other";s:0:"";s:10:"cls5_admin";s:0:"";s:8:"cls5_tut";s:0:"";s:9:"cls5_term";s:0:"";s:9:"cls5_exam";s:0:"";s:9:"cls5_comp";s:0:"";s:10:"cls5_other";s:0:"";s:10:"cls6_admin";s:0:"";s:8:"cls6_tut";s:0:"";s:9:"cls6_term";s:0:"";s:9:"cls6_exam";s:0:"";s:9:"cls6_comp";s:0:"";s:10:"cls6_other";s:0:"";s:10:"cls7_admin";s:0:"";s:8:"cls7_tut";s:0:"";s:9:"cls7_term";s:0:"";s:9:"cls7_exam";s:0:"";s:9:"cls7_comp";s:0:"";s:10:"cls7_other";s:0:"";s:10:"cls8_admin";s:0:"";s:8:"cls8_tut";s:0:"";s:9:"cls8_term";s:0:"";s:9:"cls8_exam";s:0:"";s:9:"cls8_comp";s:0:"";s:10:"cls8_other";s:0:"";s:10:"cls9_admin";s:0:"";s:8:"cls9_tut";s:0:"";s:9:"cls9_term";s:0:"";s:9:"cls9_exam";s:0:"";s:9:"cls9_comp";s:0:"";s:10:"cls9_other";s:0:"";s:11:"cls10_admin";s:0:"";s:9:"cls10_tut";s:0:"";s:10:"cls10_term";s:0:"";s:10:"cls10_exam";s:0:"";s:10:"cls10_comp";s:0:"";s:11:"cls10_other";s:0:"";s:13:"coll_tut_curr";s:0:"";s:13:"coll_tut_prev";s:0:"";s:9:"rent_curr";s:0:"";s:9:"rent_prev";s:0:"";s:11:"others_curr";s:0:"";s:11:"others_prev";s:0:"";s:14:"donations_curr";s:0:"";s:14:"donations_prev";s:0:"";}s:7:"Submit1";s:6:"submit";}'),
(4, 1, '1a', 'a:2:{s:6:"schfee";a:92:{s:10:"freq_admin";s:6:"Select";s:8:"freq_tut";s:6:"Select";s:9:"freq_term";s:6:"Select";s:9:"freq_exam";s:6:"Select";s:13:"freq_computer";s:6:"Select";s:11:"freq_others";s:6:"Select";s:9:"nur_admin";s:0:"";s:7:"nur_tut";s:0:"";s:8:"nur_term";s:0:"";s:8:"nur_exam";s:0:"";s:8:"nur_comp";s:0:"";s:9:"nur_other";s:0:"";s:9:"lkg_admin";s:0:"";s:7:"lkg_tut";s:0:"";s:8:"lkg_term";s:0:"";s:8:"lkg_exam";s:0:"";s:8:"lkg_comp";s:0:"";s:9:"lkg_other";s:0:"";s:9:"ukg_admin";s:0:"";s:7:"ukg_tut";s:0:"";s:8:"ukg_term";s:0:"";s:8:"ukg_exam";s:0:"";s:8:"ukg_comp";s:0:"";s:9:"ukg_other";s:0:"";s:10:"cls1_admin";s:0:"";s:8:"cls1_tut";s:0:"";s:9:"cls1_term";s:0:"";s:9:"cls1_exam";s:0:"";s:9:"cls1_comp";s:0:"";s:10:"cls1_other";s:0:"";s:10:"cls2_admin";s:0:"";s:8:"cls2_tut";s:0:"";s:9:"cls2_term";s:0:"";s:9:"cls2_exam";s:0:"";s:9:"cls2_comp";s:0:"";s:10:"cls2_other";s:0:"";s:10:"cls3_admin";s:0:"";s:8:"cls3_tut";s:0:"";s:9:"cls3_term";s:0:"";s:9:"cls3_exam";s:0:"";s:9:"cls3_comp";s:0:"";s:10:"cls3_other";s:0:"";s:10:"cls4_admin";s:0:"";s:8:"cls4_tut";s:0:"";s:9:"cls4_term";s:0:"";s:9:"cls4_exam";s:0:"";s:9:"cls4_comp";s:0:"";s:10:"cls4_other";s:0:"";s:10:"cls5_admin";s:0:"";s:8:"cls5_tut";s:0:"";s:9:"cls5_term";s:0:"";s:9:"cls5_exam";s:0:"";s:9:"cls5_comp";s:0:"";s:10:"cls5_other";s:0:"";s:10:"cls6_admin";s:0:"";s:8:"cls6_tut";s:0:"";s:9:"cls6_term";s:0:"";s:9:"cls6_exam";s:0:"";s:9:"cls6_comp";s:0:"";s:10:"cls6_other";s:0:"";s:10:"cls7_admin";s:0:"";s:8:"cls7_tut";s:0:"";s:9:"cls7_term";s:0:"";s:9:"cls7_exam";s:0:"";s:9:"cls7_comp";s:0:"";s:10:"cls7_other";s:0:"";s:10:"cls8_admin";s:0:"";s:8:"cls8_tut";s:0:"";s:9:"cls8_term";s:0:"";s:9:"cls8_exam";s:0:"";s:9:"cls8_comp";s:0:"";s:10:"cls8_other";s:0:"";s:10:"cls9_admin";s:0:"";s:8:"cls9_tut";s:0:"";s:9:"cls9_term";s:0:"";s:9:"cls9_exam";s:0:"";s:9:"cls9_comp";s:0:"";s:10:"cls9_other";s:0:"";s:11:"cls10_admin";s:0:"";s:9:"cls10_tut";s:0:"";s:10:"cls10_term";s:0:"";s:10:"cls10_exam";s:0:"";s:10:"cls10_comp";s:0:"";s:11:"cls10_other";s:0:"";s:13:"coll_tut_curr";s:0:"";s:13:"coll_tut_prev";s:0:"";s:9:"rent_curr";s:0:"";s:9:"rent_prev";s:0:"";s:11:"others_curr";s:0:"";s:11:"others_prev";s:0:"";s:14:"donations_curr";s:0:"";s:14:"donations_prev";s:0:"";}s:7:"Submit1";s:6:"submit";}'),
(5, 1, '1a', 'a:2:{s:6:"schfee";a:92:{s:10:"freq_admin";s:6:"Select";s:8:"freq_tut";s:6:"Select";s:9:"freq_term";s:6:"Select";s:9:"freq_exam";s:6:"Select";s:13:"freq_computer";s:6:"Select";s:11:"freq_others";s:6:"Select";s:9:"nur_admin";s:5:"0.001";s:7:"nur_tut";s:0:"";s:8:"nur_term";s:0:"";s:8:"nur_exam";s:4:"1.01";s:8:"nur_comp";s:7:"1.00001";s:9:"nur_other";s:0:"";s:9:"lkg_admin";s:0:"";s:7:"lkg_tut";s:0:"";s:8:"lkg_term";s:0:"";s:8:"lkg_exam";s:0:"";s:8:"lkg_comp";s:0:"";s:9:"lkg_other";s:0:"";s:9:"ukg_admin";s:0:"";s:7:"ukg_tut";s:0:"";s:8:"ukg_term";s:0:"";s:8:"ukg_exam";s:0:"";s:8:"ukg_comp";s:0:"";s:9:"ukg_other";s:0:"";s:10:"cls1_admin";s:0:"";s:8:"cls1_tut";s:0:"";s:9:"cls1_term";s:0:"";s:9:"cls1_exam";s:0:"";s:9:"cls1_comp";s:0:"";s:10:"cls1_other";s:0:"";s:10:"cls2_admin";s:0:"";s:8:"cls2_tut";s:0:"";s:9:"cls2_term";s:0:"";s:9:"cls2_exam";s:0:"";s:9:"cls2_comp";s:0:"";s:10:"cls2_other";s:0:"";s:10:"cls3_admin";s:0:"";s:8:"cls3_tut";s:0:"";s:9:"cls3_term";s:0:"";s:9:"cls3_exam";s:0:"";s:9:"cls3_comp";s:0:"";s:10:"cls3_other";s:0:"";s:10:"cls4_admin";s:0:"";s:8:"cls4_tut";s:0:"";s:9:"cls4_term";s:0:"";s:9:"cls4_exam";s:0:"";s:9:"cls4_comp";s:0:"";s:10:"cls4_other";s:0:"";s:10:"cls5_admin";s:0:"";s:8:"cls5_tut";s:0:"";s:9:"cls5_term";s:0:"";s:9:"cls5_exam";s:0:"";s:9:"cls5_comp";s:0:"";s:10:"cls5_other";s:0:"";s:10:"cls6_admin";s:0:"";s:8:"cls6_tut";s:0:"";s:9:"cls6_term";s:0:"";s:9:"cls6_exam";s:0:"";s:9:"cls6_comp";s:0:"";s:10:"cls6_other";s:0:"";s:10:"cls7_admin";s:0:"";s:8:"cls7_tut";s:0:"";s:9:"cls7_term";s:0:"";s:9:"cls7_exam";s:0:"";s:9:"cls7_comp";s:0:"";s:10:"cls7_other";s:0:"";s:10:"cls8_admin";s:0:"";s:8:"cls8_tut";s:0:"";s:9:"cls8_term";s:0:"";s:9:"cls8_exam";s:0:"";s:9:"cls8_comp";s:0:"";s:10:"cls8_other";s:0:"";s:10:"cls9_admin";s:0:"";s:8:"cls9_tut";s:0:"";s:9:"cls9_term";s:0:"";s:9:"cls9_exam";s:0:"";s:9:"cls9_comp";s:0:"";s:10:"cls9_other";s:0:"";s:11:"cls10_admin";s:0:"";s:9:"cls10_tut";s:0:"";s:10:"cls10_term";s:0:"";s:10:"cls10_exam";s:0:"";s:10:"cls10_comp";s:0:"";s:11:"cls10_other";s:0:"";s:13:"coll_tut_curr";s:0:"";s:13:"coll_tut_prev";s:0:"";s:9:"rent_curr";s:0:"";s:9:"rent_prev";s:0:"";s:11:"others_curr";s:0:"";s:11:"others_prev";s:0:"";s:14:"donations_curr";s:0:"";s:14:"donations_prev";s:0:"";}s:7:"Submit1";s:6:"submit";}'),
(6, 1, '1a', 'a:2:{s:6:"schfee";a:92:{s:10:"freq_admin";s:6:"Select";s:8:"freq_tut";s:6:"Select";s:9:"freq_term";s:6:"Select";s:9:"freq_exam";s:6:"Select";s:13:"freq_computer";s:6:"Select";s:11:"freq_others";s:6:"Select";s:9:"nur_admin";s:5:"0.001";s:7:"nur_tut";s:0:"";s:8:"nur_term";s:0:"";s:8:"nur_exam";s:4:"1.01";s:8:"nur_comp";s:7:"1.00001";s:9:"nur_other";s:0:"";s:9:"lkg_admin";s:0:"";s:7:"lkg_tut";s:0:"";s:8:"lkg_term";s:0:"";s:8:"lkg_exam";s:0:"";s:8:"lkg_comp";s:0:"";s:9:"lkg_other";s:0:"";s:9:"ukg_admin";s:0:"";s:7:"ukg_tut";s:0:"";s:8:"ukg_term";s:0:"";s:8:"ukg_exam";s:0:"";s:8:"ukg_comp";s:0:"";s:9:"ukg_other";s:0:"";s:10:"cls1_admin";s:0:"";s:8:"cls1_tut";s:0:"";s:9:"cls1_term";s:0:"";s:9:"cls1_exam";s:0:"";s:9:"cls1_comp";s:0:"";s:10:"cls1_other";s:0:"";s:10:"cls2_admin";s:0:"";s:8:"cls2_tut";s:0:"";s:9:"cls2_term";s:0:"";s:9:"cls2_exam";s:0:"";s:9:"cls2_comp";s:0:"";s:10:"cls2_other";s:0:"";s:10:"cls3_admin";s:0:"";s:8:"cls3_tut";s:0:"";s:9:"cls3_term";s:0:"";s:9:"cls3_exam";s:0:"";s:9:"cls3_comp";s:0:"";s:10:"cls3_other";s:0:"";s:10:"cls4_admin";s:0:"";s:8:"cls4_tut";s:0:"";s:9:"cls4_term";s:0:"";s:9:"cls4_exam";s:0:"";s:9:"cls4_comp";s:0:"";s:10:"cls4_other";s:0:"";s:10:"cls5_admin";s:0:"";s:8:"cls5_tut";s:0:"";s:9:"cls5_term";s:0:"";s:9:"cls5_exam";s:0:"";s:9:"cls5_comp";s:0:"";s:10:"cls5_other";s:0:"";s:10:"cls6_admin";s:0:"";s:8:"cls6_tut";s:0:"";s:9:"cls6_term";s:0:"";s:9:"cls6_exam";s:0:"";s:9:"cls6_comp";s:0:"";s:10:"cls6_other";s:0:"";s:10:"cls7_admin";s:0:"";s:8:"cls7_tut";s:0:"";s:9:"cls7_term";s:0:"";s:9:"cls7_exam";s:0:"";s:9:"cls7_comp";s:0:"";s:10:"cls7_other";s:0:"";s:10:"cls8_admin";s:0:"";s:8:"cls8_tut";s:0:"";s:9:"cls8_term";s:0:"";s:9:"cls8_exam";s:0:"";s:9:"cls8_comp";s:0:"";s:10:"cls8_other";s:0:"";s:10:"cls9_admin";s:0:"";s:8:"cls9_tut";s:0:"";s:9:"cls9_term";s:0:"";s:9:"cls9_exam";s:0:"";s:9:"cls9_comp";s:0:"";s:10:"cls9_other";s:0:"";s:11:"cls10_admin";s:0:"";s:9:"cls10_tut";s:0:"";s:10:"cls10_term";s:0:"";s:10:"cls10_exam";s:0:"";s:10:"cls10_comp";s:0:"";s:11:"cls10_other";s:0:"";s:13:"coll_tut_curr";s:0:"";s:13:"coll_tut_prev";s:0:"";s:9:"rent_curr";s:0:"";s:9:"rent_prev";s:0:"";s:11:"others_curr";s:0:"";s:11:"others_prev";s:0:"";s:14:"donations_curr";s:0:"";s:14:"donations_prev";s:0:"";}s:7:"Submit1";s:6:"submit";}');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `nur_transport_fee` float NOT NULL,
  `nur_no_of_students` int(11) NOT NULL,
  `nur_total_income` float NOT NULL,
  `lkg_transport_fee` float NOT NULL,
  `lkg_no_of_students` int(11) NOT NULL,
  `lkg_total_income` float NOT NULL,
  `ukg_transport_fee` float NOT NULL,
  `ukg_no_of_students` int(11) NOT NULL,
  `ukg_total_income` int(11) NOT NULL,
  `cls1_transport_fee` float NOT NULL,
  `cls1_no_of_students` int(11) NOT NULL,
  `cls1_total_income` float NOT NULL,
  `cls2_transport_fee` float NOT NULL,
  `cls2_no_of_students` int(11) NOT NULL,
  `cls2_total_income` float NOT NULL,
  `cls3_transport_fee` float NOT NULL,
  `cls3_no_of_students` int(11) NOT NULL,
  `cls3_total_income` float NOT NULL,
  `cls4_transport_fee` float NOT NULL,
  `cls4_no_of_students` int(11) NOT NULL,
  `cls4_total_income` float NOT NULL,
  `cls5_transport_fee` float NOT NULL,
  `cls5_no_of_students` int(11) NOT NULL,
  `cls5_total_income` float NOT NULL,
  `cls6_transport_fee` float NOT NULL,
  `cls6_no_of_students` int(11) NOT NULL,
  `cls6_total_income` float NOT NULL,
  `cls7_transport_fee` float NOT NULL,
  `cls7_no_of_students` int(11) NOT NULL,
  `cls7_total_income` float NOT NULL,
  `cls8_transport_fee` float NOT NULL,
  `cls8_no_of_students` int(11) NOT NULL,
  `cls8_total_income` float NOT NULL,
  `cls9_transport_fee` float NOT NULL,
  `cls9_no_of_students` int(11) NOT NULL,
  `cls9_total_income` float NOT NULL,
  `cls10_transport_fee` float NOT NULL,
  `cls10_no_of_students` int(11) NOT NULL,
  `cls10_total_income` float NOT NULL,
  `total_income` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`nur_transport_fee`, `nur_no_of_students`, `nur_total_income`, `lkg_transport_fee`, `lkg_no_of_students`, `lkg_total_income`, `ukg_transport_fee`, `ukg_no_of_students`, `ukg_total_income`, `cls1_transport_fee`, `cls1_no_of_students`, `cls1_total_income`, `cls2_transport_fee`, `cls2_no_of_students`, `cls2_total_income`, `cls3_transport_fee`, `cls3_no_of_students`, `cls3_total_income`, `cls4_transport_fee`, `cls4_no_of_students`, `cls4_total_income`, `cls5_transport_fee`, `cls5_no_of_students`, `cls5_total_income`, `cls6_transport_fee`, `cls6_no_of_students`, `cls6_total_income`, `cls7_transport_fee`, `cls7_no_of_students`, `cls7_total_income`, `cls8_transport_fee`, `cls8_no_of_students`, `cls8_total_income`, `cls9_transport_fee`, `cls9_no_of_students`, `cls9_total_income`, `cls10_transport_fee`, `cls10_no_of_students`, `cls10_total_income`, `total_income`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
